<?php if(count($permissions)>0): ?>
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Functionality Name</th>
                        <th>List</th>
                        <th>Add</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td>
                                <input type="hidden" class="form-check-input" name="permission_id_<?php echo e($permission['id']); ?>"
                                    id="permission_id_<?php echo e($permission['id']); ?>" value="<?php echo e($permission['id']); ?>"
                                    data-parsley-multiple="permission_id">
                                <?php echo e($permission['permission_name']); ?>

                            </td>
                            <td>
                                <label class="form-check-label">
                                    <?php $list_name = 'per_list_' . $permission['id']; ?>
                                    <input type="checkbox" class="form-check-input"
                                        name="per_list_<?php echo e($permission['id']); ?>" id="per_list_<?php echo e($permission['id']); ?>"
                                        value="list_<?php echo e($permission['id']); ?>" data-parsley-multiple="per_list"
                                        <?php if($permission['per_list']): ?> <?php echo e('checked'); ?> <?php endif; ?> disabled>

                                    <i class="input-helper"></i><i class="input-helper"></i></label>
                            </td>
                            <td>
                                <label class="form-check-label">
                                    <?php $add_name = 'per_add_' . $permission['id']; ?>
                                    <input type="checkbox" class="form-check-input"
                                        name="per_add_<?php echo e($permission['id']); ?>" id="per_add_<?php echo e($permission['id']); ?>"
                                        value="add_<?php echo e($permission['id']); ?>" data-parsley-multiple="per_add"
                                        <?php if($permission['per_add']): ?> <?php echo e('checked'); ?> <?php endif; ?> disabled>

                                    <i class="input-helper"></i><i class="input-helper"></i></label>
                            </td>
                            <td>
                                <label class="form-check-label">
                                    <?php $per_update = 'per_update_' . $permission['id']; ?>
                                    <input type="checkbox" class="form-check-input"
                                        name="per_update_<?php echo e($permission['id']); ?>"
                                        id="per_update_<?php echo e($permission['id']); ?>" value="update_<?php echo e($permission['id']); ?>"
                                        data-parsley-multiple="per_update"
                                        <?php if($permission['per_update']): ?> <?php echo e('checked'); ?> <?php endif; ?> disabled>

                                    <i class="input-helper"></i><i class="input-helper"></i></label>
                            </td>
                            <td>
                                <label class="form-check-label">
                                    <?php $per_delete = 'per_delete_' . $permission['id']; ?>
                                    <input type="checkbox" class="form-check-input"
                                        name="per_delete_<?php echo e($permission['id']); ?>"
                                        id="per_delete_<?php echo e($permission['id']); ?>" value="delete_<?php echo e($permission['id']); ?>"
                                        data-parsley-multiple="per_delete"
                                        <?php if($permission['per_delete']): ?> <?php echo e('checked'); ?> <?php endif; ?> disabled>

                                    <i class="input-helper"></i><i class="input-helper"></i></label>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php else: ?>
    <h5 style="color:red;align-item:center"> <?php echo e('No Data Found For Selected Role'); ?></h5>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\egs_tablet_watap\resources\views/admin/pages/users/roles-permission.blade.php ENDPATH**/ ?>