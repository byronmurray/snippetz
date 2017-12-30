<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Tag $tag)
  {
      $snippets = $tag->snippets;
      return view('snippets.index', compact('snippets'));
  }
}
