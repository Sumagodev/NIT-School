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

        .table th {
            /* font-size: 17px; !important */
            text-align: center; /* You can adjust other styles as needed */
            background-color: #f8f9fa; /* Optional: Add a background color */
            padding: 10px;
            border-bottom: 2px solid #dee2e6; /* Adds a bottom border */
        }
    </style>
    <div class="main-panel">
        <div class="content-wrapper mt-6">
           
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            
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
                            <!-- </form> -->
                            <hr>

                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="row"> 
                                        <div class="col-md-4">
                                            <p style="font-size:17px;"><strong>Employee No.:</strong> <span id="empno"></span></p>
                                        </div>

                                        <div class="col-md-4">
                                        <p style="font-size:17px;"><b>Employee Name:</b> <span id="empname"></span></p>
                                        </div>

                                        <div class="col-md-4">
                                        <p style="font-size:17px;"><b>Branch:</b> <span id="branch"></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
  
                            
                            <div class="row">
                                <div class="col-12">
                                    @include('admin.layout.alert')
                                    <div class="table-responsive" style="overflow-x: auto;">
                                        <table id="order-listing" class="table table-bordered nowrap" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Date</th>
                                                    <th>Kaizen Team-Members</th>
                                                    <th>Department</th>
                                                    <th>Kaizen Type</th>
                                                    <th>Kaizen Theme</th>
                                                    <th>Before Kaizen Condition (Existing Problem)</th>
                                                    <th>Before Kaizen image</th>
                                                    <th>After Kaizen Condition</th>
                                                    <th>After Kaizen-Image</th>
                                                    <th>Qualitative</th>
                                                    <th>Quantitative</th>
                                                    <th>Horizontal Deployement / Short Version</th>
                                                    <th>Document</th>
                                                    <th>Reason(if reject)</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Table data rows go here -->
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

                $('#submitButton').click(function(e) {
                    e.preventDefault();
                    var EmployeeNumber = $('#employee_number').val();

                    if (EmployeeNumber !== '') {
                        $.ajax({
                            url: '{{ route('filter-employee') }}',
                            type: 'GET',
                            data: {
                                EmployeeNumber: EmployeeNumber,
                            },
                            // headers: {
                            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            // },
                            success: function(response) {
                                console.log(response.emplyee_ajax_data);
                                if (response.emplyee_ajax_data.length > 0) {
                                    // $('#order-listing tbody').empty();
                                    var table = $('#order-listing').DataTable();
                                    table.clear().draw();
                                    
                                    $.each(response.emplyee_ajax_data, function(index, employee_data) {
                                        index++;
                                        $('#empno').text(employee_data.employee_number);
                                        $('#empname').text(employee_data.employee_name);
                                        $('#branch').text(employee_data.plant);

                                        var before_image = '';
                                        if (employee_data.before_kaizen_image) {
                                            before_image = '<img src="' + employee_data.before_kaizen_image + '" alt="Kaizen Image" width="50%">';
                                        } else {
                                            before_image = '<span class="btn btn-danger btn-sm">N/A</span>';
                                        }

                                        var after_before_image = '';
                                        if (employee_data.after_kaizen_image) {
                                            after_before_image = '<img src="' + employee_data.after_kaizen_image + '" alt="Kaizen Image" width="50%">';
                                        } else {
                                            after_before_image = '<span class="btn btn-danger btn-sm">N/A</span>';
                                        }


                                        table.row.add([ index,
                                            // labour_data.f_name + ' ' + labour_data.m_name + ' ' + labour_data.l_name,
                                            employee_data.createdate,
                                            employee_data.team_member,
                                            employee_data.employee_department,
                                            employee_data.kaizen_type,
                                            employee_data.kaizen_theme,
                                            employee_data.before_kaizen_cond,
                                            before_image,
                                            employee_data.after_kaizen_cond,
                                            after_before_image,
                                            employee_data.qualitative_details,
                                            employee_data.qualitative_details_annual,
                                            employee_data.horizontal_deployement_details,
                                            employee_data.select_documents,
                                            '--',
                                            'Pending'
                                           ]).draw(false);
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
      


   



      





 
    @endsection
