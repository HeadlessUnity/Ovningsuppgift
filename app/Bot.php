<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/* en elqouent ORM. */
class Bot extends Model
{
  protected $primaryKey = 'kod'; // or null

  public $incrementing = false;
   protected $fillable = array('kod', 'regNr', 'datumTid','betalaBestrid',
   'bestridText', 'belopp','plats');
   /* så att koden inte kan nås ut via arrayuttryck."*/
   protected $hidden = [
       'kod',
   ];

}
