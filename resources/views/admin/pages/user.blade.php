@extends('admin.templates.main')

@section('title')
    {{ __('lang.user_profile') }}
@endsection

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light">

        @include('admin.components.errors-success')
        
        @include('admin.components.modal-logout')

        <div class="d-flex justify-content-center my-4">
            <div class="card w-50 shadow">
                <div class="card-header">
                    <h2 class="modal-title text-center">{{ __('lang.user_profile') }}</h2>
                </div>
                <div class="card-body p-4">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td>
                                <p class="text-muted">{{ __('validation.attributes.name') }}:</p>
                            </td>
                            <td>
                                <span class="h4 text-body">{{ $user->name }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="text-muted">{{ __('validation.attributes.email') }}:</p>
                            </td>
                            <td>
                                <span class="h4 text-body">{{ $user->email }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="text-muted">{{ __('validation.attributes.registration_date')}}:</p>
                            </td>
                            <td>
                                <span class="h4 text-body">{{ $user->created_at->format('d.m.Y') }}</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-secondary m-2" data-bs-toggle="modal" data-bs-target="#updateUser" data-bs-whatever="{{ $user }}">{{ __('lang.update') }}</button>
                </div>
                @include('admin.components.modal-update-user')
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        // Редактировать пользователя
        function formSubmitUpdate() {
            document.getElementById("modal-form-update").submit();
        }

        // Изменение профиля пользователя
        let updateUser = document.getElementById('updateUser')
        updateUser.addEventListener('show.bs.modal', function (event) {
            let button = event.relatedTarget

            let value = button.getAttribute('data-bs-whatever')
            let recipient = JSON.parse(value)

            let modalName = updateUser.querySelector('#recipient-name')
            let modalBodyInputId = updateUser.querySelector('#recipient-id')
            let modalBodyInputEmail = updateUser.querySelector('#recipient-email')

            modalName.value = recipient.name
            modalBodyInputId.value = recipient.id
            modalBodyInputEmail.value = recipient.email
        })
    </script>
@endsection
