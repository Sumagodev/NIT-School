<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content-wrapper mt-7">

            <div class="row justify-content-center">
                <div class="col-12 grid-margin ">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-start align-items-center">
                            <h3 class="page-title">
                                User Details
                            </h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-end align-items-center">
                            <div>
                                <a href="<?php echo e(route('list-gramsevak-tablet-distribution')); ?>" class="btn btn-sm btn-primary ml-3">Back</a>
                            </div>
                        </div>

                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="row ">
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <label>Gramsevak Name :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e($data_gram_doc_details['user_data']['full_name']); ?></label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <label>Grampanchayat Name :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e(strip_tags($data_gram_doc_details['user_data']['gram_panchayat_name'])); ?></label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <label>mobile Number :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e(strip_tags($data_gram_doc_details['user_data']['mobile_number'])); ?></label>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <label>Gramsevak Aadhar Card Number :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e(strip_tags($data_gram_doc_details['user_data']['adhar_card_number'])); ?></label>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <label>Latitude :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e(strip_tags($data_gram_doc_details['user_data']['latitude'])); ?></label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <label>Longitude :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e(strip_tags($data_gram_doc_details['user_data']['longitude'])); ?></label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <label>District :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e(strip_tags($data_gram_doc_details['user_data']['district'])); ?></label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <label>Taluka :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e(strip_tags($data_gram_doc_details['user_data']['taluka'])); ?></label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <label>Village :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label><?php echo e(strip_tags($data_gram_doc_details['user_data']['village'])); ?></label>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                            <label>Aadhar Card Image :</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                        <a href="<?php echo e(Config::get('DocumentConstant.GRAM_PANCHAYAT_DOC_VIEW')); ?><?php echo e($data_gram_doc_details['user_data']['aadhar_image']); ?>" download target="_blank">
                                            <?php echo e($data_gram_doc_details['user_data']['aadhar_image']); ?>

                                        </a>
                                        </div>
                                    </div>
                                    <input type="hidden" class="tok" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />

                                    <div class="row mt-4">
                                        

                                        <!-- <div class="row mt-4"> -->
                                            <div class="col-12 grid-margin">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                <div class="table-responsive">
                                                                <h5 class="d-flex justify-content-center mb-4">Document Verification Details</h5>
                                                                    <table id="order-listing" class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Sr. No.</th>
                                                                                <th>Document Type</th>
                                                                                <th>Document Name</th>
                                                                                <th>Registration Status</th>
                                                                                <th>Not Approved Reason</th>
                                                                                <th>Remark</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php $__currentLoopData = $data_gram_doc_details['user_doc_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if(($item->is_approved=='1' && session()->get('role_id')=='2' && $item->is_resubmitted=='0')): ?>

                                                                            <tr>
                                                                                <input type="hidden" name="edit_id" id="edit_id" value="<?php echo e($item->id); ?>" />
                                                                                <input type="hidden" name="show_id" id="show_id" value="<?php echo e($data_gram_doc_details['user_data']['id']); ?>" />

                                                                                <td><?php echo e($loop->iteration); ?></td>
                                                                                <td><?php echo e($item->document_type_name); ?></td>
                                                                                <td><a href="<?php echo e(Config::get('DocumentConstant.GRAM_PANCHAYAT_DOC_VIEW')); ?><?php echo e($item->document_pdf); ?>" download target="_blank">
                                                                                        <?php echo e($item->document_pdf); ?>

                                                                                    </a>
                                                                                </td>
                                                                                <td><select class="form-control is_approved" name="is_approved" id="is_approved">
                                                                                        <option value="">Select Status</option>
                                                                                        <?php $__currentLoopData = $dynamic_registrationstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration_status_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($registration_status_data['id']); ?>">
                                                                                            <?php echo e($registration_status_data['status_name']); ?></option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                                                                    </select>
                                                                                </td>
                                                                                <td><select class="form-control reason_doc_id" name="reason_doc_id" id="reason_doc_id" disabled>
                                                                                    <option value="">Select Reason</option>
                                                                                    <option value="1001">Others</option>
                                                                                        <?php $__currentLoopData = $dynamic_reasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dynamic_reasons_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($dynamic_reasons_data['id']); ?>"><?php echo e($dynamic_reasons_data['reason_name']); ?></option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                                                                    </select>
                                                                                </td>
                                                                                <td> <textarea class="form-control other_remark" name="other_remark" id="other_remark"
                                                                                    placeholder="Enter the Remark" name="other_remark" disabled></textarea>
                                                                                </td>
                                                                                <td><button type="submit" class="btn btn-sm btn-success submitButton" id="submitButton">
                                                                                        Save
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                        <?php elseif(($item->is_approved=='3' && session()->get('role_id')=='2' && $item->is_resubmitted=='0')): ?>

                                                                            <tr>
                                                                                <input type="hidden" name="edit_id" id="edit_id" value="<?php echo e($item->id); ?>" />

                                                                                <td><?php echo e($loop->iteration); ?></td>
                                                                                <td><?php echo e($item->document_type_name); ?></td>
                                                                                <td><a href="<?php echo e(Config::get('DocumentConstant.GRAM_PANCHAYAT_DOC_VIEW')); ?><?php echo e($item->document_pdf); ?>" download target="_blank">
                                                                                        <?php echo e($item->document_pdf); ?>

                                                                                    </a>
                                                                                </td>
                                                                                <td><select class="form-control is_approved" name="is_approved" id="is_approved" disabled>
                                                                                        <option value="">Select Status</option>
                                                                                        <?php $__currentLoopData = $dynamic_registrationstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration_status_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($registration_status_data['id']); ?>"
                                                                                        <?php if($registration_status_data['id'] == $item->is_approved): ?> <?php echo 'selected'; ?> <?php endif; ?>>
                                                                                            <?php echo e($registration_status_data['status_name']); ?></option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                                                                    </select>
                                                                                </td>
                                                                                <td><select class="form-control" name="reason_doc_id" id="reason_doc_id" disabled>
                                                                                    <option value="">Select Reason</option>

                                                                                    <?php if($item->reason_doc_id=='1001'): ?>
                                                                                        <option value="1001" <?php echo 'selected'; ?>>Others</option>
                                                                                        <?php else: ?>
                                                                                        <option value="1001">Others</option>
                                                                                        <?php endif; ?>
                                                                                    <!-- <option value="1001">Others</option> -->
                                                                                        <?php $__currentLoopData = $dynamic_reasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dynamic_reasons_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <option value="<?php echo e($dynamic_reasons_data['id']); ?>"
                                                                                        <?php if($dynamic_reasons_data['id'] == $item->reason_doc_id): ?> <?php echo 'selected'; ?> <?php endif; ?>><?php echo e($dynamic_reasons_data['reason_name']); ?></option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                <?php if($item->reason_doc_id=='1001'): ?>
                                                                                     <textarea class="form-control other_remark" name="other_remark" id="other_remark"
                                                                                    placeholder="Enter the Remark" name="other_remark" disabled><?php echo e($item->other_remark); ?></textarea>
                                                                                <?php else: ?>
                                                                                NA    
                                                                                <?php endif; ?>    
                                                                                </td>
                                                                                <td>NA</td>
                                                                            </tr>
                                                                        <?php elseif(($item->is_approved=='2' && $item->is_resubmitted=='0')): ?>

                                                                            <tr>
                                                                                <input type="hidden" name="edit_id" id="edit_id" value="<?php echo e($item->id); ?>" />

                                                                                <td><?php echo e($loop->iteration); ?></td>
                                                                                <td><?php echo e($item->document_type_name); ?></td>
                                                                                <td><a href="<?php echo e(Config::get('DocumentConstant.GRAM_PANCHAYAT_DOC_VIEW')); ?><?php echo e($item->document_pdf); ?>" download target="_blank">
                                                                                        <?php echo e($item->document_pdf); ?>

                                                                                    </a>
                                                                                </td>
                                                                                <td>Approved</td>
                                                                                <td>NA</td>
                                                                                <td>NA</td>
                                                                                <td>-</td>
                                                                            </tr>
                                                                        <?php endif; ?>

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
            </div>
        </div>
        <!-- content-wrapper ends -->
    <script>
        $(document).ready(function() {
            $(document).on("change", ".is_approved", function () {
                var IsApprovedVal=$(this).val();
                var closestTr = $(this).closest("tr");
                var ReasonVal=closestTr.find('select[name="reason_doc_id"]').val();

                var ReasonSelectBox = closestTr.find('select[name="reason_doc_id"]');
                var Remarktextarea = closestTr.find('textarea[name="other_remark"]');
                
                if ($(this).val() != '3') {
                    ReasonSelectBox.prop('disabled', true);
                    if(ReasonVal!='1001')
                    {    
                    Remarktextarea.prop('disabled', true);
                    }else{
                    Remarktextarea.prop('disabled', false);
                    }
                } else {
                    ReasonSelectBox.prop('disabled', false);
                    if(ReasonVal!='1001')
                    {    
                    Remarktextarea.prop('disabled', true);
                    }else{
                    Remarktextarea.prop('disabled', false);
                    }
                }
            });
        });
    </script>

<script>
        $(document).ready(function() {
            $(document).on("change", ".reason_doc_id", function () {
                var ReasonVal=$(this).val();
                var closestTr = $(this).closest("tr");

                // var ReasonSelectBox = closestTr.find('select[name="reason_doc_id"]');
                var Remarktextarea = closestTr.find('textarea[name="other_remark"]');
                
                if ($(this).val() != '1001') {
                    // ReasonSelectBox.prop('disabled', true);
                    Remarktextarea.prop('disabled', true);
                } else {
                    // ReasonSelectBox.prop('disabled', false);
                    Remarktextarea.prop('disabled', false);
                }
            });
        });
    </script>

<script>
            $(document).ready(function() {

                // $('#submitButton').click(function(e) {
                    $(document).on('click','.submitButton', function (e) {
                    e.preventDefault();

                    var closestTr = $(this).closest("tr");
                    var is_approved= closestTr.find('select[name="is_approved"]').val();
                    var reason_doc_id = closestTr.find('select[name="reason_doc_id"]').val();
                    var other_remark = closestTr.find('textarea[name="other_remark"]').val();
                    var token_val = $('.tok').val();
                    var show_id = $('#show_id').val();
                    var edit_id = closestTr.find('#edit_id').val();

                    if (is_approved !== '') {
                        $.ajax({
                            url: '<?php echo e(route('update-gram-document-status')); ?>',
                            type: 'GET',
                            data: {
                                is_approved: is_approved,
                                reason_doc_id: reason_doc_id,
                                other_remark: other_remark,
                                edit_id: edit_id,
                                show_id: show_id,
                            },
                            success: function(response) {
                                if(response==true)
                                {
                                    location.reload();
                                }else{
                                    alert('No Record Updated');
                                }
                              

                            }
                        });
                    }
                });
            });
        </script>

    <?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\egs_tablet_watap\resources\views/admin/pages/gramsevak/show-gramsevak-doc.blade.php ENDPATH**/ ?>