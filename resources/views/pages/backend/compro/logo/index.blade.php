@extends('layout.backend.main')

@section('title', 'Logo')

@section('content')
    @include('pages.backend.partials.notif')

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Logo</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">

                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Logo website at eti</p>
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
                                    @foreach ($logos as $logo)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $logo->name }}</td>
                                            <td>
                                                <img src="{{ asset('frontend/img/logo/' . $logo->description) }}"
                                                    alt="" class="img-fluid" width="20%">
                                            </td>
                                            <td><a href="{{ route('logo.edit', $logo->id) }}"
                                                    class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Change
                                                    Logo</a></td>
                                        </tr>
                                    @endforeach
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
