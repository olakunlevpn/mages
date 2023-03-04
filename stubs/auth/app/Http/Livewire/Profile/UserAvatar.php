<?php

namespace App\Http\Livewire\Profile;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Livewire\Component;

class UserAvatar extends Component
{
    use WithFileUploads;

    
    public $user;
    public $avatar;


    public function mount(){
        $this->user = Auth::user();
    }



    public function changeAvatar(){
        if($this->avatar){
            Auth::user()->profile()->update([
                'avatar' => $this->avatar->store('/', 'public'),
            ]);
            $this->user->save();
            $this->avatar = null;
        }
    }



    public function render()
    {
        return view('livewire.profile.user-avatar');
    }
}

