@extends('layouts.app')

@section('content')

  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
      </tr>
    </thead>

    <tbody>

      @foreach ($snippets as $snippet)

        <tr>
          <th scope="row">{{ $snippet->language }}</th>
          <td><a href="/snippets/{{ $snippet->id }}"> {{ $snippet->title }} </a></td>
          <td> {{ $snippet->description }} </td>
          <td> {{ $snippet->created_at }} </td>
        </tr>

      @endforeach

    </tbody>
</table>

@endsection
