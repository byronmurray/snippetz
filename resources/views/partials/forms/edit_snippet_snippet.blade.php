{{-- update the code snippet of the snippet --}}
{!! Form::open(['method'=>'PATCH', 'route' => ['snippets.update', $snippet->id ]])  !!}

  <div class="form-group">
    {{ Form::label('snippet', 'snippet') }}
    <div class="editor">{{ $snippet->snippet }}</div>
    <textarea class="form-control snippet hidden-xs-up" name="snippet" cols="50" rows="10"></textarea>
  </div>

  {{ Form::submit('Update', ['class' => 'btn btn-sm btn-success']) }}

{!! Form::close() !!}
