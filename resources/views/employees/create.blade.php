@extends('layouts.user')
@section('content')
    {{-- profile user --}}
    <div class="row mx-5">
        <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation">
                <a href="#person" class="nav-link" id="person-tab" data-toggle="tab" type="button" role="tab"
                    aria-controls="person" aria-selected="false">Personal Details</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#Working_Details" class="nav-link" id="Working_Details-tab" data-toggle="tab" type="button"
                    role="tab" aria-controls="final" aria-selected="true">Working Details</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#attach" class="nav-link" id="attach-tab" data-toggle="tab" type="button" role="tab"
                    aria-controls="attach" aria-selected="true">Attachments</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#final" class="nav-link" id="final-tab" data-toggle="tab" type="button" role="tab"
                    aria-controls="final" aria-selected="true">Finalize</a>
            </li>
        </ul>
    </div>
    {{-- personal details --}}
    <div class="tab-content  mt-5">
        <div class="tab-pane fade active" id="person" role="tabpanel" aria-labelledby="person-tab">
            <div class="row mx-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="d-flex card-header"  style="background-color:#85149E">
                            <div class="card-title text-capitalize">
                                <i class="fs-5 bi bi-person-lines-fill m-2 " style="color:#F56565"></i>
                            </div>
                            <h2 class="fs-5 text-white">Personal Details</h2>
                        </div>
                        {{-- FORM DATA --}}
                        {!! Form::open(['Action' => 'EmployeeController@store', 'Method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="row m-3 ">
                        </div>
                        <div class="row m-3">
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="firstname"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="validationCustom02" name="middlename"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Surname</label>
                                <input type="text" class="form-control" id="validationCustom02" name="surname" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Region</label>
                                <input type="text" class="form-control" id="validationCustom02" name="region" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">District</label>
                                <input type="text" class="form-control" id="validationCustom02" name="district" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a valid District.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Ward</label>
                                <input type="text" class="form-control" id="validationCustom02" name="ward" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a valid ward.
                                </div>
                            </div>
                        </div>
                        {{-- NIDA --}}
                        <div class="row m-3 border-info">
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Gender</label>
                                <select name="gender" class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="F">Female</option>
                                    <option value="M">Male</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid ward.
                                </div>
                            </div>
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Working Information --}}
    <div class="tab-content  mt-5">
        <div class="tab-pane fade active" id="Working_Details" role="tabpanel" aria-labelledby="Working_Details-tab">
            <div class="row mx-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="d-flex card-header" style="background-color:#85149E">
                            <div class="card-title text-capitalize">
                                <i class="fs-5 bi bi-person-lines-fill m-2 " style="color:#F56565"></i>
                            </div>
                            <h2 class="fs-5 text-white">Working Details</h2>
                        </div>
                        <div class="row m-3">
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Employee Number</label>
                                <input type="text" class="form-control" id="validationCustom01" name="employee_no"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Position/Job Title</label>
                                <input type="text" class="form-control" id="validationCustom01" name="job_title"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Salary</label>
                                <input type="text" class="form-control" id="validationCustom02" name="salary"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Hire Date</label>
                                <input type="date" class="form-control" id="validationCustom02" name="hire_date"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Working Status</label>
                                <select name="status" class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a choose working status.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Department</label>
                                <input type="text" class="form-control" id="validationCustom02" name="department"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- //end tabs one --}}
        <div class="tab-pane fade active" id="attach" role="tabpanel" aria-labelledby="attach-tab">
            <div class="row m-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="d-flex card-header" style="background-color:#85149E">
                            <div class="card-title text-capitalize">
                            <i class="fs-5 bi bi-paperclip m-2" style="color:#F56565"></i>
                            </div>
                            <h3 class="fs-5 text-white">Add all attachments</h3>
                        </div>
                        <div class="row m-3">
                            <div class="col-md-6">
                                <div class="col-md-8">
                                    <label for="validationCustomUsername" class="form-label">Current Passport</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="bi bi-images"></i></span>
                                        <input type="file" name="photo" class="form-control"
                                            id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please add photo.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 mt-3">
                                    <label for="validationCustomUsername" class="form-label">Other attachment</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="bi bi-paperclip"></i></span>
                                        <input type="file" name="other" class="form-control"
                                            id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please application letter.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="final" role="tabpanel" aria-labelledby="final-tab">
            <div class="row m-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="d-flex card-header" style="background-color:#85149E">
                            <div class="fs-5 card-title text-capitalize">
                                <i class="bi bi-save-fill m-2" style="color:#F56565"></i>
                            </div>
                            <h3 class="fs-5 text-white"> Finalizing Steps</h3>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                    required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                            <div class="col-12 m-3">
                                {{ Form::submit('Submit', ['class' => 'text-white cus btn btn-default','style'=>'background-color:#85149E']) }}
                                {!! Form::close() !!}
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- <footer></footer> --}}
    <div class="row" style="padding-top:50%">
        @include('inc.footer')
    </div>
@endsection
