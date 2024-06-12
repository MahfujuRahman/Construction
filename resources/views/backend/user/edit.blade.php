@extends('backend.layout.master')

@section('title', 'Edit User')


@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center"><strong>{{ __('Edit User') }}</strong></div>

                    <div class="card-body">

                        <div class="col-md-12 text-start">
                            <a href="{{ route('admin.index') }}" class="btn btn-secondary">
                                <i class="link-icon" data-feather="chevron-left"></i>
                            </a>
                        </div>

                        <form method="POST" action="{{ route('admin.update', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email', $user->email) }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
                                <div class="col-md-6">
                                    <input id="phone" type="text"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone', $user->phone) }}" autocomplete="phone">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="picture"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Picture') }}</label>
                                <div class="col-md-6">
                                    <input id="picture" type="file"
                                        class="form-control @error('picture') is-invalid @enderror" name="picture">
                                    <img src="{{ asset('uploads/pictures/' . $user->picture) }}" width="100" {{ old('address', $user->picture) }}>
                                    @error('picture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                                <div class="col-md-6">
                                    <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" required>{{ old('address', $user->address) }}</textarea>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="type"
                                    class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>
                                <div class="col-md-6">
                                    <select id="type" class="form-control @error('type') is-invalid @enderror"
                                        name="type" required>
                                        <option value="0" @if (old('type', $user->type) == 0) selected @endif>Agent
                                        </option>
                                        <option value="1" @if (old('type', $user->type) == 1) selected @endif>Admin
                                        </option>
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="type"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                                <div class="col-md-6">
                                    <select id="type" class="form-control @error('is_approved') is-invalid @enderror"
                                        name="is_approved" required>
                                        <option value="1" @if (old('type', $user->is_approved) == 1) selected @endif>Pending
                                        </option>
                                        <option value="2" @if (old('type', $user->is_approved) == 2) selected @endif>Approved
                                        </option>
                                    </select>
                                    @error('is_approved')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update User') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
