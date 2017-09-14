<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
      Schema::create('own', function (Blueprint $table) {
          //$table->increments('id');
          #Fixar en primär komposit nyckel.
          $table->string('regNr')->unique();
          $table->integer('userId')->unsigned();
          $table->primary(['regNr', 'userId']);

          $table->timestamps();
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
      Schema::drop('own');
    }
}
