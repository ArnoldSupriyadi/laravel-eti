@extends('layout.backend.main')

@section('title', 'Edit Gallery')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>
                                    Edit Gallery
                                </p>
                            </div>

                            <form class="form" action="{{ route('gallery.update', $gallery->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-body">
                                    <h4 class="form-section">

                                    </h4>
                                    {{-- <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userinput2">Category</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>commercial</option>
                                                    <option>defense</option>
                                                    <option>none</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <label for="name">Name <span style="color: red">*</span></label>
                                        <input type="text"
                                            class="form-control border-primary @error('name') is-invalid @enderror"
                                            name="name" id="name"
                                            value="{{ old('name') ? old('name') : $gallery->name }}"
                                            placeholder="Produt Type" required />

                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text"
                                            class="form-control border-primary @error('description') is-invalid @enderror"
                                            name="description" id="description"
                                            value="{{ old('description') ? old('description') : $gallery->description }}"
                                            placeholder="Description" />

                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Indo --}}
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text"
                                            class="form-control border-primary @error('nama') is-invalid @enderror"
                                            name="nama" id="nama"
                                            value="{{ old('nama') ? old('nama') : $gallery->nama }}" placeholder="Nama" />

                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input type="text"
                                            class="form-control border-primary @error('deskripsi') is-invalid @enderror"
                                            name="deskripsi" id="deskripsi"
                                            value="{{ old('deskripsi') ? old('deskripsi') : $gallery->deskripsi }}"
                                            placeholder="Deskripsi" />

                                        @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- end Indo --}}
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
