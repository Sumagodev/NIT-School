<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

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
        .hr_css{
            color:black;
        }
        .submit_css{
            /* border-color:#303C7A; */
            background-color:#303C7A;
            padding-top:6px;
            padding-bottom:6px;
            padding-left:20px;
            padding-right:20px;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
            color:white;
        }
        .submit_css:hover{
            /* border-color:#0069d9; */
            background-color:#0069d9;
            padding-top:6px;
            padding-bottom:6px;
            padding-left:20px;
            padding-right:20px;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
            color:white;
        }
        .clear_css{
            border-color:#6C757D;
            background-color:#6C757D;
            padding-top:6px;
            padding-bottom:6px;
            padding-left:20px;
            padding-right:20px;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
            color:white;
        }
        .form-select .error {
            color: black; !important
        }
    </style>
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                Kaizen Management
                </h3>
            </div>
            <hr>
            <h3 class="page-title">
            Employee Details
            </h3>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card mt-4">
                        <div class="card-body">
                            <form class="forms-sample" id="frm_register" name="frm_register" method="post" role="form"
                                action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label class="label_css" for="plant">Plant</label>
                                            <select class="form-control form-select" name="plant" id="plant">
                                                <option value="">Select Plant</option>
                                                <option value="Chakan">Chakan</option>
                                                <option value="Pantnagar">Pantnagar</option>
                                                <option value="Pithampur">Pithampur</option>
                                                <option value="Jamshedpur">Jamshedpur</option>
                                                <option value="IPD-Jamshedpur">IPD-Jamshedpur</option>
                                            </select>
                                            <?php if($errors->has('plant')): ?>
                                                <span class="red-text"><?php echo $errors->first('plant', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="employee_number">Employee Number</label>
                                            <input type="text" class="form-control" name="employee_number" id="employee_number"
                                                placeholder="Employee Number" value="<?php echo e(old('employee_number')); ?>">
                                            <?php if($errors->has('employee_number')): ?>
                                                <span class="red-text"><?php echo $errors->first('employee_number', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="employee_name">Employee Name/Kaizen Suggestor</label>
                                            <input type="text" class="form-control" name="employee_name" id="employee_name"
                                                placeholder="Enter Your First Name & Last Name. Ex : Sameer Patil" value="<?php echo e(old('employee_name')); ?>"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            <?php if($errors->has('employee_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('employee_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="team_member">Kaizen Team-Members(Only 2 members allow)</label>
                                            <input type="text" class="form-control" name="team_member" id="team_member"
                                                placeholder="Type" value="<?php echo e(old('team_member')); ?>">
                                            <?php if($errors->has('team_member')): ?>
                                                <span class="red-text"><?php echo $errors->first('team_member', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="employee_department">Employee Function-Area/Department</label>
                                            <select class="form-control form-select" name="employee_department" id="employee_department">
                                                <option value="">Select</option>
                                                <option value="C&D- PRODUCTION">C&D- PRODUCTION</option>
                                                <option value="MOLDING - PRODUCTION">MOLDING - PRODUCTION</option>
                                                <option value="QUALITY">QUALITY</option>
                                                <option value="MAINTENANCE">MAINTENANCE</option>
                                                <option value="HR & ADMIN">HR & ADMIN</option>
                                                <option value="SAFETY">SAFETY</option>
                                                <option value="R&D">R&D</option>
                                                <option value="ENGGINERING">ENGGINERING</option>
                                                <option value="PURCHASE">PURCHASE</option>
                                                <option value="FINANCE">FINANCE</option>
                                                <option value="STORE">STORE</option>
                                                <option value="DISPATCH">DISPATCH</option>
                                                <option value="MARKETING">MARKETING</option>
                                                <option value="PAINT SHOP">PAINT SHOP</option>
                                                <option value="PPC">PPC</option>
                                                <option value="Tool Room">Tool Room</option>
                                                <option value="Welding Cabin">Welding Cabin</option>
                                            </select>
                                            <?php if($errors->has('employee_department')): ?>
                                                <span class="red-text"><?php echo $errors->first('employee_department', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    </div>
                                    <hr class="hr_css">

                                    <h3 class="page-title mb-4">
                                        Kaizen Management Details
                                    </h3>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label>Choose Kaizen Type</label>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="P - Productivity">&nbsp;&nbsp; P - Productivity
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="Q - Quality">&nbsp;&nbsp; Q - Quality
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="C - Cost">&nbsp;&nbsp; C - Cost
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row mt-2">
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="D - Delivery">&nbsp;&nbsp; D - Delivery
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="S - Safety">&nbsp;&nbsp; S - Safety
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="M - Moral">&nbsp;&nbsp; M - Moral
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row mt-2">
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="Sus - Sustainability">&nbsp;&nbsp; Sus - Sustainability
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="5S">&nbsp;&nbsp; 5S
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="kaizen_theme">Kaizen Theme ( Type in <select class="form-selectt" name="add_before_image" id="add_before_image">
                                                    <option value="English">English</option>
                                                    <option value="हिंदी">हिंदी</option>
                                                </select> )</label>
                                                <textarea type="text" class="form-control" name="kaizen_theme" id="kaizen_theme"
                                                    placeholder="Kaizen Theme" value="<?php echo e(old('kaizen_theme')); ?>"></textarea>
                                                <?php if($errors->has('kaizen_theme')): ?>
                                                    <span class="red-text"><?php echo $errors->first('kaizen_theme', ':message'); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group mt-4">
                                                <label for="before_kaizen_cond">Before Kaizen Condition(Existing Problem)</label>
                                                <input type="text" class="form-control" name="before_kaizen_cond" id="before_kaizen_cond"
                                                    placeholder="Before Kaizen Condition(Existing Problem)" value="<?php echo e(old('before_kaizen_cond')); ?>"
                                                    oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                                <?php if($errors->has('before_kaizen_cond')): ?>
                                                    <span class="red-text"><?php echo $errors->first('before_kaizen_cond', ':message'); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group mt-4">
                                                <label for="want_before_kaizen_image">Do you want to add before Kaizen image? (Optional)</label>
                                                <select class="form-control form-select" name="want_before_kaizen_image" id="want_before_kaizen_image">
                                                    <option value="">Select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>want_before_kaizen_image
                                                </select>
                                                <?php if($errors->has('want_before_kaizen_image')): ?>
                                                    <span class="red-text"><?php echo $errors->first('want_before_kaizen_image', ':message'); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                        <div id="kaizen-image-section" class="col-md-6" style="display: none;">
                                            <div class="form-group">
                                                <label>Before Kaizen Image</label><br>
                                                <input type="file" name="before_kaizen_image" accept="image/*" onchange="previewImage(event)" required="required">
                                                <!-- <input type="file" name="image_name" id="image_name" required="required"> -->
                                            </div>
                                        </div>
                                        <div id="kaizen-image-section1" class="col-md-6" style="display: none;">
                                            <div class="form-group">
                                            <img id="preview" width="150" height="150" alt="Image Preview" />
                                            <input type="hidden" id="base64" name="base64_image">
                                                <!-- <img src="uploads/packages/" width="50%"> -->
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="after_kaizen_cond">After Kaizen Condition</label>
                                                <input type="text" class="form-control" name="after_kaizen_cond" id="after_kaizen_cond"
                                                    placeholder="After Kaizen Condition" value="<?php echo e(old('after_kaizen_cond')); ?>"
                                                    oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                                <?php if($errors->has('after_kaizen_cond')): ?>
                                                    <span class="red-text"><?php echo $errors->first('after_kaizen_cond', ':message'); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="add_after_image">Do you want to Add after Kaizen-Image? (Optional)</label>
                                                <select class="form-control form-select" name="add_after_image2" id="add_after_image2">
                                                    <option value="">Select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <?php if($errors->has('add_after_image')): ?>
                                                    <span class="red-text"><?php echo $errors->first('add_after_image', ':message'); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                            <div id="after-kaizen-image-section" class="col-md-6" style="display: none;">
                                                <div class="form-group">
                                                    <label>After Kaizen Image</label><br>
                                                <input type="file" name="after_kaizen_image" accept="image/*" onchange="afterpreviewImage(event)" required="required">
                                                    <!-- <input type="file" name="image_name2" id="image_name2" required="required"> -->
                                                </div>
                                            </div>
                                            <div id="after-kaizen-image-section1" class="col-md-6" style="display: none;">
                                                <div class="form-group">
                                            <img id="afterpreview" width="150" height="150" alt="Image Preview" />
                                            <input type="hidden" id="afterbase64" name="afterbase64_image">
                                            
                                                    <!-- <img src="uploads/packages/" width="50%"> -->
                                                </div>
                                            </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="add_after_image">Benefits</label><br>
                                                <input type="checkbox" name="benefits[]" id="qualitativeCheck" value="Qualitative">&nbsp;&nbsp; Qualitative &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="benefits[]" id="quantitativeCheck" value="Quantitative">&nbsp;&nbsp; Quantitative
                                                <?php if($errors->has('add_after_image')): ?>
                                                    <span class="red-text"><?php echo $errors->first('add_after_image', ':message'); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div id="qualitativeDiv" class="col-lg-6 col-md-6 col-sm-6" style="display: none;">
                                            <div class="form-group">
                                                <label for="qualitative_details">Qualitative Details</label>
                                                <input type="text" class="form-control" name="qualitative_details" id="qualitative_details"
                                                    placeholder="Qualitative Details" value="<?php echo e(old('before_kaizen_cond')); ?>"
                                                    >
                                                <?php if($errors->has('qualitative_details')): ?>
                                                    <span class="red-text"><?php echo $errors->first('qualitative_details', ':message'); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                            <div id="quantitativeDiv1" style="display: none;" class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="qualitative_details_annual">Quantitative Details(Annual Benefit)</label>
                                                    <input type="text" class="form-control" name="qualitative_details_annual" id="qualitative_details_annual"
                                                        placeholder="Qualitative Details" value="<?php echo e(old('qualitative_details_annual')); ?>"
                                                        >
                                                    <?php if($errors->has('qualitative_details')): ?>
                                                        <span class="red-text"><?php echo $errors->first('qualitative_details_annual', ':message'); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div id="quantitativeDiv" style="display: none;" class="col-lg-2 col-md-2 col-sm-2">
                                                <div class="form-group">
                                                    <label class="label_css" for="plant">Units</label>
                                                    <select class="form-control form-select" name="units" id="units">
                                                        <option value="Nos">Nos</option>
                                                        <option value="Nos of Kits">Nos of Kits</option>
                                                        <option value="Rupees">Rupees</option>
                                                        <option value="Sq. Ft">Sq. Ft</option>
                                                        <option value="PPM">PPM</option>
                                                        <option value="%">%</option>
                                                        <option value="days">days</option>
                                                        <option value="hours">hours</option>
                                                        <option value="IPTV">IPTV</option>
                                                        <option value="kg">kg</option>
                                                        <option value="tun">tun</option>
                                                        <option value="litre">litre</option>
                                                        <option value="miniutes">miniutes</option>
                                                    </select>
                                                    <?php if($errors->has('units')): ?>
                                                        <span class="red-text"><?php echo $errors->first('units', ':message'); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                        </div>

                                        <label for="horizontal_deployment">Horizontal Deployement/short version</label>
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <select class="form-control form-select" name="horizontal_deployment" id="horizontal_deployment">
                                                    <option value="">Select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <?php if($errors->has('horizontal_deployment')): ?>
                                                    <span class="red-text"><?php echo $errors->first('horizontal_deployment', ':message'); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div id="div_horizontal_deployment_text" class="col-lg-4 col-md-4 col-sm-4" style="display: none;">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="horizontal_deployment_text" id="horizontal_deployment_text"
                                                    placeholder="Horizontal Deployement/short version" value="<?php echo e(old('horizontal_deployment_text')); ?>"
                                                    oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                                <?php if($errors->has('horizontal_deployment_text')): ?>
                                                    <span class="red-text"><?php echo $errors->first('horizontal_deployment_text', ':message'); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div id="div_horizontal_deployment_blank" class="col-lg-4 col-md-4 col-sm-4" style="display: block;">
                                        </div>

                                        <!-- <div class="col-lg-4 col-md-4 col-sm-4">
                                        </div> -->

                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label for="add_after_image">Kaizen Standardization</label><br>
                                                <input type="checkbox" name="kaizen_type[]" id="kaizen_type" value="Document">&nbsp;&nbsp; Document
                                                <?php if($errors->has('add_after_image')): ?>
                                                    <span class="red-text"><?php echo $errors->first('add_after_image', ':message'); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div id="div_select_documents" class="col-lg-4 col-md-4 col-sm-4 mt-3" style="display: none;">
                                            <div class="form-group">
                                                <select class="select2" multiple="multiple" data-placeholder="Select Douments" style="width: 100%;" name="select_documents[]" id="select_documents" required="required">
                                                <option value="Procedure">Procedure</option>
                                                <option value="Standard">Standard</option>
                                                <option value="SOP">SOP</option>
                                                <option value="Control plan">Control plan</option>
                                                <option value="Drawing">Drawing</option>
                                                <option value="PFD">PFD</option>
                                                <option value="HIRA study">HIRA study</option>
                                                <option value="Aspect Impact study">Aspect Impact study</option>
                                                <option value="FMEA">FMEA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    

                                    <div class="col-md-12 col-sm-12 text-center mt-4 mb-4">
                                        <button type="submit" class="submit_css" id="submitButton">
                                            Submit
                                        </button>
                                        <button type="reset" class="clear_css">Clear</button>
                                      
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
                    const email = $('#email').val();
                    const password = $('#password').val();
                    const password_confirmation = $('#password_confirmation').val();
                    const f_name = $('#f_name').val();
                    const m_name = $('#m_name').val();
                    const l_name = $('#l_name').val();
                    const number = $('#number').val();
                    const address = $('#address').val();
                    const taluka = $('#taluka').val();
                    const village = $('#village').val();

                    // Enable the submit button if all fields are valid
                    // if (email && password && password_confirmation && f_name && m_name && l_name && number && address
                    //     && taluka && village) {
                    //     $('#submitButton').prop('disabled', false);
                    // } else {
                    //     $('#submitButton').prop('disabled', true);
                    // }
                }

                // Call the checkFormValidity function on input change
                $('input,textarea, select, #user_profile').on('input change',
                    checkFormValidity);


               

                

                // Initialize the form validation
                $("#frm_register").validate({
                    rules: {
                        plant: {
                            required: true,
                        },
                        employee_number: {
                            required: true,
                        },
                        employee_name: {
                            required: true,
                        },
                        team_member: {
                            required: true,
                        },
                        employee_department: {
                            required: true,
                        },
                        // aadhar_no: {
                        //     required: true,
                        //     aadharNumber: true
                        // },
                        kaizen_type: {
                            required: true,
                        },
                        kaizen_theme: {
                            required: true,
                        },
                        before_kaizen_cond: {
                            required: true,
                        },
                        after_kaizen_cond: {
                            required: true,
                        },
                        // user_profile: {
                        //     required: true,
                        // },
                        benefits: {
                            required: true,
                        },

                    },
                    messages: {
                        plant: {
                            required: "The plant field is required.",
                        },
                        employee_number: {
                            required: "The employee number field is required.",
                        },
                        employee_name: {
                            required: "The employee name field is required.",
                        },
                        team_member: {
                            required: "The kaizen team field is required.",
                        },
                        employee_department: {
                            required: "The employee function field is required.",
                        },
                        // aadhar_no: {
                        //     required: "Please Enter the Aadhar No",
                        //     pattern: "Please enter a valid Aadhar number (e.g., 1234 5678 9101)", // Custom error message for Aadhar card number validation

                        // },
                        kaizen_type: {
                            required: "The kaizen type field is required.",
                        },
                        kaizen_theme: {
                            required: "The kaizen theme field is required.",
                        },
                        before_kaizen_cond: {
                            required: "The before kaizen condition field is required.",
                        },
                        after_kaizen_cond: {
                            required: "The after kaizen condition field is required.",
                        },
                        // user_profile: {
                        //     required: "Upload Media File",
                        //     accept: "Only png, jpeg, and jpg image files are allowed.", // Update the error message for the accept rule
                        // },
                        benefits: {
                            required: "The benefits field is required.",
                        },
                    },

                });
            });

          
        </script>
        <script>
            document.getElementById('want_before_kaizen_image').addEventListener('change', function () {
                var kaizenSection = document.getElementById('kaizen-image-section');
                var kaizenimagesection1 = document.getElementById('kaizen-image-section1');
                if (this.value === 'Yes') {
                    kaizenSection.style.display = 'block'; // Show the section
                    kaizenimagesection1.style.display = 'block'; // Show the section
                } else {
                    kaizenSection.style.display = 'none';  // Hide the section
                    kaizenimagesection1.style.display = 'none';  // Hide the section
                }
            });
        </script>

        <script>
            document.getElementById('add_after_image2').addEventListener('change', function () {
                var kaizenSection = document.getElementById('after-kaizen-image-section');
                var kaizenSection1 = document.getElementById('after-kaizen-image-section1');
                if (this.value === 'Yes') {
                    kaizenSection.style.display = 'block'; // Show the section
                    kaizenSection1.style.display = 'block'; // Show the section
                } else {
                    kaizenSection.style.display = 'none';  // Hide the section
                    kaizenSection1.style.display = 'none';  // Hide the section
                }
            });
        </script>

        <script>
// Wait until the DOM is fully loaded
document.addEventListener("DOMContentLoaded", function() {

// Get the checkboxes and div elements
var qualitativeCheck = document.getElementById("qualitativeCheck");
var quantitativeCheck = document.getElementById("quantitativeCheck");

var qualitativeDiv = document.getElementById("qualitativeDiv");quantitativeDiv1
var quantitativeDiv = document.getElementById("quantitativeDiv");
var quantitativeDiv1 = document.getElementById("quantitativeDiv1");

// Add event listeners for when checkboxes are clicked
qualitativeCheck.addEventListener("change", function() {
    if (qualitativeCheck.checked) {
        qualitativeDiv.style.display = "block";  // Show the qualitative details
    } else {
        qualitativeDiv.style.display = "none";   // Hide the qualitative details
    }
});

quantitativeCheck.addEventListener("change", function() {
    if (quantitativeCheck.checked) {
        quantitativeDiv.style.display = "block";  // Show the quantitative details
        quantitativeDiv1.style.display = "block";  // Show the quantitative details
    } else {
        quantitativeDiv.style.display = "none";   // Hide the quantitative details
        quantitativeDiv1.style.display = "none";   // Hide the quantitative details
    }
});

});

        </script>

        <script>
            document.getElementById('horizontal_deployment').addEventListener('change', function () {
                var horizontalDeploymentTextDiv = document.getElementById('div_horizontal_deployment_text');
                var div_horizontal_deployment_blank = document.getElementById('div_horizontal_deployment_blank');
                if (this.value === 'Yes') {
                    horizontalDeploymentTextDiv.style.display = 'block'; // Show the text input field
                    div_horizontal_deployment_blank.style.display = 'none';  // Hide the text input field
                } else {
                    horizontalDeploymentTextDiv.style.display = 'none';  // Hide the text input field
                    div_horizontal_deployment_blank.style.display = 'block';  // Hide the text input field
                }
            });
        </script>
        <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>

<script>
    document.querySelectorAll('input[name="kaizen_type[]"]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function () {
            var selectDocumentsDiv = document.getElementById('div_select_documents');
            
            // Check if any of the checkboxes is checked
            var isChecked = Array.from(document.querySelectorAll('input[name="kaizen_type[]"]:checked')).some(function(checkedBox) {
                return checkedBox.value === 'Document';
            });

            if (isChecked) {
                selectDocumentsDiv.style.display = 'block'; // Show the document selection
            } else {
                selectDocumentsDiv.style.display = 'none';  // Hide the document selection
            }
        });
    });
</script>

<script>
        // Function to preview the image before uploading
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById('preview');
                output.src = reader.result;
                document.getElementById('base64').value = reader.result; // Set Base64 string in hidden input
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

<script>
        // Function to preview the image before uploading
        function afterpreviewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById('afterpreview');
                output.src = reader.result;
                document.getElementById('afterbase64').value = reader.result; // Set Base64 string in hidden input
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\laravel_new_work\resources\views/admin/pages/users/add-admin.blade.php ENDPATH**/ ?>