@extends('layout.backend.main')

@section('title', 'Add Company Profile')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-colored-form-control">
                            Company Profile Add
                        </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" action="{{ route('compro.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="name">Name <span style="color: red">*</span></label>
                                        <input type="text"
                                            class="form-control border-primary @error('name') is-invalid @enderror"
                                            name="name" id="name" value="{{ old('name') }}" placeholder="Name"
                                            required />
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="description">Description <span style="color: red">*</span></label>
                                        <input type="text"
                                            class="form-control border-primary @error('description') is-invalid @enderror"
                                            name="description" id="description" value="{{ old('description') }}"
                                            placeholder="Description" required />
                                    </div>
                                </div>

                                <div class="form-actions text-right">
                                    <a href="{{ route('compro.index') }}" class="btn btn-warning mr-1"><i
                                            class="ft-x"></i>Cancel</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i>
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
