<?php

namespace App\Http\Controllers;

use App\Fordon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FordonController extends Controller {

    /**
     * listar alla instanser?.
     *
     * @return Response
     */
     #TODO: funkar den här?
    public function index($regNr = null) {
      // get all the nerds
      return Fordon::all();

        }
    }
    #TODO: en create-funktion? Create och store ska båda vara hidden!
    /*
    public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return View::make('fordon.create');
    }
    */
    /**
     * Sparar en skapad fordon-instans. TODO: Den här kanske inte behövs?
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $Fordon = new Fordon;

        $$Fordon->regNr = $request->input('regNr');
        $Fordon->save();

        return 'Fordon-instans skapad med Registreringsnumret: ' . $Fordon->id;
    }

    /**
     * Visar en Fordon-instans.
     *
     * @param  int  $regNr
     * @return Response
     */
    public function show($regNr) {
        return Fordon::find($regNr);
    }

    /* Behövs ingen uppdateringsfunktion här.
     */
     /* tar bort fordon-instans */
    public function destroy(Request $request) {
        $Fordon = Fordon::find($request->input('regNr'));

        $Fordon->delete();

        return "Fordon-instans raderad med registreringsnumret: " . $request->input('id');
    }
}
