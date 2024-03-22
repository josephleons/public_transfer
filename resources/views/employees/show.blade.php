@extends('layouts.user')
@section('content')
    <div class="row mx-3">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
            <div class="card shadow mt-2">
                <div class="alert alert-success  alert-dismissible">
                    <strong> @include('inc.messages')</strong>
                    {{-- You success submit your  records --}}
                    <a class="lead fs-4 text-center text-muted" href="#">Information stored successfull</a>
                    <button type="button" class="btn-close" data-dismiss="alert"></button>
                </div>
                <div class="card-header">
                    Employee Details
                </div>
                <div class="p-4 card-body list-group list-group-flush">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xm-6">
                            <div class="row pt-2 d-flex">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Fullname</strong>
                                        {{ $user->employee->firstname ?? 'no user' }}
                                        {{ $user->employee->middlename ?? 'no user' }}{{ $user->employee->surname ?? 'no user' }}
                                    </li>
                                    <li class="list-group-item"><strong>Position: </strong>
                                        {{ $user->employee->job_title ?? 'no user' }} </li>
                                    <li class="list-group-item"><strong>Department: </strong>
                                        {{ $user->employee->department ?? 'no user' }} </li>
                                    <li class="list-group-item"><strong>Salary: </strong>
                                        {{ $user->employee->salary ?? 'no user' }} </li>
                                    <li class="list-group-item"><strong>Status: </strong>
                                        {{ $user->employee->job_title ?? 'no user' }} </li>
                                    <li class="list-group-item"><strong>Hire Date: </strong>
                                        {{ $user->employee->job_title ?? 'no user' }} </li>
                                    <li class="list-group-item"><strong>Email Address:</strong>
                                        {{ $user->email ?? 'no contact' }} </li>
                                    <li class="list-group-item"><strong>Mobile Phone:</strong>
                                        {{ $user->contact ?? 'no contact' }} </li>
                                    <li class="list-group-item"></li>
                                </ul>
                            </div>
                        </div>
                        {{-- center vertical ruler --}}
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1">
                            <div class="d-flex" style="height: 100%;">
                                <div class="vr text-danger" style="width: 6%;"></div>
                            </div>
                        </div>
                        {{-- right contents --}}
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xm-5">
                            <p class="fs-5 text-dark  d-flex justify-content-start">Attachments</p>
                            <div class="card">
                            </div>
                            {{-- attachment --}}
                            <hr class="text-dark">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">#
                                            <div class="m-auto">
                                                <div class="fw-bold text-info"> Type of Attachments:</div>
                                            </div>
                                            <span class="fw-bold text-info"> Attachment </span>
                                        </li>
                                        {{-- top --}}
                                        <li class="list-group-item d-flex justify-content-between align-items-start">1
                                            <div class="fw-bold m-auto text-muted">
                                                photo
                                            </div>
                                            <span class="text-info"><a href="#"><i
                                                        class="bi bi-eye m-2"></i>View</a></span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-start">3
                                            <div class="m-auto">
                                                <div class="fw-bold text-muted">Other attachment</div>
                                            </div>
                                            <span class="text-info"><a href="#"><i
                                                        class="bi bi-eye m-2"></i>View</a></span>
                                        </li>
                                    </ul>
                                    <p class="text-dark d-flex justify-content-start">Showing <strong>1-3 </strong>of items
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top:50%">
        @include('inc.footer')
    </div>
@endsection
