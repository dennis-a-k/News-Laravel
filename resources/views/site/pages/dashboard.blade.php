@extends('site.templates.main')

@section('title')
    {{ Auth::user()->name }}
@endsection

@section('content')
    <h1 class="color-red text-center">{{ __('validation.custom.attribute-name.you_are_logged_in_as') }} {{ Auth::user()->name }}!</h1>
@endsection
