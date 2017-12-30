@extends('layouts.app')

@section('content')

<h1>{{ $snippet->title }} </h1>

<button type="button" name="button" class="btn btn-info pull-right">edit</button>
<br>
<small>{{ $snippet->created_at }} </small>


<hr>

<h2>Description</h2>
<div class="description">
  {{ $snippet->description }}
</div>

<p>language: {{ $snippet->language }}</p>

<hr>

<h2>Snippet</h2>
<div class="editor">
  {{ $snippet->snippet }}
</div>

@if (count($snippet->examples) )
  <h2>Examples</h2>
  @foreach ($snippet->examples as $example)

    <div class="description">
      {{ $example->description }}
    </div>

    <div class="editor">
      {{ $example->snippet }}
    </div>

  @endforeach
@endif

@if (count($snippet->tags) )
  <h2>Tags</h2>
  @foreach ($snippet->tags as $tag)
    <a href="/tags/{{ $tag->name }}"> {{ $tag->name }} </a>
  @endforeach
@endif


<br><br><br>

<h2>Add Examples and use cases of snippet</h2>

{!! Form::open(['url' => '/examples/1', 'method' => 'post']) !!}

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
    {{ Form::submit('Add', ['class' => 'form-control btn-primary']) }}
  </div>

{!! Form::close() !!}
<br>
Hide form till add example is clicked<br>

flash message<br>
Need validation<br>

@endsection
