@extends('layouts.app')

@section('content')
    <h1>Create new Snippet</h1>

    {!! Form::open(['url' => '/snippets', 'method' => 'post']) !!}

      <div class="form-group">
        {{ Form::label('title', 'title') }}
        {{ Form::text('title', '', ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('description', 'description') }}
        {{ Form::textarea('description', '', ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('snippet', 'snippet') }}
        <div class="editor"></div>
        {{ Form::textarea('snippet', '', ['class' => 'form-control hidden-xs-up']) }}
      </div>

      <div class="form-group">
        {{ Form::label('language', 'language') }}
        {{ Form::select('language_id', $language, null, ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('tags', 'tags') }}
        {{ Form::select('tag_id[]', $tags, null, ['class' => 'form-control', 'multiple']) }}
      </div>

      <div class="form-group">
        {{ Form::submit('Create', ['class' => 'form-control btn-primary']) }}
      </div>

    {!! Form::close() !!}


@endsection
