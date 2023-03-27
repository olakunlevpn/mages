@section('title', 'Verify your email address')
<div class="auth-form">



    <div class="alert alert-light" role="alert">
        <h4 class="lead mb-4">{{ __('Verify your email address') }}</h4>
        @if (session('resent'))
           <x-action-message icon="bi bi-check-circle-fill" type="success">
             {{ __('A new verification link has been sent to the email address you provided during registration.') }}
           </x-action-message>
        @endif


        <p>   {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>
       
       
        <hr>
        <p class="mb-0"> If you did not receive the email, <a wire:click="resend" role="button" class="text-decoration-none">click here to request another</a>
            
        </p>
        
        <br>
        <p>or <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            sign out
        </a>
    
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form></p>


       
      </div>


    
        

       
    </div>