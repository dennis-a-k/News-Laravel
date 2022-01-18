@extends('site.templates.main')

@section('title')
    @foreach ($categories as $key => $value)
        @if ($value->title == $id)
            {{ __('lang.' . $value->title) }}
        @endif
    @endforeach
@endsection

@section('content')
    @forelse ($news as $value)
        @php
            $url = route('news::card', ['id' => $value->id]);
        @endphp
        <div class="card-news mb-1">
            <div class="card-body">
                <a href="{{ $url }}" class="card-link text-dark text-decoration-none" target="_blank"><h5 class="card-title">{{ $value->title }}</h5></a>
                <h6 class="card-subtitle text-muted">{{ $value->author }}</h6>
            </div>
        </div>
    @empty
        <p class="text-center color-red">
            {{ __('validation.custom.attribute-name.category_null') }}
        </p>
    @endforelse
    <hr>
        {{ $news->links() }}
@endsection
