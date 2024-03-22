@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="p-5 col-lg-2 col-md-2 col-sm-1 col-sm-12" style="margin-top:130px">
            <img style="width:100%" src="{{ url('assets/images/wizara.jpg') }}"><small>A system to enable teachers to transfer
                from one council to another</small>
        </div>
        <div class="col-md-8">
            <div class="text-center p-5">
                <small class="title"></small>
                <p style="font-size:36px;color:#2D3748"><strong>The official Teachers Transfer Management Systems</strong>
                </p>
                <small class="text-muted" style="font-size:12px; text-transform:capitalize; font-family:Tahoma">since
                    2024,</br>
                    Teachers Transfer management board connect the best employee
                    transfer from one institute to another </small>
            </div>
        </div>
        <div class="p-5 col-lg-2 col-md-2" style="margin-top:130px">
            <img style="width:100%" src="{{ url('assets/images/ttms.jpg') }}"><small>Teacher Transfer Management
                System</small>
        </div>
    </div>
    </br></br></br> </br>
    <p class="text-centers"
        style="font-family:Tahoma;font-size:20px;text-align:center;text-transform:lowercase;color:#2D3748">
        all recent posts each daily by subscribe your email below!
    </p>
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['Action' => 'Postscontroll@store', 'Method' => 'POST']) !!}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
                <div class="card-header">
                    <span class="col-2 form-group">
                        {{ Form::label('Get', 'Get news') }}
                        <select name="recent" class="form-group">
                            <option value="I">Instant</option>
                            <option value="W">Weekly</option>
                        </select>
                    </span>
                    <span class="ins col-md-8 px-3">
                        {{ Form::label('email', 'Email of all new Job', ['size' => '100%']) }}
                        {{ Form::email('email', '', ['class' => 'form-group', 'placeholder' => 'Email Address']) }}
                    </span>
                    <span class="col-lg-2 col-md-2 col-sm-2 col-xm-2">
                        {{ Form::submit('submit', ['class' => 'text-white btn btn-default', 'style' => 'background-color:#85149E']) }}
                    </span>
                    <br>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    {{-- row recent job? --}}
    <div class="row mx-3 mt-3 mb-2">
        <div class="col-lg-6">
            <h3 class="fs-4 text-capitalize">Available recent Posts</h3>
        </div>
    </div>
    <div class="row mx-3">
        <div class="col-md-6 col-sm-6 col-lg-6">
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="card">
                        <div class="card-header border border-info">
                            <div class="nav-item d-flex">
                                <div class="col-md-3">
                                    <img style="width:100%" src="/storage/profile_image/{{ $post->photo }}">
                                </div>
                                <div class="pl-3">
                                    <li class="nav-link text-black">
                                        Position: {{ $post->title }}
                                    </li>
                                    <li class="nav-link text-black">
                                        Description: {{ $post->Description }}
                                    </li>
                                    <li class="nav-link text-black">
                                        <i class="bi bi-geo-alt-fill" style="color:#F56565;"></i> {{ $post->location }}
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            @else
                <div class="text-capitalize">
                    <h3 class="fs-5 alert alert-danger">No post</h3>
                </div>
            @endif
        </div>
        {{-- left job list --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Available Posts Vacancies</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            @if (count($posts) > 0)
                                @foreach ($posts as $post)
                                    <thead class="table-light">
                                        <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
                                            <th>Description</th>
                                            <th>Closing Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td><strong>Position:</strong> {{ $post->title }}
                                            <br><strong>Descriptions:</strong>
                                            {{ $post->Description }}
                                            <br><a class="text-info" href="{{ url('view/' . $post->id) }}">Read More</a>
                                        </td>
                                        <td class="text-black">{{ $post->created_at }}<br><a class="text-info"
                                                href="/login"><i class="bi bi-key"></i>Login to
                                                View</a>
                                        </td>
                                    </tbody>
                                @endforeach
                                {{ $post->paginate() }}
                            @else
                                <div class="col-6">
                                    <h3 class="fs-5 alert alert-danger">No post</h3>
                                </div>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </br>

    {{-- how to apply instruction --}}
    <div class="row mt-5 d-flex">
        <div class="col-md-4">
            <div class="text-center">
                <p class="text-capitalize text-black">How to apply ?</p>
                <hr>
            </div>
            <div class="d-flex px-2">
                <div>
                    <div class="shadow p-2 mx-3 mb-3 bg-body rounded-circle">
                        <i class="bi bi-patch-question-fill" style="color:#DB851D"></i>
                    </div>
                </div>
                <div class="fs-6 lead">
                    <ul style="color:#30BCED">
                        <li>Register to pwtm posts port</li>
                        <li>After create account login and fill your information correct</li>
                        <li>using username and password for login into account</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center">
                <p class="text-capitalize text-black">Teacher Registration</p>
                <hr>
            </div>
            <div class="d-flex px-2">
                <div>
                    <div class="shadow p-2 mx-3 mb-3 bg-body rounded-circle">
                        <i class="bi bi-lightbulb" style="color:#DB851D"></i>
                    </div>
                </div>
                <div class="fs-6 lead">
                    <ul style="color:#30BCED">
                        <li>provide passport with post location</li>
                        <li>After create account login and fill your information correct</li>
                        <li>make sure all employee information are correct before contact</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    {{-- <footer></footer> --}}
    <div class="row" style="padding-top:100%">
        @include('inc.footer')
    </div>
    </div>

@endsection
