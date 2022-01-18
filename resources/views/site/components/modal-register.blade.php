<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title color-red" id="exampleModalToggleLabel3">{{ __('validation.attributes.register') }}</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="col-form-label">{{ __('validation.attributes.name') }}: </label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="col-form-label">{{ __('validation.attributes.email') }}: </label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="col-form-label" for="password">{{ __('validation.attributes.password') }}: </label>
                        <input type="password" class="form-control" name="password" id="password" required autocomplete="new-password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label class="col-form-label" for="password_confirmation">{{ __('validation.attributes.password_confirmation') }}: </label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                        @error('password_confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-wrap justify-content-end mt-4">
                        <button class="btn-news" type="submit">{{ __('validation.attributes.register') }}</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center bg-red">
                <div class="d-flex flex-wrap justify-content-center">
                    {{-- <p class="nav-link link-light m-0" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">{{ __('validation.attributes.forgot_password') }}?</p> --}}
                    <p class="nav-link link-light m-0" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">{{ __('lang.log-in') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
