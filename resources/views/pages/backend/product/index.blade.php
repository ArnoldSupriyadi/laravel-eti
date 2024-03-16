@extends('layout.backend.main')

@section('title', 'Product & Service')

@section('content')
    @include('pages.backend.partials.notif')

    @foreach ($products as $product)
        <div class="content-body">
            <!-- Table row borders end-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ $product->name }} Page</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <a href="{{ route('product.create') }}"
                                    class="btn btn-warning btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">create
                                    new at {{ Str::lower($product->name) }}</a>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <p class="card-text">{{ $product->name }} website at eti</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $categories = \App\Models\ProductCategory::where('product_id', $product->id)
                                                ->orderBy('name', 'ASC')
                                                ->get();
                                        @endphp
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td><img src="{{ asset('frontend/img/categories/' . $category->image) }}"
                                                        alt="" class="img-fluid" width="20%" height="20%"></td>
                                                <td>{{ $category->description }}</td>
                                                <td>
                                                    <a href="{{ route('category.edit', $category->id) }}"
                                                        class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                                    <a href="{{ route('category.editImage', $category->id) }}"
                                                        class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                                        Edit Image
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-danger btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Delete</a>
                                                    <a href="{{ route('category.index') }}"
                                                        class="btn btn-info btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Show
                                                        Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table row borders end -->
        </div>
    @endforeach
@endsection
