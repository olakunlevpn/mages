@extends('layouts.base')
@section('body')

@include('layouts.navigation-menu')
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
