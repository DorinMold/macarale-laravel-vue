<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Mesaj;
use App\Events\EventMailMesaj;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mesajSalvat (Request $req) {

        $inputs = $this->validate($req, [
            'nume' => 'required|min:3',
            'email' => 'required|min:3',
            'firma' => '',
            'telefon' => 'required|min:10',
            'mesaj' => 'required|min:20'
        ]);

        //Mesaj::create($reg->all())

        $mesaj = new Mesaj;

        $mesaj->nume = $inputs['nume'];
        $mesaj->email = $inputs['email'];
        $mesaj->firma = $inputs['firma'];
        $mesaj->telefon = $inputs['telefon'];
        $mesaj->mesaj = $inputs['mesaj'];

        $mesaj->save();

        //event(new EventMailMesaj($mesaj));

       //return view('salvaremesaj', compact('mesaj'));
       return response()->view('salvaremesaj', compact('mesaj'), 200)
              ->header("Refresh", "5;url=/");

    }

    // public function mesaje () {
    //     $mesaje = Mesaj::all();
    //     dd($mesaje->toArray()[0]['mesaj']);
    // }

    public function vizualizareMesaje () {
        $mesaje = Mesaj::all();
        return response()->view('vizualizaremesaje', compact('mesaje'));
    }

    public function filtrareMesaje (Request $r) {
        $filtru = $r->input('filtru');
        if ( trim($filtru) != "" ) {
            $mesaje = Mesaj::where('nume','LIKE', "%" . $filtru . "%" )->orderBy('created_at', 'DESC')->get();
            if ($mesaje->count() == 0) {
                $mesaje = Mesaj::where('telefon','LIKE', "%" . $filtru . "%")->orderBy('created_at', 'DESC')->get();
                if (count($mesaje) < 1) $mesaje = Mesaj::where('email','LIKE', "%" . $filtru . "%")->orderBy('created_at', 'DESC')->get();
            } 
            return view('vizualizaremesaje', compact('mesaje'));
        } else {
            $mesaje = Mesaj::all();
            return response()->view('vizualizaremesaje', compact('mesaje'));
        }
        
    }

}

