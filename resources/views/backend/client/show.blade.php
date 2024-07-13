@extends('backend.layout.master')

@section('title', 'Show Clients')

@section('content')
    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <strong>{{ __('Client Details') }}</strong>
                    </div>
                    <div class="card-body">

                        <div class="d-flex justify-content-start mb-4">
                            <a href="{{ route('client.index') }}" class="btn btn-secondary">
                                <i class="link-icon" data-feather="chevron-left"></i> Back
                            </a>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Application Status :') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    @if ($clients->status == 1)
                                        Pending
                                    @elseif($clients->status == 2)
                                        Processing
                                    @elseif($clients->status == 3)
                                        Approved
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Commission Status :') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    @if ($clients->is_paid == 1)
                                        Un-paid
                                    @elseif($clients->is_paid == 2)
                                        Paid
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Commission Amount :') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $clients?->commision }}</p>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Amount Paid') }}</label>
                            <div class="col-md-6">

                                <p class="form-control-plaintext">{{ $clients->payment }}</p>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Agent Name :') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $clients->user->name }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Name :') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $clients->name }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __("Father's Name :") }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $clients->father_name }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __("Mother's Name :") }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $clients->mother_name }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Passport Number') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $clients->passport_number }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('NID Number') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $clients->nid_number }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Passport Photo') }}</label>
                            <div class="col-md-6">
                                <img src="{{ asset('uploads/client/passport/' . $clients->passport_picture) }}"
                                    class="img-fluid rounded">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('NID Photo') }}</label>
                            <div class="col-md-6">
                                <img src="{{ asset('uploads/client/nid/' . $clients->nid_picture) }}"
                                    class="img-fluid rounded">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Payment Slip') }}</label>
                            <div class="col-md-6">
                                <img src="{{ asset('uploads/client/payment_slip/' . $clients->payment_slip) }}"
                                    class="img-fluid rounded">
                            </div>
                        </div>

                        @if ($clients->payment_slip2)
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Payment Slip 2') }}</label>
                                <div class="col-md-6">
                                    <img src="{{ asset('uploads/client/payment_slip2/' . $clients->payment_slip2) }}"
                                        class="img-fluid rounded">
                                </div>
                            </div>
                        @endif

                        @if ($clients->payment_slip3)
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Payment Slip 3') }}</label>
                                <div class="col-md-6">
                                    <img src="{{ asset('uploads/client/payment_slip3/' . $clients->payment_slip3) }}"
                                        class="img-fluid rounded">
                                </div>
                            </div>
                        @endif
                        @if ($clients->payment_slip4)
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Payment Slip 4') }}</label>
                                <div class="col-md-6">
                                    <img src="{{ asset('uploads/client/payment_slip4/' . $clients->payment_slip4) }}"
                                        class="img-fluid rounded">
                                </div>
                            </div>
                        @endif
                        @if ($clients->payment_slip5)
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Payment Slip 5') }}</label>
                                <div class="col-md-6">
                                    <img src="{{ asset('uploads/client/payment_slip5/' . $clients->payment_slip5) }}"
                                        class="img-fluid rounded">
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
