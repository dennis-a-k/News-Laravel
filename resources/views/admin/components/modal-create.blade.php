<div class="modal fade" id="createNews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('validation.custom.attribute-name.create_news') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin::news::create') }}" method="POST" id="modal-form">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-title" class="col-form-label">{{ __('lang.title') }}:</label>
                        <input type="text" class="form-control" id="recipient-title" name="title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-link" class="col-form-label">{{ __('validation.custom.attribute-name.source_link') }}:</label>
                        <input type="text" class="form-control" id="recipient-link" name="link">
                        @error('source_link')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="recipient-category" class="col-form-label">{{ __('lang.category') }}:</label>
                        <select class="form-select" aria-label="Default select example" id="recipient-category" name="category_id">
                            <option selected value="politics">{{ __('lang.politics') }}</option>
                            <option value="moscow_city">{{ __('lang.moscow_city') }}</option>
                            <option value="community">{{ __('lang.community') }}</option>
                            <option value="world">{{ __('lang.world') }}</option>
                            <option value="incidents">{{ __('lang.incidents') }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-author" class="col-form-label">{{ __('lang.author') }}:</label>
                        <input type="text" class="form-control" id="recipient-author" name="author">
                        @error('author')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">{{ __('validation.custom.attribute-name.text_news') }}:</label>
                        <textarea class="form-control" id="message-text" rows="30" name="description"></textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('lang.closer') }}</button>
                <button type="button" class="btn btn-outline-secondary" onclick="formSubmit()">{{ __('lang.save') }}</button>
            </div>
        </div>
    </div>
</div>
