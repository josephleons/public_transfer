@extends('layouts.login')
@section('content')
{{-- jumbotron --}}
<div class="conatiner">
    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="text-center p-5">
                {{-- <small class="title">JoBseeK</small> --}}
                <p class="text-white fs-3"><strong class="text-capitalize">Teacher Transfer Management </strong></p>
                <small class="fs-6 text-white">by
                    login into the Teacher Transfer Management you accept terms and conditions of the Teacher Transfer Management</small>
                <div class="mt-5 col-md-12">
                    <div class="d-flex">
                        <div>
                            <div class="shadow p-2 mx-3 mb-3 bg-body rounded-circle">
                                <i class="bi bi-lightbulb" style="color:#DB851D"></i>
                            </div>
                        </div>
                        <div class="pl-2">
                            <p class="fs-6 text-white">
                                Post advertise
                            </p>
                        </div>
                    </div>
                    <hr class="text-danger">
                    <div class="d-flex">
                        <div>
                            <div class="shadow-sm p-2 mx-3 mb-3 bg-body rounded-circle">
                                <i class="bi bi-lightbulb" style="color:#DB851D"></i>
                            </div>
                        </div>
                        <div class="pl-3">
                            <p class="fs-6 text-white">
                                User Registration
                            </p>
                        </div>
                    </div>
                    <hr class="text-danger">
                    <div class="d-flex px-2">
                        <div>
                            <div class="shadow-sm p-2 mx-3 mb-5 bg-body rounded-circle text-primary">
                                <i class="bi bi-lightbulb" style="color:#DB851D"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="fs-6 text-white">
                                 Teacher Post host
                            </p>
                        </div>
                    </div>
                    <hr class="text-danger">
                </div>
            </div>
        </div>
        {{-- jumbotron --}}
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 m-auto">
            @include('inc.messages')
            <div class="card shadow ">
                <div class="mx-auto">
                    <img style="width:50px" class="shadow rounded-circle m-3" src="{{url('assets/images/ttms.jpg')}}">
                </div>
                <hr>
                <div class="card-body">
                    {!! Form::open(['Action' => 'PostsController@index','Method' =>'POST']) !!}
                    @csrf
                    <div class="d-flex text-muted pt-5">
                        <h3 class="fs-5 card-title-text mx-auto" style="font-family:'Times New Roman">
                            Sign in with credentials
                        </h3>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group p-2 mt-2">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-person-plus"></i>
                            </span>
                            {{Form::text('username','',['class'=>'form-control','placeholder'=>'Username'])}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group  p-2 mt-4 ">
                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                <i class="bi bi-lock"></i>
                            </span>
                            {{Form::password('password', ['class' => 'form-control','placeholder'=>'Password'])}}
                            {{-- {{Form::text('password','',['class'=>'form-control','placeholder'=>'Password'])}} --}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group  p-2 mt-4">
                            {{ Form::submit('Login', ['class' => 'text-white btn btn-default form-control', 'style' => 'background-color:#85149E']) }}

                        </div>
                        {{-- footer --}}
                        <a href="#"><small class="title fs-6 mx-5 d-flex"> Forgot your password ?</small></a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div style="  padding-top:100px">
        @include("inc.footer")
    </div>

</div>
@endsection