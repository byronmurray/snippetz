@extends('layouts.app')

@section('content')

  @include('partials.forms.edit_snippet_title')
  <br>

  <small>{{ $snippet->created_at }} </small>
  <p>language: {{ $snippet->language->name }}</p>
  <hr>

  <h2>Description <i class="fa fa-pencil" aria-hidden="true"></i></h2>
  @include('partials.forms.edit_snippet_description')
  <hr>

  @include('partials.forms.edit_snippet_snippet')

  @include('partials.show_examples')

  @include('partials.show_tags')

  <br><br><br>

  <h2 data-toggle="collapse" href="#collapseExample" aria-expanded="false">Add Examples and use cases of snippet</h2>

  <div class="collapse" id="collapseExample">
    @include('partials.forms.create_example')
  </div>

  <br>

  flash message<br>
  Need validation<br>

@endsection

@section('scripts')
  <script>



    // hide buttons and disable text field
    $titleWrap = $('#form-title');
    // get title value first incase cancel is selected
    titleText = $('#snippet-title').val();
    $titleWrap.find('.fa-pencil').hide();
    $titleWrap.find('.btn').hide();
    $titleWrap.find('.snippet-title').prop("disabled", true);

    $titleWrap.mouseenter(function () {

      if ($(this).find('.btn').css('display') == 'none' )  {
        $(this).find('.fa-pencil').show();
        $(this).find('.fa-pencil').on('click', function() {
          $titleWrap.find('.btn').show();
          $titleWrap.find('.snippet-title').prop("disabled", false);
          $(this).hide();
        });
      }

    }).mouseleave(function() {
      $(this).find('.fa-pencil').hide();
    });

    // click cancel
    $titleWrap.find('.cancel').on('click', function() {
      // hide the buttons again
      $titleWrap.find('.btn').hide();
      // disable the text field
      $titleWrap.find('.snippet-title').prop("disabled", true);
      // Restore curret title
      $('#snippet-title').val(titleText);
    });



  </script>

  <script>
      // ajust width of text fields
      var inputEl = document.getElementById("snippet-title");

      function getWidthOfInput() {
        var tmp = document.createElement("span");
        tmp.className = "input-element tmp-element";
        tmp.innerHTML = inputEl.value.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
        document.body.appendChild(tmp);
        var theWidth = tmp.getBoundingClientRect().width;
        document.body.removeChild(tmp);
        return theWidth;
      }

      function adjustWidthOfInput() {
        inputEl.style.width = getWidthOfInput() + "px";
      }

      adjustWidthOfInput();
      inputEl.onkeyup = adjustWidthOfInput;
    </script>
@endsection
