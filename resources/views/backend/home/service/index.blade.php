@extends('backend.layout.master')

@section('title', 'Service')

@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center">
                        <strong>{{ __('Service') }}</strong></div>

                    <div class="card-body " style="overflow-y: hidden;">
                        <div class="text-end">
                            <a href="{{ route('service.create') }}" class="btn btn-primary mb-3">Create Service</a>
                            <a href="{{ route('serviceTitle') }}" class="btn btn-primary mb-3">Create Title & Short Description</a>
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
                        <table class="table" id="allClientTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Card Title</th>
                                    <th>Card Description</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($service as $card)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        {{-- <td>{{ $card->title }}</td>
                                        <td>{{ $card->short_title }}</td> --}}
                                        <td>
                                            @if($card->image)
                                                <img src="{{ asset('uploads/home/service/' . $card->image) }}" alt="Image" width="100">
                                            @else
                                                No Image available
                                            @endif
                                        </td>
                                        <td>{{ $card->card_title }}</td>
                                        <td>{{ $card->card_description }}</td>
                                        <td>
                                            <form action="{{ route('service.destroy',$card->id) }}" method="POST">
                                                {{-- <a class="btn btn-info" href="{{ route('service.show',$card->id) }}">Show</a> --}}
                                                <a class="btn btn-primary" href="{{ route('service.edit',$card->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
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
