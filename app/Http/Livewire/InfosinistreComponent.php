<?php

namespace App\Http\Livewire;

use App\Models\Sinistres;
use Livewire\Component;

class InfosinistreComponent extends Component
{
    public $type;
    public $lieu;
    public $date;
    public $heure;
    public $NombrePersonne;
    // public $photo;
    public $description;
    public function savesinistre()
    {
        $this->validate([
            'type' => ['required', 'string'],
            'lieu' => ['required','string'],
                'date' => ['required','date'],
                'heure' => ['required','string'],
                'NombrePersonne' => ['required','integer'],
                // 'photo' => ['required'],
                'description' => ['required'],
        ]);

        $sinistre=new  Sinistres();
        $sinistre->type=$this->type;
        $sinistre->lieu=$this->lieu;
        $sinistre->date=$this->date;
        $sinistre->heure=$this->heure;
        $sinistre->nombre_personne=$this->NombrePersonne;
        // $sinistre->photo=$this->photo;
        $sinistre->description=$this->description;
        $sinistre->user_id=auth()->user()->id;
        $sinistre->save();
       session()->flash('status', 'Sinistre Ajouté avec succes!');
return redirect('Infosinistres');
    }
    public function render()
    {
        return view('livewire.infosinistre-component')->layout('layouts.base');
    }

}
