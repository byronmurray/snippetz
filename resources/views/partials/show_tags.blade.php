@if (count($snippet->tags) )
  <h2>Tags</h2>
  @foreach ($snippet->tags as $tag)
    <a href="/tags/{{ $tag->name }}"> {{ $tag->name }} </a>
  @endforeach
@endif
