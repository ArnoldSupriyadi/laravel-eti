@extends('layout.backend.main')

@section('title', 'Gallery')

@section('content')
    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <a href="{{ route('gallery.create') }}" class="btn btn-info btn-min-width mr-1 mb-1 waves-effect waves-light">Add Image</a>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Gallery</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Gallery website at eti</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>commercial</td>
                                        <td>img<img src="{{ asset('frontend/img/Logo_ETI_New.png') }}" alt="" class="img-fluid" width="20%"></td>
                                        <td><a href="{{ route('gallery.edit') }}" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                           </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>defense</td>
                                        <td>img<img src="{{ asset('frontend/img/Logo_ETI_New.png') }}" alt="" class="img-fluid" width="20%"></td>
                                        <td><a href="{{ route('gallery.edit') }}" class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                            </td>
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