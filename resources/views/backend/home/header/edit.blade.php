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
                        <strong>{{ __('Edit  Header') }}</strong>
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


                        <form action="{{ route('header.update', $header->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <h2 class="my-3 text-secondary text-center">Header Item One!</h2>

                            <div class="form-group mt-3">
                                <label for="title">Title</label>
                                <input type="text" name="title1" class="form-control mt-2" value="{{$header->title1}}" >
                            </div>

                            <div class="form-group mt-3">
                                <label for="short_title">Short title</label>
                                <input type="text" name="short_title1" class="form-control mt-2" value="{{$header->short_title1}}" >
                            </div>

                            <div class="form-group mt-3">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" name="thumbnail" class="form-control mt-2" value="{{$header->thumbnail}}">
                                <img src="{{ asset('uploads/home/header/' . $header->thumbnail) }}" class="img-fluid rounded mt-2" style="max-height: 400px">
                            </div>

                            <h2 class="my-3 text-secondary text-center">Header Item Two!</h2>

                            <div class="form-group mt-3">
                                <label for="title">Title</label>
                                <input type="text" name="title2" class="form-control mt-2" value="{{$header->title2}}" >
                            </div>

                            <div class="form-group mt-3">
                                <label for="short_title">Short title</label>
                                <input type="text" name="short_title2" class="form-control mt-2" value="{{$header->short_title2}}" >
                            </div>

                            <div class="form-group mt-3">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" name="thumbnail2" class="form-control mt-2" value="{{$header->thumbnail2}}">
                                <img src="{{ asset('uploads/home/header/' . $header->thumbnail2) }}" class="img-fluid rounded mt-2" style="max-height: 400px">
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
