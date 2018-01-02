{{-- update the description of the snippet --}}
{!! Form::open(['method'=>'PATCH', 'route' => ['snippets.update', $snippet->id ]])  !!}

  <div class="form-group">
    {{ Form::label('description', 'description') }}
    {{ Form::textarea('description', $snippet->description, ['class' => 'form-control']) }}
  </div>

  {{ Form::submit('Update', ['class' => 'btn btn-sm btn-success']) }}

{!! Form::close() !!}
