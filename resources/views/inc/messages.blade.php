@if(count($errors)>0)
@foreach($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible">
        {{$error}}
        <button type="button" class="btn-close" data-dismiss="alert"></button>
    </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success text-muted">
        {{session('success')}}
        <button type="button" class="btn-close" data-dismiss="alert"></button>
    </div>
    @endif
    
@if(session('error'))
<div class="alert alert-danger alert-dismissible">
    {{session('error')}}
    <button type="button" class="btn-dismiss" data-dismiss="alert"></button>
</div>
@endif