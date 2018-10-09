<?php

namespace App\Http\Controllers;

use App\Item;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Resources\Item as ItemResource;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::all();
        return ItemResource::collection($items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = ($request->isMethod('PUT')) ? Item::findOrFail($request->item_id) : new Item();

        $item->id = $request->input('item_id');
        $item->title = $request->input('title');

        if ($item->save()){
            return new ItemResource($item);
        }
    }

    /**
     * Search Items by title
     *
     *
     */

    public function search(Request $request){
        $items = DB::table('items')->where('title', 'like', '%'.$request->input('title').'%')->get();
        return ItemResource::collection($items);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = Item::findOrFail($id);
        if ($item->delete()){
            return new ItemResource($item);
        }
    }
}
