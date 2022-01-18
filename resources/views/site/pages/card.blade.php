@extends('site.templates.main')

@section('title')
    {{ $news->title }}
@endsection

@section('content')
    <h2>{{ $news->title }}</h2>
    <p>{{ $news->description }}</p>
    <a href="{{ $news->link }}" class="link-red"><p>{{ __('validation.custom.attribute-name.read_more') }}</p></a>
    <hr>
    <div class="d-flex flex-wrap justify-content-between"">
        <p class="card-subtitle text-muted m-0">{{ $news->author }}</p>
        <p class="m-0">{{ $news->created_at->format('H:m / d.m.Y') }}</p>
    </div>
@endsection
