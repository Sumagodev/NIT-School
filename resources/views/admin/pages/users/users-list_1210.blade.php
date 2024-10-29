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

        .submit_css{
            border-color:#303C7A;
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
            border-color:#0069d9;
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
    </style>
    <div class="main-panel">
        <div class="content-wrapper mt-6">
           
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" id="frm_register" name="frm_register" method="post" role="form"
                                action="{{ route('add-village') }}" enctype="multipart/form-data">
                                <div class="row">
                                <h3 class="page-title">
                                    Kaizen Reported List
                                    <hr>
                                </h3>
                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 mt-2">
                                        <div class="form-group">
                                            <label for="employee_number">Employee Number</label>
                                            <input type="text" class="form-control" name="employee_number" id="employee_number"
                                                placeholder="Please Enter Your Employee Number" value="{{ old('employee_number') }}">
                                            @if ($errors->has('employee_number'))
                                                <span class="red-text"><?php echo $errors->first('employee_number', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <button type="submit" class="submit_css" id="submitButton">
                                            Search
                                        </button>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
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
    $(document).ready(function() {
        // Function to check if all input fields are filled with valid data
        function checkFormValidity() {
            const taluka = $('#taluka').val();
            const name = $('#name').val();

            // Enable the submit button if all fields are valid
            if (taluka && name) {
                $('#submitButton').prop('disabled', false);
            } else {
                $('#submitButton').prop('disabled', true);
            }
        }

        // Call the checkFormValidity function on input change
        $('input,textarea, select, #user_profile').on('input change',
            checkFormValidity);

    });
</script>
   



        <!--  -->

        <script>
    $(document).ready(function() {
        // Function to check if all input fields are filled with valid data
        function checkFormValidity() {
            const taluka = $('#taluka').val();
            const name = $('#name').val();
            
        }

        // Call the checkFormValidity function on file input change
        $('input, #english_image, #marathi_image').on('change', function() {
            checkFormValidity();
            validator.element(this); // Revalidate the file input
        });
        // Initialize the form validation
        var form = $("#frm_register");
        // Initialize the form validation
        // $("#frm_register").validate({
        var validator = form.validate({
    rules: {
        taluka: {
            required: true,
        },
        name: {
            required: true,
        },
        'ward_no[]': {
            required: function(element) {
                return $("#is_ward").is(":checked");
            },
        },
    },
    messages: {
        taluka: {
            required: "Please Select Taluka",
        },
        name: {
            required: "Please Enter the Village Name",
        },
        'ward_no[]': {
            required: "Please Enter the Ward Number",
        },
    },
    errorPlacement: function (error, element) {
        if (element.attr("name") == "ward_no[]") {
            error.insertAfter(element.closest('.form-group'));
        } else {
            error.insertAfter(element);
        }
    }
});



        // Submit the form when the "Update" button is clicked
        $("#submitButton").click(function() {
            // Validate the form
            if (form.valid()) {
                form.submit();
            }
        });
    });
</script>

<script>
            $(document).ready(function() {

                $('#submitButton').click(function(e) {
                    e.preventDefault();
                    var EmployeeNumber = $('#employee_number').val();

                    if (EmployeeNumber !== '') {
                        $.ajax({
                            url: '{{ route('filter-employee') }}',
                            type: 'GET',
                            data: {
                                districtId: districtId,
                                talukaId: talukaId,
                                villageId: villageId,
                                SkillId: SkillId,
                                IsApprovedId: IsApprovedId,
                                RegistrationStatusId: RegistrationStatusId,
                            },
                            // headers: {
                            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            // },
                            success: function(response) {
                                console.log(response.labour_ajax_data);
                                if (response.labour_ajax_data.length > 0) {
                                    // $('#order-listing tbody').empty();
                                    var table = $('#order-listing').DataTable();
                                    table.clear().draw();
                                    
                                    $.each(response.labour_ajax_data, function(index, labour_data) {
                                        index++;
                                        var statusText = "";
                                        if (labour_data.is_approved == '1') {
                                            statusText = "Received For Approval";
                                        } else if (labour_data.is_approved == '2') {
                                            statusText = "Approved";
                                        } else if (labour_data.is_approved == '3') {
                                            statusText = "Send For Correction";
                                        }

                                        table.row.add([ index,
                                            labour_data.f_name + ' ' + labour_data.m_name + ' ' + labour_data.l_name,
                                            labour_data.full_name,
                                            labour_data.mobile_number,
                                            labour_data.mgnrega_card_id,
                                            statusText,
                                            '<a onClick="getData(' + labour_data.id + ')" class="show-btn btn btn-sm btn-outline-primary m-1"><i class="fas fa-eye"></i></a>']).draw(false);
                                    });
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
    @endsection