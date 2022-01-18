@extends('site.templates.main')

@section('title')
    {{ __('validation.attributes.register') }}
@endsection

@section('content')
    <div class="d-flex justify-content-center my-4">
        <div class="card-news w-50 shadow">
            <div class="card-header">
                <h5 class="modal-title color-red text-center">{{ __('validation.attributes.register') }}</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="col-form-label">{{ __('validation.attributes.name') }}: </label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="col-form-label">{{ __('validation.attributes.email') }}: </label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="col-form-label" for="password">{{ __('validation.attributes.password') }}: </label>
                        <input type="password" class="form-control" name="password" id="password" required autocomplete="new-password">
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label class="col-form-label" for="password_confirmation">{{ __('validation.attributes.password_confirmation') }}: </label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                    </div>
                    <div class="d-flex flex-wrap justify-content-end mt-4">
                        <button class="btn-news" type="submit">{{ __('validation.attributes.register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
