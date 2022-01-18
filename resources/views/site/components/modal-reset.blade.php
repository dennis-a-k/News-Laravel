<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title color-red" id="exampleModalToggleLabel2">{{ __('validation.attributes.password_reset') }}:</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div>
                        <label for="email" class="col-form-label">{{ __('validation.attributes.email')}}: </label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="d-flex flex-wrap justify-content-end mt-3">
                        <button class="btn-news" type="submit">{{ __('validation.attributes.reset') }}</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center bg-red">
                <div class="d-flex flex-wrap justify-content-center">
                    <p class="nav-link link-light m-0" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">{{ __('lang.log-in') }}</p>
                    <p class="nav-link link-light m-0" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">{{ __('validation.attributes.register') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
