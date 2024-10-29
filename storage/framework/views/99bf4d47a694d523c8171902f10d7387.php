<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>
        <?php echo e(env('APP_NAME')); ?>

    </title>
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
        .error {
            /* color: #d8000c; */
            color: red !important;
            font-size: 14px;
            font-weight: 400 !important;
        }

        .close {
            margin-top: -5px;

        }

    </style>

</head>
<?php //$profile = getProfileImage();
 ?>

<?php 
             //$common_data = App\Http\Controllers\Admin\IndexController::getCommonWebData();
             ?>
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
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="fas fa-bars"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item d-md-flex logo-title">
                        <?php echo e(env('APP_NAME')); ?>

                    </li>
                </ul>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown mr-0">

                    
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            
                            <i class="fas fa-user menu-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            
                            <a 
                            
                            class="dropdown-item edit-user-btn"
                                href="<?php echo e(route('edit-user-profile')); ?>">
                                <i class="fas fa-user text-primary"></i>
                                Profile
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
            <?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            

<?php echo $__env->make('admin.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/sumagodemo/public_html/voter_info_collection/resources/views/admin/layout/master.blade.php ENDPATH**/ ?>