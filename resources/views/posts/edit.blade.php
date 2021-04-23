<h1>
    Edit Post: {{ $post->title }}
</h1>

{!! Form::model($post, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\PostController@update', $post->id]]) !!}
{{ csrf_field() }}
{!! Form::label('title', 'title') !!}
{!! Form::text('title', null, ['class' => 'form-control']) !!}
{!! Form::submit('Edit Course', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!}

{!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\PostController@destroy',$post->id]]) !!}
{{ csrf_field() }}
{!! Form::submit('Delete Course', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
