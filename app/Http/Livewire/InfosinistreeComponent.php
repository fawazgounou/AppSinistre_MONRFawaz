<?php

namespace App\Http\Livewire;

use App\Models\Sinistré;
use Livewire\Component;

class InfosinistreeComponent extends Component
{
    public $age;
    public $profession;
    public $nom;
    public $prenom;
    public $protection;
    // public $photo;
      public function savesinistree()
    {
        $this->validate([
            'age' => ['required', 'integer'],
            'profession' => ['required','string'],
            'nom' => ['required','string'],
            'prenom' => ['required','string'],
            'protection' => ['required','string','max:100'],
            // 'photo' => ['required'],
        ]);

        $sinistre=new Sinistré();
        $sinistre->age=$this->age;
        $sinistre->profession=$this->profession;
        $sinistre->nom=$this->nom;
        $sinistre->prénom=$this->prenom;
        $sinistre->protection_choisis=$this->protection;
        // $sinistre->photo=$this->photo;
        $sinistre->user_id=auth()->user()->id;

        $sinistre->save();
        session()->flash('status', 'Sinistré Ajouté avec succes!');
    return redirect('Infosinistré');
    }

    public function render()
    {
        return view('livewire.infosinistree-component')->layout('layouts.base');
    }

    public function show($id)
    {
        $sinistre=Sinistré::findOrFail($id);
        return view('voirinfo',compact('Sinistré'));
    }
}
