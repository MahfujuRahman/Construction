@extends('backend.layout.master')

@section('title', 'Contact')

@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center">
                        <strong>{{ __('Contact Details') }}</strong></div>

                        <div class="card">
                            <div class="card-header">
                                <h2>{{ $contact->name }}</h2>
                            </div>
                            <div class="card-body contact-body">
                                <div class="mb-3">
                                    <p><strong>Email:</strong></p>
                                    <p class="bg-light p-2 rounded">{{ $contact->email }}</p>
                                </div>
                                <div class="mb-3">
                                    <p><strong>Phone:</strong></p>
                                    <p class="bg-light p-2 rounded">{{ $contact->phone }}</p>
                                </div>
                                <div class="mb-3">
                                    <p><strong>Subject:</strong></p>
                                    <p class="bg-light p-2 rounded">{{ $contact->subject }}</p>
                                </div>
                                <div class="mb-3">
                                    <p><strong>Message:</strong></p>
                                    <p class="bg-light p-2 rounded">{{ $contact->message }}</p>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to Contacts</a>
                            </div>
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
