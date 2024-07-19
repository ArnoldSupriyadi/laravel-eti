@extends('layout.backend.main')

@section('title', 'Product Type')

@section('content')
    @include('pages.backend.partials.notif')

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">

            {{-- Detail Product Category --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Category Detail Page</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        {{-- <div class="heading-elements">
                        </div> --}}
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <h2>{{ $category->name }}</h2>
                            {{-- <p class="card-text">{{ $category->description }}</p> --}}
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                        <tr>
                                            <th>Image</th>
                                            <td>
                                                <a href="{{ asset('frontend/img/products/categories/' . $category->image) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('frontend/img/products/categories/' . $category->image) }}"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>{{ $category->price }}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>{{ $category->description }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>{{ $category->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td>{{ $category->deskripsi }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <a href="{{ route('category.edit', $category->id) }}"
                                                    class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>

                                                <a href="{{ route('category.editImage', $category->id) }}"
                                                    class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                                    Edit Image
                                                </a>

                                                <a href="{{ route('productCategoryGallery.index', $category->id) }}"
                                                    class="btn btn-info btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Detail</a>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Product Type --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Type Page</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <a href="{{ route('productType.create', $category->id) }}"
                                class="btn btn-warning btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                create new</a>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <h2>{{ $category->name }}</h2>
                            {{-- <p class="card-text">{{ $category->description }}</p> --}}
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productTypes as $type)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $type->name }}</td>
                                            <td>{{ $type->price }}</td>
                                            <td>
                                                <a href="{{ asset('frontend/img/products/types/' . $type->image) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('frontend/img/products/types/' . $type->image) }}"
                                                        alt="" class="img-fluid" height="20%">
                                                </a>
                                            </td>
                                            <td>{{ $type->description }}</td>
                                            <td>
                                                <a href="{{ route('productType.edit', $type->id) }}"
                                                    class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>

                                                <a href="{{ route('productType.editImage', $type->id) }}"
                                                    class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                                    Edit Image
                                                </a>

                                                <a href="{{ route('productType.show', $type->id) }}"
                                                    class="btn btn-info btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Show Detail</a>

                                                <button type="button"
                                                    class="btn btn-danger btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light delete_confirm"
                                                    id="delete_confirm{{ $type->id }}" data-id="{{ $type->id }}">
                                                    Delete</button>
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
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('body').on('click', '.delete_confirm', function() {
                let idItem = $(this).data('id');

                Swal.fire({
                    title: 'Konfirmasi Hapus',
                    text: "Anda yakin ingin menghapusnya?",
                    icon: 'warning',
                    data: idItem,
                    showCancelButton: true,
                    confirmButtonColor: '#10bd9d',
                    cancelButtonColor: '#ca2062',
                    confirmButtonText: 'Ya, Dihapus !'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: 'GET',
                            url: "{{ route('productType.destroy', ':id') }}"
                                .replace(':id', idItem),
                            data: {
                                _token: '{{ csrf_token() }}',
                                id: idItem,
                            },
                            success: function(data) {
                                window.location.reload();
                                Swal.fire(
                                    'Berhasil!',
                                    'Galeri Produk berhasil dihapus',
                                    'success'
                                )
                            },
                            error: function(error) {
                                Swal.fire('Error', 'Gagal menghapus', 'error');
                                // Handle error
                            }
                        });
                    }
                })
            });
        });
    </script>
@endpush
