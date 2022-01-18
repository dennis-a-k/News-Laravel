<div class="modal fade" id="updateUser" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('lang.user_profile') }}</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin::user::update') }}" method="POST" id="modal-form-update">
                    @csrf
                    <input type="hidden" id="recipient-id" name="id">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">{{ __('validation.attributes.name') }}:</label>
                        <input type="text" class="form-control" id="recipient-name" name="name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-link" class="col-form-label">{{ __('validation.attributes.email') }}:</label>
                        <input type="email" class="form-control" id="recipient-email" name="email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-author" class="col-form-label">{{ __('validation.attributes.new_password') }}:</label>
                        <input type="password" class="form-control" id="recipient-new_password" name="password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-author" class="col-form-label">{{ __('validation.attributes.current_password') }}:</label>
                        <input type="password" class="form-control" id="recipient-current_password" name="current_password">
                        @error('current_password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">{{ __('lang.closer') }}</button>
                <button class="btn btn-outline-secondary" onclick="formSubmitUpdate()">{{ __('lang.save') }}</button>
            </div>
        </div>
    </div>
</div>
