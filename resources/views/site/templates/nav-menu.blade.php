<ul class="nav align-items-center">
    @auth
    @if (Auth::user()->hasRole('admin'))
        <li class="nav-item">
            <a href="{{ route('admin::news::index') }}" class="nav-link link-light px-2">{{ __('lang.admin-panel') }}</a>
        </li>
    @else
        <li class="nav-item">
            <a href="{{ route('admin::user::index') }}" class="nav-link link-light px-2">{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item link-light">/</li>
    @endif
        <li class="nav-item">
            <a href="#exampleModalToggle4" class="nav-link link-light px-2" data-bs-toggle="modal">{{ __('lang.log-out') }}</a>
        </li>

        <!-- Модальное окно Выхода -->
        @include('site.components.modal-logout')

    @else
        <li class="nav-item">
            <a href="#exampleModalToggle" class="nav-link link-light px-2" data-bs-toggle="modal">{{ __('lang.log-in') }}</a>
        </li>

        <!-- Модальное окно Входа на сайт -->
        @include('site.components.modal-login')

        <!-- Модальное окно Сброса пароля -->
        @include('site.components.modal-reset')

        <!-- Модальное окно Регистрации -->
        @include('site.components.modal-register')

    @endauth
</ul>
