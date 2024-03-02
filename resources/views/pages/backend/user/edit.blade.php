@extends('layout.backend.main')

@section('title', 'Edit User')

@section('content')
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-colored-form-control">
                            User Profile Add
                        </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                <p>
                                    New user insert data
                                </p>
                            </div>

                            <form class="form" action="{{ route('user.update', $user->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name <span style="color: red">*</span></label>
                                                <input type="text"
                                                    class="form-control border-primary @error('name') is-invalid @enderror"
                                                    name="name" id="name" value="{{ $user->name }}"
                                                    placeholder="Name" required />
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="role">Role <span style="color: red">*</span></label>
                                                <select class="form-control @error('role') is-invalid @enderror"
                                                    name="role" id="role" required>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $user->role_id }}"
                                                            @if ($role->id == $user->role_id) @selected(true) @endif>
                                                            {{ $role->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('role')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email <span style="color: red">*</span></label>
                                        <input class="form-control border-primary @error('email') is-invalid @enderror"
                                            type="email" name="email" id="email" value="{{ $user->email }}"
                                            placeholder="Email" required />
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone <span style="color: red">*</span></label>
                                        <input class="form-control border-primary @error('phone') is-invalid @enderror"
                                            type="number" name="phone" id="phone" value="{{ $user->phone }}"
                                            placeholder="Phone" required />
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Address <span style="color: red">*</span></label>
                                        <input class="form-control border-primary @error('address') is-invalid @enderror"
                                            type="text" name="address" id="address" value="{{ $user->address }}"
                                            placeholder="Address" required />
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-actions text-right">
                                    <a href="{{ route('user.index') }}" class="btn btn-warning mr-1"><i
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
