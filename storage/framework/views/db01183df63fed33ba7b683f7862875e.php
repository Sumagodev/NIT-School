
<?php $__env->startSection('content'); ?>
<div class="container offer-section">
            <h2 class="text-center">WHAT WE OFFER</h2>
            <!-- Bootstrap row to keep image and feature list side by side -->
            <div class="row align-items-center">
                <!-- Image Section -->
                <div class="col-md-6">
                    <img src="<?php echo e(('public/assets/images/facilities2.png')); ?>" alt="facilities-img"
                        class="img-fluid  facility-img align-items-start">
                </div>

                <!-- Features Section -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="<?php echo e(('public/assets/images/transport.png')); ?>"
                                        alt="Transport">
                                </div>
                                <div class="feature-text ">Transport</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="<?php echo e(('public/assets/images/subject.png')); ?>"
                                        alt="Special Subjects">
                                </div>
                                <div class="feature-text">Special Subjects</div>
                            </div>
                        </div>

                        <!-- Add margin between rows -->
                        <div class="w-100"></div>

                        <div class="col-12 col-md-6 mb-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="<?php echo e(('public/assets/images/meal.png')); ?>"
                                        alt="Meals">
                                </div>
                                <div class="feature-text">Meals</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="<?php echo e(('public/assets/images/playground.png')); ?>"
                                        alt="Playground">
                                </div>
                                <div class="feature-text">Playground</div>
                            </div>
                        </div>

                        <!-- Add margin between rows -->
                        <div class="w-100"></div>

                        <div class="col-12 col-md-6 mb-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="<?php echo e(('public/assets/images/laboratory.png')); ?>"
                                        alt="Laboratories">
                                </div>
                                <div class="feature-text">Well
                                    Equipped<br>Laboratories</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="<?php echo e(('public/assets/images/library.png')); ?>"
                                        alt="Library">
                                </div>
                                <div class="feature-text">Library &<br>Learning
                                    Resource</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('Front.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cet_project\resources\views/Front/pages/home/facilities.blade.php ENDPATH**/ ?>