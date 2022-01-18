<footer class="container py-3">
    <div class="row">
        <div class="col-12 col-md">
            <span class="text-uppercase">News</span>
            <small class="d-block text-muted">© <?= date('Y')?></small>
        </div>
        @if (Auth::user()->hasRole('admin'))
            <div class="col-6 col-md">
                <a href="{{ route('admin::user::index') }}" class="link-secondary text-decoration-none"><h5>{{ __('lang.profile') }}</h5></a>
            </div>
            <div class="col-6 col-md">
                <a href="{{ route('admin::news::index') }}" class="link-secondary text-decoration-none"><h5>{{ __('lang.news') }}</h5></a>
            </div>
            <div class="col-6 col-md">
                <a href="{{ route('admin::users::index') }}" class="link-secondary text-decoration-none"><h5>{{ __('lang.users') }}</h5></a>
            </div>
        @endif
    </div>
</footer>
