<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/* skapar fordonstabellen.*/
class CreateFordonTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
      Schema::create('fordon', function (Blueprint $table) {
          //$table->increments('id');
          $table->string('regNr')->primary();

          $table->timestamps();
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
      Schema::drop('fordon');
    }
}
