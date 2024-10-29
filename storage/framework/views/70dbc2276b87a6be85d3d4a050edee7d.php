<?php $__env->startSection('content'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <style>
        .password-toggle {
            cursor: pointer;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        .fa-eye-slash {
            /* display: none; */
        }
        .hr_css{
            color:black;
        }
        .submit_css{
            /* border-color:#303C7A; */
            background-color:#303C7A;
            padding-top:6px;
            padding-bottom:6px;
            padding-left:20px;
            padding-right:20px;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
            color:white;
        }
        .submit_css:hover{
            /* border-color:#0069d9; */
            background-color:#0069d9;
            padding-top:6px;
            padding-bottom:6px;
            padding-left:20px;
            padding-right:20px;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
            color:white;
        }
        .clear_css{
            border-color:#6C757D;
            background-color:#6C757D;
            padding-top:6px;
            padding-bottom:6px;
            padding-left:20px;
            padding-right:20px;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
            color:white;
        }
        .form-select .error {
            color: black; !important
        }
    </style>
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                Products Management
                </h3>
            </div>
            <hr>
            <h3 class="page-title">
            Add Products
            </h3>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card mt-4">
                        <div class="card-body">
                            <form class="forms-sample" id="frm_register" name="frm_register" method="post" role="form"
                                action="<?php echo e(route('products')); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
                                    <input type="hidden" name="formtype" id="formtype" value="add" />
                                    <input type="hidden" name="prodid" id="prodid" value="add" />

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="product_id">Product ID</label>
                                            <input type="text" class="form-control" name="product_id" id="product_id"
                                                placeholder="Product ID" value="<?php echo e(old('product_id')); ?>" onkeyup="addsapcode(this.value)">
                                            <?php if($errors->has('product_id')): ?>
                                                <span class="red-text"><?php echo $errors->first('product_id', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="product_name">Product Name</label>
                                            <input type="text" class="form-control" name="product_name" id="product_name"
                                                placeholder="Product Name" value="<?php echo e(old('product_name')); ?>">
                                            <?php if($errors->has('product_name')): ?>
                                                <span class="red-text"><?php echo $errors->first('product_name', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="product_weight">Product Weight</label>
                                            <input type="text" class="form-control" name="product_weight" id="product_weight"
                                                placeholder="Product Weight" value="200" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                            <?php if($errors->has('product_weight')): ?>
                                                <span class="red-text"><?php echo $errors->first('product_weight', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label class="label_css" for="category">Category Name</label>
                                            <select class="form-control form-select" name="category" id="category">
                                                <option value="">Select Category</option>
                                                <option value="Final Compounding GT">Final Compounding GT</option>
                                                <option value="Final Compounding CT">Final Compounding CT</option>
                                                <option value="Final Compounding Thred">Final Compounding Thred</option>
                                            </select>
                                            <?php if($errors->has('category')): ?>
                                                <span class="red-text"><?php echo $errors->first('category', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="sap_code">SAP Code</label>
                                            <input type="text" class="form-control" name="sap_code" id="sap_code"
                                                placeholder="SAP Code" value="<?php echo e(old('sap_code')); ?>">
                                            <?php if($errors->has('sap_code')): ?>
                                                <span class="red-text"><?php echo $errors->first('sap_code', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="gt_code">GT Code</label>
                                            <input type="text" class="form-control" name="gt_code" id="gt_code"
                                                placeholder="GT Code" value="<?php echo e(old('gt_code')); ?>">
                                            <?php if($errors->has('gt_code')): ?>
                                                <span class="red-text"><?php echo $errors->first('gt_code', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="trade">Trade</label>
                                            <input type="text" class="form-control" name="trade" id="trade"
                                                placeholder="Trade" value="<?php echo e(old('trade')); ?>">
                                            <?php if($errors->has('trade')): ?>
                                                <span class="red-text"><?php echo $errors->first('trade', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="excel_file">Upload Excel File</label>
                                            <input type="file" class="form-control" name="excel_file" id="excel_file" accept=".xls,.xlsx">
                                            <?php if($errors->has('excel_file')): ?>
                                                <span class="red-text"><?php echo $errors->first('excel_file', ':message'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div> -->
                                    
                                    </div>
                                </div>
                                    
                                    

                                    <div class="col-md-12 col-sm-12 text-center mt-4 mb-4">
                                        <button type="submit" class="submit_css" id="submitButton">
                                            Submit
                                        </button>
                                        <button type="reset" class="clear_css">Clear</button>
                                        <button type="button" class="btn" data-toggle="modal" data-target="#uploadModal">Upload</button>
                                    </div>
                                </div>
                            </form>


                            <div class="row">
                                <div class="col-12">
                                    <?php echo $__env->make('admin.layout.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="table-responsive" style="overflow-x: auto;">
                                        <table id="order-listing" class="table table-bordered nowrap" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Product ID</th>
                                                    <th>Product Name</th>
                                                    <th>Product Weight</th>
                                                    <th>Category Name</th>
                                                    <th>SAP Code</th>
                                                    <th>GT Code</th>
                                                    <th>Trade</th>
                                                    <th>Is Active</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $products_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($item->product_id); ?></td>
                                                        <td><?php echo e($item->product_name); ?></td>
                                                        <td><?php echo e($item->product_weight); ?></td>
                                                        <td><?php echo e($item->category); ?></td>
                                                        <td><?php echo e($item->sap_code); ?></td>
                                                        <td><?php echo e($item->gt_code); ?></td>
                                                        <td><?php echo e($item->trade); ?></td>


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


                                                        
                                                        <td class="d-flex">
                                                        <a href="javascript:void(0);" 
                                                            data-id="<?php echo e(base64_encode($item->id)); ?>" 
                                                            class="edit-btn btn btn-sm btn-outline-primary m-1">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>


                                                            <!-- <a data-id="<?php echo e($item->id); ?>"
                                                                class="show-btn btn btn-sm btn-outline-primary m-1"><i
                                                                    class="fas fa-eye"></i></a> -->
                                                            <a data-id="<?php echo e($item->id); ?>"
                                                                class="delete-btn btn btn-sm btn-outline-danger m-1"
                                                                title="Delete Tender"><i class="fas fa-archive"></i></a>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal HTML -->
                                <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="uploadModalLabel">Upload Excel File</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- File upload form inside modal -->
                                        <form id="excelUploadForm" method="POST" action="<?php echo e(route('uploadExcel')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="excel_file_modal">Upload Excel File</label>
                                            <input type="file" class="form-control" name="excel_file" id="excel_file" accept=".xls,.xlsx">
                                            <!-- <input type="file" class="form-control" name="excel_file_modal" id="excel_file_modal" accept=".xls,.xlsx"> -->
                                        </div>
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            function submitRegister() {
                document.getElementById("frm_register").submit();
            }
        </script>


        <script>
            $(document).ready(function() {
                // Function to check if all input fields are filled with valid data
                function checkFormValidity() {
                    const product_id = $('#product_id').val();
                    const product_name = $('#product_name').val();
                    const product_weight = $('#product_weight').val();
                    const category = $('#category').val();
                    const sap_code = $('#sap_code').val();
                    const gt_code = $('#gt_code').val();
                    const trade = $('#trade').val();

                    // Enable the submit button if all fields are valid
                    if (product_id && product_name && product_weight && category && sap_code && gt_code && trade) {
                        $('#submitButton').prop('disabled', false);
                    } else {
                        $('#submitButton').prop('disabled', true);
                    }
                }

                // Call the checkFormValidity function on input change
                $('input,textarea, select, #user_profile').on('input change',
                    checkFormValidity);


               

                

                // Initialize the form validation
                $("#frm_register").validate({
                    rules: {
                        product_id: {
                            required: true,
                        },
                        product_name: {
                            required: true,
                        },
                        product_weight: {
                            required: true,
                        },
                        category: {
                            required: true,
                        },
                        sap_code: {
                            required: true,
                        },
                        gt_code: {
                            required: true,
                        },
                        trade: {
                            required: true,
                        }

                    },
                    messages: {
                        product_id: {
                            required: "The product id field is required.",
                        },
                        product_name: {
                            required: "The product name field is required.",
                        },
                        product_weight: {
                            required: "The product weight field is required.",
                        },
                        category: {
                            required: "The category field is required.",
                        },
                        sap_code: {
                            required: "The sap code field is required.",
                        },
                        gt_code: {
                            required: "The gt type field is required.",
                        },
                        trade: {
                            required: "The trade field is required.",
                        },
                    },

                });
            });

          
        </script>

        <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>

<script>

    
    // $(document).ready(function() {
    // Get references to the input fields
    function addsapcode(product_id) {
    $('#sap_code').val(product_id);
}
</script>

<script>
            $(document).ready(function() {

                $('.edit-btn').click(function(e) {
                    e.preventDefault();
                    var product_id = $(this).attr('data-id');

                    if (product_id !== '') {
                        $.ajax({
                            url: '<?php echo e(route('edit-product')); ?>',
                            type: 'GET',
                            data: {
                                productId: product_id
                            },
                            // headers: {
                            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            // },
                            success: function(response) {
                                // console.log(response);
                                const data = response[0];
                                $('#product_id').val(data.product_id);
                                $('#product_name').val(data.product_name);
                                $('#product_weight').val(data.product_weight);
                                $('#category').val(data.category);
                                $('#sap_code').val(data.sap_code);
                                $('#gt_code').val(data.gt_code);
                                $('#trade').val(data.trade);
                                $('#formtype').val('edit');
                                $('#prodid').val(product_id);
                                
                            }
                        });
                    }
                });
            });
        </script> 

<form method="POST" action="<?php echo e(url('/update-active-products')); ?>" id="activeform">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="active_id" id="active_id" value="">
        </form>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\cet_project\resources\views/admin/pages/products/add-product.blade.php ENDPATH**/ ?>