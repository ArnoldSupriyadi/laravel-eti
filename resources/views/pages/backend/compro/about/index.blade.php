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
                                    <tr>
                                        <td>1</td>
                                        <td>about us</td>
                                        <td><a href="{{ route('logo.edit') }}"
                                                class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">EDIT</a>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Four Technologies Indonesia</td>
                                        <td><a href="{{ route('logo.edit') }}"
                                                class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">EDIT</a>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            established in 2014, we are an international technology company engaged in
                                            various programs, especially in the field of defense and security. We develop
                                            and supply products and systems for defense, security and commercial
                                            applications. defense, security and also apply to commercial needs.
                                        </td>
                                        <td><a href="{{ route('logo.edit') }}"
                                                class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">EDIT</a>
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
                                        <td class="text-center"><img src="{{ asset('frontend/img/Logo_ETI_New.png') }}"
                                                alt="" class="img-fluid" width="30%"></td>
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
                                    <tr>
                                        <td>1</td>
                                        <td>CUSTOMER FOCUSED</td>
                                        <td>We adapt to our customers' needs and respond to them with affordable,
                                            operationally proven, comprehensive solutions that offer qualitative performance
                                            advantages.</td>
                                        <td><a href="#"
                                                class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>EMPLOYEE EXCELLENCE</td>
                                        <td>Great people are key to achieving our vision. We employ a workforce that is
                                            motivated, team-minded, and create a dynamic atmosphere where employees can
                                            thrive and reach their highest potential. their highest potential.</td>
                                        <td><a href="#"
                                                class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>INNOVATION AND CREATIVITY</td>
                                        <td>We foster an environment that nurtures innovation, creativity and leardership.
                                        </td>
                                        <td><a href="#"
                                                class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>TEAMWORK AND SYNERGY</td>
                                        <td>Personal interactions and mutual trust form the basis for achieving our goals.
                                            In our complex world, cooperation and teamwork lead to synergy.</td>
                                        <td><a href="#"
                                                class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>RESPONSIBILITY AND ACCOUNTABILITY</td>
                                        <td>We are committed to the success of our company through personal responsibility
                                            and leadership.</td>
                                        <td><a href="#"
                                                class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>HONESTY AND ETHICS</td>
                                        <td>Honesty, respect and integrity are the key principles that guide us.</td>
                                        <td><a href="#"
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
                        <h3 class="card-title">Work Partners</h3>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <a href="{{ route('user.create') }}"
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
                                            <td><img src="{{ asset('frontend/img/Logo_ETI_New.png') }}" alt=""
                                                    class="img-fluid" width="20%"></td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="{{ route('compro.edit', $client->id) }}"
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
