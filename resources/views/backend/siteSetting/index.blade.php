@extends('backend.layout.master')

@section('title', 'Edit User')


@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center"><strong>{{ __('Site Settings') }}</strong>
                    </div>

                    <div class="card-body">

                        <div class="col-md-12 text-start">
                            <a href="{{ route('admin.index') }}" class="btn btn-secondary">
                                <i class="link-icon" data-feather="chevron-left"></i>
                            </a>
                        </div>
                        <form action="{{ route('siteSetting.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3 mt-5">
                                <label for="logo"
                                    class="col-md-2 col-form-label text-md-center">{{ __('Logo') }}</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control @error('logo') is-invalid @enderror"
                                        id="logo" name="logo" value="{{ old('logo', $settings?->icon) }}"
                                        autocomplete="logo" autofocus>
                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    @if ($settings?->logo)
                                        <img src="{{ asset('uploads/settings/icon/' . $settings->logo) }}" alt="Logo"
                                            class="img-fluid rounded img-thumbnail" style="max-width: 75%; min-width:150px">
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="favicon"
                                    class="col-md-2 col-form-label text-md-center">{{ __('Favicon') }}</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control @error('favicon') is-invalid @enderror"
                                        id="favicon" name="favicon" value="{{ old('favicon', $settings?->favicon) }}"
                                        autocomplete="favicon" autofocus>
                                    @error('favicon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    @if ($settings?->favicon)
                                        <img src="{{ asset('uploads/settings/fav/' . $settings->favicon) }}" alt="favicon"
                                            class="img-fluid rounded img-thumbnail" style="max-width: 75%; min-width:150px">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="keywords">Keywords</label>
                                <input type="text" class="form-control" id="keywords" name="keywords"
                                    value="{{ $settings?->keywords }}" required>
                                @error('keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="author_name">Author Name</label>
                                <input type="text" class="form-control" id="author_name" name="author_name"
                                    value="{{ $settings?->author_name }}" required>
                                @error('author_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" required>{{ $settings?->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="text-center py-2">
                                <button type="submit" class="btn btn-primary">Update Settings</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
