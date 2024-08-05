@extends('layout.backend.main')

@section('title', 'User')

@section('content')
    @include('pages.backend.partials.notif')

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                @if (Auth::user()->role->name == 'superadmin')
                    <a href="{{ route('user.create') }}"
                        class="btn btn-info btn-min-width mr-1 mb-1 waves-effect waves-light">Create Users</a>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Users</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="col-lg-12"><b>No</b></div>
                            <div class="col-lg-12">{{ $user->id }}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12"><b>Name</b></div>
                            <div class="col-lg-12">{{ $user->name }}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12"><b>Email</b></div>
                            <div class="col-lg-12">{{ $user->email }}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12"><b>Role</b></div>
                            <div class="col-lg-12">
                                @if ($user->role_id != null)
                                    {{ \Spatie\Permission\Models\Role::where('id', $user->role_id)->first()->name }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <a href="{{ route('user.edit', $user->id) }}"
                                    class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                    Edit
                                </a>
                                <a href="{{ route('user.editPassword', $user->id) }}"
                                    class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                    Edit Password
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table row borders end -->
    </div>
@endsection
