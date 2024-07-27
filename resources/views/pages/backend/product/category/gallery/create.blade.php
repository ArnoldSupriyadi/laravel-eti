@extends('layout.backend.main')

@section('title', 'Add Product Category Gallery')

@section('content')
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>

    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-colored-form-control">
                            Product Category Gallery Add
                        </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" action="{{ route('productCategoryGallery.store', $category->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="name">Product Category Name</label>
                                        <input type="text" class="form-control" value="{{ $category->name }}" readonly />
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="name">Name
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
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description">{!! old('description') !!}</textarea>

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

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text"
                                            class="form-control border-primary @error('nama') is-invalid @enderror"
                                            name="nama" id="nama" value="{{ old('nama') }}" placeholder="Nama" />

                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" id="deskripsi">{!! old('deskripsi') !!}</textarea>

                                        @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-actions text-right">
                                    <a href="{{ route('productCategoryGallery.index', $category->id) }}"
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

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle',
                    'ImageToolbar', 'ImageUpload', 'MediaEmbed'
                ],
            })
            .catch(error => {});
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'), {
                removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle',
                    'ImageToolbar', 'ImageUpload', 'MediaEmbed'
                ],
            })
            .catch(error => {});
    </script>
@endpush
