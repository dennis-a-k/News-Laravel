<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title color-red" id="exampleModalToggleLabel">{{ __('lang.log-out') }}?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="d-flex flex-wrap justify-content-end">
                        <button class="btn-news" type="submit">{{ __('lang.log-out') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
