{{-- <form method="POST" action="/posts"> --}}

<h1>Create Post</h1>
{!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\PostController@store']) !!}
{!! Form::label('title', 'Course Title') !!}
{!! Form::text('title', null, ['class' => 'form-controll']) !!}

<div class="form-group">
    {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}
