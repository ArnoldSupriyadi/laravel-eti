@extends('layout.backend.main')

@section('title', 'Edit Contact')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-colored-form-control">
                            Contact Edit
                        </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" action="{{ route('contact.update', $profile->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                @if ($profile->name == 'phone')
                                                    <label for="description">Phone <span style="color: red">*</span></label>
                                                    <input type="number"
                                                        class="form-control border-primary @error('description') is-invalid @enderror"
                                                        name="description" id="description"
                                                        value="{{ $profile->description }}" placeholder="Phone" required />
                                                @elseif ($profile->name != 'email')
                                                    <label for="description">Description <span
                                                            style="color: red">*</span></label>
                                                    <input type="text"
                                                        class="form-control border-primary @error('description') is-invalid @enderror"
                                                        name="description" id="description"
                                                        value="{{ $profile->description }}" placeholder="Description"
                                                        required />
                                                @else
                                                    <label for="description">Email <span style="color: red">*</span></label>
                                                    <input type="email"
                                                        class="form-control border-primary @error('description') is-invalid @enderror"
                                                        name="description" id="description"
                                                        value="{{ $profile->description }}" placeholder="Email" required />
                                                @endif

                                                @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions text-right">
                                    <a href="{{ route('contact.index') }}" class="btn btn-warning mr-1"><i
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
