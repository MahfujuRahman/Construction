@extends('backend.layout.master')

@section('title', 'All Client')

@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center">
                        <strong>{{ __('All Clients Table') }}</strong></div>

                    <div class="card-body " style="overflow-y: hidden;">
                        <div class="row">
                            <div class="col">
                                <div class="text-end">
                                    <a href="{{ route('client.create') }}" class="btn btn-primary mb-3">Add Client
                                        Details</a>
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


                        <table class="table table-striped" id="allClientTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    {{-- <th>Agent Name</th> --}}
                                    <th>Name</th>
                                    {{-- <th>Father Name</th>
                                        <th>Mother Name</th> --}}
                                    <th>NID Number</th>
                                    <th>Passport Number</th>
                                    <th>Passport Photo</th>
                                    <th>NID Photo</th>
                                    <th>Payment Photo</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ ($clients->currentPage() - 1) * $clients->perPage() + $loop->index + 1 }}</td>
                                        {{-- <td>{{ $client->user?->type == 1 ? 'admin' : 'agent'}}</td> --}}
                                        {{-- <td>{{ $client->user?->name }}</td> --}}
                                        <td>{{ $client->name }}</td>
                                        {{-- <td>{{ $client->father_name }}</td>
                                            <td>{{ $client->mother_name }}</td> --}}
                                        <td>{{ $client->nid_number }}</td>
                                        <td>{{ $client->passport_number }}</td>
                                        <td><img src="{{ asset('uploads/client/passport/' . $client->passport_picture) }}"
                                                width="50"></td>
                                        <td><img src="{{ asset('uploads/client/nid/' . $client->nid_picture) }}"
                                                width="50"></td>
                                        <td><img src="{{ asset('uploads/client/payment_slip/' . $client->payment_slip) }}"
                                                width="50"></td>
                                        <td>
                                            @if ($client->status == 1)
                                                Pending
                                            @elseif ($client->status == 2)
                                                Processing
                                            @elseif ($client->status == 3)
                                                Approve
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('client.show', $client->id) }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('client.edit', $client->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('client.destroy', $client->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
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
            new DataTable('#allClientTable', {
                responsive: true
            });
        </script>
    @endpush

@endsection
