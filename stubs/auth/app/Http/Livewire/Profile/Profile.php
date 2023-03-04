<?php

namespace App\Http\Livewire\Profile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Livewire\Component;

class Profile extends Component
{

    public $saved = false;
    public $state = [];


    public function mount(){
        $this->state = Auth::user()->profile->withoutRelations()->toArray();
    }
    
    public function updateAccount()
    {


        Auth::user()->profile()->update([
            'first_name' => $this->state['first_name'], 
            'last_name' => $this->state['last_name'],
            'address' => $this->state['address'],
            'city' => $this->state['city'],
            'state' => $this->state['state'],
            'country' => $this->state['country'],
            'about' => $this->state['about'],

        ]);


        $this->saved = true;
    }



    public function render()
    {
        return view('livewire.profile.profile');
    }
}
