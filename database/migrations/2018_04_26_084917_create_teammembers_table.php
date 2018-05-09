<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeammembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teammembers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('fullname');
            $table->text('position');
            $table->text('description');
            $table->text('facebook_link');
            $table->text('twitter_link');
            $table->text('linked_link');
            $table->text('image');
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
        Schema::dropIfExists('teammembers');
    }
}
