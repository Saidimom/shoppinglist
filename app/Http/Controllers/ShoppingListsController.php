<?php

namespace App\Http\Controllers;

use App\Item;
use App\ShoppingList;
use App\Http\Resources\ShoppingList as ShoppingListResource;
use App\User;
use Illuminate\Http\Request;

class ShoppingListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $lists = $user->lists;
        $lists->load('items');
        return ShoppingListResource::collection($lists);
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
        $user = auth()->user();
        $list = ($request->isMethod('PUT')) ? ShoppingList::findOrFail($request->input('list_id')) : new ShoppingList();
        $list->id = $request->input('list_id');
        $list->title = $request->input('title');
        if ($list->save()){
            $list->users()->sync($user->id);
            $items = $request->get('items');
            if (!is_null($items)){
                if (is_array($items['new'] and !empty($items['new']))){
                    foreach ($items['new'] as $item){
                        $newItem = Item::create(['title' => $item['title']]);
                        $list->items()->attach($newItem->id, ['comment' => $item['comment']]);
                    }
                }
                if (is_array($items['attach']) and !empty($items['attach'])){
                    $attachItems = array();
                    foreach ($items['attach'] as $item){
                        $attachItem = Item::findOrFail($item['item_id']);
                        $attachItems = array_add($attachItems, $attachItem->id, ['comment' => $item['comment'], 'purchased' => $item['purchased']]);
                    }
                    $list->items()->sync($attachItems);
                }
            } else {
                $list->items()->detach();
            }
            $list->load('users', 'items');
            return new ShoppingListResource($list);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $list = ShoppingList::findOrFail($id);
        $list->load('users', 'items');
        return new ShoppingListResource($list);
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
        $list = ShoppingList::findOrFail($id);
        if ($list->delete()){
            return new ShoppingListResource($list);
        }
    }
}
