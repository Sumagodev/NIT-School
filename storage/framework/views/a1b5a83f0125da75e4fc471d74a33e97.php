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

        .page-header-css{
            background-color: #80808024;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
        }

        .home_btn_css{
            border-color: lightgrey;
            background-color: white;
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 20px;
            padding-right: 20px;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
            color: black;
            margin-left: -15px;
            margin-top: 3px;
        }
        

    </style>
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <!-- <div class="page-header">
                <h3 class="page-title">
                Kaizen Management
                </h3>
            </div> -->
            <!-- <hr> -->
            <!-- <h3 class="page-title">
            Employee Details  
            </h3> -->
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card mt-4">
                    <div class="page-header-css">
                                <h3 class="page-title">
                                A Div Achievement
                                </h3>
                            </div>
                        <div class="card-body">
                            <form class="forms-sample" id="frm_register" name="frm_register" method="post" role="form"
                                action="<?php echo e(route('devision-achievement')); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />

                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <label for="achivement_date">Date</label>
                                            <input type="date" class="form-control" name="achivement_date" id="achivement_date"
                                                placeholder="date" value="<?php echo e(old('achivement_date')); ?>">
                                            <?php if($errors->has('employee_number')): ?>
                                                <span class="red-text"><?php echo $errors->first('achivement_date', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <label for="section_id">Section Id</label>
                                            <input type="text" class="form-control" name="section_id" id="section_id"
                                                placeholder="section id" value="<?php echo e(old('section_id')); ?>">
                                            <?php if($errors->has('section_id')): ?>
                                                <span class="red-text"><?php echo $errors->first('section_id', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label class="label_css" for="shift_name">Shift Name</label>
                                            <select class="form-control form-select" name="shift_name" id="shift_name">
                                                <option value="">Select Shift</option>
                                                <option value="First">First</option>
                                                <option value="Second">Second</option>
                                                <option value="Third">Third</option>
                                            </select>
                                            <?php if($errors->has('shift_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('shift_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label class="label_css" for="shift_officer">Shift Officer</label>
                                            <select class="form-control form-select" name="shift_officer" id="shift_officer">
                                                <option value="">Select Shift Officer</option>
                                                <option value="Ram">Ram</option>
                                                <option value="Sham">Sham</option>
                                                <option value="Nitin">Nitin</option>
                                            </select>
                                            <?php if($errors->has('shift_officer')): ?>
                                                <span class="red-text"><?php echo $errors->first('shift_officer', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-1 col-md-1 col-sm-1">
                                        <div class="form-group">
                                            <label class="label_css" for="shift_officer"></label>
                                            <button class="home_btn_css">Home</button>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr_css">
                            </div>
                                    
                            <div class="col-12">
                                        <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="table-responsive" style="overflow-x: auto;">
                                            <table id="" class="table table-bordered nowrap" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <!-- <th><b>Sr. No.</b></th> -->
                                                        <th><b>Machine Id</b></th>
                                                        <th><b>Product Id</b></th>
                                                        <th><b>AQ</b></th>
                                                        <th><b>AT</b></th>
                                                        <th><b>PQ</b></th>
                                                        <th><b>PT</b></th>
                                                        <th><b>Cap</b></th>
                                                        <th><b>CT</b></th>
                                                        <th><b>Add</b></th>
                                                        <th><b>Remove</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="dynamic-rows">
                                                <!-- <td>1</td> -->
                                                <td><input type="text" class="form-control" name="machine_id[]" id="machine_id"
                                                placeholder="" value="<?php echo e(old('machine_id')); ?>"></td>
                                                <td>
                                                    <select class="form-control form-select" name="product_id[]" id="product_id">
                                                        <option value="">Select Product</option>
                                                        <?php $__currentLoopData = $products_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($pdata->id); ?>"><?php echo e($pdata->product_name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control aq_data" name="aq_data[]" id="aq_data"
                                                placeholder="" value="<?php echo e(old('aq_data')); ?>"></td>
                                                <td><input type="text" class="form-control at_data" name="at_data[]" id="at_data"
                                                placeholder="" value="<?php echo e(old('at_data')); ?>"></td>
                                                <td><input type="text" class="form-control pq_data" name="pq_data[]" id="pq_data"
                                                placeholder="" value="<?php echo e(old('pq_data')); ?>"></td>
                                                <td><input type="text" class="form-control pt_data" name="pt_data[]" id="pt_data"
                                                placeholder="" value="<?php echo e(old('pt_data')); ?>"></td>
                                                <td><input type="text" class="form-control cap_data" name="cap_data[]" id="cap_data"
                                                placeholder="" value="1"></td>
                                                <td><input type="text" class="form-control ct_data" name="ct_data[]" id="ct_data"
                                                placeholder="" value="1.50"></td>
                                                <td><button type="button" class="btn btn-primary add-more">Add More</button></td>
                                                <td><button type="button" class="btn btn-danger remove-row">X</button></td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    

                                    <div class="col-md-12 col-sm-12 text-center mt-4 mb-4">
                                        <button type="reset" class="clear_css">Reset</button>
                                        <button type="submit" class="submit_css" id="submitButton">
                                            Submit
                                        </button>
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
                $(document).ready(function () {
                    // Add new row when "Add More" is clicked
                    $(document).on('click', '.add-more', function () {
                        var newRow = `
                            <tr class="row-item">
                                <td><input type="text" class="form-control" name="machine_id[]" placeholder=""></td>
                                <td>
                                    <select class="form-control form-select" name="product_id[]">
                                        <option value="">Select Product</option>
                                        <?php $__currentLoopData = $products_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($pdata->id); ?>"><?php echo e($pdata->product_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control aq_data" name="aq_data[]" id="aq_data"
                                                placeholder="" value=""></td>
                                <td><input type="text" class="form-control at_data" name="at_data[]" id="at_data"
                                                placeholder="" value=""></td>
                                <td><input type="text" class="form-control pq_data" name="pq_data[]" id="pq_data"
                                                placeholder="" value=""></td>
                                <td><input type="text" class="form-control pt_data" name="pt_data[]" id="pt_data"
                                                placeholder="" value=""></td>
                                <td><input type="text" class="form-control cap_data" name="cap_data[]" id="cap_data"
                                                placeholder="" value="1"></td>
                                <td><input type="text" class="form-control ct_data" name="ct_data[]" id="ct_data"
                                                placeholder="" value="1.50"></td>
                                <td><button type="button" class="btn btn-primary add-more">Add More</button></td>
                                <td><button type="button" class="btn btn-danger remove-row">X</button></td>


                                
                            </tr>`;
                        
                        // Append the new row to the table
                        $('#dynamic-rows').append(newRow);
                    });

                    // Remove row when "Remove" is clicked
                    $(document).on('click', '.remove-row', function () {
                        // Ensure at least one row remains (optional, you can remove this check)
                        if ($('#dynamic-rows .row-item').length > 1) {
                            $(this).closest('.row-item').remove();
                        } else {
                            alert('At least one row is required.');
                        }
                    });
                });

            </script>

<script>

$('.aq_data, .ct_data').on('keyup', function() {

    var thisval = $(this).val();
    var currentRow = $(this).closest("tr");

    var aq_data = currentRow.find('input[name="aq_data[]"]').val();
    var ct_data = currentRow.find('input[name="ct_data[]"]').val();
    
    if(aq_data > 0 && ct_data > 0)
{
   var at_data=aq_data * ct_data;
}else{
    var at_data='0';
}

   currentRow.find('input[name="at_data[]"]').val(at_data);
});
</script>

<script>

$('.pq_data, .ct_data').on('keyup', function() {

    var thisval = $(this).val();
    var currentRow = $(this).closest("tr");

    var pq_data = currentRow.find('input[name="pq_data[]"]').val();
    var ct_data = currentRow.find('input[name="ct_data[]"]').val();
    
    if(pq_data > 0 && ct_data > 0)
        {
        var pt_data=pq_data * ct_data;
        }else{
            var pt_data='0';
        }

   currentRow.find('input[name="pt_data[]"]').val(pt_data);
});
</script>

        <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>





    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\cet_project\resources\views/admin/pages/products/add-div-achievement.blade.php ENDPATH**/ ?>