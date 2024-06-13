@extends('backend.layout.master')

@section('title', 'Partner')

@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center">
                        <strong>{{ __('Partner') }}</strong></div>

                    <div class="card-body " style="overflow-y: hidden;">

                        <div class="text-end">
                            <a href="{{ route('partner.create') }}" class="btn btn-primary mb-3">Create Partner</a>
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
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($partner as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('uploads/home/partner/' . $item->image) }}" alt="Thumbnail">
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-3">
                                                <a class="btn btn-warning" href="{{ route('partner.edit', $item->id) }}">Edit</a>
                                                <form action="{{ route('partner.destroy', $item->id) }}" method="POST">
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
