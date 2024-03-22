<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
        <div class="card shadow ml-4 mt-5 ml-5">
            <div class="card-header">
                <h5 class="card-title fs-4"><i class="bi bi-person-circle shadow rounded-circle m-3" style="color:#F56565;"></i>Comments</h5>
            </div>
            <div class="p-4 card-body list-group list-group-flush">
                <div class="row">
                    {{-- profile left col --}}
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xm-3">
                        {{-- @if(count($feedbacks) > 0 )
                        @foreach ($feedbacks as $feedback) --}}
                       
                        <div class="card col-md-12">
                            {{-- @if(Auth::guest()) --}}
                            <div class="card-image text-center pt-3">
                                Comment are hidden
                                {{-- <img style="width:50px" class="shadow rounded-circle m-3" src="logImage/{{$post->hasImage}}"><br> --}}
                            </div>
                            {{-- @else --}}
                            <div class="card-title">
                                <h4 class="fs-6 text-center text-capitalize" style="color:#2D3748">
                                </h4>
                            </div>
                            <div class="card-body" style="background-color: #F1F6F9">
                                {{-- <p class="text-capitalize text-black">{{$feedback->message}}</p><br> --}}
                                {{-- <small class="fs-6 text-capitalize text-black">{{$feedback->updated_at}}</small> --}}
                            </div>
                        </div>
                        {{-- @endif --}}
                        {{-- space btn card coomment --}}<br>
                        {{-- @endforeach
                        @else --}}
                        {{-- <div class="col-6">
                            <h3 class="fs-5 alert alert-danger">No comment available</h3>
                        </div> --}}
                        {{-- @endif --}}

                    </div>
                    {{-- center vertical ruler --}}
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1">
                        <div class="d-flex" style="height: 100%;">
                            <div class="vr text-black"></div>
                        </div>
                    </div>
                    {{-- right contents --}}
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xm-8">
                        <p class="lead fs-5"></p>
                        <div class="d-flex justify-content-center">
                            <h3 class="fs-5 font-monospace " style="color:#2D3748">
                                Write your comment in short description
                                *</h3>
                            <hr>
                        </div>
                        <div class="row pt-2 d-flex justify-content-left">
                            <div class="col-md-12">
                                {!! Form::open(['Action' => 'FeedbackController@store','Method'
                                =>'POST','enctype'=>'multipart/form-data']) !!}
                                @csrf
                                <div class="col-lg-6 col-md-10 col-sm-8 col-xm-12 m-4">
                                    Email address
                                    {{Form::email('email','',['class'=>'form-control border
                                        border-info','placeholder'=>'Email*'])}}
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-8 col-xm-12 m-4">
                                    Subject
                                    {{Form::text('subject','',['class'=>'form-control border
                                        border-info','placeholder'=>'Subject*'])}}
                                </div>
                                <div class="col-md-10  m-4">
                                    Message
                                    {{Form::textarea('message','',['class'=>'form-control border border-info',
                                        'placeholder'=>'Message*','rows'=>'4'])}}
                                </div>
                                <div class="col-4  m-4">
                                    {{Form::submit('submit',['class'=>'form-control cus btn btn-danger'])}}
                                </div>
                                {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>