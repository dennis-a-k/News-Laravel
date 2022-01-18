<ul class="nav me-auto">
    @foreach ($categories as $value)
        @php
            $url = route('news::list', ['category' => $value->title])
        @endphp
        <li class="nav-item"><a href="{{ $url }}" class="nav-link link-dark px-2">{{ __('lang.' . $value->title) }}</a></li>
    @endforeach
</ul>
