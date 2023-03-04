<?php

namespace App\Http\Livewire\Profile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Livewire\Component;

class Password extends Component
{

    
    public $password = '';
    public $old_password = '';
    public $password_confirmation = '';
    public $saved = false;



    
    public function updatePassword(){
        $this->resetErrorBag();

        $this->validate([
            'old_password' => ['required', new MatchOldPassword],
            'password' => ['required','min:8','same:password_confirmation']
        ]); 
        

        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($this->password)

        ]);
    

        $this->password = '';
        $this->old_password = '';
        $this->password_confirmation = '';


        $this->saved = true;

    }



    public function passes($attribute, $value)
    {
        return Hash::check($value, auth()->user()->password);
    }




    public function render()
    {
        return view('livewire.profile.password');
    }
}
