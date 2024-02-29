@extends('layout.backend.main')

@section('title', 'Product & Service')

@section('content')
    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success alert-dismissible bg-success mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Well done!</strong> You successfully read this <a href="#" class="alert-link">important</a> alert message.
                </div>
                <div class="alert alert-danger alert-dismissible bg-danger mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Oh snap!</strong> Change a <a href="#" class="alert-link">few things up</a> and submit again.
                    </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Defense Page</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <a href="{{ route('product.create') }}" class="btn btn-warning btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">create new at defense</a>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Defense website at eti</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Soldier Supplies</td>
                                        <td>img<img src="{{ asset('frontend/img/Logo_ETI_New.png') }}" alt="" class="img-fluid" width="20%"></td>
                                        <td><a href="{{ route('product.edit') }}" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">edit</a>
                                            <a href="#" class="btn btn-danger btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">delete</a>
                                            <a href="{{ route('category.index') }}" class="btn btn-info btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">show detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table row borders end -->
    </div>

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Commercial Page</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <a href="{{ route('product.create') }}" class="btn btn-warning btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">create new at commercial</a>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Commercial website at eti</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Internet of things</td>
                                        <td>img<img src="{{ asset('frontend/img/Logo_ETI_New.png') }}" alt="" class="img-fluid" width="20%"></td>
                                        <td><a href="{{ route('product.edit') }}" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">edit</a>
                                            <a href="#" class="btn btn-danger btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">delete</a>
                                            <a href="{{ route('category.index') }}" class="btn btn-info btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">show detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table row borders end -->
    </div>
@endsection