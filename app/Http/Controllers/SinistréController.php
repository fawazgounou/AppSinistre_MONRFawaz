<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SinistréRequest;
use App\Models\Sinistré ;
class SinistréController extends Controller
{
   public function create()
   {
    return view('Infosinistré');
}

   public function store(SinistréRequest $request)
   {
    $Sinistré=Sinistré::create([
        'age' =>$request->age,
        'profession'=>$request->profession,
        'nom'=>$request->nom,
        'prénom' =>$request->prenom,
        'protection_choisis'=>$request->protection,
        'photo'=>$request->photo,
          ]);
           return redirect()->route('Infosinistré');
   }




}
