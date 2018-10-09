<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_item', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('list_id')->unsigned()->nullable()->default(null);
            $table->foreign('list_id')->references('id')->on('lists');

            $table->integer('item_id')->unsigned()->nullable()->default(null);
            $table->foreign('item_id')->references('id')->on('items');

            $table->boolean('purchased')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_item');
    }
}
