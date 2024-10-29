

<?php $__env->startSection('content'); ?>
<style>
/* Pagination styles */
.pagination {
    margin: 20px 0;
}

.pagination ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.pagination ul li {
    display: inline;
    margin-right: 5px;
}

.pagination ul li a,
.pagination ul li span {
    padding: 5px 10px;
    border: 1px solid #ccc;
    text-decoration: none;
    color: #333;
}

.pagination ul li.active a {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

.pagination ul li.disabled span {
    color: #ccc;
}

img, svg {
    vertical-align: middle;
    width: 2%;
}

div.dataTables_wrapper div.dataTables_info {
    display: none;
}
div.dataTables_wrapper div.dataTables_paginate ul.pagination{
    display: none; 
}
.pagination .flex .flex{
    display: none; 
}
</style>
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
                                        
                                        <table id="" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>District Name</th>
                                                    <th>Taluka Name</th>
                                                    <th>Village Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $recordNumber = $data_village->firstItem();
                                            ?>
                                                <?php $__currentLoopData = $data_village; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($recordNumber); ?></td>
                                                        <td><?php echo e($item->district_name); ?></td>
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
                                                    <?php
                                                        $recordNumber++;
                                                    ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-4">

                                                </div>

                                                <div class="col-md-8">
                                                <div class="pagination">
    <?php if($data_village->lastPage() > 1): ?>
        <ul class="pagination">
            <li class="<?php echo e(($data_village->currentPage() == 1) ? ' disabled' : ''); ?>">
                <?php if($data_village->currentPage() > 1): ?>
                    <a href="<?php echo e($data_village->url($data_village->currentPage() - 1)); ?>">Previous</a>
                <?php else: ?>
                    <span>Previous</span>
                <?php endif; ?>
            </li>
            <?php
                $currentPage = $data_village->currentPage();
                $lastPage = $data_village->lastPage();
                $startPage = max($currentPage - 5, 1);
                $endPage = min($currentPage + 4, $lastPage);
            ?>
            <?php if($startPage > 1): ?>
                <li>
                    <a href="<?php echo e($data_village->url(1)); ?>">1</a>
                </li>
                <?php if($startPage > 2): ?>
                    <li>
                        <span>...</span>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <?php for($i = $startPage; $i <= $endPage; $i++): ?>
                <li class="<?php echo e(($currentPage == $i) ? ' active' : ''); ?>">
                    <a href="<?php echo e($data_village->url($i)); ?>"><?php echo e($i); ?></a>
                </li>
            <?php endfor; ?>
            <?php if($endPage < $lastPage): ?>
                <?php if($endPage < $lastPage - 1): ?>
                    <li>
                        <span>...</span>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="<?php echo e($data_village->url($lastPage)); ?>"><?php echo e($lastPage); ?></a>
                </li>
            <?php endif; ?>
            <li class="<?php echo e(($currentPage == $lastPage) ? ' disabled' : ''); ?>">
                <?php if($currentPage < $lastPage): ?>
                    <a href="<?php echo e($data_village->url($currentPage + 1)); ?>">Next</a>
                <?php else: ?>
                    <span>Next</span>
                <?php endif; ?>
            </li>
            <!-- <li>
                <span>Page <?php echo e($currentPage); ?></span>
            </li> -->
        </ul>
    <?php endif; ?>
</div>

</div>


                                                
                                                <!-- <div class="col-md-8">
                                                    <div class="pagination">
                                                        <?php echo e($data_village->links()); ?>

                                                    </div>
                                                </div> -->
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
        <form method="POST" action="<?php echo e(url('/delete-users')); ?>" id="deleteform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="delete_id" id="delete_id" value="">
        </form>
        <form method="POST" action="<?php echo e(url('/show-users')); ?>" id="showform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="show_id" id="show_id" value="">
        </form>
        
        <form method="POST" action="<?php echo e(url('//update-active-village')); ?>" id="activeform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="active_id" id="active_id" value="">
        </form>

        <!-- content-wrapper ends -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\egs_tablet_watap\resources\views/admin/pages/area/list-village.blade.php ENDPATH**/ ?>