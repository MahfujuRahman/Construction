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
                        <strong>{{ __('Create Blogs') }}</strong>
                    </div>

                    <div class="card-body " style="overflow-y: hidden;">
                        <div class="row">
                            <div class="col">
                                <div class="text-end">
                                    <a href="{{ route('blog.index') }}" class="btn btn-primary">Back to Blog List</a>
                                </div>
                            </div>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif


                        <form action="{{ \Illuminate\Support\Facades\Route::has('blog.store') ? route('blog.store') : '' }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <div class="input-group">
                                    <select name="category_id" id="category_id" class="form-control mt-2" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append mt-2">
                                        <button type="button" class="btn btn-secondary" data-toggle="modal"
                                            data-target="#addCategoryModal">
                                            Add Category
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control mt-2" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" name="thumbnail" class="form-control mt-2" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="blog_tag">Blog Tag</label>
                                <input type="text" name="blog_tag" class="form-control mt-2" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="description">Description</label>
                                <textarea name="description" id="summernote" class="form-control mt-2" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-3">Submit</button>
                            </div>
                        </form>

                        <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog"
                            aria-labelledby="addCategoryModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('blog_categories.store') }}" method="POST" id="addCategoryForm">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="manageCategoryModalLabel">Manage Categories</h5>
                                            <div class="row">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('blog_categories.store') }}" method="POST"
                                                id="addCategoryForm">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="category_name">Add New Category</label>
                                                    <input type="text" name="name" id="category_name"
                                                        class="form-control mb-2">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save Category</button>
                                            </form>
                                            <hr>
                                            <h5>Existing Categories</h5>
                                            <ul id="categoryList" class="list-group mt-3">
                                                @foreach ($categories as $category)
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center">
                                                        {{ $category->name }}
                                                        <form action="{{ route('blog_categories.destroy', $category->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection

@push('script')
    <script src="{{ asset('assets/js/modal/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modal/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('assets/js/modal/popper.min.js') }}"></script>



@endpush
