@extends('layout.backend.main')

@section('title', 'Edit Product Category')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-colored-form-control">
                            Product Category Edit
                        </h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" action="{{ route('category.update', $category->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Product Name</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $category->product->name }}" readonly />
                                                <input type="hidden" name="product" id="product"
                                                    value="{{ $category->product_id }}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name <span style="color: red">*</span></label>
                                                <input type="text"
                                                    class="form-control border-primary @error('name') is-invalid @enderror"
                                                    name="name" id="name" value="{{ $category->name }}"
                                                    placeholder="Name" required />

                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">Description <span
                                                        style="color: red">*</span></label>
                                                <input type="text"
                                                    class="form-control border-primary @error('description') is-invalid @enderror"
                                                    name="description" id="description" value="{{ $category->description }}"
                                                    placeholder="Description" required />

                                                @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions text-right">
                                    <a href="{{ route('product.index') }}" class="btn btn-warning mr-1"><i
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
