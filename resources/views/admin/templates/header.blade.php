<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <a href="{{ route('news::index') }}" class="py-2 fs-3 fw-bolder text-uppercase text-decoration-none">News</a>
        @if (Auth::user()->hasRole('admin'))
            <a href="{{ route('admin::user::index') }}" class="py-2 d-none d-md-inline-block">{{ __('lang.profile') }}</a>
            <a href="{{ route('admin::news::index') }}" class="py-2 d-none d-md-inline-block">{{ __('lang.news') }}</a>
            <a href="{{ route('admin::users::index') }}" class="py-2 d-none d-md-inline-block">{{ __('lang.users') }}</a>
        @endif
        <a href="#modalLogout" class="py-2 d-none d-md-inline-block" data-bs-toggle="modal">{{ __('lang.log-out') }}</a>
    </nav>
</header>
