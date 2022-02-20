<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sinistres;
use App\Models\Sinistres as MSinistres;
use Illuminate\Http\Request;

class SinistresController extends Controller
{
    public function create()
    {
     return view('Infosinistres');
}

    public function ajout(Sinistres $request)
    {
         $Sinistre=MSinistres::create([
         'type' =>$request->type,
         'lieu'=>$request->lieu,
         'date'=>$request->date,
         'heure' =>$request->heure,
         'nombre_personne'=>$request->NombrePersonne,
         'photo'=>$request->Photo,
         'description'=>$request->description,
           ]);
          return redirect()->route('tableaubord');
    }



}
