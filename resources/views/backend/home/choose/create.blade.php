@extends('backend.layout.master')

@section('title', 'Why Choose')
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center">
                        <strong>{{ __('Create') }}</strong>
                    </div>

                    <div class="card-body " style="overflow-y: hidden;">
                        <div class="row">
                            <div class="col">
                                <div class="text-end">
                                    <a href="{{ route('choose.index') }}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif


                        <form
                            action="{{ \Illuminate\Support\Facades\Route::has('choose.store') ? route('choose.store') : '' }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mt-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control mt-2" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="short_title">Sub Title</label>
                                <textarea name="sub_title" class="form-control mt-2" rows="10" required></textarea>
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
