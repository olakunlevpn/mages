@extends('layouts.guest')

@section('content')
    <section class="container">


        <div class="container py-4">
            <header class="p-3 bg-dark text-white rounded">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <x-logo class="auth-logo" style="width: 30px;" />
                            <span class="fs-4">&nbsp;Mages Preset</span>
                        </a>
                        @if (Route::has('login'))
                            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                @auth
                                    <li><a href="{{ route('dashboard') }}" class="nav-link px-2 text-secondary">Home</a></li>
                                @endauth
                            </ul>





                            @auth

                                <a href="{{ route('dashboard') }}" class="btn btn-outline-light me-2">Dashboard</a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn btn-danger"><i class="bi bi-power"></i></a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <div class="text-end">
                                    <a href="{{ url('/login') }}" class="btn btn-outline-light me-2">Login</a>
                                    <a href="{{ url('/register') }}" class="btn btn-warning">Sign-up</a>
                                </div>

                            @endauth

                        @endauth
                </div>



            </div>
        </header>

        <div class="p-5 mb-4 h-100 p-5 bg-light border rounded-3 mt-2">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Hello, nice to see you!</h1>
                <p class="col-md-10 fs-4">It is a fascinating project, the Mages Preset consists of these awesome
                    technologies <a href="https://getbootstrap.com/" target="_BLANK">Bootstrap 5</a>, <a
                        href="https://alpinejs.dev/" target="_BLANK">Alpine.js</a>, <a href="https://alpinejs.dev/"
                        target="_BLANK">Laravel</a>, and <a href="https://laravel-livewire.com/"
                        target="_BLANK">Livewire</a>. A full-stack development solution, built by Laravel community
                    members. Enjoy!</p>


                <a class="btn btn-dark btn-lg" href="https://maylancer.org/mages/" target="_BLANK"><i
                        class="bi bi-globe-americas"></i>&nbsp; Website</a>    <a class="btn btn-dark btn-lg" href="https://maylancer.org/mages/github" target="_BLANK"><i class="bi bi-github"></i></a>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>Explore the documentation</h2>
                    <p>The package uses the Laravel framework. If you are new to the framework or have previous
                        experience, we recommend reading the complete documentation from start to finish.

                    </p>
                    <a class="btn btn-outline-light" href="https://laravel.com/docs" target="_BLANK"><i
                            class="bi bi-file-earmark-code"></i> Documentation</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Quick start guide</h2>
                    <p>Are you entirely new to Laravel Mages? Don't worry, we all were once. For a quick study of the
                        main features, be sure to check out the step-by-step tutorials see on the site.</p>
                    <a class="btn btn-outline-secondary" href="https://maylancer.org/mages/docs" target="_BLANK"><i
                            class="bi bi-file-earmark-code-fill"></i> Documentation</a>
                </div>
            </div>
        </div>

        <footer class="pt-3 mt-4 text-muted border-top">
            &copy; Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
</section>
@endsection
