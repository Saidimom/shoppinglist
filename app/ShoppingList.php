<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    //
    protected $table = 'lists';

    protected $fillable = ['title'];

}
