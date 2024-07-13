@extends('backend.layout.master')

@section('title', 'Edit Client')

@section('content')

    <div class="page-content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary display-6 text-center">
                        <strong>{{ __('Edit Client Details') }}</strong>
                    </div>

                    <div class="card-body">

                        <div class="col-md-12 text-start">
                            <a href="{{ route('client.index') }}" class="btn btn-secondary">
                                <i class="link-icon" data-feather="chevron-left"></i>
                            </a>
                        </div>

                        <form method="POST" action="{{ route('client.update', $clients->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name', $clients->name) }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="father_name"
                                    class="col-md-4 col-form-label text-md-end">{{ __("Father's Name") }}</label>
                                <div class="col-md-6">
                                    <input id="father_name" type="text"
                                        class="form-control @error('father_name') is-invalid @enderror" name="father_name"
                                        value="{{ old('father_name', $clients->father_name) }}" required
                                        autocomplete="father_name" autofocus>
                                    @error('father_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="mother_name"
                                    class="col-md-4 col-form-label text-md-end">{{ __("Mother's Name") }}</label>
                                <div class="col-md-6">
                                    <input id="mother_name" type="text"
                                        class="form-control @error('mother_name') is-invalid @enderror" name="mother_name"
                                        value="{{ old('mother_name', $clients->mother_name) }}" required
                                        autocomplete="mother_name" autofocus>
                                    @error('mother_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nid_number"
                                    class="col-md-4 col-form-label text-md-end">{{ __('NID Number') }}</label>
                                <div class="col-md-6">
                                    <input id="nid_number" type="text"
                                        class="form-control @error('nid_number') is-invalid @enderror" name="nid_number"
                                        value="{{ old('nid_number', $clients->nid_number) }}" required
                                        autocomplete="nid_number" autofocus>
                                    @error('nid_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="passport_number"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Passport Number') }}</label>
                                <div class="col-md-6">
                                    <input id="passport_number" type="text"
                                        class="form-control @error('passport_number') is-invalid @enderror"
                                        name="passport_number"
                                        value="{{ old('passport_number', $clients->passport_number) }}" required
                                        autocomplete="passport_number" autofocus>
                                    @error('passport_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="nid_picture"
                                    class="col-md-4 col-form-label text-md-end">{{ __('NID_picture') }}</label>
                                <div class="col-md-6">
                                    <input id="nid_picture" type="file"
                                        class="form-control @error('nid_picture') is-invalid @enderror" name="nid_picture"
                                        autocomplete="nid_picture" autofocus>
                                    <img src="{{ asset('uploads/client/nid/' . $clients->nid_picture) }}"
                                        class="img-fluid rounded">
                                    @error('nid_picture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="passport_picture"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Passport_picture') }}</label>
                                <div class="col-md-6">
                                    <input id="passport_picture" type="file"
                                        class="form-control @error('passport_picture') is-invalid @enderror"
                                        name="passport_picture" autocomplete="passport_picture" autofocus>
                                    <img src="{{ asset('uploads/client/passport/' . $clients->passport_picture) }}"
                                        class="img-fluid rounded">
                                    @error('passport_picture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            @if (!$clients->payment_slip5)
                                <div class="row mb-3">
                                    <label for="payment"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Add Amount') }}</label>
                                    <div class="col-md-6">
                                        <input id="payment" type="number"
                                            class="form-control @error('payment') is-invalid @enderror" name="payment"
                                            required autocomplete="payment" autofocus>
                                        @error('payment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif

                            @if (!$clients->payment_slip)
                                <div class="row mb-3">
                                    <label for="payment_slip"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Payment Slip 1') }}</label>
                                    <div class="col-md-6">
                                        <input id="payment_slip" type="file"
                                            class="form-control @error('payment_slip') is-invalid @enderror"
                                            name="payment_slip" autocomplete="payment_slip" autofocus>
                                        <img src="{{ asset('uploads/client/payment_slip/' . $clients->payment_slip) }}"
                                            class="img-fluid rounded">
                                        @error('payment_slip')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif

                            @if (!$clients->payment_slip2 && $clients->payment_slip)
                                <div class="row mb-3">
                                    <label for="payment_slip2"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Payment Slip 2') }}</label>
                                    <div class="col-md-6">
                                        <input id="payment_slip2" type="file"
                                            class="form-control @error('payment_slip2') is-invalid @enderror"
                                            name="payment_slip2" autocomplete="payment_slip2" autofocus>
                                        <img src="{{ asset('uploads/client/payment_slip2/' . $clients->payment_slip2) }}"
                                            class="img-fluid rounded">
                                        @error('payment_slip2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif

                            @if (!$clients->payment_slip3 && $clients->payment_slip2)
                                <div class="row mb-3">
                                    <label for="payment_slip3"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Payment Slip 3') }}</label>
                                    <div class="col-md-6">
                                        <input id="payment_slip3" type="file"
                                            class="form-control @error('payment_slip3') is-invalid @enderror"
                                            name="payment_slip3" autocomplete="payment_slip3" autofocus>
                                        <img src="{{ asset('uploads/client/payment_slip3/' . $clients->payment_slip3) }}"
                                            class="img-fluid rounded">
                                        @error('payment_slip3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif

                            @if (!$clients->payment_slip4 && $clients->payment_slip3)
                                <div class="row mb-3">
                                    <label for="payment_slip4"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Payment Slip 4') }}</label>
                                    <div class="col-md-6">
                                        <input id="payment_slip4" type="file"
                                            class="form-control @error('payment_slip4') is-invalid @enderror"
                                            name="payment_slip4" autocomplete="payment_slip4" autofocus>
                                        <img src="{{ asset('uploads/client/payment_slip4/' . $clients->payment_slip4) }}"
                                            class="img-fluid rounded">
                                        @error('payment_slip4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif

                            @if (!$clients->payment_slip5 && $clients->payment_slip4)
                                <div class="row mb-3">
                                    <label for="payment_slip5"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Payment Slip 5') }}</label>
                                    <div class="col-md-6">
                                        <input id="payment_slip5" type="file"
                                            class="form-control @error('payment_slip5') is-invalid @enderror"
                                            name="payment_slip5" autocomplete="payment_slip5" autofocus>
                                        <img src="{{ asset('uploads/client/payment_slip5/' . $clients->payment_slip5) }}"
                                            class="img-fluid rounded">
                                        @error('payment_slip5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif

                            <div class="row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Client Details') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
