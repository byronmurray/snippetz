<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Language $language)
  {
      $snippets = $language->snippets;
      //return $snippets;
      return view('snippets.index', compact('snippets'));
  }
}
