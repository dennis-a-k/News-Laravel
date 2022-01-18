@extends('site.templates.main')

@section('title')
    {{ __('lang.log-in') }}
@endsection

@section('content')
    <div class="d-flex justify-content-center my-4">
        <div class="card-news w-50 shadow">
            <div class="card-header">
                <h5 class="modal-title color-red text-center">{{ __('validation.attributes.authorization') }}</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="col-form-label">{{ __('validation.attributes.email')}}: </label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    </div>

                    <!-- Password -->
                    <div class="mt-3">
                        <label class="col-form-label" for="password">{{ __('validation.attributes.password') }}: </label>
                        <input type="password" class="form-control" name="password" id="password" required autocomplete="current-password">
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check my-3">
                        <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember">
                        <label class="form-check-label" for="remember_me">
                            {{ __('validation.attributes.remember_me')}}
                        </label>
                    </div>
                    <div class="d-flex flex-wrap justify-content-end">
                        <button class="btn-news" type="submit">{{ __('lang.log-in')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
