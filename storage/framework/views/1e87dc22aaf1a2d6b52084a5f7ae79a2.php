<!-- <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css"> -->

<?php $__env->startSection('content'); ?>
<!-- 
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script> -->

    <?php $data_permission = getPermissionForCRUDPresentOrNot('list-users', session('permissions')); ?>
    <div class="main-panel">
        <div class="content-wrapper mt-7">
            <div class="page-header">
                <h3 class="page-title">
                    Beneficiary List
                </h3>
                <span> Distributor Name : <b><?php echo e($all_data['distributer_data']['f_name']); ?> <?php echo e($all_data['distributer_data']['m_name']); ?>

                     <?php echo e($all_data['distributer_data']['l_name']); ?></b></span>
                     <span> Total Beneficiary : <b><?php echo e($all_data['count']); ?></b></span>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('list-users')); ?>">Distributor Management</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Beneficiary</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">

                <div class="row">
                         
                            

                        <?php if(session()->get('role_id')=='1'): ?>
                        <div class="row">

                       
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input type="hidden" class="form-control mb-2" name="edit_id" id="edit_id"value="<?php echo e($edit_id); ?>">
                                    <select class="form-control" name="district_id" id="district_id">
                                        <option value="">Select District</option>
                                        <?php $__currentLoopData = $district_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district_for_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                        <option value="<?php echo e($district_for_data['location_id']); ?>"><?php echo e($district_for_data['name']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('district_id')): ?>
                                        <span class="red-text"><?php echo $errors->first('district_id', ':message'); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                    <select class="form-control" name="taluka_id" id="taluka_id">
                                        <option value="">Select Taluka</option>
                                    </select>
                                    <?php if($errors->has('taluka_id')): ?>
                                        <span class="red-text"><?php echo $errors->first('taluka_id', ':message'); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                           
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                    <select class="form-control" name="village_id" id="village_id">
                                    <option value="">Select Village</option>
                                    </select>
                                    <?php if($errors->has('village_id')): ?>
                                        <span class="red-text"><?php echo $errors->first('village_id', ':message'); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <button type="submit" class="btn btn-sm btn-success" id="submitButton">Search</button>
                                        </div>
                                        <div class="col-lg-2">
                                            <form action="<?php echo e(route('filter-tablet-distributer-baneficiary-export')); ?>" method="POST" target="__blank">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="dist_new_id" id="dist_new_id" value="">
                                                <input type="hidden" name="tal_new_id" id="tal_new_id" value="">
                                                <input type="hidden" name="vil_new_id" id="vil_new_id" value="">
                                                <input type="hidden" name="distributer_id" id="distributer_id" value="<?php echo e($edit_id); ?>">
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <div class="flex justify-between">
                                                        <div>
                                                            Export Excel <!-- Adding text inside the button -->
                                                        </div>
                                                    </div>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                          <?php elseif(session()->get('role_id')=='2'): ?>
                        <div class="row">

                        
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                    <select class="form-control" name="taluka_id" id="taluka_id">
                                        <option value="">Select Taluka</option>
                                        <?php $__currentLoopData = $taluka_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taluka_for_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                        <option value="<?php echo e($taluka_for_data['location_id']); ?>"><?php echo e($taluka_for_data['name']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('taluka_id')): ?>
                                        <span class="red-text"><?php echo $errors->first('taluka_id', ':message'); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                    <select class="form-control" name="village_id" id="village_id">
                                    <option value="">Select Village</option>
                                    </select>
                                    <?php if($errors->has('village_id')): ?>
                                        <span class="red-text"><?php echo $errors->first('village_id', ':message'); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                                            Search
                                        </button>
                                </div>
                            </div>
                        </div>
                          <?php endif; ?>  

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="table-responsive">
                                        <!-- <table id="table_data" class="table table-bordered"> -->
                                        <table id="order-listing" class="table table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Gramsevak Name</th>
                                                    <th>District</th>
                                                    <th>Taluka</th>
                                                    <th>Grampanchayat Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $all_data['beneficiary_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($item['full_name']); ?>

                                                        </td>
                                                        <td><?php echo e($item['district']); ?></td>
                                                        <td><?php echo e($item['taluka']); ?></td>
                                                        <td>
                                                            <?php if($item['vid']=='999999'): ?>
                                                                <?php echo e($item['gram_panchayat_name']); ?>

                                                            <?php else: ?>
                                                            <?php echo e($item['village']); ?>

                                                            <?php endif; ?>
                                                        </td>

                                                        <td class="d-flex">
                                                                 
                                                            <a data-id="<?php echo e($item['ben_id']); ?>"
                                                                class="show-btn btn btn-sm btn-outline-primary m-1"><i
                                                                    class="fas fa-eye"></i></a>
                                                         

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

        <script>
            $(document).ready(function() {

                $('#district_id').change(function(e) {
                    e.preventDefault();
                    var districtId = $('#district_id').val();
                    $("#dist_new_id").val(districtId);

                    if (districtId !== '') {
                        $.ajax({
                            url: '<?php echo e(route('taluka')); ?>',
                            type: 'GET',
                            data: {
                                districtId: districtId
                            },
                            success: function(response) {
                                if (response.taluka.length > 0) {
                                    $('#taluka_id').empty();
                                    $('#village_id').empty();
                                    $('#taluka_id').html('<option value="">Select Taluka</option>');
                                    $('#village_id').html('<option value="">Select Village</option>');
                                    $.each(response.taluka, function(index, taluka) {
                                        $('#taluka_id').append('<option value="' + taluka
                                            .location_id +
                                            '">' + taluka.name + '</option>');
                                    });
                                }
                            }
                        });
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function() {

                $('#taluka_id').change(function(e) {
                    e.preventDefault();
                    var talukaId = $('#taluka_id').val();
                    $("#tal_new_id").val(talukaId);

                    if (talukaId !== '') {
                        $.ajax({
                            url: '<?php echo e(route('village')); ?>',
                            type: 'GET',
                            data: {
                                talukaId: talukaId
                            },
                            success: function(response) {
                                if (response.village.length > 0) {
                                    $('#village_id').empty();
                                    $('#village_id').html('<option value="">Select Village</option>');
                                    $.each(response.village, function(index, village) {
                                        $('#village_id').append('<option value="' + village
                                            .location_id +
                                            '">' + village.name + '</option>');
                                    });
                                }
                            }
                        });
                    }
                });
            });
        </script>

<script>
            $(document).ready(function() {

                $('#village_id').change(function(e) {
                    e.preventDefault();
                    var villageId = $('#village_id').val();
                    $("#vil_new_id").val(villageId);
                });
            });
        </script>

<script>
            $(document).ready(function() {

                $('#submitButton').click(function(e) {
                    e.preventDefault();
                    var districtId = $('#district_id').val()
                    if(districtId==undefined){
                        districtId="";
                    }
                    var talukaId = $('#taluka_id').val();
                    var villageId = $('#village_id').val();
                    var editId = $('#edit_id').val();

                    if (districtId !== '' || talukaId !== '' || villageId !== '') {
                        $.ajax({
                            url: '<?php echo e(route('filter-tablet-distribution')); ?>',
                            type: 'GET',
                            data: {
                                districtId: districtId,
                                talukaId: talukaId,
                                villageId: villageId,
                                editId: editId,
                            },
                            // headers: {
                            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            // },
                            success: function(response) {
                                console.log(response);
                                if (response.labour_ajax_data.length > '0') {

                                    var table = $('#order-listing').DataTable();
                                    table.clear().draw();

                                    $.each(response.labour_ajax_data, function(index, labour_data) {

                                    if(labour_data.vid=='999999')
                                    {
                                        var new_vil_name=labour_data.gram_panchayat_name
                                    }
                                    else
                                    {
                                        var new_vil_name=labour_data.village;
                                    }
                                        index++;
                                        table.row.add([ index,
                                            labour_data.full_name,
                                            labour_data.district,
                                            labour_data.taluka,
                                            new_vil_name,
                                            '<a onClick="getData(' + labour_data.id + ')" class="show-btn btn btn-sm btn-outline-primary m-1"><i class="fas fa-eye"></i></a>']).draw(false);
                                    });

                                    // $('#order-listing tbody').empty();
                                    
                                    // $.each(response.labour_attendance_ajax_data, function(index, labour_attendance_data) {
                                    //     console.log(labour_attendance_data.created_at);
                                    //     var lid=index + parseInt(1);
                                    //     $('#order-listing tbody').append('<tr><td>' + lid +'</td><td>' + labour_attendance_data.project_name + '</td><td>' + labour_attendance_data.full_name +'</td><td>' + labour_attendance_data.mobile_number + '</td><td>' + labour_attendance_data.mgnrega_card_id + '</td><td>' + labour_attendance_data.attendance_day+ '</td><td>' + labour_attendance_data.created_at + '</td></tr>');
                                    // });
                                }else{
                                    $('#order-listing tbody').empty();
                                    $('#order-listing tbody').append('<tr><td colspan="7" style="text-align:center;"><b>No Record Found</b></td></tr>');

                                    // alert("No Record Found");
                                }

                            }
                        });
                    }
                });
            });
        </script>

<script>

// $(document).ready(() => {
    function getData(data){
    $("#show_id").val(data);
    $("#showform").submit();
}
// });
</script>
     
        <form method="POST" action="<?php echo e(url('/show-distributer-baneficiary-details')); ?>" id="showform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="show_id" id="show_id" value="">
            <input type="hidden" name="edit_id" id="edit_id"value="<?php echo e($edit_id); ?>">
        </form>
        <!-- content-wrapper ends -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\egs_tablet_watap\resources\views/admin/pages/TabletDistribution/list-distributer-benificary.blade.php ENDPATH**/ ?>