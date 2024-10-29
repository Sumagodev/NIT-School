<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Village Master
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('list-village')); ?>">Area</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Village Master</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" id="regForm" name="frm_register" method="post" role="form"
                                action="<?php echo e(route('update-village')); ?>" enctype="multipart/form-data">
                                <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
                                <div class="row">
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="taluka">Taluka</label>&nbsp<span class="red-text">*</span>
                                                    <select class="form-control" name="taluka" id="taluka">
                                                        <option value="">Select District</option>
                                                        <?php $__currentLoopData = $dynamic_taluka; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taluka): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($taluka['location_id']); ?>"
                                                        <?php if($taluka['location_id'] == $village_data['taluka_id']): ?> <?php echo 'selected'; ?> <?php endif; ?>>
                                                        <?php echo e($taluka['name']); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <?php if($errors->has('taluka')): ?>
                                                        <span class="red-text"><?php echo $errors->first('taluka', ':message'); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                    

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Village Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="name" id="name"
                                                placeholder="" value="<?php echo e($village_data['name']); ?>"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            <?php if($errors->has('name')): ?>
                                                <span class="red-text"><?php echo $errors->first('name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    

                                    <br>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="is_active"
                                                    id="is_active" value="y" data-parsley-multiple="is_active"
                                                    <?php if($village_data['is_active']): ?> <?php echo 'checked'; ?> <?php endif; ?>>
                                                Is Active
                                                <i class="input-helper"></i><i class="input-helper"></i></label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 user_tbl">
                                        <div id="data_for_role">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 text-center mt-3">
                                        <input type="hidden" class="form-check-input" name="edit_id" id="edit_id"
                                            value="<?php echo e($village_data['location_id']); ?>">
                                            <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                                                Save &amp; Update
                                            </button>
                                        
                                        <span><a href="<?php echo e(route('list-village')); ?>"
                                                class="btn btn-sm btn-primary ">Back</a></span>
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
            const taluka = $('#taluka').val();
            const name = $('#name').val();
            
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
                        taluka: {
                            required: true,
                        },
                        name: {
                            required: true,
                        },
                        

                    },
                    messages: {
                        taluka: {
                            required: "Please Select Taluka",
                        },
                        name: {
                            required: "Please Enter the Village Name",
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



<script>
    $(document).ready(function() {
        // Function to check if all input fields are filled with valid data
        function checkFormValidity() {
            const taluka = $('#taluka').val();
            const name = $('#name').val();

            // Enable the submit button if all fields are valid
            if (taluka && name) {
                $('#submitButton').prop('disabled', false);
            } else {
                $('#submitButton').prop('disabled', true);
            }
        }

        // Call the checkFormValidity function on input change
        $('input,textarea, select, #user_profile').on('input change',
            checkFormValidity);

    });
</script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\voter_info_collection\resources\views/admin/pages/area/edit-village.blade.php ENDPATH**/ ?>