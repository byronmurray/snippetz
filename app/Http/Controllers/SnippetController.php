<?php

namespace App\Http\Controllers;

use App\Snippet;
use App\Example;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $snippets = Snippet::all();
        return view('snippets.index', compact('snippets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('snippets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //return $request;
      $snippet = Snippet::create([
          'title' => $request->title,
          'description' => $request->description,
          'snippet' => $request->snippet,
          'language' => $request->language,
      ]);

      $snippet->tags()->attach($request->tag_id);

      return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function storeExample(Request $request, Snippet $snippet)
    {

      $example = Example::create([
          'description' => $request->description,
          'snippet' => $request->snippet,
      ]);

      $example->snippet()->attach($snippet->id);

      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function show(Snippet $snippet)
    {
        //return $snippet->examples;
        return view('snippets.show', compact('snippet'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function edit(Snippet $snippet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Snippet $snippet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Snippet $snippet)
    {
        //
    }
}
