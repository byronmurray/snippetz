<nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
  <ul class="nav nav-pills flex-column">
    <h2>Recent Activity</h2>

      @foreach ($snippets as $snippet)
        <li class="nav-item">
          <a class="nav-link" href="/snippets/{{ $snippet->id }}"> {{ $snippet->title }} </a>
        </li>
      @endforeach

  </ul>

  <ul class="nav nav-pills flex-column">
    <h2>Languages</h2>

      @foreach ($languages as $language)
        @if (count( $language->snippets ))
          <li class="nav-item">
            <a class="nav-link" href="/language/{{ $language->name }}"> {{ $language->name }}
              <span class="badge badge-pill badge-default">{{ count( $language->snippets ) }}</span>
            </a>
          </li>
        @endif
      @endforeach

  </ul>

  <ul class="nav nav-pills flex-column">
    <h2>Tags</h2>

      @foreach ($tags as $tag)
        @if (count( $tag->snippets ))
          <li class="nav-item">
            <a class="nav-link" href="/tags/{{ $tag->name }}"> {{ $tag->name }}
              <span class="badge badge-pill badge-default">{{ count( $tag->snippets ) }}</span>
            </a>
          </li>
        @endif
      @endforeach

  </ul>

</nav>
