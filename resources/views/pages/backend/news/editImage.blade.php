@extends('layout.backend.main')

@section('title', 'Edit News Image')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-colored-form-control">
                            News Image Edit
                        </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" action="{{ route('news.updateImage', $news->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="image">Image <span style="color: red">*</span></label>
                                                <input
                                                    class="form-control border-primary @error('image') is-invalid @enderror"
                                                    type="file" name="image" id="image" placeholder="file"
                                                    required>
                                                <small class="text-warning">File Size Upload under 1MB</small>
                                                <small class="text-danger">Size layout must be 1600px x
                                                    907px</small>&nbsp;|&nbsp;
                                                <small>Only .jpg,
                                                    .png, .jpeg, .webp File</small>

                                                @error('image')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions text-right">
                                    <a href="{{ route('news.show', $news->id) }}" class="btn btn-warning mr-1"><i
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
