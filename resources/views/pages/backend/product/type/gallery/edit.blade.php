@extends('layout.backend.main')

@section('title', 'Edit Product Type Gallery')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-colored-form-control">
                            Product Type Gallery Edit
                        </h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" action="{{ route('productTypeGallery.update', $gallery->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="name">Product Type Name</label>
                                        <input type="text" class="form-control" value="{{ $gallery->type->name }}"
                                            readonly />
                                        <input type="hidden" name="product" id="product" value="{{ $gallery->type_id }}"
                                            readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Name <span style="color: red">*</span></label>
                                        <input type="text"
                                            class="form-control border-primary @error('name') is-invalid @enderror"
                                            name="name" id="name" value="{{ $gallery->name }}" placeholder="Name"
                                            required />

                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text"
                                            class="form-control border-primary @error('description') is-invalid @enderror"
                                            name="description" id="description" value="{{ $gallery->description }}"
                                            placeholder="Description" />

                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text"
                                            class="form-control border-primary @error('nama') is-invalid @enderror"
                                            name="nama" id="nama" value="{{ $gallery->nama }}" placeholder="Nama" />

                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input type="text"
                                            class="form-control border-primary @error('deskripsi') is-invalid @enderror"
                                            name="deskripsi" id="deskripsi" value="{{ $gallery->deskripsi }}"
                                            placeholder="Deskripsi" />

                                        @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-actions text-right">
                                    <a href="{{ route('productTypeGallery.index', $gallery->type_id) }}"
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
