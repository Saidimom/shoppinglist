<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = ['title'];

    public function lists(){
        return $this->belongsToMany('App\ShoppingList', 'list_item','item_id', 'list_id');
    }



}
