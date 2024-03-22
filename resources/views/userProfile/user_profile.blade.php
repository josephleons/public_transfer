@extends('layouts.user')
@section('content')
    {{-- <div class="container"> --}}
    <div class="row text-center ml-5 pt-2">
        <div class="col-md-12">
            <div class="px-2">
                <div class="text-capitalize">
                    <i class="bi bi-person-circle fs-1"></i>
                </div>
                <div class="card-body">
                    <p class="text-black text-muted">Email: {{ $user->email }} </p>
                    <p class="text-black text-muted">Contact: {{ $user->contact }}</p>
                    <hr style="color:#2D3748;">
                </div>
            </div>
        </div>
    </div>
    {{-- profile_at_top --}}
    <div class="row ml-5">
        <div class="col-md-12 col-md-offset-2">
            <ul class="nav nav-tabs justify-content-left" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active " id="home-tab" data-toggle="tab" href="{{ url('/profile') }}" role="tab"
                        aria-controls="home" aria-selected="true">
                        <i class="bi bi-person-check-fill"></i> Accounts Details </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="posts/index.php" role="tab"
                        aria-controls="posts" aria-selected="true">
                        <i class="bi bi-lock"></i> Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#" role="tab"
                        aria-controls="contact" aria-selected="false">
                        <i class="bi bi-gear"></i> Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#" role="tab"
                        aria-controls="contact" aria-selected="false"> Preference</a>
                </li>
            </ul>

        </div>
    </div>
    {{-- end top <nav></nav> --}}
    <div class="d-flex justify-content-end ml-5 p-4 mb-5">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
            <a class="text-black"href="/edit/{{$user->id}}"><i class="bi bi-pen mx-2" style="color:#F56565;"style="font-size:1em;"></i>Edit</a>
        </button>
    </div>
    {{-- edit model --}}
    <div class="row m-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="d-flex justify-content-start col-md-12">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-info" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['Action' => 'UserController@store', 'Method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                <div class="col-md-12 m-2">
                                    <div class="form-control">
                                        <input class='form-group' value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="col-md-12 m-2">
                                    <div class="form-control">
                                        <input class='form-group' value="{{ $user->password }}">
                                    </div>
                                </div>
                                <div class="modal-footer col-md-12 justify-content-center ">
                                    {{ Form::submit('submit', ['class' => 'cus btn btn-danger form-control']) }}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row ml-5 ">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Details</h5>
                    <p class="card-text"> </p>
                </div>
                <ul class="p-5 card-body list-group list-group-flush">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('Fullname', 'Username') }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input class='list-group-item' value="{{ $user->username }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('Password', 'Password') }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input class='list-group-item' value="{{ $user->password }}" hidden alt="User password">
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>

    </div>



    <div class="row" style="padding-top:100%">
        @include('inc.footer')
    </div>

    {{--
</div> --}}
@endsection
