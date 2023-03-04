@extends('layouts.base')
@include('layouts.navigation-menu')
@section('body')


<div class="container-fluid">
    <div class="row">
        
        @include('layouts.sidebar')



        @yield('content')
    
        @isset($slot)
            {{ $slot }}
        @endisset


</div>
</div>

   
@endsection
