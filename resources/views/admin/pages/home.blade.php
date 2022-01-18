@extends('admin.templates.main')

@section('title')
    {{ __('validation.custom.attribute-name.news_admin_panel') }}
@endsection

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light">
        <button class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#createNews">{{ __('validation.custom.attribute-name.create_news') }}</button>

        @include('admin.components.errors-success')

        @include('admin.components.modal-logout')

        @include('admin.components.modal-create')

        @foreach ($news as $value)
            @php
                $url = route('news::card', ['id' => $value->id])
            @endphp
            <div class="card-news mb-1">
                <div class="card-body d-flex flex-wrap">
                    <div class="flex-fill"">
                        <a href="{{ $url }}" class="text-dark text-decoration-none" target="_blank"><h5 class="card-title">{{ $value->title }}</h5></a>
                        <h6 class="card-subtitle text-muted">{{ __('lang.the_news') }} № {{ $value->id }}</h6>
                    </div>
                    <div class="justify-content-end">
                        <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="{{ $value }}">{{ __('lang.update') }}</button>
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteNews" data-bs-whatever="{{ $value->id }}">{{ __('lang.delete') }}</button>
                    </div>
                </div>
            </div>

            @include('admin.components.modal-update')

            @include('admin.components.modal-delete')

        @endforeach
        <hr>
        {{ $news->links() }}
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        // Сохранить новую новость
        function formSubmit() {
            document.getElementById("modal-form").submit();
        }
        // Редактировать новость
        function formSubmitUpdate() {
            document.getElementById("modal-form-update").submit();
        }
        // Удалить новость
        function deleteNewsCard() {
            document.getElementById("modal-form-delete").submit();
        }
        // Изменение новости
        let exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', function (event) {
            let button = event.relatedTarget

            let value = button.getAttribute('data-bs-whatever')
            let recipient = JSON.parse(value)

            let modalTitle = exampleModal.querySelector('.modal-title')
            let modalBodyInputId = exampleModal.querySelector('#recipient-id')
            let modalBodyInputTitle = exampleModal.querySelector('#recipient-title')
            let modalBodyInputLink = exampleModal.querySelector('#recipient-link')
            let modalBodyInputAuthor = exampleModal.querySelector('#recipient-author')
            let messageText = exampleModal.querySelector('#message-text')
            let text = modalTitle.textContent

            modalTitle.textContent = text + ' № ' + recipient.id
            modalBodyInputId.value = recipient.id
            modalBodyInputTitle.value = recipient.title
            modalBodyInputLink.value = recipient.link
            modalBodyInputAuthor.value = recipient.author
            messageText.value = recipient.description
        })
        // Удаление новости
        let deleteNews = document.getElementById('deleteNews')
        deleteNews.addEventListener('show.bs.modal', function (event) {
            let button = event.relatedTarget
            let recipient = button.getAttribute('data-bs-whatever')
            let modalBodyInputIdDelete = deleteNews.querySelector('#recipient-id-delete')
            modalBodyInputIdDelete.value = recipient
        })
    </script>
@endsection
