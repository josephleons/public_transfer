@extends('layouts.user')
@section('content')
    <div class="d-flex justify-content-end ml-5 mb-5">
        <button style="type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
            <i class="bi bi-plus-circle-dotted mx-2" style="font-size:1em;"></i>New Post
        </button>
    </div>
    <div class="container">
        <ul class="nav nav-tabs text-capitalize">
            <li class="nav-item" role="presentation">
                <a href="#" class="nav-link" id="user-tab" data-toggle="tab" data-target="#user" type="button"
                    role="tab" aria-controls="user" aria-selected="true">
                    <div class="card">
                        <div class="col-md-12 d-flex">
                            <i class="bi bi-sticky-fill nav-icon mx-4" style="color:#F56565;font-size:36px;"></i>
                            <div class="card-body">
                                Manage Posts
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="row">
            <div class="tab-content  mt-5">
                <div class="tab-pane fade active" id="user" role="tabpanel" aria-labelledby="user-tab">
                    <div class="card-header">
                        @include('inc.messages')
                        <div class="row ml-3">
                            <div class="col-lg-12 col-sm-6 col-xm-12 ">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="table-light">
                                            <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
                                                <th>S/N</th>
                                                <th>Post By</th>
                                                <th>Position</th>
                                                <th>Description</th>
                                                <th>Location</th>
                                                <th>Upload Image</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($user->posts->count() > 0)
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $user->username }}</td>
                                                    @foreach ($user->posts as $post)
                                                        <td>{{ $post->title }}</td>
                                                        <td>{{ $post->Description }}</td>
                                                        <td>{{ $post->location }}</td>
                                                        <td>{{ $post->photo }}</td>
                                                        <td>{{ $post->created_at }}</td>
                                                        <td>
                                                            <span>
                                                                <a onclick="return confirm('Are you sure you wnat to delete this entry?')"
                                                                    href="{{ url('delete/' . $user->id) }}"
                                                                    style="color:#F56565;font-size:18px;"class="btn btn-danger text-white">Delete
                                                                </a>
                                                            </span>
                                                        </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <p class="alert alert-success text-muted">no available records</p>
                                            @endif
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
    {{-- pop model add user? --}}
    <div class="row m-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="d-flex justify-content-start col-md-12">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">Add New Post</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['Action' => 'PostsController@store', 'Method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                <div class="col-md-12 m-2">
                                    <div class="form-group">
                                        {{ Form::label('title', 'Job Title') }}
                                        {{ Form::text('title', '', [
                                            'class' => 'form-control',
                                            'placeholder' => 'JobTitle',
                                        ]) }}
                                    </div>
                                </div>
                                <div class="col-md-12 m-2">
                                    <label for="validationCustomUsername" class="form-label">Upload Profile</label>
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
                                <div class="col-md-12 m-2">
                                    <div class="form-group">
                                        {{ Form::label('location', 'Location') }}
                                        {{ Form::text('location', '', [
                                            'class' => 'form-control',
                                            'placeholder' => 'Working Location',
                                        ]) }}
                                    </div>
                                </div>
                                <div class="col-md-12 m-2">
                                    <div class="form-group">
                                        {{ Form::label('Description', 'Description') }}
                                        {{ Form::textarea('Description', '', [
                                            'id' => 'ckeditor',
                                            'class' => 'form-control',
                                            'placeholder' => 'Description',
                                        ]) }}
                                    </div>
                                </div>

                                <div class="modal-footer col-md-12 justify-content-center ">
                                    {{ Form::submit('Submit', ['class' => 'text-white cus btn btn-default form-control','style'=>'background-color:#85149E']) }}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
