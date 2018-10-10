<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoppingListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\ShoppingList::create([
            'title' => 'First User List'
        ]);

        DB::table('user_list')->insert([
            'user_id' => 2,
            'list_id' => 2
        ]);

        DB::table('list_item')->insert([
            'list_id' => 2,
            'item_id' => 4,
            'comment' => '2 pieces'
        ]);

        DB::table('list_item')->insert([
            'list_id' => 2,
            'item_id' => 5,
            'comment' => '3 pieces'
        ]);

        DB::table('list_item')->insert([
            'list_id' => 2,
            'item_id' => 6,
            'comment' => '4 large'
        ]);


    }
}
