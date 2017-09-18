<?php

namespace App\Http\Controllers;

use App\Bot;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
#TODO: rätt struktur? requests?
class BotController extends Controller {

    /* organiserar boter enligt dess datum.

     TODO: funkar den här funktionen? get() är troligtvis inte rätt efter
     med resourceful controllers.
     */
    public function index($datumTid = null) {
        if ($kod == null) {
            return Bot::orderBy('datumTid', 'asc')->get();
        } else {
            return $this->show($kod);
        }
    }
    #TODO: en create-funktion? Create och store ska båda vara hidden!

    /**
     * Spara fordon-instans. är nödvändig då dess primary-key är randomised.
     */
    public function store(Request $request) {
        $Bot = new Bot;
        #en unik kod generator från stack.
        #TODO: HASHA!!
        $desired_length = 10; //or whatever length you want
        $unique = uniqid();
        $Bot->kod = $request->substr($unique, 0, $desired_length);
        $Bot->regNr = $request->input('regNr');
        //$Bot->betalaBestrid = $request->input('betalaBestrid');
        //$Bot->bestridText = $request->input('bestridText');
        $Bot->datumTid = $request->input('datumTid');
        $Bot->belopp = $request->input('belopp');
        $Bot->plats = $request->input('plats');
        $Bot->save();

        return 'Bot Data skapad med slumpmässig kod: ' . $Bot->kod;
    }

    /**
     * Visar/display.

     */
    public function show($kod) {
        return Bot::find($kod);
    }

    /**
     * Updatera instansen i storage.
     *

     */
    public function update(Request $request, $kod) {
        $Bot = Bot::find($kod);

        //$Bot->regNr = $request->input('regNr');
        $Bot->betalaBestrid = $request->input('betalaBestrid');
        $Bot->bestridText = $request->input('bestridText');
        //$Bot->datumTid = $request->input('datumTid');
        //$Bot->belopp = $request->input('belopp');
        //$Bot->plats = $request->input('plats');
        $Bot->save();

        return "Uppdaterade bot-instans med kod: " . $Bot->kod;
    }

    /**
     * Ta bort från storage.

     */

    public function destroy(Request $request) {
        $Bot = Bot::find($request->input('kod'));

        $Bot->delete();

        return "Bot-instans raderad med kod: " . $request->kod;
    }
}
