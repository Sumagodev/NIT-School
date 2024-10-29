<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Edit Gender
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('list-gender')); ?>">Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Update Gender
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="<?php echo e(route('update-gender')); ?>" method="post"
                                id="regForm" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="gender_name">Gender</label>&nbsp<span class="red-text">*</span>
                                            <input class="form-control mb-2" name="gender_name" id="gender_name"
                                                placeholder="Enter the Title"
                                                value="<?php if(old('gender_name')): ?> <?php echo e(old('gender_name')); ?><?php else: ?><?php echo e($gender_data->gender_name); ?> <?php endif; ?>">
                                            <?php if($errors->has('gender_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('gender_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="marathi_title">लिंग</label>&nbsp<span class="red-text">*</span>
                                            <input class="form-control mb-2" name="marathi_title" id="marathi_title"
                                                placeholder="शीर्षक प्रविष्ट करा"
                                                value="<?php if(old('marathi_title')): ?> <?php echo e(old('marathi_title')); ?><?php else: ?><?php echo e($gender_data->marathi_title); ?> <?php endif; ?>">
                                            <?php if($errors->has('marathi_title')): ?>
                                                <span class="red-text"><?php //echo $errors->first('marathi_title', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div> -->
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">Save &amp;
                                            Update</button>
                                        
                                        <span><a href="<?php echo e(route('list-gender')); ?>"
                                                class="btn btn-sm btn-primary ">Back</a></span>
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id" class="form-control"
                                    value="<?php echo e($gender_data->id); ?>" placeholder="">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                function checkFormValidity() {
                    const gender_name = $('#gender_name').val();
                    // const marathi_title = $('#marathi_title').val();
                }
                // Call the checkFormValidity function on file input change
                $('input').on('change', function() {
                    checkFormValidity();
                    validator.element(this); // Revalidate the file input
                });
                // Initialize the form validation
                var form = $("#regForm");
                var validator = form.validate({
                    rules: {
                        gender_name: {
                            required: true,
                        },
                        // marathi_title: {
                        //     required: true,
                        // },
                    },
                    messages: {
                        gender_name: {
                            required: "Please Enter the Title",
                        },
                        // marathi_title: {
                        //     required: "कृपया शीर्षक प्रविष्ट करा",
                        // },
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
            });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/suhasannakande/public_html/resources/views/admin/pages/master/gender/edit-gender.blade.php ENDPATH**/ ?>