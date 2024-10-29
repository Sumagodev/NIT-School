<?php $__env->startSection('content'); ?>
    <?php $data_permission = getPermissionForCRUDPresentOrNot('list-gender', session('permissions'));
    ?>
    <div class="main-panel">
        <div class="content-wrapper mt-7">
            <div class="page-header">
                <h3 class="page-title">
                    Gender List
                    <?php if(in_array('per_add', $data_permission)): ?>
                        <a href="<?php echo e(route('add-gender')); ?>" class="btn btn-sm btn-primary ml-3">+
                            Add</a>
                    <?php endif; ?>

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
                            <div class="row">
                                <div class="col-12">
                                    <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $gender_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e(strip_tags($item->gender_name)); ?></td>
                                                        <!-- <td><?php echo e(strip_tags($item->marathi_title)); ?></td> -->
                                                        <td>
                                                            <label class="switch">
                                                                <input data-id="<?php echo e($item->id); ?>" type="checkbox"
                                                                    <?php echo e($item->is_active ? 'checked' : ''); ?>

                                                                    class="active-btn btn btn-sm btn-outline-primary m-1"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="<?php echo e($item->is_active ? 'Active' : 'Inactive'); ?>">
                                                                <span class="slider round "></span>
                                                            </label>

                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <?php if(in_array('per_update', $data_permission)): ?>
                                                                    <a
                                                                        href="<?php echo e(route('edit-gender', base64_encode($item->id))); ?>"
                                                                        class="btn btn-sm btn-outline-primary m-1"
                                                                        title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                                <?php endif; ?>

                                                                <a data-id="<?php echo e($item->id); ?>"
                                                                    class="show-btn btn btn-sm btn-outline-primary m-1"
                                                                    title="Show"><i class="fas fa-eye"></i></a>
                                                                <?php if(in_array('per_delete', $data_permission)): ?>
                                                                    <a data-id="<?php echo e($item->id); ?>"
                                                                        class="delete-btn btn btn-sm btn-outline-danger m-1"
                                                                        title="Delete"><i class="fas fa-archive"></i></a>
                                                                <?php endif; ?>
                                                            </div>
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
        <form method="POST" action="<?php echo e(url('/delete-gender')); ?>" id="deleteform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="delete_id" id="delete_id" value="">
        </form>
        <form method="POST" action="<?php echo e(url('/show-gender')); ?>" id="showform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="show_id" id="show_id" value="">
        </form>
        <form method="POST" action="<?php echo e(url('/update-one-gender')); ?>" id="activeform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="active_id" id="active_id" value="">
        </form>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/sumagodemo/public_html/voter_info_collection/resources/views/admin/pages/master/gender/list-gender.blade.php ENDPATH**/ ?>