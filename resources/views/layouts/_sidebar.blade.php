<nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
  <ul class="nav nav-pills flex-column">
    <h2>Favs</h2>
    @foreach ($snippets as $snippet)
      <li class="nav-item">
        <a class="nav-link" href="/snippets/{{ $snippet->id }}"> {{ $snippet->title }} </a>
      </li>
    @endforeach
  </ul>

  <ul class="nav nav-pills flex-column">
    <h2>Languages</h2>
    @foreach ($languages as $language)
      <li class="nav-item">
        <a class="nav-link" href="/language/{{ $language }}"> {{ $language }} </a>
      </li>
    @endforeach
  </ul>

  <ul class="nav nav-pills flex-column">
    <h2>Tags</h2>

      @foreach ($tags as $tag)
        <li class="nav-item">
          <a class="nav-link" href="/tags/{{ $tag }}"> {{ $tag }} </a>
        </li>
      @endforeach

  </ul>

</nav>
