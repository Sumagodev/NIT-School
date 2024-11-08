<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Users Master
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('list-users')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Users Master</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" id="regForm" name="frm_register" method="post" role="form"
                                action="<?php echo e(route('update-users')); ?>" enctype="multipart/form-data">
                                <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email ID</label>&nbsp<span class="red-text">*</span>
                                        <input type="text" class="form-control" name="email" id="email"
                                            placeholder="" value="<?php echo e($user_data['data_users']['email']); ?>">
                                        <?php if($errors->has('email')): ?>
                                        <span
                                            class="red-text"><?php echo $errors->first('email', ':message'); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div> 

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="f_name">First Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="f_name" id="f_name"
                                                placeholder="" value="<?php echo e($user_data['data_users']['f_name']); ?>"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            <?php if($errors->has('f_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('f_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="m_name">Middle Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="m_name" id="m_name"
                                                placeholder="" value="<?php echo e($user_data['data_users']['m_name']); ?>"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            <?php if($errors->has('m_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('m_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="l_name">Last Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="l_name" id="l_name"
                                                placeholder="" value="<?php echo e($user_data['data_users']['l_name']); ?>"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            <?php if($errors->has('l_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('l_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="number">Number</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="number" id="number"
                                                placeholder="" value="<?php echo e($user_data['data_users']['number']); ?>"
                                                onkeyup="editvalidateMobileNumber(this.value)"
                                                pattern="[789]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"  maxlength="10" minlength="10"
                                                >
                                            <span id="edit-message" class="red-text"></span>
                                            <?php if($errors->has('number')): ?>
                                                <span class="red-text"><?php echo $errors->first('number', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="aadhar_no">Aadhar No</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="aadhar_no" id="aadhar_no"
                                                placeholder="" value="<?php echo e($user_data['data_users']['aadhar_no']); ?>">
                                            <?php if($errors->has('aadhar_no')): ?>
                                                <span class="red-text"><?php echo $errors->first('aadhar_no', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="address" id="address"
                                                placeholder="" value="<?php echo e($user_data['data_users']['address']); ?>">
                                            <?php if($errors->has('address')): ?>
                                                <span class="red-text"><?php echo $errors->first('address', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="district">User District</label>&nbsp<span class="red-text">*</span>
                                                    <select class="form-control" name="district" id="district">
                                                        <option value="">Select District</option>
                                                        <?php $__currentLoopData = $dynamic_district; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($district['location_id']); ?>"
                                                        <?php if($district['location_id'] == $user_data['data_users']['district']): ?> <?php echo 'selected'; ?> <?php endif; ?>>
                                                        <?php echo e($district['name']); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <?php if($errors->has('district')): ?>
                                                        <span class="red-text"><?php echo $errors->first('district', ':message'); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="taluka">Taluka</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control mb-2" name="taluka" id="taluka">
                                                <option value="">Select Taluka</option>
                                            </select>
                                            <?php if($errors->has('taluka')): ?>
                                                <span class="red-text"><?php echo $errors->first('taluka', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="village">Village</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control mb-2" name="village" id="village">
                                                <option value="">Select Village</option>
                                            </select>
                                            <?php if($errors->has('village')): ?>
                                                <span class="red-text"><?php echo $errors->first('village', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="pincode">Pincode</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="pincode" id="pincode"
                                                placeholder="" value="<?php echo e($user_data['data_users']['pincode']); ?>"
                                                onkeyup="editvalidatePincode(this.value)">
                                            <span id="edit-message-pincode" class="red-text"></span>
                                            <?php if($errors->has('pincode')): ?>
                                                <span class="red-text"><?php echo $errors->first('pincode', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="is_active"
                                                    id="is_active" value="y" data-parsley-multiple="is_active"
                                                    <?php if($user_data['data_users']['is_active']): ?> <?php echo 'checked'; ?> <?php endif; ?>>
                                                Is Active
                                                <i class="input-helper"></i><i class="input-helper"></i></label>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 text-center mt-3">
                                        <input type="hidden" class="form-check-input" name="edit_id" id="edit_id"
                                            value="<?php echo e($user_data['data_users']['id']); ?>">
                                            <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                                                Save &amp; Update
                                            </button>
                                        
                                        <span><a href="<?php echo e(route('list-users')); ?>"
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
        

            function getState(stateId) {
                $('#state').html('<option value="">Select State</option>');
                if (stateId !== '') {
                    $.ajax({
                        url: '<?php echo e(route('states')); ?>',
                        type: 'GET',
                        data: {
                            stateId: stateId
                        },
                        success: function(response) {
                            if (response.state.length > 0) {
                                $.each(response.state, function(index, state) {
                                    $('#state').append('<option value="' + state
                                        .location_id +
                                        '" selected>' + state.name + '</option>');
                                });
                                $('#state').val(stateId);
                            }
                        }
                    });
                }
            }

            function getStateDistrict(stateId, district_id) {

                $('#district').html('<option value="">Select District</option>');
                if (stateId !== '') {
                    $.ajax({
                        url: '<?php echo e(route('district')); ?>',
                        type: 'GET',
                        data: {
                            stateId: stateId
                        },

                        success: function(response) {
                            if (response.district.length > 0) {
                                $.each(response.district, function(index, district) {
                                    $('#district').append('<option value="' + district
                                        .location_id +
                                        '" selected>' + district.name + '</option>');
                                });
                                if (district_id != null) {
                                    $('#district').val(district_id);
                                } else {
                                    $('#district').val("");
                                }
                            }
                        }
                    });
                }
            }

            function getDistrictTaluka(districtId, taluka_id) {

                $('#taluka').html('<option value="">Select District</option>');
                if (districtId !== '') {
                    $.ajax({
                        url: '<?php echo e(route('taluka')); ?>',
                        type: 'GET',
                        data: {
                            districtId: districtId
                        },

                        success: function(response) {
                            if (response.taluka.length > 0) {
                                $.each(response.taluka, function(index, taluka) {
                                    $('#taluka').append('<option value="' + taluka
                                        .location_id +
                                        '" selected>' + taluka.name + '</option>');
                                });
                                if (taluka_id != null) {
                                    $('#taluka').val(taluka_id);
                                } else {
                                    $('#taluka').val("");
                                }
                            }
                        }
                    });
                }
            }

            function getWorkingDistrictTaluka(districtId, taluka_id) {

                $('#taluka').html('<option value="">Select District</option>');
                if (districtId !== '') {
                    $.ajax({
                        url: '<?php echo e(route('taluka')); ?>',
                        type: 'GET',
                        data: {
                            districtId: districtId
                        },

                        success: function(response) {
                            if (response.taluka.length > 0) {
                                $.each(response.taluka, function(index, taluka) {
                                    $('#user_taluka').append('<option value="' + taluka
                                        .location_id +
                                        '" selected>' + taluka.name + '</option>');
                                });
                                if (taluka_id != null) {
                                    $('#user_taluka').val(taluka_id);
                                } else {
                                    $('#user_taluka').val("");
                                }
                            }
                        }
                    });
                }
            }

            function getTalukaVillage(talukaId, village_id) {

                $('#village').html('<option value="">Select Village</option>');
                if (talukaId !== '') {
                    $.ajax({
                        url: '<?php echo e(route('village')); ?>',
                        type: 'GET',
                        data: {
                            talukaId: talukaId
                        },

                        success: function(response) {
                            if (response.village.length > 0) {
                                $.each(response.village, function(index, village) {
                                    $('#village').append('<option value="' + village
                                        .location_id +
                                        '" selected>' + village.name + '</option>');
                                });
                                if (village_id != null) {
                                    $('#village').val(village_id);
                                } else {
                                    $('#village').val("");
                                }
                            }
                        }
                    });
                }
            }

            function getWorkingTalukaVillage(talukaId, village_id) {

            $('#village').html('<option value="">Select Village</option>');
                if (talukaId !== '') {
                    $.ajax({
                        url: '<?php echo e(route('village')); ?>',
                        type: 'GET',
                        data: {
                            talukaId: talukaId
                        },

                        success: function(response) {
                            if (response.village.length > 0) {
                                $.each(response.village, function(index, village) {
                                    $('#user_village').append('<option value="' + village
                                        .location_id +
                                        '" selected>' + village.name + '</option>');
                                });
                                if (village_id != null) {
                                    $('#user_village').val(village_id);
                                } else {
                                    $('#user_village').val("");
                                }
                            }
                        }
                    });
                }
            }
        </script>

        <script type="text/javascript">
            function submitRegister() {
                document.getElementById("frm_register").submit();
            }
        </script>
        <script>
            function editvalidateMobileNumber(number) {
                var mobileNumberPattern = /^\d*$/;
                var validationMessage = document.getElementById("edit-message");

                if (mobileNumberPattern.test(number)) {
                    validationMessage.textContent = "";
                } else {
                    validationMessage.textContent = "Only numbers are allowed.";
                }
            }
        </script>
        <script>
            function editvalidatePincode(number) {
                var pincodePattern = /^\d*$/;
                var validationMessage = document.getElementById("edit-message-pincode");

                if (pincodePattern.test(number)) {
                    validationMessage.textContent = "";
                } else {
                    validationMessage.textContent = "Only numbers are allowed.";
                }
            }
        </script>

        <script>
            $(document).ready(function() {
                myFunction($("#role_id").val());
                getDistrictTaluka('<?php echo e($user_data['data_users']['district']); ?>', '<?php echo e($user_data['data_users']['taluka']); ?>');
                getWorkingDistrictTaluka('<?php echo e($user_data['data_users']['user_district']); ?>', '<?php echo e($user_data['data_users']['user_taluka']); ?>');
                getTalukaVillage('<?php echo e($user_data['data_users']['taluka']); ?>', '<?php echo e($user_data['data_users']['village']); ?>');
                getWorkingTalukaVillage('<?php echo e($user_data['data_users']['user_taluka']); ?>', '<?php echo e($user_data['data_users']['user_village']); ?>');

                $("#state").on('change', function() {
                    getStateDistrict($("#state").val(),'');
                });

                $("#district").on('change', function() {
                    getDistrictTaluka($("#district").val(),'');
                });

                $("#taluka").on('change', function() {
                    getTalukaVillage($("#taluka").val(),'');
                });
            });

            function myFunction(role_id) {
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
         <script>
            $(document).ready(function() {
                $.validator.addMethod('mypassword', function(value, element) {
                        return this.optional(element) || (value.match(/[a-z]/) && value.match(/[A-Z]/) && value
                            .match(/[0-9]/));
                    },
                    'Password must contain at least one uppercase, lowercase and numeric');

                $("#frm_register1").validate({
                    rules: {

                        u_password: {
                            //required: true,
                            minlength: 6,
                            mypassword: true

                        },
                        password_confirmation: {
                            //required: true,
                            equalTo: "#u_password"
                        },
                    },
                    messages: {
                        u_password: {
                            required: "Please enter your new password",
                            minlength: "Password should be minimum 8 characters"
                        },
                        password_confirmation: {
                            required: "Please Enter Password Same as New Password for Confirmation",
                            equalTo: "Password does not Match! Please check the Password"
                        }
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#show_hide_password a").on('click', function(event) {
                    event.preventDefault();
                    if ($('#show_hide_password input').attr("type") == "text") {
                        $('#show_hide_password input').attr('type', 'password');
                        $('#show_hide_password i').addClass("bx-hide");
                        $('#show_hide_password i').removeClass("bx-show");
                    } else if ($('#show_hide_password input').attr("type") == "password") {
                        $('#show_hide_password input').attr('type', 'text');
                        $('#show_hide_password i').removeClass("bx-hide");
                        $('#show_hide_password i').addClass("bx-show");
                    }
                });
            });
        </script>
  <script>
    $(document).ready(function() {
        // Function to check if all input fields are filled with valid data
        function checkFormValidity() {
            const role_id = $('#role_id').val();
            const f_name = $('#f_name').val();
            const m_name = $('#m_name').val();
            const l_name = $('#l_name').val();
            const number = $('#number').val();
            const designation = $('#designation').val();
            const address = $('#address').val();
            const state = $('#state').val();
            const city = $('#city').val();
            // const user_profile = $('#user_profile').val();
            const pincode = $('#pincode').val();
            
        }

        // Call the checkFormValidity function on file input change
        $('input, #english_image, #marathi_image').on('change', function() {
            checkFormValidity();
            validator.element(this); // Revalidate the file input
        });
        // Initialize the form validation
        var form = $("#regForm");
        // Initialize the form validation
                $("#frm_register").validate({
                    rules: {
                        email: {
                            required: true,
                        //     remote: {
                        //     url: '<?php echo e(route('check-email-exists')); ?>',
                        //     type: 'get',
                        //     data: {
                        //         email: function() {
                        //             return $('#email').val();
                        //         }
                        //     }
                        // },
                            email:true,
                        },
                        password: {
                            required: true,
                        },
                        password_confirmation: {
                            required: true,
                        },
                        f_name: {
                            required: true,
                        },
                        m_name: {
                            required: true,
                        },
                        l_name: {
                            required: true,
                        },
                        number: {
                            required: true,
                            number:true,
                        },
                        aadhar_no: {
                            required: true,
                            // aadharValidation: true,
                        },
                        address: {
                            required: true,
                        },
                        district: {
                            required: true,
                        },
                        taluka: {
                            required: true,
                        },
                        village: {
                            required: true,
                        },
                        user_profile: {
                            required: true,
                        },
                        pincode: {
                            required: true,
                        },

                    },
                    messages: {
                        email: {
                            required: "Please Enter the Eamil",
                            // remote: "This Email already exists."
                        },
                        password: {
                            required: "Please Enter the Password",
                        },
                        password_confirmation: {
                            required: "Please Enter the Confirmation Password",
                        },
                        f_name: {
                            required: "Please Enter the First Name",
                        },
                        m_name: {
                            required: "Please Enter the Middle Name",
                        },
                        l_name: {
                            required: "Please Enter the Last Name",
                        },
                        number: {
                            required: "Please Enter the Number",
                        },
                        aadhar_no: {
                            required: "Please Enter the Aadhar No",
                            // aadharValidation: "Please enter a valid Aadhaar number",
                        },
                        address: {
                            required: "Please Enter the Address",
                        },
                        district: {
                            required: "Please Select District",
                        },
                        taluka: {
                            required: "Please Select Taluka",
                        },
                        village: {
                            required: "Please Select Village",
                        },
                        user_profile: {
                            required: "Upload Media File",
                            accept: "Only png, jpeg, and jpg image files are allowed.", // Update the error message for the accept rule
                        },
                        pincode: {
                            required: "Please Enter the Pincode",
                        },
                    },

                });

        // Submit the form when the "Update" button is clicked
        $("#submitButton").click(function() {
            // Validate the form
            if (form.valid()) {
                form.submit();
            }
        });
    });
</script>    




    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\egs_tablet_watap\resources\views/admin/pages/users/edit-users.blade.php ENDPATH**/ ?>