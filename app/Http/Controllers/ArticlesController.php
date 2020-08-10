<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::all();
        return view("admin/all_article", ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function my_article() 
    {
        $articles = Article::where('author', 'yopiangga')->get();
        return view("admin/my_article", ['articles' => $articles]);
    }

    public function create()
    {
        //
        return view("admin/create_article");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:255',
            'content' => 'required'
        ]);

        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => "Yopiangga",
            'content' => $request->content
        ]);

        return redirect("/create-article")->with('status', 'Article successfully created!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article = Article::where('id', $id)->first();
        return view("admin/edit_article", ['article' => $article]);
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
        //
        $this->validate($request, [
            'title' => 'required|max:50',
            'description' => 'required|max:255',
            'content' => 'required'
        ]);

        Article::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content
        ]);

        return redirect('/my-article')->with('status', 'Article successfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
