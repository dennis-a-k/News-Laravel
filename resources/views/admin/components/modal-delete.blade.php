<div class="modal fade" id="deleteNews" tabindex="-1" aria-labelledby="exampleModalLabelDelete" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelDelete">{{ __('validation.custom.attribute-name.delete_news') }}?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div>
                <form action="{{ route('admin::news::delete') }}" method="POST" id="modal-form-delete">
                    @csrf
                    <input type="hidden" id="recipient-id-delete" name="id">
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">{{ __('lang.closer') }}</button>
                <button class="btn btn-outline-secondary" onclick="deleteNewsCard()">{{ __('lang.delete') }}</button>
            </div>
        </div>
    </div>
</div>
