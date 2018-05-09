<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewstablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newstables', function (Blueprint $table) {
            $table->increments('id');
            $table->text('english_title');
            $table->text('nepali_title');
            $table->text('category');
            $table->text('image');
            $table->text('english_description');
            $table->text('nepali_description');
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
        Schema::dropIfExists('newstables');
    }
}
