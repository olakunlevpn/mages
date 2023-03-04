<div class="col-xxl-2 col-xl-2 col-lg-2 col-sm-12 my-4">

    <div class="list-group">
        <a href="{{ route('settings.show') }}"
            class="list-group-item list-group-item-action {{ request()->is('user/settings') ? 'active' : '' }}">
           {{  __('Account') }}
        </a>
        <a href="{{ route('profile.show') }}"
            class="list-group-item list-group-item-action {{ request()->is('user/settings/profile') ? 'active' : '' }}">{{  __('Profile') }}</a>
        <a href="{{ route('password.show') }}"
            class="list-group-item list-group-item-action {{ request()->is('user/settings/password') ? 'active' : '' }}">{{  __('Password') }}</a>
        <a href="{{ route('messages.show') }}"
            class="list-group-item list-group-item-action {{ request()->is('user/settings/messages') ? 'active' : '' }}">{{  __('Messages') }}</a>
        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1"
            aria-disabled="true">{{  __('Delete Account') }}</a>
    </div>

</div>
