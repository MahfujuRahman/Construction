@extends('backend.layout.master')

@section('title', 'TravelAgency')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo1/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
@endpush

@section('content')

    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="card mb-3">

                <div class="d-flex justify-content-center align-items-center flex-wrap grid-margin pt-5 pb-2">
                    <h1 class="text-primary">Welcome To Travel Agency</h1>
                </div>
                @if (auth()->user()->type == 0 && auth()->user()->is_approved == 1)
                    <div class="d-flex justify-content-center align-items-center flex-wrap grid-margin pb-5">
                        <h4 class="text-primary">Waiting For the Admin Approval. After Approval You can access to the Agent
                            panel.</h1>
                    </div>
                @endif

                @if (auth()->user()->type == 0 && auth()->user()->is_approved == 2)
                    <div class="d-flex justify-content-center align-items-center flex-wrap grid-margin pb-5">
                        <h4 class="text-primary">Now You can access to the Agent panel.</h1>
                    </div>
                @endif
            </div>
        </div>

        {{-- Admin Panel --}}
        @if (auth()->user()->type == 1 && auth()->user()->is_approved == 2)
        <div class="row">
            <div class="card mb-3">
                <h2 class="text-primary mt-3 text-center">Admin Panel</h2>
                <hr>
                <div class="d-flex justify-content-start align-items-center flex-wrap grid-margin">

                    <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cart-arrow-right float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                        Total Client Count </h6>
                                    <h2 class="mb-4 text-white">{{ App\Models\ClientDetails::count() }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cart-arrow-right float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                        Total Agent Count</h6>
                                    <h2 class="mb-4 text-white"> {{ $totalAgent }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cart-arrow-right float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                        Pending Agent Count</h6>
                                    <h2 class="mb-4 text-white"> {{ $pendingUser }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cart-arrow-right float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                        Approve Agent Count</h6>
                                    <h2 class="mb-4 text-white"> {{ $approvedUser }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cart-arrow-right float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                        Total Ammount Received </h6>
                                    <h2 class="mb-4 text-white">{{ $totalReceivedPayment }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cart-arrow-right float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                        Total Commision Amount</h6>
                                    <h2 class="mb-4 text-white">{{ $TotalCommisionAmount }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cart-arrow-right float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                        Pending Commision Amount</h6>
                                    <h2 class="mb-4 text-white">{{ $pendingAmountAll }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cart-arrow-right float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                        Approved Commision Amount</h6>
                                    <h2 class="mb-4 text-white">{{ $approveAmountAll }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endif

        {{-- Agent Panel --}}
        @if (auth()->user()->type == 0 && auth()->user()->is_approved == 2)
            <div class="row">
                <div class="card mb-3">
                    <h2 class="text-primary mt-3 text-center">Agent Panel</h2>
                    <hr>
                    <div class="d-flex justify-content-start align-items-center flex-wrap grid-margin">
                        <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cart-arrow-right float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                            Total Client Count By Agent</h6>
                                        <h2 class="mb-4 text-white">
                                            {{ App\Models\ClientDetails::where('user_id', auth()->user()->id)->count() }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cart-arrow-right float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                            Total Amount Paid </h6>
                                        <h2 class="mb-4 text-white">{{ $clientPayment }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cart-arrow-right float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                            Total Commission</h6>
                                        <h2 class="mb-4 text-white">{{ $clientCommisionTotal }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cart-arrow-right float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                            Total Commission Received </h6>
                                        <h2 class="mb-4 text-white">{{ $clientCommisionRecieved }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 col-12 p-3 ">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cart-arrow-right float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">
                                            Total Commission Pending </h6>
                                        <h2 class="mb-4 text-white">{{ $clientCommisionPending }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection

@push('script')
    {{-- <script src="{{ asset('assets/vendors/core/core.js') }}"></script> --}}
    <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.pie.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.resize.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.categories.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/template.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquery.flot-light.js') }}"></script>
@endpush
