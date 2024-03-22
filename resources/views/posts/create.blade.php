@extends('layouts.user')
@section('content')
<div class="d-flex justify-content-end ml-5 mb-5">
    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
        <i class="bi bi-plus-circle-dotted mx-2" style="font-size:1em;"></i>New Post
    </button>
</div>
<div class="row m-5">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="d-flex justify-content-start col-md-12">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-info" id="exampleModalLabel">Add New Post</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(['Action' => 'PostsController@store', 'Method' => 'POST', 'enctype' =>
                            'multipart/form-data']) !!}
                            <div class="col-md-12 m-2">
                                <div class="form-group">
                                    {{ Form::label('title','Job Title') }}
                                    {{ Form::text('title', '', [
                                    'class' => 'form-control',
                                    'placeholder' => 'JobTitle',
                                   
                                    ]) }}
                                </div>
                            </div>
                            <div class="col-md-12 m-2">
                                <div class="form-group">
                                    {{ Form::label('Description', 'Description') }}
                                    {{ Form::textarea('Description', '', ['id' => 'ckeditor', 'class' => 'form-control',
                                    'placeholder' => 'Description']) }}
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
@endsection