<?php

namespace App\Http\Livewire;

use App\Models\Sinistres;
use App\Models\Sinistré;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PageadminComponent extends Component
{
    public function acce(){
        if (Auth::user()->email==='admin@gmail.com') {

        }
        else{
            return redirect('tableaubord');
        }
    }
    public function render()
    {
        $this->acce();
        $users=User::all();
        return view('livewire.pageadmin-component',['users'=> $users])->layout('layouts.admin');
    }
}
