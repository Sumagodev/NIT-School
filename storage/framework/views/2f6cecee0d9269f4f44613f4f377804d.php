

<?php $__env->startSection('content'); ?>
    <?php $data_permission = getPermissionForCRUDPresentOrNot('list-district', session('permissions')); ?>
    <div class="main-panel">
        <div class="content-wrapper mt-7">
            <div class="page-header">
                <h3 class="page-title">
                    Village List <a href="<?php echo e(route('add-village')); ?>" class="btn btn-sm btn-primary ml-3">+ Add</a>
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('list-village')); ?>">Area Management</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Village List </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                <th>Sr. No.</th>
                                                    <th>Taluka Name</th>
                                                    <th>Village Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $data_village; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($item->taluka_name); ?></td>
                                                        <td><?php echo e($item->name); ?></td>
                                                        <td>
                                                            <label class="switch">
                                                                <input data-id="<?php echo e($item->location_id); ?>" type="checkbox"
                                                                    <?php echo e($item->is_active ? 'checked' : ''); ?>

                                                                    class="active-btn btn btn-sm btn-outline-primary m-1"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="<?php echo e($item->is_active ? 'Active' : 'Inactive'); ?>">
                                                                <span class="slider round "></span>
                                                            </label>

                                                        </td>

                                                        <td class="d-flex">
                                                        <?php if(in_array('per_update', $data_permission)): ?>
                                                            <a href="<?php echo e(route('edit-village', base64_encode($item->location_id))); ?>"
                                                                class="edit-btn btn btn-sm btn-outline-primary m-1"><i
                                                                    class="fas fa-pencil-alt"></i></a>
                                                        <?php endif; ?>            
                                                            <!-- <a data-id="<?php echo e($item->location_id); ?>"
                                                                class="show-btn btn btn-sm btn-outline-primary m-1"><i
                                                                    class="fas fa-eye"></i></a> -->
                                                        <?php if(in_array('per_delete', $data_permission)): ?>            
                                                            <a data-id="<?php echo e($item->location_id); ?>"
                                                                class="delete-btn btn btn-sm btn-outline-danger m-1"
                                                                title="Delete Tender"><i class="fas fa-archive"></i></a>
                                                        <?php endif; ?>    

                                                        </td>
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
        <form method="POST" action="<?php echo e(url('/delete-village')); ?>" id="deleteform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="delete_id" id="delete_id" value="">
        </form>
        <form method="GET" action="<?php echo e(url('/edit-village')); ?>" id="editform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="edit_id" id="edit_id" value="">
        </form>
        <form method="POST" action="<?php echo e(url('/update-active-village')); ?>" id="activeform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="active_id" id="active_id" value="">
        </form>

        <!-- content-wrapper ends -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\voter_info_collection\resources\views/admin/pages/area/list-village.blade.php ENDPATH**/ ?>