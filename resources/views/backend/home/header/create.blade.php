@extends('backend.layout.master')

@section('title', 'Change Client')
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center">
                        <strong>{{ __('Create Header') }}</strong>
                    </div>

                    <div class="card-body " style="overflow-y: hidden;">
                        <div class="row">
                            <div class="col">
                                <div class="text-end">
                                    <a href="{{ route('header.index') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif


                        <form
                            action="{{ \Illuminate\Support\Facades\Route::has('header.store') ? route('header.store') : '' }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf

                            <h2 class="my-3 text-secondary text-center">Header Item One!</h2>

                            <div class="form-group mt-3">
                                <label for="title">Title</label>
                                <input type="text" name="title1" class="form-control mt-2" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="short_title">Short Title</label>
                                <input type="text" name="short_title1" class="form-control mt-2" required>
                            </div>

                            <div class="form-group mt-3 mb-4">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" name="thumbnail" class="form-control mt-2" required>
                            </div>

                            <h2 class="my-3 text-secondary text-center">Header Item Two!</h2>

                            <div class="form-group mt-3">
                                <label for="title">Title</label>
                                <input type="text" name="title2" class="form-control mt-2" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="short_title">Short Title</label>
                                <input type="text" name="short_title2" class="form-control mt-2" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" name="thumbnail2" class="form-control mt-2" required>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
