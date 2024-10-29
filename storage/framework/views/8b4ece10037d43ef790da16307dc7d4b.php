<?php $__env->startSection('content'); ?>

<style>
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0 0 0 / 33%);
        }

        /* Modal content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of modal image */
        .caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add animation (zoom in) */
        .modal-content, .caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes zoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Close button */
        .close {
            position: absolute;
            margin-top: 2%;
            right: 5%;
            right: 35px;
            color: #000;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <div class="main-panel">
        <div class="content-wrapper mt-7">

            <div class="row justify-content-center">
                <div class="col-8 grid-margin ">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-start align-items-center">
                            <h3 class="page-title">
                                Voter Details
                            </h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-end align-items-center">
                            <div>
                                <a href="<?php echo e(route('list-voter-information')); ?>" class="btn btn-sm btn-primary ml-3">Back</a>
                            </div>
                        </div>

                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="row ">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label>Voter Name :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e($data_voter_info['user_data']['voter_f_name']); ?>

                                                   <?php echo e($data_voter_info['user_data']['voter_m_name']); ?>

                                                   <?php echo e($data_voter_info['user_data']['voter_l_name']); ?>

                                            </label>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label>Mobile Number :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e($data_voter_info['user_data']['mobile_number']); ?></label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label>Voter Card Number :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label>
                                                <?php if($data_voter_info['user_data']['voter_id'] != 0): ?>
                                                <?php echo e($data_voter_info['user_data']['voter_id']); ?>

                                                <?php elseif($data_voter_info['user_data']['voter_id'] == 0): ?>
                                                    NA
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label>Taluka :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e(strip_tags($data_voter_info['user_data']['taluka'])); ?></label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label>Village :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e(strip_tags($data_voter_info['user_data']['village'])); ?></label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label>Ward :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php if($data_voter_info['user_data']['ward_no'] != 0): ?>
                                                <?php echo e($data_voter_info['user_data']['ward_no']); ?>

                                                <?php elseif($data_voter_info['user_data']['ward_no'] == 0): ?>
                                                    NA
                                                <?php endif; ?></label>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label>Gender :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e(strip_tags($data_voter_info['user_data']['gender_name'])); ?></label>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label>Cast :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label>
                                            <?php if($data_voter_info['user_data']['cast_name']=='999999'): ?>
                                                    <?php echo e(strip_tags($data_voter_info['user_data']['other_cast_name'])); ?>

                                                <?php else: ?>
                                                    <?php echo e(strip_tags($data_voter_info['user_data']['cast_name'])); ?>

                                                <?php endif; ?>
                                                <!-- <?php echo e(strip_tags($data_voter_info['user_data']['cast_name'])); ?></label> -->
                                        </div>
                                    </div>

                                    <input type="hidden" class="tok" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
                                   


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <script>
            // Function to open modal and display the image
            function openModal(src, caption) {
                const modal = document.getElementById("myModal");
                const modalImg = document.getElementById("img01");
                const captionText = document.getElementById("caption");
                modal.style.display = "block";
                modalImg.src = src;
                captionText.innerHTML = caption;
            }

            // Function to close the modal
            function closeModal() {
                const modal = document.getElementById("myModal");
                modal.style.display = "none";
            }

            // Event listener to close the modal when clicking outside of the image
            window.onclick = function(event) {
                const modal = document.getElementById("myModal");
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>




    <?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/suhasannakande/public_html/resources/views/admin/pages/voterinformation/show-voter-information.blade.php ENDPATH**/ ?>