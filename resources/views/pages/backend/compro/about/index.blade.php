@extends('layout.backend.main')

@section('title', 'About')

@section('content')
    @include('pages.backend.partials.notif')

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">About website at eti</h3>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Section Title</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($abouts as $about)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $about->name }}</td>
                                            <td>{{ $about->description }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="{{ route('about.edit', $about->id) }}"
                                                        class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                                        Edit
                                                    </a>
                                                </div>
                                            </td>
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

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">About image</h3>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">

                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text"></p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="{{ asset('frontend/img/Logo_ETI_New.png') }}" alt=""
                                                class="img-fluid" width="30%"></td>
                                        <td>
                                            {{-- <a href="#" --}}
                                            <a href="#"
                                                class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
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

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Vision and Mission</h3>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">

                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text"></p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($visionMissions as $visionMission)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $visionMission->name }}</td>
                                            <td>{{ $visionMission->description }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="{{ route('compro.edit', $visionMission->id) }}"
                                                        class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                                        Edit
                                                    </a>
                                                </div>
                                            </td>
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

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Company Core Value</h3>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">

                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text"></p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coreValues as $coreValue)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $coreValue->name }}</td>
                                            <td>{{ $coreValue->description }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="{{ route('coreValue.edit', $coreValue->id) }}"
                                                        class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                                        Edit
                                                    </a>
                                                </div>
                                            </td>
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

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Work Partners</h3>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <a href="{{ route('client.create') }}"
                                class="btn btn-info btn-min-width mr-1 mb-1 waves-effect waves-light">Add Partner</a>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Leading the way as a security solution provider</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $client->name }}</td>
                                            <td>{{ $client->description }}</td>
                                            <td>
                                                <img src="{{ asset('frontend/img/clients/' . $client->logo) }}"
                                                    alt="" class="img-fluid" width="20%">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="{{ route('client.edit', $client->id) }}"
                                                        class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('client.editLogo', $client->id) }}"
                                                        class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                                        Edit Logo
                                                    </a>
                                                </div>
                                            </td>
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

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product Specialization</h3>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <a href="{{ route('user.create') }}"
                                class="btn btn-info btn-min-width mr-1 mb-1 waves-effect waves-light">Add Product
                                Specialization</a>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text"></p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productCategories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td><img src="{{ asset('frontend/img/Logo_ETI_New.png') }}" alt=""
                                                    class="img-fluid" width="20%"></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="{{ route('compro.edit', $category->id) }}"
                                                        class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                                        Edit
                                                    </a>
                                                </div>
                                            </td>
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
