@extends('layout.backend.main')

@section('title', 'Create User')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4
                            class="card-title"
                            id="basic-layout-colored-form-control"
                        >
                            User Profile Add
                        </h4>
                        <a class="heading-elements-toggle"
                            ><i
                                class="la la-ellipsis-v font-medium-3"
                            ></i
                        ></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>
                                    New user insert data
                                </p>
                            </div>

                            <form class="form">
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i
                                            class="la la-eye"
                                        ></i>
                                        About User
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div
                                                class="form-group"
                                            >
                                                <label
                                                    for="userinput1"
                                                    >Name</label
                                                >
                                                <input
                                                    type="text"
                                                    id="userinput1"
                                                    class="form-control border-primary"
                                                    placeholder="Name"
                                                    name="name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div
                                                class="form-group"
                                            >
                                                <label
                                                    for="userinput2"
                                                    >Role</label
                                                >
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Admin</option>
                                                    <option>Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="userinput5"
                                            >Email</label
                                        >
                                        <input
                                            class="form-control border-primary"
                                            type="email"
                                            placeholder="email"
                                            id="userinput5"
                                        />
                                    </div>

                                    <div class="form-group">
                                        <label for="userinput6"
                                            >Password</label
                                        >
                                        <input
                                            class="form-control border-primary"
                                            type="password"
                                            placeholder="Entry Password"
                                            id="userinput6"
                                        />
                                    </div>
                                </div>

                                <div
                                    class="form-actions text-right"
                                >
                                    <a href="{{ route('user.index') }}" class="btn btn-warning mr-1"><i class="ft-x"></i>Cancel</a>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <i
                                            class="la la-check-square-o"
                                        ></i>
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection