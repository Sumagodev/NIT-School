@extends('admin.layout.master')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    </style>
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                Kaizen Management
                </h3>
            </div>
            <hr>
            <h3 class="page-title">
            Employee Details
            </h3>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card mt-4">
                        <div class="card-body">
                            <form class="forms-sample" id="frm_register" name="frm_register" method="post" role="form"
                                action="{{ route('add-admin') }}" enctype="multipart/form-data">
                                <div class="row">
                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label class="label_css" for="plant">Plant</label>
                                            <select class="form-control form-select" name="plant" id="plant">
                                                <option value="">Select Plant</option>
                                                <option value="1">Chakan</option>
                                                <option value="2">Pantnagar</option>
                                                <option value="3">Pithampur</option>
                                                <option value="4">Jamshedpur</option>
                                                <option value="5">IPD-Jamshedpur</option>
                                            </select>
                                            @if ($errors->has('plant'))
                                                <span class="red-text"><?php echo $errors->first('plant', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="employee_number">Employee Number</label>
                                            <input type="text" class="form-control" name="employee_number" id="employee_number"
                                                placeholder="Employee Number" value="{{ old('employee_number') }}">
                                            @if ($errors->has('employee_number'))
                                                <span class="red-text"><?php echo $errors->first('employee_number', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="employee_name">Employee Name/Kaizen Suggestor</label>
                                            <input type="text" class="form-control" name="employee_name" id="employee_name"
                                                placeholder="Enter Your First Name & Last Name. Ex : Sameer Patil" value="{{ old('employee_name') }}"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            @if ($errors->has('employee_name'))
                                                <span class="red-text"><?php echo $errors->first('employee_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="team_member">Kaizen Team-Members(Only 2 members allow)</label>
                                            <input type="text" class="form-control" name="team_member" id="team_member"
                                                placeholder="Type" value="{{ old('team_member') }}">
                                            @if ($errors->has('team_member'))
                                                <span class="red-text"><?php echo $errors->first('team_member', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="employee_department">Employee Function-Area/Department</label>
                                            <select class="form-control form-select" name="employee_department" id="employee_department">
                                                <option value="">Select</option>
                                                <option value="C&D- PRODUCTION">C&D- PRODUCTION</option>
                                                <option value="MOLDING - PRODUCTION">MOLDING - PRODUCTION</option>
                                                <option value="QUALITY">QUALITY</option>
                                                <option value="MAINTENANCE">MAINTENANCE</option>
                                                <option value="HR & ADMIN">HR & ADMIN</option>
                                                <option value="SAFETY">SAFETY</option>
                                                <option value="R&D">R&D</option>
                                                <option value="ENGGINERING">ENGGINERING</option>
                                                <option value="PURCHASE">PURCHASE</option>
                                                <option value="FINANCE">FINANCE</option>
                                                <option value="STORE">STORE</option>
                                                <option value="DISPATCH">DISPATCH</option>
                                                <option value="MARKETING">MARKETING</option>
                                                <option value="PAINT SHOP">PAINT SHOP</option>
                                                <option value="PPC">PPC</option>
                                                <option value="Tool Room">Tool Room</option>
                                                <option value="Welding Cabin">Welding Cabin</option>
                                            </select>
                                            @if ($errors->has('employee_department'))
                                                <span class="red-text"><?php echo $errors->first('employee_department', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>
                                    <hr class="hr_css">

                                    <h3 class="page-title mb-4">
                                        Kaizen Management Details
                                    </h3>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                            <label>Choose Kaizen Type</label>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="P - Productivity">&nbsp;&nbsp; P - Productivity
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="Q - Quality">&nbsp;&nbsp; Q - Quality
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="C - Cost">&nbsp;&nbsp; C - Cost
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row mt-2">
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="D - Delivery">&nbsp;&nbsp; D - Delivery
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="S - Safety">&nbsp;&nbsp; S - Safety
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="M - Moral">&nbsp;&nbsp; M - Moral
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row mt-2">
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="Sus - Sustainability">&nbsp;&nbsp; Sus - Sustainability
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="checkbox" name="kaizen_type[]" value="5S">&nbsp;&nbsp; 5S
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="kaizen_theme">Kaizen Theme ( Type in <select class="form-selectt" name="add_before_image" id="add_before_image">
                                                    <option value="English">English</option>
                                                    <option value="हिंदी">हिंदी</option>
                                                </select> )</label>
                                                <textarea type="text" class="form-control" name="kaizen_theme" id="kaizen_theme"
                                                    placeholder="" value="{{ old('kaizen_theme') }}"></textarea>
                                                @if ($errors->has('kaizen_theme'))
                                                    <span class="red-text"><?php echo $errors->first('kaizen_theme', ':message'); ?></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group mt-4">
                                                <label for="before_kaizen_cond">Before Kaizen Condition(Existing Problem)</label>
                                                <input type="text" class="form-control" name="before_kaizen_cond" id="before_kaizen_cond"
                                                    placeholder="Before Kaizen Condition(Existing Problem)" value="{{ old('before_kaizen_cond') }}"
                                                    oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                                @if ($errors->has('before_kaizen_cond'))
                                                    <span class="red-text"><?php echo $errors->first('before_kaizen_cond', ':message'); ?></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group mt-4">
                                                <label for="before_kaizen_image">Do you want to add before Kaizen image? (Optional)</label>
                                                <select class="form-control form-select" name="before_kaizen_image" id="before_kaizen_image">
                                                    <option value="">Select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                @if ($errors->has('before_kaizen_image'))
                                                    <span class="red-text"><?php echo $errors->first('before_kaizen_image', ':message'); ?></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="after_condition">After Kaizen Condition</label>
                                                <input type="text" class="form-control" name="after_condition" id="after_condition"
                                                    placeholder="After Kaizen Condition" value="{{ old('after_condition') }}"
                                                    oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                                @if ($errors->has('after_condition'))
                                                    <span class="red-text"><?php echo $errors->first('after_condition', ':message'); ?></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="after_kaizen_image">Do you want to Add after Kaizen-Image? (Optional)</label>
                                                <select class="form-control form-select" name="after_kaizen_image" id="after_kaizen_image">
                                                    <option value="">Select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                @if ($errors->has('after_kaizen_image'))
                                                    <span class="red-text"><?php echo $errors->first('after_kaizen_image', ':message'); ?></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="add_after_image">Benefits</label><br>
                                                <input type="checkbox" name="benefits[]" value="Qualitative">&nbsp;&nbsp; Qualitative &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="benefits[]" value="Quantitative">&nbsp;&nbsp; Quantitative
                                                @if ($errors->has('add_after_image'))
                                                    <span class="red-text"><?php echo $errors->first('add_after_image', ':message'); ?></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                        </div>

                                        <label for="horizontal_deployement">Horizontal Deployement/short version</label>
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <select class="form-control form-select" name="horizontal_deployement" id="horizontal_deployement">
                                                    <option value="">Select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                                @if ($errors->has('horizontal_deployement'))
                                                    <span class="red-text"><?php echo $errors->first('horizontal_deployement', ':message'); ?></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="add_after_image">Kaizen Standardization</label><br>
                                                <input type="checkbox" name="kaizen_type[]" value="Document">&nbsp;&nbsp; Document
                                                @if ($errors->has('add_after_image'))
                                                    <span class="red-text"><?php echo $errors->first('add_after_image', ':message'); ?></span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    

                                    <div class="col-md-12 col-sm-12 text-center mt-4 mb-4">
                                        <button type="submit" class="submit_css" id="submitButton">
                                            Submit
                                        </button>
                                        <button type="reset" class="clear_css">Clear</button>
                                        <!-- <span><a href="{{ route('list-admin') }}"
                                                class="btn btn-sm btn-primary ">Back</a></span> -->
                                    </div>
                                </div>
                            </form>
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
            function addvalidateMobileNumber(number) {
                var mobileNumberPattern = /^\d*$/;
                var validationMessage = document.getElementById("validation-message");

                if (mobileNumberPattern.test(number)) {
                    validationMessage.textContent = "";
                } else {
                    validationMessage.textContent = "Please enter only numbers.";
                }
            }
        </script>
        <script>
            function addvalidatePincode(number) {
                var pincodePattern = /^\d*$/;
                var validationMessage = document.getElementById("validation-message-pincode");

                if (pincodePattern.test(number)) {
                    validationMessage.textContent = "";
                } else {
                    validationMessage.textContent = "Please enter only numbers.";
                }
            }
        </script>


        <script>
            $(document).ready(function() {

                $('#taluka').change(function(e) {
                    e.preventDefault();
                    var talukaId = $('#taluka').val();
                    console.log(talukaId);
                    $('#village').html('<option value="">Select Village</option>');

                    if (talukaId !== '') {
                        $.ajax({
                            url: '{{ route('village') }}',
                            type: 'GET',
                            data: {
                                talukaId: talukaId
                            },
                            // headers: {
                            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            // },
                            success: function(response) {
                                console.log(response);
                                if (response.village.length > 0) {
                                    $.each(response.village, function(index, village) {
                                        $('#village').append('<option value="' + village
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
            function myFunction(role_id) {
                // alert(role_id);
                $("#data_for_role").empty();
                $.ajax({
                    url: "{{ route('list-role-wise-permission') }}",
                    method: "POST",
                    data: {
                        "role_id": role_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        $("#data_for_role").empty();
                        $("#data_for_role").append(data);
                    },
                    error: function(data) {}
                });
            }
        </script>

        <!--  -->
        <script>
function formatAadharNumber(input) {
    let value = input.value.replace(/\s/g, ''); // Remove existing spaces
    value = value.replace(/\D/g, ''); // Remove non-numeric characters
    let formattedInput = '';
    for (let i = 0; i < value.length; i++) {
        formattedInput += value[i];
        if ((i + 1) % 4 === 0 && i !== value.length - 1) {
            formattedInput += ' ';
        }
    }
    input.value = formattedInput;
}
</script>

        <script>
            $(document).ready(function() {
                // Function to check if all input fields are filled with valid data
                function checkFormValidity() {
                    const email = $('#email').val();
                    const password = $('#password').val();
                    const password_confirmation = $('#password_confirmation').val();
                    const f_name = $('#f_name').val();
                    const m_name = $('#m_name').val();
                    const l_name = $('#l_name').val();
                    const number = $('#number').val();
                    const address = $('#address').val();
                    const taluka = $('#taluka').val();
                    const village = $('#village').val();

                    // Enable the submit button if all fields are valid
                    // if (email && password && password_confirmation && f_name && m_name && l_name && number && address
                    //     && taluka && village) {
                    //     $('#submitButton').prop('disabled', false);
                    // } else {
                    //     $('#submitButton').prop('disabled', true);
                    // }
                }

                // Call the checkFormValidity function on input change
                $('input,textarea, select, #user_profile').on('input change',
                    checkFormValidity);

                    $.validator.addMethod("number", function(value, element) {
                    return this.optional(element) || /^[0-9]{10}$/.test(value);
                }, "Please enter a valid 10-digit number.");

                $.validator.addMethod("email", function(value, element) {
                    // Regular expression for email validation
                    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                    return this.optional(element) || emailRegex.test(value);
                }, "Please enter a valid email address.");


                $.validator.addMethod("aadharNumber", function(value, element) {
                var aadharPattern = /^\d{4}\s\d{4}\s\d{4}$/;
                    return this.optional(element) || aadharPattern.test(value);
                }, "Please enter a valid Aadhar number");  

                

                // Initialize the form validation
                $("#frm_register").validate({
                    rules: {
                        plant: {
                            required: true
                        },
                        // password: {
                        //     required: true,
                        //     minlength: 8,  // Minimum length of 8 characters
                        //     maxlength: 15,
                        // },
                        // password_confirmation: {
                        //     required: true,
                        //     minlength: 8,  // Minimum length of 8 characters
                        //     maxlength: 15,
                        // },
                        // f_name: {
                        //     required: true,
                        // },
                        // m_name: {
                        //     required: true,
                        // },
                        // l_name: {
                        //     required: true,
                        // },
                        // number: {
                        //     required: true,
                        //     number:true,
                        // },
                        // aadhar_no: {
                        //     required: true,
                        //     aadharNumber: true
                        // },
                        // address: {
                        //     required: true,
                        // },
                        // district: {
                        //     required: true,
                        // },
                        // taluka: {
                        //     required: true,
                        // },
                        // village: {
                        //     required: true,
                        // },
                        // user_profile: {
                        //     required: true,
                        // },
                        // pincode: {
                        //     required: true,
                        // },

                    },
                    messages: {
                        plant: {
                            required: "Please Enter the Eamil",
                        }
                        // password: {
                        //     required: "Please Enter the Password",
                        //     minlength: "Old Password must be exactly 8 characters long",  // Custom error message for minlength
                        //     maxlength: "Old Password must be exactly 15 characters long",
                        // },
                        // password_confirmation: {
                        //     required: "Please Enter the Confirmation Password",
                        //     minlength: "Old Password must be exactly 8 characters long",  // Custom error message for minlength
                        //     maxlength: "Old Password must be exactly 15 characters long",
                        // },
                        // f_name: {
                        //     required: "Please Enter the First Name",
                        // },
                        // m_name: {
                        //     required: "Please Enter the Middle Name",
                        // },
                        // l_name: {
                        //     required: "Please Enter the Last Name",
                        // },
                        // number: {
                        //     required: "Please Enter the Number",
                        // },
                        // aadhar_no: {
                        //     required: "Please Enter the Aadhar No",
                        //     pattern: "Please enter a valid Aadhar number (e.g., 1234 5678 9101)", // Custom error message for Aadhar card number validation

                        // },
                        // address: {
                        //     required: "Please Enter the Address",
                        // },
                        // district: {
                        //     required: "Please Select District",
                        // },
                        // taluka: {
                        //     required: "Please Select Taluka",
                        // },
                        // village: {
                        //     required: "Please Select Village",
                        // },
                        // user_profile: {
                        //     required: "Upload Media File",
                        //     accept: "Only png, jpeg, and jpg image files are allowed.", // Update the error message for the accept rule
                        // },
                        // pincode: {
                        //     required: "Please Enter the Pincode",
                        // },
                    },

                });
            });

          
        </script>
    @endsection
