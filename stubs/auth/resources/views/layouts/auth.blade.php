@extends('layouts.base')

@section('body')
<header id="auth-header" class="auth-header">
    <h1>
        <a href="{{ route('home') }}" class="text-white">
           <x-logo class="auth-logo" />
        </a>
    </h1>
  
</header>
<div class="container">
    <div class="row justify-content-center">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
 </div>
@endsection
