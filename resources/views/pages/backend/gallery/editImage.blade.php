@extends('layout.backend.main')

@section('title', 'Gallery Image Edit')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-colored-form-control">
                            Gallery Image Edit
                        </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form action="{{ route('gallery.updateImage', $gallery->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="form-label" for="image">Select Image</label>
                                        <input type="file"
                                            class="form-control border-primary @error('image') is-invalid @enderror"
                                            name="image" id="image" placeholder="Gallery Image">

                                        <small class="text-warning">File Size Upload under
                                            1MB</small>&nbsp;|&nbsp;<small>Only .jpg, .png, .jpeg, .webp
                                            File</small>

                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        </label>
                                    </div>
                                </div>

                                <div class="form-actions text-right">
                                    <a href="{{ route('gallery.index') }}" class="btn btn-warning mr-1"><i
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
