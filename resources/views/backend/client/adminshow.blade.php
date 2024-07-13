@extends('backend.layout.master')

@section('title', 'Show & Edit Clients')

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
                            <a href="{{ route('client.adminindex') }}" class="btn btn-secondary">
                                <i class="link-icon" data-feather="chevron-left"></i> Back
                            </a>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('client.adminupdate', $clients->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-md-4 col-form-label text-md-end">{{ __('Status :') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="status">
                                        <option value="1" {{ $clients->status == 1 ? 'selected' : '' }}>Pending
                                        </option>
                                        <option value="2" {{ $clients->status == 2 ? 'selected' : '' }}>Processing
                                        </option>
                                        <option value="3" {{ $clients->status == 3 ? 'selected' : '' }}>Approved
                                        </option>
                                    </select>
                                </div>
                            </div>

                            @if ($clients->status == 3)
                                <div class="row mb-3">
                                    <label
                                        class="col-md-4 col-form-label text-md-end">{{ __('Commission Status :') }}</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="is_paid">
                                            <option value="1" {{ $clients->is_paid == 1 ? 'selected' : '' }}>Un-paid
                                            </option>
                                            <option value="2" {{ $clients->is_paid == 2 ? 'selected' : '' }}>Paid
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            
                            <div class="row mb-3">
                                <label
                                    class="col-md-4 col-form-label text-md-end">{{ __('Commission Percentage :') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="commision"
                                        value="{{ old('commision', ($clients?->commision / $clients->payment) * 100) }}">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                </div>
                            </div>
                        </form>

                        <div class="row mb-3">
                            <label
                                class="col-md-4 col-form-label text-md-end">{{ __('After Commission Amount :') }}</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $clients?->commision }} $</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Total Amount :') }}</label>
                            <div class="col-md-6">

                                <p class="form-control-plaintext">{{ $clients->payment }} $</p>

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
