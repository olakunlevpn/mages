<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Account extends Component
{
    use WithFileUploads;


    public $saved = false;
    public $verificationLinkSent = false;
    public $state = [];
    public $emailVerified = false;


    public function mount()
    {
        $this->state = Auth::user()->withoutRelations()->toArray();
        $this->emailVerified = (Auth::user()->hasVerifiedEmail() ? true : false);
    }


    public function updateAccount()
    {
        $this->resetErrorBag();

        $this->validate([
            'state.username' => 'required',
            'state.email'  => 'required'
        ]);



        Auth::user()->update([
            'username' => $this->state['username'],
            'email' => $this->state['email'],

        ]);


        $this->saved = true;
    }




    public function sendEmailVerification()
    {
        Auth::user()->sendEmailVerificationNotification();

        $this->verificationLinkSent = true;
    }






    public function render()
    {
        return view('livewire.profile.account');
    }
}
