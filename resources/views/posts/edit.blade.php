<h1>
    Edit Post: {{ $post->title }}
</h1>

    {!! Form::model($post,['method' => 'PATCH', 'action' => ['App\Http\Controllers\PostController@update', $post->id]]) !!}
    
    {{ csrf_field() }}
    
    {!! Form::label('title', 'title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}

    {!! Form::submit('Edit Course', ['class' => 'btn btn-info']) !!}
    
    {!! Form::close() !!}

<form method="POST" action="/posts/{{ $post->id }}">
   {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="DELETE">

</form>