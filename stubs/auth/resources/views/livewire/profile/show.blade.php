<section class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ __('Settingsss') }}</h1>


    </div>


    <div class="row">
        <x-profile-menu />


        <div class="col-xxl-7 col-xl-7 col-lg-7 my-4">


            @if (Request::is('user/settings'))
                @livewire('profile.account')
            @elseif(Request::is('user/settings/profile'))
                @livewire('profile.profile')
            @elseif(Request::is('user/settings/password'))
                @livewire('profile.password')
            @elseif(Request::is('user/settings/messages'))
                @livewire('profile.message')
            @endif
        </div>
    </div>


    </div>





</section>
