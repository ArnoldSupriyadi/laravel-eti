@extends('layout.backend.main')

@section('title', 'User')

@section('content')
    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <a href="{{ route('user.create') }}" class="btn btn-info btn-min-width mr-1 mb-1 waves-effect waves-light">Create Users</a>
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
                        <h4 class="card-title">Data Users</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Data users at eti</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                        <td><a href="{{ route('user.edit') }}" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                        <a type="button" class="btn btn-danger square btn-min-width mr-1 mb-1 waves-effect waves-light white">Delete</a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                        <td><a href="{{ route('user.edit') }}" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                        <a type="button" class="btn btn-danger square btn-min-width mr-1 mb-1 waves-effect waves-light white">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>July</td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                        <td><a href="{{ route('user.edit') }}" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                        <a type="button" class="btn btn-danger square btn-min-width mr-1 mb-1 waves-effect waves-light white">Delete</a></td>
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