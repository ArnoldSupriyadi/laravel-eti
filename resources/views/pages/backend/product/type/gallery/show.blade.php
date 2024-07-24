@extends('layout.backend.main')

@section('title', 'Product Type Gallery Detail')

@section('content')
    @include('pages.backend.partials.notif')

    <div class="content-body">
        {{-- Detail Product Type Gallery  --}}
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Product Type Gallery Detail Page</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                {{-- <div class="heading-elements">
                </div> --}}
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <h2>{{ $gallery->name }}</h2>
                    {{-- <p class="card-text">{{ $gallery->description }}</p> --}}
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                                <tr>
                                    <th>Image</th>
                                    <td>
                                        <a href="{{ asset('frontend/img/products/types/type'.$gallery->type_id.'/' . $gallery->image) }}"
                                            target="_blank">
                                            <img src="{{ asset('frontend/img/products/types/type'.$gallery->type_id.'/' . $gallery->image) }}"
                                                alt="" class="img-fluid">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $gallery->description }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $gallery->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>{{ $gallery->deskripsi }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="{{ route('productTypeGallery.edit', $gallery->id) }}"
                                            class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>

                                        <a href="{{ route('productTypeGallery.editImage', $gallery->id) }}"
                                            class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">
                                            Edit Image
                                        </a>
                                    </td>
                                </tr>
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
