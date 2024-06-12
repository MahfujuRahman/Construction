@extends('backend.layout.master')

@section('title', 'Users')

@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center"><strong>{{ __('All Users Table') }}</strong>
                    </div>

                    <div class="card-body " style="overflow-y: hidden;">
                        <div class="row">
                            <div class="col">
                                <!-- Search form -->
                                {{-- <form action="{{ route('admin.index') }}" method="GET" class="form-inline" id="searchForm">
                                        <div class="input-group mb-2 text-end">
                                            <input type="text" name="search" id="searchInput"  class="form-control" placeholder="Search users" value="{{ request()->input('search') }}">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="submit">Search</button>
                                            </div>
                                        </div>
                                    </form> --}}
                            </div>
                            <div class="col">
                                <div class="text-end">
                                    <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Create New User</a>
                                </div>
                            </div>
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


                        <table class="table table-striped" id="allUserTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Picture</th>
                                    <th>Address</th>
                                    <th>Type</th>
                                    <th>status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td><img src="{{ asset('uploads/pictures/' . $user->picture) }}" width="50">
                                        </td>
                                        <td>{{ $user->address }}</td>
                                        <td>
                                            @if ($user->type == 0)
                                                Agent
                                            @elseif ($user->type == 1)
                                                Admin
                                            @endif
                                        </td>
                                        <td>
                                            @if ($user->is_approved == 1)
                                                Pending
                                            @elseif ($user->is_approved == 2)
                                                Approved
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.show', $user->id) }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('admin.edit', $user->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('admin.destroy', $user->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')"
                                                    id="delete-button">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <!-- Pagination links -->
                        <div class="d-flex justify-content-center">
                            {{ $users->links() }}
                        </div> --}}
                </div>
            </div>
        </div>

    </div>

    @push('script')
        <script>
            new DataTable('#allUserTable', {
                responsive: true
            });
        </script>
    @endpush

@endsection
