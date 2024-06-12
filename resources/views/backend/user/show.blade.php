@extends('backend.layout.master')

@section('title', 'Show User')

@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center"><strong>{{ __('User Details') }}</strong></div>
                    <div class="card-body">

                        <div class="col-md-12 text-start">
                            <a href="{{ route('admin.index') }}" class="btn btn-secondary">
                                <i class="link-icon" data-feather="chevron-left"></i>
                            </a>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Status ') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    @if ($user->is_approved == 1)
                                        Pending
                                    @elseif ($user->is_approved == 2)
                                        Approved
                                    @endif
                                    </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Name ') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->name }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->email }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->phone }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Picture') }}</label>
                            <div class="col-md-6">
                                <img src="{{ asset('uploads/pictures/' . $user->picture) }}" class="img-fluid rounded">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->address }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    <td>
                                        @if ($user->type == 0)
                                            Agent
                                        @elseif ($user->type == 1)
                                            Admin
                                        @endif
                                    </td>
                                </p>
                            </div>
                        </div>

                        {{-- <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('admin.index') }}" class="btn btn-primary">Back to Users</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
