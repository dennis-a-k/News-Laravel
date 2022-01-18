<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title color-red" id="exampleModalToggleLabel">{{ __('validation.attributes.authorization') }}</h5>
            </div>
            <div class="modal-body">
                <div class="text-center"><p>Для входа под учеткой Администратора введите<br>Email: admin@admin.ru, пароль: adminadmin</p></div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="col-form-label">{{ __('validation.attributes.email')}}: </label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
            <div class="modal-footer justify-content-center bg-red">
                <div class="d-flex flex-wrap justify-content-center">
                    {{-- <p class="nav-link link-light m-0" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">{{ __('validation.attributes.forgot_password') }}?</p> --}}
                    <p class="nav-link link-light m-0" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">{{ __('validation.attributes.register') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
