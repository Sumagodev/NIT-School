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


<?php if(session('status') == 'error' && session('alert_type') == 'sweetalert'): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '<?php echo e(session('message')); ?>',
            customClass: {
                popup: 'my-custom-swal',
            }
        });
    </script>
<?php endif; ?>


<?php if(session('status') == 'error' && session('alert_type') == 'bootstrap'): ?>
    <div class="col-12 grid-margin">
        <div class="alert alert-danger" id="danger-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong><span id="data_to_show">
                <?php echo session('msg'); ?>

            </span></strong>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\laravel_new_work\resources\views/admin/layout/alert.blade.php ENDPATH**/ ?>