@extends('backend.layout.master')

@section('title', 'Change Client')

@section('content')

    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center">
                        <strong>{{ __('Blogs') }}</strong>
                    </div>

                    <div class="card-body " style="overflow-y: hidden;">
                        <div class="row">
                            <div class="col">
                                <div class="text-end">
                                    <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Create New Blog</a>
                                </div>
                            </div>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-striped " id="allClientTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Tag</th>
                                    <th>Descrition</th>
                                    <th>Thumbnail</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($blog->title, 50) }}</td>
                                        <td>{{ $blog->category?->name }}</td>
                                        <td>{{ $blog->blog_tag }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($blog->description, 50) }}</td>
                                        <td>
                                            @if($blog->thumbnail)
                                                <img src="{{ asset('uploads/blog/' . $blog->thumbnail) }}" alt="Thumbnail" width="100">
                                            @else
                                                No thumbnail available
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('blog.show', $blog->id) }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('blog.edit', $blog->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>


    @push('script')
        <script>
            new DataTable('#allClientTable', {
                responsive: true
            });
        </script>
    @endpush

@endsection
