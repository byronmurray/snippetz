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
