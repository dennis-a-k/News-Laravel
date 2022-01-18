<header class="mt-5 mb-4">
    <div class="container">

        @include('site.templates.lang-btn')

        <div class="py-3 bg-red">
            <div class="container d-flex flex-wrap justify-content-center">
                <a href="{{ route('news::index') }}" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-light text-decoration-none">
                    <span class="fs-1 fw-bolder text-uppercase">News</span>
                </a>

                @include('site.templates.nav-menu')

            </div>
        </div>

        <nav class="py-2 bg-light">
            <div class="container d-flex flex-wrap align-items-center">

                @include('site.templates.categories-menu')

                <a href="{{ route('news::parser') }}" class="btn-news link-light">{{ __('lang.check_news') }}</a>
            </div>
        </nav>
    </div>
</header>
