<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Add Gender
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('list-gender')); ?>">Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Gender</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="<?php echo e(url('add-gender')); ?>" method="POST"
                                enctype="multipart/form-data" id="regForm">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="gender_name">Gender</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="gender_name"
                                                id="gender_name" value="<?php echo e(old('gender_name')); ?>"
                                                placeholder="Enter the Title">
                                            <?php if($errors->has('gender_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('gender_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="marathi_title">लिंग</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="marathi_title"
                                                id="marathi_title" value="<?php echo e(old('marathi_title')); ?>"
                                                placeholder="शीर्षक प्रविष्ट करा">
                                            <?php if($errors->has('marathi_title')): ?>
                                                <span class="red-text"><?php //echo $errors->first('marathi_title', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div> -->
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton" disabled>
                                            Save &amp; Submit
                                        </button>
                                        
                                        <span><a href="<?php echo e(route('list-gender')); ?>"
                                                class="btn btn-sm btn-primary">Back</a></span>
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
                // Function to check if all input fields are filled with valid data
                function checkFormValidity() {
                    const gender_name = $('#gender_name').val();
                    //const marathi_title = $('#marathi_title').val();

                    // Enable the submit button if all fields are valid
                    // if (gender_name && marathi_title) 
                    if (gender_name) {
                        $('#submitButton').prop('disabled', false);
                    } else {
                        $('#submitButton').prop('disabled', true);
                    }
                }

                // Call the checkFormValidity function on input change
                $('input').on('input change', checkFormValidity);

                // Initialize the form validation
                $("#regForm").validate({
                    rules: {
                        gender_name: {
                            required: true,
                        },
                        marathi_title: {
                            required: true,
                        },
                    },
                    messages: {
                        gender_name: {
                            required: "Please Enter the Title",
                        },
                        marathi_title: {
                            required: "कृपया शीर्षक प्रविष्ट करा",
                        },
                    },
                });
            });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\voter_info_collection\resources\views/admin/pages/master/gender/add-gender.blade.php ENDPATH**/ ?>