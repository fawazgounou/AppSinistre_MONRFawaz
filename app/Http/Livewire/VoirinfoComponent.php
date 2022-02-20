<?php

namespace App\Http\Livewire;

use App\Models\Sinistres;
use App\Models\Sinistré;
use Livewire\Component;

class VoirinfoComponent extends Component
{

     public function render()
    {
        $sinistre=Sinistré::where('user_id',(auth()->user()->id))->get();
        $Sinistres=Sinistres::where('user_id',(auth()->user()->id))->get();
        return view('livewire.voirinfo-component',['sinistres'=> $sinistre,'accident'=> $Sinistres])->layout('layouts.base');
    }
}
