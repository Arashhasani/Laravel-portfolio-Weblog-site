<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
//        return auth()->logout();

        $articles=Article::paginate(6);
        return view('index',compact('articles'));
    }


    public function singlearticle(Article $article)
    {
        return view('singlearticle',compact('article'));
    }

    public function contact()
    {
        return view('contact');

    }

    public function postcomment(Request $request,Article $article)
    {
        $validatedata=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'comment'=>'required',
        ]);
        $validatedata['is_approved']=0;
        $article->comments()->create($validatedata);
        return back();

    }

    public function articleCategory(Category $category)
    {
        $articles=$category->articles()->get();

        return view('categoryarticle',compact('articles','category'));

    }
    //
}
