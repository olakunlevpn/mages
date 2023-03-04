<?php


namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Livewire\Component;


class Profile extends Component
{
 

    public $state = [];

    public $password = '';
    public $old_password = '';
    public $password_confirmation = '';
    public $passwordUpdated = false;
    public $firstname = '';

    public $saved = false;





   public function mount(){
       $this->state = Auth::user()->withoutRelations()->toArray();
       
       $user = User::find(1);
       $this->firstname =  $user->first_name;
   }
    


    public function updateProfile(){
        $this->resetErrorBag();

        $this->validate([
            $this->state['name'] => 'required',
            $this->state['password']  => 'required'
        ]); 


      
        User::where('id', Auth::user()->id)->update([
            'name' => $this->state['name'], 
            'email' => $this->state['email'],

        ]);
        $this->saved = true;

    }



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


        $this->passwordUpdated = true;

    }



    public function passes($attribute, $value)
    {
        return Hash::check($value, auth()->user()->password);
    }




    public function render()
    {
        return view('livewire.profile.show')->extends('layouts.app');
    }
}
