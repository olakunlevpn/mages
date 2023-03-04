<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $username = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;


    protected $rules = [
        'username' => ['required'],
        'password' => ['required'],
    ];

    public function authenticate()
    {
        $this->validate();
        $fieldType = filter_var($this->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if (!Auth::attempt([$fieldType => $this->username, 'password' => $this->password], $this->remember)) {
            $this->addError('invalidCredentials', trans('auth.failed'));

            return;
        }

        return redirect()->intended(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
    }
}
