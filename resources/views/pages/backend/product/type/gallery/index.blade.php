@extends('layout.backend.main')

@section('title', 'Product Type Gallery')

@section('content')
    @include('pages.backend.partials.notif')

    <div class="content-body">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Product Type Gallery Page</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <a href="{{ route('productTypeGallery.create', $type->id) }}"
                        class="btn btn-warning btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                        create new</a>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <h2>{{ $type->name }}</h2>
                    {{-- <p class="card-text">{{ $type->description }}</p> --}}
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Nama</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gallery->name }}</td>
                                    <td>{{ $gallery->nama }}</td>
                                    <td>
                                        <a href="{{ asset('frontend/img/products/types/type' . $gallery->type_id . '/' . $gallery->image) }}"
                                            target="_blank">
                                            <img src="{{ asset('frontend/img/products/types/type' . $gallery->type_id . '/' . $gallery->image) }}"
                                                alt="" class="img-fluid" height="20%">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('productTypeGallery.edit', $gallery->id) }}"
                                            class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>

                                        <a href="{{ route('productTypeGallery.editImage', $gallery->id) }}"
                                            class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                            Edit Image
                                        </a>

                                        <a href="{{ route('productTypeGallery.show', $gallery->id) }}"
                                            class="btn btn-info btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Show Detail</a>

                                        <button type="button"
                                            class="btn btn-danger btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light delete_confirm"
                                            id="delete_confirm{{ $gallery->id }}" data-id="{{ $gallery->id }}">
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
                            url: "{{ route('productTypeGallery.destroy', ':id') }}"
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
