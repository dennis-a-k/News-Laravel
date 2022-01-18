@extends('site.templates.main')

@section('title')
    {{ __('validation.custom.attribute-name.error_404') }}
@endsection

@section('content')
    <h1 class="color-red text-center">{{ __('validation.custom.attribute-name.page_not_found') }}!</h1>
@endsection
