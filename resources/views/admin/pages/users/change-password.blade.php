@extends('admin.layout.master')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .password-toggle {
            cursor: pointer;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        .fa-eye-slash {
            /* display: none; */
        }
    </style>
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Change Password
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('list-admin') }}">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                @include('admin.layout.alert')
                    <div class="card">
                        <div class="card-body">
                        <form class="forms-sample" id="frm_register" name="frm_register" method="post" role="form"
      action="{{ route('update-password') }}" enctype="multipart/form-data">
    @csrf <!-- This replaces the manual CSRF token input -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <label for="old_password">Old Password</label>&nbsp;<span class="red-text">*</span>
                <input type="password" class="old_password form-control" name="old_password" id="old_password" placeholder="">
                <span id="toggleChangePassword" class="toggleChangePassword password-toggle" onclick="toggleChangePasswordVisibility()">
                    <i class="fa fa-eye-slash"></i>
                </span>
                @error('old_password')
                    <span class="red-text">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <label for="password">New Password</label>&nbsp;<span class="red-text">*</span>
                <input type="password" class="password form-control" name="password" id="password" placeholder="">
                <span id="togglePassword" class="togglePassword password-toggle" onclick="togglePasswordVisibility()">
                    <i class="fa fa-eye-slash"></i>
                </span>
                @error('password')
                    <span class="red-text">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>&nbsp;<span class="red-text">*</span>
                <input type="password" class="password_confirmation form-control" id="password_confirmation" name="password_confirmation">
                <span id="toggleConfirmPassword" class="toggleConfirmPassword password-toggle" onclick="toggleConfirmPasswordVisibility()">
                    <i class="fa fa-eye-slash"></i>
                </span>
                @error('password_confirmation')
                    <span class="red-text">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-12 col-sm-12 text-center">
            <button type="submit" class="btn btn-sm btn-success">
                Save &amp; Submit
            </button>
            <a href="{{ route('list-admin') }}" class="btn btn-sm btn-primary">Back</a>
        </div>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            function submitRegister() {
                document.getElementById("frm_register").submit();
            }
        </script>


        <script>
            $(document).ready(function() {
                // Function to check if all input fields are filled with valid data
                function checkFormValidity() {

                    const old_password = $('#old_password').val();
                    const password = $('#password').val();
                    const password_confirmation = $('#password_confirmation').val();

                    // Enable the submit button if all fields are valid
                    if (old_password && password && password_confirmation) {
                        $('#submitButton').prop('disabled', false);
                    } else {
                        $('#submitButton').prop('disabled', true);
                    }
                }

                // Call the checkFormValidity function on input change
                $('input,textarea, select, #user_profile').on('input change',
                    checkFormValidity);
               

                // Initialize the form validation
                $("#frm_register").validate({
                    rules: {
                        old_password: {
                            required: true,
                            minlength: 8,  // Minimum length of 8 characters
                            maxlength: 15,
                        },
                        password: {
                            required: true,
                            minlength: 8,  // Minimum length of 8 characters
                            maxlength: 15,
                        },
                        password_confirmation: {
                            required: true,
                            minlength: 8,  // Minimum length of 8 characters
                            maxlength: 15,
                        },

                    },
                    messages: {
                        old_password: {
                            required: "Please Enter the Old Password",
                            minlength: "Old Password must be exactly 8 characters long",  // Custom error message for minlength
                            maxlength: "Old Password must be exactly 15 characters long",
                        },
                        password: {
                            required: "Please Enter the Password",
                            minlength: "Password must be exactly 8 characters long",  // Custom error message for minlength
                            maxlength: "Password must be exactly 15 characters long",
                        },
                        password_confirmation: {
                            required: "Please Enter the Confirmation Password",
                            minlength: "Confirm Password must be exactly 8 characters long",  // Custom error message for minlength
                            maxlength: "Confirm Password must be exactly 15 characters long",
                        },
                    },

                });
            });

          
        </script>
    @endsection