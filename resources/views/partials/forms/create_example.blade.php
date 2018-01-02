{!! Form::open(['method'=>'POST', 'route' => ['snippets.example', $snippet->id ]])  !!}

  <div class="form-group">
    {{ Form::label('description', 'description') }}
    {{ Form::textarea('description', '', ['class' => 'form-control']) }}
  </div>

  <div class="form-group">
    {{ Form::label('snippet', 'snippet') }}
    <div class="editor"></div>
    <textarea class="form-control snippet hidden-xs-up" name="snippet" cols="50" rows="10"></textarea>
  </div>

  <div class="form-group">
    {{ Form::submit('Add', ['class' => 'btn-sm form-control btn-primary']) }}
  </div>

{!! Form::close() !!}
