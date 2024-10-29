<?php if(Session::get('status') == 'success'): ?>
    <div class="col-12 grid-margin">
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong> <span id="data_to_show">
                    <?php echo e(Session::get('msg')); ?>

                </span> </strong>
        </div>
    </div>
<?php endif; ?>

<?php if(Session::get('status') == 'error'): ?>
    <div class="col-12 grid-margin">
        <div class="alert alert-danger" id="danger-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong> <span id="data_to_show">
                    <?php echo session('msg'); ?>

                </span> </strong>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home3/sumagodemo/public_html/voter_info_collection/resources/views/admin/layout/alert.blade.php ENDPATH**/ ?>