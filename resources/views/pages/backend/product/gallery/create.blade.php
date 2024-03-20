@extends('layout.backend.main')

@section('title', 'Add Product Gallery')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-colored-form-control">
                            Product Gallery Add
                        </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" action="{{ route('productGallery.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="name">Product Category Name</label>
                                        <input type="text" class="form-control" value="{{ $category->name }}" readonly />
                                        <input type="hidden" name="category" id="category" value="{{ $category->id }}"
                                            readonly>
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="name">Product Gallery Name
                                            <span style="color: red">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control border-primary @error('name') is-invalid @enderror"
                                            name="name" id="name" value="{{ old('name') }}" placeholder="Name"
                                            required />

                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="price">Price <span style="color: red">*</span></label>
                                        <input type="number"
                                            class="form-control border-primary @error('price') is-invalid @enderror"
                                            name="price" id="price" value="{{ old('price') }}" placeholder="0"
                                            min="0" required />

                                        @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="description">Description <span style="color: red">*</span></label>
                                        <input type="text"
                                            class="form-control border-primary @error('description') is-invalid @enderror"
                                            name="description" id="description" value="{{ old('description') }}"
                                            placeholder="Description" required />

                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="image">Image <span style="color: red">*</span></label>
                                        <input class="form-control border-primary @error('image') is-invalid @enderror"
                                            type="file" name="image" id="image" placeholder="file" required>
                                        <small class="text-warning">File Size Upload under 1MB</small>
                                        <small class="text-danger">Size layout must be 1600px x 907px</small>&nbsp;|&nbsp;
                                        <small>Only .jpg,
                                            .png, .jpeg, .webp File</small>

                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-actions text-right">
                                    <a href="{{ route('productGallery.index', $gallery->category_id) }}"
                                        class="btn btn-warning mr-1"><i class="ft-x"></i>Cancel</a>

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
