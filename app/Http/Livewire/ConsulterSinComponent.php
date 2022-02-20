<?php

namespace App\Http\Livewire;

use App\Models\Sinistres;
use App\Models\Sinistré;
use Livewire\Component;

class ConsulterSinComponent extends Component
{
    public $user_id;
    public function mount($user_id)
    {
        $this->user_id=$user_id;
    }
    public function render()
    {
        $sinistre=Sinistré::where('user_id',$this->user_id)->get();
        $Sinistres=Sinistres::where('user_id',$this->user_id)->get();
        return view('livewire.consulter-sin-component',['sinistres'=> $sinistre,'accident'=> $Sinistres])->layout('layouts.consulte');
    }
}
