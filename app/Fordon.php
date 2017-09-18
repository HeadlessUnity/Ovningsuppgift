<?php

namespace App;
#TODO: BEHÖVS DEN HÄR?
use Illuminate\Database\Eloquent\Model;
/* en elqouent ORM. */
class Fordon extends Model
{
  protected $primaryKey = 'regNr'; // or null

  public $incrementing = false;
   protected $fillable = array('regNr');
}
