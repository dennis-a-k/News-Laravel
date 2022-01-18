<div class="dropdown d-flex flex-wrap justify-content-end">
    <p class="dropdown-toggle m-0 color-red lang" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        {{ __('lang.language') }}
    </p>
    <ul class="dropdown-menu dropdown-menu-end lang-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item color-red" href="{{ route('locale', ['lang' => 'ru']) }}">Русский 🇷🇺</a></li>
        <li><a class="dropdown-item color-red" href="{{ route('locale', ['lang' => 'en']) }}">English 🇬🇧</a></li>
    </ul>
</div>
