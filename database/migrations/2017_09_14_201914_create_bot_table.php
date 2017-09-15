<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBotTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
      Schema::create('bot', function (Blueprint $table) {

        $table->string('kod')->primary();

        #Registrerar med foreign key vilket fordon boten är registerad på.
        $table->string('regNr')->unique();
        $table->foreign('regNr')->references('regNr')->on('fordon');
        /* Den här foreign keyn behövs inte.
        $table->integer('userId')->unsigned();
        $table->foreign('userId')->references('id')->on('users');
        */


        $table->string('plats');
        /*En variabel kodar ifall den är ny(Nullable), betald(true), eller
        bestridd(false).*/
        $table->boolean('betaldBestrid')->nullable();
        $table->text('bestridText')->nullable();
        $table->dateTime('datumTid');
        $table->integer('belopp');
        $table->timestamps();
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
      Schema::drop('bot');
    }
}
