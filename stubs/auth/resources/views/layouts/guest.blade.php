@extends('layouts.base')
@section('body')


<div class="container-fluid">
    <div class="row">
        
     



        @yield('content')
    
        @isset($slot)
            {{ $slot }}
        @endisset


</div>
</div>

   
@endsection
