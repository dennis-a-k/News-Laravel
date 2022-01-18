<div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="exampleModalLabelDelete" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelDelete">{{ __('lang.log-out') }}?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">{{ __('lang.closer') }}</button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-secondary" type="submit">{{ __('lang.log-out') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
