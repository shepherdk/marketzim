<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use Auth;

class ArticlesController extends Controller
{
    /**
     * Auth::guest();
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $article = Article::orderBy('title', 'desc')->get();
        $articles = Article::all();
        return view('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:articles|max:255',
            'type' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        $article = new Article;
        $article->title = $request->input('title');
        $article->type = $request->input('type');
        $article->category = $request->input('category');
        $article->price = $request->input('price');
        $article->description = $request->input('description');
        $article->user_id = Auth::user()->id;
        //create article
        $article->save();
        // $article = Article::create($validatedData, auth()->user()->id);

        return redirect('/dashboard')->with('success', 'Article created, successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findorFail($id);
        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findorFail($id);

        //check for correct user
        if(auth()->user()->id !== $article->user_id){
            return redirect('dashboard')->with('error', 'Unauthorized page');
        };
        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:articles|max:255',
            'type' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
        Article::whereId($id)->update($validatedData);

        return redirect('/articles')->with('success', 'Article successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/dashboard')->with('success', 'Article successfully deleted');

    }
}
