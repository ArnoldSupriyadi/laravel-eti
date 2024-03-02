@extends('layout.backend.main')

@section('title', 'Change Logo')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
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
                                    Change Logo
                                </p>
                            </div>

                            <form class="form">
                                <div class="form-body">
                                    <h4 class="form-section">
                                        
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
                                    </div>

                                    <div class="form-group">
                                        <label>Select Image</label>
                                        <label id="projectinput7" class="file center-block">
                                            <input type="file" id="file">
                                            <span class="file-custom"></span>
                                        </label>
                                    </div>
                                </div>

                                <div
                                    class="form-actions text-right"
                                >
                                    <a href="{{ route('logo.index') }}" class="btn btn-warning mr-1"><i class="ft-x"></i>Cancel</a>
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