<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{ env('APP_NAME') }}
    </title>
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('website_files/images/home/DM.ico') }}">
    <!-- global css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ti-icons/css/themify-icons.css') }}">
    <!-- poppins font css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- page css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/stepwizard.css') }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('website_files/images/home/DMS.png') }}" />
    <!-- toastr-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <!-- {{-- CKEditor CDN --}} -->
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <!-- Summernote Editor -->

    <link href="{{ asset('assets/bootstrap5.3.0/css/bootstrap.css') }}" type="text/css"
    rel="stylesheet">
    <link href="{{ asset('assets/bootstrap5.3.0/css/bootstrap.min.css') }}" type="text/css"
    rel="stylesheet">
    <script src="{{ asset('assets/bootstrap5.3.0/js/bootstrap.bundle.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>  --}}

    <link rel="stylesheet" href="{{ asset('assets/vendors/summernote/dist/summernote-bs4.css') }}">
    <script src="{{ asset('assets/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>


    
    <!-- Summernote Editor End -->
    <script src="{{ asset('assets/js/data-table.js') }}"></script>

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
        
        /* Custom styles for SweetAlert */
        .my-custom-swal {
            padding: 20px !important; /* Adjust padding as needed */
        }
        
        .my-custom-swal .swal2-popup {
            margin: 30px !important; /* Adjust margin as needed */
        }
    </style>
    
    <body class="sidebar-icon-only">

    <div class="container-scroller">
        <!-- top navigation -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="#"><img
                        src="{{ asset('/assets/images/new_logo.png') }}" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="#"><img
                        src="{{ asset('/assets/images/new_logo.png') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch pr-0">
                <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="fas fa-bars"></span>
                </button> -->
                <ul class="navbar-nav">
                    <li class="nav-item d-md-flex logo-title">
                        <!-- {{ env('APP_NAME') }} -->
                        <b>  Registration </b>
                    </li>
                </ul>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown mr-0">

                    
                        <!-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            {{-- <img class="img-size" 
                            src="{{ Config::get('DocumentConstant.USER_PROFILE_VIEW') }}{{ $profile->user_profile }}"
                            /> --}}
                            <i class="fas fa-user menu-icon"></i>
                        </a> -->
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            {{-- @foreach ($user_data as $item) --}}
                            <a 
                            {{-- data-id="{{ $user_data->id }}"  --}}
                            class="dropdown-item edit-user-btn"
                                href="{{ route('edit-user-profile') }}">
                                <i class="fas fa-user text-primary"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a 
                            class="dropdown-item edit-user-btn"
                                href="{{ route('change-password') }}">
                                <i class="fas fa-user text-primary"></i>
                                Change Password
                            </a>
                            {{-- @endforeach --}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('log-out') }}">
                                <i class="fas fa-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
        </nav>


        <form method="GET" action="{{ url('/edit-user-profile') }}" id="edituserform">
            @csrf
            <input type="hidden" name="edit_user_id" id="edit_user_id" value="">
        </form>

        <div class="container-fluid page-body-wrapper">
    
    <div class="main-panel">
        <div class="content-wrapper mt-5">
            <div class="page-header">
                <!--<nav aria-label="breadcrumb">-->
                <!--    <ol class="breadcrumb">-->
                <!--        <li class="breadcrumb-item"><a href="{{ route('list-admin') }}">Dashboard</a></li>-->
                <!--        <li class="breadcrumb-item active" aria-current="page"> Admin Master</li>-->
                <!--    </ol>-->
                <!--</nav>-->
            </div>
            <div class="row">
                <b><h6 class="red-text">Note :-   Please Don't Repeat Same Mobile Number</h6></b>
                <div class="col-12 grid-margin">
                    @include('admin.layout.alert')
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" id="frm_register" name="frm_register" method="post" role="form"
                                action="{{ route('submitVoterRegistrationInfo') }}" enctype="multipart/form-data">
                                <div class="row">
                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="f_name">First Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="f_name" id="f_name"
                                                placeholder="" value="{{ old('f_name') }}"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            @if ($errors->has('f_name'))
                                                <span class="red-text"><?php echo $errors->first('f_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="m_name">Middle Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="m_name" id="m_name"
                                                placeholder="" value="{{ old('m_name') }}"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            @if ($errors->has('m_name'))
                                                <span class="red-text"><?php echo $errors->first('m_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="l_name">Last Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="l_name" id="l_name"
                                                placeholder="" value="{{ old('l_name') }}"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            @if ($errors->has('l_name'))
                                                <span class="red-text"><?php echo $errors->first('l_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="dob_date_name">Date Of Birth</label>&nbsp<span class="red-text">*</span>
                                            <input type="date" class="form-control" name="dob_date_name" id="dob_date_name"
                                                placeholder="" value="{{ old('dob_date_name') }}">
                                            @if ($errors->has('dob_date_name'))
                                                <span class="red-text"><?php echo $errors->first('dob_date_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control" name="gender" id="gender">
                                                <option value="">Select Gender</option>
                                                @foreach ($gender_data as $gender_info)
                                                    <option value="{{ $gender_info['id'] }}">
                                                        {{ $gender_info['gender_name'] }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('gender'))
                                                <span class="red-text"><?php echo $errors->first('gender', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="number">Mobile Number</label>&nbsp<span
                                                class="red-text">*</span>
                                            <input type="text" class="form-control" name="mobile_number" id="mobile_number"
                                                pattern="[789]{1}[0-9]{9}"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                                                maxlength="10" minlength="10" placeholder=""
                                                value="{{ old('number') }}"
                                                onkeyup="addvalidateMobileNumber(this.value)">
                                            <span id="validation-message" class="red-text"></span>
                                            @if ($errors->has('mobile_number'))
                                                <span class="red-text"><?php echo $errors->first('mobile_number', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="taluka">Taluka</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control" name="taluka" id="taluka">
                                                <option value="">Select Taluka</option>
                                                @foreach ($dynamic_taluka as $taluka)
                                                   
                                                        <option value="{{ $taluka['location_id'] }}">
                                                            {{ $taluka['name'] }}
                                                        </option>
                                                   
                                                @endforeach
                                            </select>
                                            @if ($errors->has('taluka'))
                                                <span class="red-text"><?php echo $errors->first('taluka', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="village_id">Village</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control" name="village_id" id="village_id">
                                                <option value="">Select Village</option>
                                            </select>
                                            @if ($errors->has('village_id'))
                                                <span class="red-text"><?php echo $errors->first('village_id', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>&nbsp<span class="red-text"></span>
                                            <input type="text" class="form-control" name="address" id="address"
                                                placeholder="" value="{{ old('address') }}">
                                            @if ($errors->has('address'))
                                                <span class="red-text"><?php echo $errors->first('address', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="caste">Caste</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control" name="cast" id="cast">
                                                <option value="">Select Cast</option>
                                                <option value="Other">Other</option>
                                                @foreach ($cast_data as $cast_info)
                                                    
                                                        <option value="{{ $cast_info['id'] }}">
                                                            {{ $cast_info['cast_name'] }}</option>
                                                  
                                                @endforeach
                                            </select>
                                            @if ($errors->has('cast'))
                                                <span class="red-text"><?php echo $errors->first('cast', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div id="other_caste_div" class="col-lg-6 col-md-6 col-sm-6" style="display:none";>
                                        <div class="form-group" id="other-caste-field">
                                            <label for="other-caste">Other Caste:</label>
                                            <input type="text" class="form-control" name="otherCasteName" id="otherCasteName" placeholder="Enter caste">
                                            @if ($errors->has('other_caste'))
                                                <span class="red-text">{{ $errors->first('other_caste', ':message') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="voter_id">Voter Id</label>&nbsp<span class="red-text"></span>
                                            <input type="text" class="form-control" name="voter_id" id="voter_id"
                                                placeholder="" value="{{ old('voter_id') }}"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                                            @if ($errors->has('voter_id'))
                                                <span class="red-text"><?php echo $errors->first('voter_id', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        
                                    </div>
                                    

                                    <div class="col-lg-12 col-md-12 col-sm-12 user_tbl">
                                        <div id="data_for_role">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton" disabled>
                                            Save &amp; Submit
                                        </button>
                                        {{-- <button type="reset" class="btn btn-sm btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-admin') }}"
                                                class="btn btn-sm btn-primary ">Back</a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('cast').addEventListener('change', function() {
                var otherCasteDiv = document.getElementById('other_caste_div');
                if (this.value === 'Other') {
                    otherCasteDiv.style.display = 'block';
                } else {
                    otherCasteDiv.style.display = 'none';
                }
            });
        </script>
        
        <script type="text/javascript">
            function submitRegister() {
                document.getElementById("frm_register").submit();
            }
        </script>
        <script>
            function addvalidateMobileNumber(number) {
                var mobileNumberPattern = /^\d*$/;
                var validationMessage = document.getElementById("validation-message");

                if (mobileNumberPattern.test(number)) {
                    validationMessage.textContent = "";
                } else {
                    validationMessage.textContent = "Please enter only numbers.";
                }
            }
        </script>
        <script>
            function addvalidatePincode(number) {
                var pincodePattern = /^\d*$/;
                var validationMessage = document.getElementById("validation-message-pincode");

                if (pincodePattern.test(number)) {
                    validationMessage.textContent = "";
                } else {
                    validationMessage.textContent = "Please enter only numbers.";
                }
            }
        </script>


        <script>
            $(document).ready(function() {

                $('#taluka').change(function(e) {
                    e.preventDefault();
                    var talukaId = $('#taluka').val();
                    console.log(talukaId);
                    $('#village_id').html('<option value="">Select Village</option>');

                    if (talukaId !== '') {
                        $.ajax({
                            url: "{{ route('get-village') }}",
                            type: 'GET',
                            data: {
                                talukaId: talukaId
                            },
                            // headers: {
                            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            // },
                            success: function(response) {
                                console.log(response);
                                if (response.village.length > 0) {
                                    $.each(response.village, function(index, village) {
                                        $('#village_id').append('<option value="' + village
                                            .location_id +
                                            '">' + village.name + '</option>');
                                    });
                                }
                            }
                        });
                    }
                });
            });
        </script>
       
        <script>
            function myFunction(role_id) {
                // alert(role_id);
                $("#data_for_role").empty();
                $.ajax({
                    url: "{{ route('list-role-wise-permission') }}",
                    method: "POST",
                    data: {
                        "role_id": role_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        $("#data_for_role").empty();
                        $("#data_for_role").append(data);
                    },
                    error: function(data) {}
                });
            }
        </script>

        <!--  -->
        <script>
function formatAadharNumber(input) {
    let value = input.value.replace(/\s/g, ''); // Remove existing spaces
    value = value.replace(/\D/g, ''); // Remove non-numeric characters
    let formattedInput = '';
    for (let i = 0; i < value.length; i++) {
        formattedInput += value[i];
        if ((i + 1) % 4 === 0 && i !== value.length - 1) {
            formattedInput += ' ';
        }
    }
    input.value = formattedInput;
}
</script>

        <script>
            $(document).ready(function() {
               function setMaxDOB() {
                    const today = new Date();
                    const maxDate = new Date(today.setFullYear(today.getFullYear() - 18));
                    
                    // Format the date as YYYY-MM-DD
                    const day = String(maxDate.getDate()).padStart(2, '0');
                    const month = String(maxDate.getMonth() + 1).padStart(2, '0');
                    const year = maxDate.getFullYear();
            
                    const formattedMaxDate = `${year}-${month}-${day}`;
                    $('#dob_date_name').attr('max', formattedMaxDate); // Set the max attribute
                }
            
                // Call the function to set the max date
                setMaxDOB();
    
                // Function to check if all input fields are filled with valid data
                function checkFormValidity() {
                    const f_name = $('#f_name').val();
                    const m_name = $('#m_name').val();
                    const l_name = $('#l_name').val();
                    const dob_date_name = $('#dob_date_name').val();
                    const gender = $('#gender').val();
                    const number = $('#mobile_number').val();
                    const taluka = $('#taluka').val();
                    const village = $('#village_id').val();
                    const address = $('#address').val();
                    const caste = $('#cast').val();

                    // Enable the submit button if all fields are valid
                    if (f_name!='' && m_name!='' && l_name!='' && dob_date_name!='' && gender!='' && number!='' && taluka!='' && village!=''
                        && address!='' && caste!='') {
                        $('#submitButton').prop('disabled', false);
                    } else {
                        $('#submitButton').prop('disabled', true);
                    }
                }

                // Call the checkFormValidity function on input change
                $('input,textarea, select, #user_profile').on('input change',
                    checkFormValidity);

                    $.validator.addMethod("number", function(value, element) {
                    return this.optional(element) || /^[0-9]{10}$/.test(value);
                }, "Please enter a valid 10-digit number.");

                $.validator.addMethod("email", function(value, element) {
                    // Regular expression for email validation
                    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                    return this.optional(element) || emailRegex.test(value);
                }, "Please enter a valid email address.");


                $.validator.addMethod("aadharNumber", function(value, element) {
                var aadharPattern = /^\d{4}\s\d{4}\s\d{4}$/;
                    return this.optional(element) || aadharPattern.test(value);
                }, "Please enter a valid Aadhar number");  
                

                

                // Initialize the form validation
                $("#frm_register").validate({
                    rules: {
                        f_name: {
                            required: true,
                        },
                        m_name: {
                            required: true,
                        },
                        l_name: {
                            required: true,
                        },
                        dob_date_name: {
                            required: true,
                            max: $('#dob_date_name').attr('max')  // Ensures the selected date is not greater than the max date set
                        },
                        gender: {
                            required: true,
                        },
                        number: {
                            required: true,
                        },
                        taluka: {
                            required: true,
                        },
                        village: {
                            required: true,
                        },
                        address: {
                            required: true,
                        },
                        caste: {
                            required: true,
                        },
                        otherCasteName: {
                            required: function(element) {
                                var action = $("#cast").val();
                                if (action == "Other") {
                                    return true;
                                } else {
                                    return false;
                                }
                            }
                        }

                    },
                    messages: {
                        f_name: {
                            required: "Please Enter the First Name",
                        },
                        m_name: {
                            required: "Please Enter the Middle Name",
                        },
                        l_name: {
                            required: "Please Enter the Last Name",
                        },
                        dob_date_name: {
                            required: "Please Select DOB Date",
                            max: "You must be at least 18 years old Or 18 years above."
                        },
                        gender: {
                            required: "Please Enter the Gender",
                        },
                        number: {
                            required: "Please Enter the Number",
                        },
                        taluka: {
                            required: "Please Select Taluka",
                        },
                        village: {
                            required: "Please Select Village",
                        },
                        address: {
                            required: "Please Enter the Address",
                        },
                        caste: {
                            required: "Please Select the Caste",
                        },
                        otherCasteName: {
                            required: "Please Enter Other Caste",
                        },
                    },

                });
            });

          
        </script>
        
        @if(session('status') == 'error' && session('message'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('message') }}',
            customClass: {
                popup: 'my-custom-swal'
            }
        });
    </script>
@endif
