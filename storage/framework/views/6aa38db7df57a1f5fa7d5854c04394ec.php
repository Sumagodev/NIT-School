<?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php $data_permission = getPermissionForCRUDPresentOrNot('list-users', session('permissions')); ?>
    <div class="main-panel">
        <div class="content-wrapper mt-7">
            <div class="page-header">
                <h3 class="page-title">
                All Voters List
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">All Voters</a></li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">All Beneficary</li> -->
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">

                    <div class="row">
                         
                            

                       
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
                                    <select class="form-control" name="cast_id" id="cast_id">
                                        <option value="">Select Cast</option>
                                        <?php $__currentLoopData = $cast_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cast_for_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                        <option value="<?php echo e($cast_for_data['id']); ?>"><?php echo e($cast_for_data['cast_name']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('cast_id')): ?>
                                        <span class="red-text"><?php echo $errors->first('cast_id', ':message'); ?></span>
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
                                            <form action="<?php echo e(route('filter-voter-information-all-export')); ?>" method="POST" target="__blank">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="tal_new_id" id="tal_new_id" value="">
                                                <input type="hidden" name="vil_new_id" id="vil_new_id" value="">
                                                <input type="hidden" name="cast_new_id" id="cast_new_id" value="">
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
                                                    <!-- <th>Added By</th> -->
                                                    <th>Voter Name</th>
                                                    <th>Mobile Number</th>
                                                    <th>Taluka</th>
                                                    <th>Village</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($gramsevaks)): ?>
                                                    <?php $__currentLoopData = $gramsevaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($loop->iteration); ?></td>
                                                            <td><?php echo e($item->voter_f_name); ?> <?php echo e($item->voter_m_name); ?> <?php echo e($item->voter_l_name); ?>

                                                            </td>
                                                            <td><?php echo e($item->mobile_number); ?></td>
                                                            <td><?php echo e($item->taluka); ?></td>
                                                            <td><?php echo e($item->village); ?></td>

                                                            <td class="d-flex">
                                                                    
                                                                <a data-id="<?php echo e($item->voter_info_id); ?>"
                                                                    class="show-btn btn btn-sm btn-outline-primary m-1"><i
                                                                        class="fas fa-eye"></i></a>
                                                            

                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                        <tr>
                                                            <h6>No Records Found</h6>
                                                        </tr>
                                                <?php endif; ?>        
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

                $('#cast_id').change(function(e) {
                    e.preventDefault();
                    var castId = $('#cast_id').val();
                    $("#cast_new_id").val(castId);
                });
            });
        </script>

        <script>
            $(document).ready(function() {

                $('#submitButton').click(function(e) {
                    e.preventDefault();
                   
                    
                    var talukaId = $('#taluka_id').val();

                    var villageId = $('#village_id').val();
                    var castId = $('#cast_id').val();

                    if (castId !== '' || talukaId !== '' || villageId !== '') {
                        $.ajax({
                            url: '<?php echo e(route('filter-voter-information-all')); ?>',
                            type: 'GET',
                            data: {
                                talukaId: talukaId,
                                villageId: villageId,
                                castId:castId
                            },
                            // headers: {
                            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            // },
                            success: function(response) {
                                if (response.labour_ajax_data.length > '0') {

                                    var table = $('#order-listing').DataTable();
                                    table.clear().draw();

                                    $.each(response.labour_ajax_data, function(index, labour_data) {

                                    //     if(labour_data.vid=='999999')
                                    // {
                                    //     var new_vil_name=labour_data.gram_panchayat_name
                                    // }
                                    // else
                                    // {
                                    //     var new_vil_name=labour_data.village;
                                    // }

                                        index++;
                                        table.row.add([ index,
                                            labour_data.voter_f_name +' '+ labour_data.voter_m_name  +' '+ labour_data.voter_l_name,
                                            labour_data.mobile_number,
                                            labour_data.taluka,
                                            labour_data.village,
                                            '<a onClick="getData(' + labour_data.voter_info_id + ')" class="show-btn btn btn-sm btn-outline-primary m-1"><i class="fas fa-eye"></i></a>']).draw(false);
                                    });
                                }else{
                                    $('#order-listing tbody').empty();
                                    $('#order-listing tbody').append('<tr><td colspan="7" style="text-align:center;"><b>No Record Found</b></td></tr>');

                                }

                            }
                        });
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#submitExportButton').click(function(e) {
                    e.preventDefault();
                    

                    var talukaId = $('#taluka_id').val();

                    var villageId = $('#village_id').val();
                    var castId = $('#cast_id').val();

                    if (castId !== '' || talukaId !== '' || villageId !== '') {
                        $.ajax({
                            url: '<?php echo e(route('filter-voter-information-all-export')); ?>',
                            type: 'POST',
                            data: {
                                castId: castId,
                                talukaId: talukaId,
                                villageId: villageId,
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                               alert('done');

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
     
        <form method="POST" action="<?php echo e(url('/show-voter-information')); ?>" id="showform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="show_id" id="show_id" value="">
        </form>
        <!-- content-wrapper ends -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/suhasannakande/public_html/resources/views/admin/pages/voterinformation/list-voter-information.blade.php ENDPATH**/ ?>