@extends('backend.layout.master')

@section('title', 'Change Client')

@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center">
                        <strong>{{ __('View Blogs') }}</strong>
                    </div>

                    <div class="card-body " style="overflow-y: hidden;">
                        <div class="row">
                            <div class="col">
                                <div class="text-end">
                                    <a href="{{ route('blog.index') }}" class="btn btn-primary">Back to Blog List</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <h1>{{ $blog->title }}</h1>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <img src="{{ asset('uploads/blog/' . $blog->thumbnail) }}" alt="{{ $blog->title }}"
                                class="img-fluid rounded ">
                        </div>
                        <div class="mb-3">
                            <h5>Category: {{ $blog->category->name }}</h5>
                            <h5>Tag: {{ $blog->blog_tag }}</h5>
                        </div>
                        <div class="mb-3">
                            <p>{{ $blog->description }}</p>
                        </div>

                    </div>


                </div>

            </div>

        </div>
    </div>

@endsection
