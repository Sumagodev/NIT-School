<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php echo e(env('APP_NAME')); ?>

    </title>
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('website_files/images/home/DM.ico')); ?>">
    <!-- global css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconfonts/font-awesome/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/css/vendor.bundle.base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/css/vendor.bundle.addons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconfonts/ti-icons/css/themify-icons.css')); ?>">
    <!-- poppins font css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
    <!-- page css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/stepwizard.css')); ?>">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('website_files/images/home/DMS.png')); ?>" />
    <!-- toastr-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <!--  -->
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <!-- Summernote Editor -->

    <link href="<?php echo e(asset('assets/bootstrap5.3.0/css/bootstrap.css')); ?>" type="text/css"
    rel="stylesheet">
    <link href="<?php echo e(asset('assets/bootstrap5.3.0/css/bootstrap.min.css')); ?>" type="text/css"
    rel="stylesheet">
    <script src="<?php echo e(asset('assets/bootstrap5.3.0/js/bootstrap.bundle.js')); ?>"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/summernote/dist/summernote-bs4.css')); ?>">
    <script src="<?php echo e(asset('assets/vendors/summernote/dist/summernote-bs4.min.js')); ?>"></script>


    
    <!-- Summernote Editor End -->
    <script src="<?php echo e(asset('assets/js/data-table.js')); ?>"></script>

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
                        src="<?php echo e(asset('/assets/images/new_logo.png')); ?>" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="#"><img
                        src="<?php echo e(asset('/assets/images/new_logo.png')); ?>" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch pr-0">
                <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="fas fa-bars"></span>
                </button> -->
                <ul class="navbar-nav">
                    <li class="nav-item d-md-flex logo-title">
                        <!-- <?php echo e(env('APP_NAME')); ?> -->
                        <b>  Registration </b>
                    </li>
                </ul>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown mr-0">

                    
                        <!-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            
                            <i class="fas fa-user menu-icon"></i>
                        </a> -->
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            
                            <a 
                            
                            class="dropdown-item edit-user-btn"
                                href="<?php echo e(route('edit-user-profile')); ?>">
                                <i class="fas fa-user text-primary"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a 
                            class="dropdown-item edit-user-btn"
                                href="<?php echo e(route('change-password')); ?>">
                                <i class="fas fa-user text-primary"></i>
                                Change Password
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(url('log-out')); ?>">
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


        <form method="GET" action="<?php echo e(url('/edit-user-profile')); ?>" id="edituserform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="edit_user_id" id="edit_user_id" value="">
        </form>

        <div class="container-fluid page-body-wrapper">
    
    <div class="main-panel">
        <div class="content-wrapper mt-5">
            <div class="page-header">
                <!--<nav aria-label="breadcrumb">-->
                <!--    <ol class="breadcrumb">-->
                <!--        <li class="breadcrumb-item"><a href="<?php echo e(route('list-admin')); ?>">Dashboard</a></li>-->
                <!--        <li class="breadcrumb-item active" aria-current="page"> Admin Master</li>-->
                <!--    </ol>-->
                <!--</nav>-->
            </div>
            <div class="row">
                <b><h6 class="red-text">Note :-   Please Don't Repeat Same Mobile Number</h6></b>
                <div class="col-12 grid-margin">
                    <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" id="frm_register" name="frm_register" method="post" role="form"
                                action="<?php echo e(route('submitVoterRegistrationInfo')); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="f_name">First Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="f_name" id="f_name"
                                                placeholder="" value="<?php echo e(old('f_name')); ?>"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            <?php if($errors->has('f_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('f_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="m_name">Middle Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="m_name" id="m_name"
                                                placeholder="" value="<?php echo e(old('m_name')); ?>"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            <?php if($errors->has('m_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('m_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="l_name">Last Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="l_name" id="l_name"
                                                placeholder="" value="<?php echo e(old('l_name')); ?>"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            <?php if($errors->has('l_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('l_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="dob_date_name">Date Of Birth</label>&nbsp<span class="red-text">*</span>
                                            <input type="date" class="form-control" name="dob_date_name" id="dob_date_name"
                                                placeholder="" value="<?php echo e(old('dob_date_name')); ?>">
                                            <?php if($errors->has('dob_date_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('dob_date_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control" name="gender" id="gender">
                                                <option value="">Select Gender</option>
                                                <?php $__currentLoopData = $gender_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($gender_info['id']); ?>">
                                                        <?php echo e($gender_info['gender_name']); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('gender')): ?>
                                                <span class="red-text"><?php echo $errors->first('gender', ':message'); ?></span>
                                            <?php endif; ?>
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
                                                value="<?php echo e(old('number')); ?>"
                                                onkeyup="addvalidateMobileNumber(this.value)">
                                            <span id="validation-message" class="red-text"></span>
                                            <?php if($errors->has('mobile_number')): ?>
                                                <span class="red-text"><?php echo $errors->first('mobile_number', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="taluka">Taluka</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control" name="taluka" id="taluka">
                                                <option value="">Select Taluka</option>
                                                <?php $__currentLoopData = $dynamic_taluka; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taluka): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                        <option value="<?php echo e($taluka['location_id']); ?>">
                                                            <?php echo e($taluka['name']); ?>

                                                        </option>
                                                   
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('taluka')): ?>
                                                <span class="red-text"><?php echo $errors->first('taluka', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="village_id">Village</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control" name="village_id" id="village_id">
                                                <option value="">Select Village</option>
                                            </select>
                                            <?php if($errors->has('village_id')): ?>
                                                <span class="red-text"><?php echo $errors->first('village_id', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>&nbsp<span class="red-text"></span>
                                            <input type="text" class="form-control" name="address" id="address"
                                                placeholder="" value="<?php echo e(old('address')); ?>">
                                            <?php if($errors->has('address')): ?>
                                                <span class="red-text"><?php echo $errors->first('address', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="caste">Caste</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control" name="cast" id="cast">
                                                <option value="">Select Cast</option>
                                                <option value="Other">Other</option>
                                                <?php $__currentLoopData = $cast_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cast_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                        <option value="<?php echo e($cast_info['id']); ?>">
                                                            <?php echo e($cast_info['cast_name']); ?></option>
                                                  
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('cast')): ?>
                                                <span class="red-text"><?php echo $errors->first('cast', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div id="other_caste_div" class="col-lg-6 col-md-6 col-sm-6" style="display:none";>
                                        <div class="form-group" id="other-caste-field">
                                            <label for="other-caste">Other Caste:</label>
                                            <input type="text" class="form-control" name="otherCasteName" id="otherCasteName" placeholder="Enter caste">
                                            <?php if($errors->has('other_caste')): ?>
                                                <span class="red-text"><?php echo e($errors->first('other_caste', ':message')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="voter_id">Voter Id</label>&nbsp<span class="red-text"></span>
                                            <input type="text" class="form-control" name="voter_id" id="voter_id"
                                                placeholder="" value="<?php echo e(old('voter_id')); ?>"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
                                            <?php if($errors->has('voter_id')): ?>
                                                <span class="red-text"><?php echo $errors->first('voter_id', ':message'); ?></span>
                                            <?php endif; ?>
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
                                        
                                        <span><a href="<?php echo e(route('list-admin')); ?>"
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
                            url: "<?php echo e(route('get-village')); ?>",
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
                    url: "<?php echo e(route('list-role-wise-permission')); ?>",
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
        
        <?php if(session('status') == 'error' && session('message')): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '<?php echo e(session('message')); ?>',
            customClass: {
                popup: 'my-custom-swal'
            }
        });
    </script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\suhasannakande\resources\views/admin/pages/voterregistration/add-voterregistration.blade.php ENDPATH**/ ?>