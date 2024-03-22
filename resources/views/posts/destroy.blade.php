{!!Form::open([
    'method'=>'DELETE',
    'route'=>['destroy.destroy',$post->id],
    'style'=>'display:inline'])!!}
    
    {!! Form::submit('Delete this post !',['class'=>'btn btn-danger'])!!}
    {!!Form::close() !!}
    