@extends('layout.backend.main')

@section('title', 'Dashboard')

@section('content')
    @include('pages.backend.partials.notif')

    <div id="crypto-stats-3" class="row">
        <div class="col-xl-4 col-12">
            <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-2">
                                <i class="cc XRP info font-large-2" title="BTC"></i>
                            </div>
                            <div class="col-5 pl-2">
                                <h4>Work Partners</h4>
                                {{-- <h6 class="text-muted">Bitcoin</h6> --}}
                            </div>
                            <div class="col-5 text-right">
                                <h4>{{ $clients }}</h4>
                                {{-- <h6 class="success darken-4">31% <i class="la la-arrow-up"></i></h6> --}}
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-2">
                                <i class="cc XRP info font-large-2" title="ETH"></i>
                            </div>
                            <div class="col-5 pl-2">
                                <h4>Product</h4>
                                {{-- <h6 class="text-muted">Ethereum</h6> --}}
                            </div>
                            <div class="col-5 text-right">
                                <h4>{{ $categories }}</h4>
                                {{-- <h6 class="success darken-4">12% <i class="la la-arrow-up"></i></h6> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-2">
                                <i class="cc XRP info font-large-2" title="XRP"></i>
                            </div>
                            <div class="col-5 pl-2">
                                <h4>Product Specialization</h4>
                                {{-- <h6 class="text-muted">Balance</h6> --}}
                            </div>
                            <div class="col-5 text-right">
                                <h4>{{ $products }}</h4>
                                {{-- <h6 class="danger">20% <i class="la la-arrow-down"></i></h6> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="card crypto-card-3 pull-up">
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-2">
                                <i class="cc XRP info font-large-2" title="XRP"></i>
                            </div>
                            <div class="col-5 pl-2">
                                <h4>Gallery</h4>
                                {{-- <h6 class="text-muted">Balance</h6> --}}
                            </div>
                            <div class="col-5 text-right">
                                <h4>{{ $galleries }}</h4>
                                {{-- <h6 class="danger">20% <i class="la la-arrow-down"></i></h6> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
