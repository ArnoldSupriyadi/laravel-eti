@extends('layout.backend.main')

@section('title', 'Gallery')

@section('content')
    @include('pages.backend.partials.notif')

    <div class="content-body">
        <!-- Table row borders end-->
        <div class="row">
            <div class="col-12">
                <a href="{{ route('gallery.create') }}"
                    class="btn btn-info btn-min-width mr-1 mb-1 waves-effect waves-light">Add Image</a>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Gallery</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">

                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Gallery website at eti</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($galleries as $gallery)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $gallery->name }}</td>
                                            <td>
                                                <a href="{{ asset('frontend/img/galleries/' . $gallery->image) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('frontend/img/galleries/' . $gallery->image) }}"
                                                        alt="" class="img-fluid" width="20%">
                                                </a>
                                            </td>
                                            <td>{{ $gallery->description }}</td>
                                            <td>{{ $gallery->nama }}</td>
                                            <td>{{ $gallery->deskripsi }}</td>
                                            <td>
                                                <a href="{{ route('gallery.edit', $gallery->id) }}"
                                                    class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit</a>
                                                <a href="{{ route('gallery.editImage', $gallery->id) }}"
                                                    class="btn btn-primary btn-min-width box-shadow-1 mr-1 mb-1 waves-effect waves-light">Edit
                                                    Image</a>

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
                            url: "{{ route('gallery.destroy', ':id') }}"
                                .replace(':id', idItem),
                            data: {
                                _token: '{{ csrf_token() }}',
                                id: idItem,
                            },
                            success: function(data) {
                                window.location.reload();
                                Swal.fire(
                                    'Berhasil!',
                                    'Gallery berhasil dihapus',
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
