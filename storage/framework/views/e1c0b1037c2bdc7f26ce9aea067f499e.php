<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper mt-7">

            <div class="row justify-content-center">
                <div class="col-10 grid-margin ">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-start align-items-center">
                            <h3 class="page-title">
                                Cast
                            </h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-end align-items-center">
                            <div>
                                <a href="<?php echo e(route('list-village')); ?>" class="btn btn-sm btn-primary ml-3">Back</a>
                            </div>
                        </div>

                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">

                                    <div class="row ">
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                            <label>Taluka Name :</label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">

                                            <label><?php echo e($data_village_info['user']['taluka_name']); ?></label>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                            <label>Village Name :</label>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <label><?php echo e($data_village_info['user']['name']); ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    <div class="table-responsive">
                                                    <h5 class="d-flex justify-content-center mb-4">Ward Details</h5>
                                                        <table id="order-listing" class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr. No.</th>
                                                                    <th>Ward Name</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                
                                                            <?php $__currentLoopData = $data_village_info['ward_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><?php echo e($loop->iteration); ?></td>
                                                                    <td><?php echo e($item['ward_name']); ?></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
 
 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/suhasannakande/public_html/resources/views/admin/pages/area/show-village.blade.php ENDPATH**/ ?>