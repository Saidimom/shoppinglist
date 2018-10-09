<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    //
    protected $table = 'lists';

    protected $fillable = ['title'];

    public function users(){
        return $this->belongsToMany('App\User', 'user_list', 'list_id', 'user_id');
    }

    public function items(){
        return $this->belongsToMany('App\Item', 'list_item', 'list_id', 'item_id')->withPivot('purchased');
    }


}
