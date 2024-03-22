@extends('layouts.admin')
@section('content')
    <br>
    <nav aria-label="breadcrumb ml-5" style='margin-left:4%'>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/employee') }}">Employees Info</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>
    <div class="tab-content  mt-5">
        <div class="tab-pane active" id="user" role="tabpanel" aria-labelledby="user-tab">
          <div class="card-header">
          @include('inc.messages')
          <div class="row ml-3">
            <div class="col-lg-12 col-sm-6 col-xm-12 ">
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="table-light">
                            <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
                                <th>S/N</th>
                                <th>Fullname</th>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Employee Status</th>
                                <th>Hire Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if (count($users) > 0)
                              @foreach ($users as $user)
                                  <tr>
                                      <td>{{ $user->id }}</td>
                                      @foreach ($user->employees as $employee)
                                          <td>{{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->surname }}</td>
                                          <td>{{ $employee->job_title }}</td>
                                          <td>{{ $employee->department }}</td>
                                          <td>{{ $employee->employee_status }}</td>
                                          <td>{{ $employee->hire_date }}</td>
                                      @endforeach
                                      <td>
                                          <div class="d-flex">
                                              <div class="fs-6">
                                                  <a class="btn btn-primary text-white mr-2" type="button"
                                                      data-toggle="modal" data-target="#exampleModal2"
                                                      href="{{ url('#adduser/' . $user->id) }}/">View</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                              @endforeach
                          @endif
                      </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    {{-- profile user --}}
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="exampleModalLabel">
                        <i class="bi bi-card-checklist m-3" style="color:#F56565;"></i>Teacher:
                        Particular Information
                    </h5>
                    <button type="button" class="btn-close bg-danger" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="p-5 list-group list-group-flush">
                        <div class="row">
                            {{-- profile left col --}}
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
                                <div class="col-md-12">
                                    <div class="text-capitalize text-center ">
                                        <i class="bi bi-person-circle fs-1 shadow rounded-circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-1">
                                    <div class="text-uppercase text-muted">
                                        <h4 class="fs-3 ">
                                            <center>{{ $employee->fullname }}</br>
                                            </center>
                                        </h4>
                                    </div>
                                    <h5 class="text-muted ">
                                        <center style="color:#F56565;">
                                            Employee No: {{ $user->EmpID }}
                                        </center>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <div class="justify-content-center d-flex">
                                        {{-- style="color:#30BCED" --}}
                                        <a class="breadcrumb-item" href="{{ url('edit/' . $user->EmpID) }}">
                                            <i class="bi bi-pencil-fill text-muted"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- center vertical ruler --}}
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1">
                                <div class="d-flex" style="height: 100%;">
                                    <div class="vr text-black"></div>
                                </div>
                            </div>
                            {{-- right contents --}}
                            <div class="col-lg-7 col-md-12 col-sm-12 col-xm-12">
                                <ul class="list-group list-group-flush">
                                    <h4 class="text-black fs-6 text-uppercase mt-2 lead">Addess</h4>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        Email
                                        address:
                                        <div class="m-auto">
                                            <div class="fs-6">{{ $user->email }}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        Contact
                                        <div class="m-auto">
                                            <div class="fs-6">{{ $user->phone}}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        Gender:
                                        <div class="m-auto">
                                            <div class="fs-5">{{ $employee->gender }}</div>
                                        </div>
                                    </li>

                                    <h4 class="text-black fs-6 text-uppercase mt-2">User Account</h4>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        Username:
                                        <div class="m-auto">
                                            <div class="fs-5">{{ $user->username }}</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        password:
                                        <div class="ml-2">
                                            <input class="{{ $user->password }}" type="hidden">
                                        </div>
                                    </li>
                                    <li class="list-group-item"></li>
                                </ul>
                                {{-- edit and delete button --}}
                                <div class="justify-content-center d-flex">
                                    {{-- style="color:#F56565;" --}}
                                    {{-- style="color:#30BCED" --}}
                                    <a class="cus btn btn-danger text-white"
                                        onclick="return confirm('Are you sure you wnat to delete this entry?')"
                                        href="{{ url('delete/' . $user->id) }}">Delete</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    {{-- <footer></footer> --}}
    <div class="row" style="padding-top:100%">
        @include('inc.footer')
    </div>

@endsection
