@extends('layout.backend.main')

@section('title', 'Edit Password')

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
                            <form class="form" action="{{ route('user.updatePassword', $user->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password">New Password <span style="color: red">*</span></label>
                                                <input class="form-control border-primary" type="password"
                                                    placeholder="New Password" name="password" id="password"
                                                    value="{{ old('password') }}" required>
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password_confirm">Confirm Password <span style="color: red">*</span></label>
                                                <input class="form-control border-primary" type="password"
                                                    placeholder="Confirm Password" name="password_confirm" id="password_confirm"
                                                    value="{{ old('password_confirm') }}" required>
                                                @error('password_confirm')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div style="margin-top: 7px; margin-left: 10px;" id="checkPasswordMatch"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions text-right">
                                    <a href="{{ route('user.profile', Auth::user()->id) }}" class="btn btn-warning mr-1"><i
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

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#password_confirm").on('keyup', function() {
                var password = $("#password").val();
                var confirmPassword = $("#password_confirm").val();

                if (password != confirmPassword) {
                    $("#checkPasswordMatch").html("Password do not match!").css("color", "red");
                } else if (password == '' && confirmPassword == '') {
                    $("#checkPasswordMatch").html("Password required!").css("color", "red");
                } else {
                    $("#checkPasswordMatch").html(
                        "Password matched!<br/>"
                        ).css("color", "green");
                }
            });
        });
    </script>
@endpush
