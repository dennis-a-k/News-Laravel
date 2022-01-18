@extends('admin.templates.main')

@section('title')
    {{ __('lang.users') }}
@endsection

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light">
        
        @include('admin.components.modal-logout')

        @foreach ($users as $value)
            @php
                $url = route('news::card', ['id' => $value->id])
            @endphp
            <div class="card-news mb-1">
                <div class="card-body d-flex flex-wrap">
                    <div class="flex-fill"">
                        <a href="{{ $url }}" class="text-dark text-decoration-none" target="_blank"><h5 class="card-title">{{ $value->name }}</h5></a>
                        @if ($value->role == 'admin')
                            <h6 class="card-subtitle text-muted">{{ __('lang.admin') }}</h6>
                        @else
                            <h6 class="card-subtitle text-muted">{{ __('lang.user') }}</h6>
                        @endif
                    </div>
                    <div class="justify-content-end">
                        <form action="{{ route('admin::users::update') }}" method="POST" id="modal-form-update">
                            @csrf
                            @if ($value->role == 'admin')
                                <input type="hidden" id="recipient-id" name="id" value="{{ $value->id }}">
                            @else
                                <input type="hidden" id="recipient-id" name="id" value="{{ $value->id }}">
                            @endif
                            <button class="btn btn-secondary" type="submit">{{ __('lang.change_role') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <hr>
        {{ $users->links() }}
    </div>
@endsection
