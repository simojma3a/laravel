<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Service extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('service', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('adresse');
            $table->string('phone');
            $table->string('email');
            $table->string('position');
            $table->string('photo');
            $table->integer('categorie_id');
            $table->integer('user_id');
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
        //
    }
}
