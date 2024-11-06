
<?php $__env->startSection('content'); ?>
<div class="container my-5 schedule-visit">
            <h2 class="text-center mb-3">SCHEDULE A VISIT</h2>

            <div class="row align-items-center">
                <!-- Map Section -->
                <div class="col-lg-6 mb-lg-0">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.774271384642!2d73.80130937468827!3d20.01798642172724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddea4f04aebdd5%3A0x3511df5d5b6650c4!2sNashik%20Institute%20of%20Technology%20(NIT)%20Nashik!5e0!3m2!1sen!2sin!4v1728880570020!5m2!1sen!2sin"
                            width="100%" height="70%" style="border:0;"
                            allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="col-lg-6 mb-lg-0 mt-5">
                    <div class="form-container p-4 rounded">
                        <h3 class="form-header text-center text-white py-2">Schedule
                            A Visit</h3>
                        <form>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <input type="text" class="form-control"
                                        placeholder="First Name">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <input type="email" class="form-control"
                                        placeholder="Email">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control"
                                        placeholder="Number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <input type="text" class="form-control"
                                        placeholder="Reason For Visit">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control"
                                        placeholder="Meet To">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit"
                                    class="btn btn-orange">Submit
                                    Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('Front.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\NIT_School\resources\views/Front/pages/home/schedulevisit.blade.php ENDPATH**/ ?>