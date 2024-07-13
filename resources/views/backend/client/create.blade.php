@extends('backend.layout.master')

@section('title', 'Create Client')

@section('content')

    <div class="page-content">

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-primary display-6 text-center"><strong>{{ __('Create Client Details') }}</strong>
                        </div>

                        <div class="card-body">

                            <div class="col-md-12 text-start">
                                <a href="{{ route('client.index') }}" class="btn btn-secondary">
                                    <i class="link-icon" data-feather="chevron-left"></i>
                                </a>
                            </div>

                            <form method="POST" action="{{ route('client.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
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
                                            value="{{ old('father_name') }}" required autocomplete="father_name" autofocus>
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
                                            value="{{ old('mother_name') }}" required autocomplete="mother_name" autofocus>
                                        @error('mother_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="nid_number"
                                        class="col-md-4 col-form-label text-md-end">{{ __("NID Number") }}</label>
                                    <div class="col-md-6">
                                        <input id="nid_number" type="text"
                                            class="form-control @error('nid_number') is-invalid @enderror" name="nid_number"
                                            value="{{ old('nid_number') }}" required autocomplete="nid_number" autofocus>
                                        @error('nid_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="passport_number"
                                        class="col-md-4 col-form-label text-md-end">{{ __("Passport Number") }}</label>
                                    <div class="col-md-6">
                                        <input id="passport_number" type="text"
                                            class="form-control @error('passport_number') is-invalid @enderror" name="passport_number"
                                            value="{{ old('passport_number') }}" required autocomplete="passport_number" autofocus>
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
                                            class="form-control @error('nid_picture') is-invalid @enderror" name="nid_picture" required autocomplete="nid_picture" autofocus>
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
                                            class="form-control @error('passport_picture') is-invalid @enderror" name="passport_picture" required autocomplete="passport_number" autofocus>
                                        @error('passport_picture')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="payment"
                                        class="col-md-4 col-form-label text-md-end">{{ __("Amount Paid") }}</label>
                                    <div class="col-md-6">
                                        <input id="payment" type="number"
                                            class="form-control @error('payment') is-invalid @enderror" name="payment"
                                            value="{{ old('payment') }}" required autocomplete="payment" autofocus>
                                        @error('payment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="payment_slip"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Payment Slip Picture') }}</label>
                                    <div class="col-md-6">
                                        <input id="payment_slip" type="file"
                                            class="form-control @error('payment_slip') is-invalid @enderror" name="payment_slip" required autocomplete="payment_slip" autofocus>
                                        @error('payment_slip')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit Client Details') }}
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
