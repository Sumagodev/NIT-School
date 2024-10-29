<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Add Cast
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('list-casts')); ?>">Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cast</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="<?php echo e(url('add-casts')); ?>" method="POST"
                                enctype="multipart/form-data" id="regForm">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="cast">Cast</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="cast_name"
                                                id="cast_name" value="<?php echo e(old('cast_name')); ?>"
                                                placeholder="Enter the Title">
                                            <?php if($errors->has('cast_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('cast_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton" disabled>
                                            Save &amp; Submit
                                        </button>
                                        
                                        <span><a href="<?php echo e(route('list-casts')); ?>"
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
                    const castName = $('#cast_name').val();
                    //const marathi_title = $('#marathi_title').val();

                    // Enable the submit button if all fields are valid
                    // if (cast_name && marathi_title) 
                    if (castName) {
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
                        cast_name: {
                            required: true,
                        },
                    },
                    messages: {
                        cast_name: {
                            required: "Please Enter the Title",
                        },
                    },
                });
            });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\voter_info_collection\resources\views/admin/pages/master/casts/add-cast.blade.php ENDPATH**/ ?>