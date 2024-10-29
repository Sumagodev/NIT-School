<?php $__env->startSection('content'); ?>
    <style>
        .error {
            color: red
        }

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

                            <form class="forms-sample" id="regForm" name="frm_register1" method="post" role="form"
                                action="<?php echo e(route('update-user-profile')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="f_name">First Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="f_name" id="f_name"
                                                placeholder=""
                                                value="<?php if(old('f_name')): ?> <?php echo e(old('f_name')); ?><?php else: ?><?php echo e($user_data->f_name); ?> <?php endif; ?>"
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
                                                placeholder=""
                                                value="<?php if(old('m_name')): ?> <?php echo e(old('m_name')); ?><?php else: ?><?php echo e($user_data->m_name); ?> <?php endif; ?>"
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
                                                placeholder=""
                                                value="<?php if(old('l_name')): ?> <?php echo e(old('l_name')); ?><?php else: ?><?php echo e($user_data->l_name); ?> <?php endif; ?>"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            <?php if($errors->has('l_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('l_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email ID</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="email" id="email"
                                                placeholder="" readonly
                                                value="<?php if(old('email')): ?> <?php echo e(old('email')); ?><?php else: ?><?php echo e($user_data->email); ?> <?php endif; ?>">
                                            <?php if($errors->has('email')): ?>
                                                <span class="red-text"><?php echo $errors->first('email', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>



                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="password form-control mb-2" name="password"
                                                id="password" placeholder=""
                                                value="<?php if(old('password')): ?> <?php echo e(old('password')); ?><?php else: ?><?php echo e(hashpw(password.encode('utf-8'), $user_data->password)); ?> <?php endif; ?>">

                                            <?php if($errors->has('password')): ?>
                                                <span class="red-text"><?php echo $errors->first('password', ':message'); ?></span>
                                            <?php endif; ?>
                                            <span id="togglePassword" class="togglePpassword password-toggle"
                                                onclick="togglePasswordVisibility()">
                                                <i class="fa fa-eye-slash"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" class="password_confirmation form-control mb-2"
                                                id="password_confirmation" name="password_confirmation"
                                                value="<?php if(old('password_confirmation')): ?> <?php echo e(old('password_confirmation')); ?> <?php endif; ?>">

                                            <span id="password-error" class="error-message red-text"></span>
                                            <?php if($errors->has('password_confirmation')): ?>
                                                <span class="red-text"><?php echo $errors->first('password_confirmation', ':message'); ?></span>
                                            <?php endif; ?>
                                            <span id="toggleConfirmPassword"
                                                class="toggleConfirmPpassword password-toggle"
                                                onclick="toggleConfirmPasswordVisibility()">
                                                <i class="fa fa-eye-slash"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="number">Mobile Number</label>&nbsp<span
                                                class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="number" id="number"
                                                pattern="[789]{1}[0-9]{9}"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                                                maxlength="10" minlength="10" placeholder=""
                                                value="<?php if(old('number')): ?> <?php echo e(old('number')); ?><?php else: ?><?php echo e($user_data->number); ?> <?php endif; ?>"
                                                >
                                            <span id="edit-message" class="red-text"></span>
                                            <?php if($errors->has('number')): ?>
                                                <span class="red-text"><?php echo $errors->first('number', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>



                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="user_profile"> Image</label>
                                            <input type="file" name="user_profile" class="form-control mb-2"
                                                id="english_image" accept="image/*" placeholder="image">
                                            <?php if($errors->has('user_profile')): ?>
                                                <div class="red-text"><?php echo $errors->first('user_profile', ':message'); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <img id="english"
                                            src="<?php echo e(Config::get('DocumentConstant.USER_PROFILE_VIEW')); ?><?php echo e($user_data->user_profile); ?>"
                                            class="img-fluid img-thumbnail" width="150">
                                        <img id="english_imgPreview" src="#" alt="pic"
                                            class="img-fluid img-thumbnail" width="150" style="display:none">
                                    </div>

                                    <div class="col-md-12 col-sm-12 text-center">
                                        <input type="hidden" class="form-check-input" name="edit_user_id"
                                            id="edit_user_id" value="<?php echo e($user_data->id); ?>">

                                        <input type="hidden" class="form-check-input" name="old_number" id="old_number"
                                            value="<?php echo e($user_data->number); ?>">

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
            $(document).ready(function() {
                var currentEnglishImage = $("#currentEnglishImage").val();

                // Function to check if all input fields are filled with valid data
                function checkFormValidity() {
                    const f_name = $('#f_name').val();
                    const m_name = $('#m_name').val();
                    const l_name = $('#l_name').val();
                    const number = $('#number').val();
                    const designation = $('#designation').val();
                    const english_image = $('#english_image').val();

                     // Remove spaces from the number input
                      number = number.replace(/\s/g, '');

                    // Update the old PDF values if there are any selected files
                    if (english_image !== currentEnglishImage) {
                        $("#currentEnglishImage").val(english_image);
                    }
                }

                // Call the checkFormValidity function on file input change
                $('input, #english_image').on('change', function() {
                    checkFormValidity();
                    validator.element(this); // Revalidate the file input
                });

                $.validator.addMethod("validImage", function(value, element) {
                    // Check if a file is selected
                    if (element.files && element.files.length > 0) {
                        var extension = element.files[0].name.split('.').pop().toLowerCase();
                        // Check the file extension
                        return (extension == "jpg" || extension == "jpeg" || extension == "png");
                    }
                    return true; // No file selected, so consider it valid
                }, "Only JPG, JPEG, PNG images are allowed.");

                $.validator.addMethod("fileSize", function(value, element, param) {
                    // Check if a file is selected
                    if (element.files && element.files.length > 0) {
                        // Convert bytes to KB
                        const fileSizeKB = element.files[0].size / 1024;
                        return fileSizeKB >= param[0] && fileSizeKB <= param[1];
                    }
                    return true; // No file selected, so consider it valid
                }, "File size must be between {0} KB and {1} KB.");

                // Initialize the form validation
                var form = $("#regForm");
                var validator = form.validate({
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
                        number: {
                            required: true,
                            digits: true, // Validate as digits only
                             minlength: 10, // Minimum length of 10 digits
                        },
                        designation: {
                            required: true,
                        },
                        english_image: {
                            validImage: true,
                            fileSize: [4, 200], // Min 180KB and Max 2MB (2 * 1024 KB)
                        },
                        
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
                        number: {
                            required: "Please Enter the Number",
                            digits: "Please enter a valid 10-digit number",
                            minlength: "Please enter at least 10 digits",
                        },
                        designation: {
                            required: "Please Enter the Designation",
                        },
                        english_image: {
                            validImage: "Only JPG, JPEG, PNG images are allowed.",
                            fileSize: "The file size must be between 4 KB and 200 KB.",
                        },
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });

                // Submit the form when the "Update" button is clicked
                $("#submitButton").click(function() {
                    // Validate the form
                    if (form.valid()) {
                        form.submit();
                    }
                });

                // You can remove the following two blocks if you don't need to display selected images on the page
                $("#english_image").change(function() {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // Display the selected image for English
                        // You can remove this if you don't need to display the image on the page
                        $("#currentEnglishImageDisplay").attr('src', e.target.result);
                        validator.element("#english_image"); // Revalidate the file input
                    };
                    reader.readAsDataURL(this.files[0]);
                });
            });
        </script>     
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\egs_tablet_watap\resources\views/admin/pages/users/edit-user-profile.blade.php ENDPATH**/ ?>