@extends('backend.layout.master')

@section('title', 'Change Client')

@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center">
                        <strong>{{ __('Header') }}</strong></div>

                    <div class="card-body " style="overflow-y: hidden;">
                        <div class="text-end">
                            <a href="{{ route('header.create') }}" class="btn btn-primary mb-3">Create Header</a>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <table class="table" id="Header">
                            <thead>
                                <tr >
                                    <th>Title 1</th>
                                    <th>Short Title 1</th>
                                    <th>Thumbnail 1</th>
                                    <th>Title 2</th>
                                    <th>Short Title 2</th>
                                    <th>Thumbnail 3</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($header as $item)
                                    <tr>
                                        <td>{{ $item->title1 }}</td>
                                        <td>{{ Str::limit($item->short_title1, 25) }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/home/header/' . $item->thumbnail) }}" alt="Thumbnail" width="100px" >
                                        </td>

                                        <td>{{ $item->title2 }}</td>
                                        <td>{{ Str::limit($item->short_title2, 25) }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/home/header/' . $item->thumbnail2) }}" alt="Thumbnail" width="100px" >
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-3">
                                                <a class="btn btn-warning" href="{{ route('header.edit', $item->id) }}">Edit</a>
                                                <form action="{{ route('header.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
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
            new DataTable('#Header', {
                responsive: true
            });
        </script>
    @endpush

@endsection
