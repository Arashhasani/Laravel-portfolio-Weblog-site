<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{


    public function __construct()
    {

        $this->middleware('can:create-article')->only(['create','store']);
        $this->middleware('can:delete-article')->only(['destroy']);
        $this->middleware('can:edit-article')->only(['edit','update']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $articles=Article::paginate(10);
        return view('profile.articles.index',compact('articles'));
        //
    }



    public function index2()
    {
        $articles=Article::paginate(10);
        return view('profile.articles.all',compact('articles'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.articles.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
            'categories'=>['required','array'],

        ]);
//        $destination='/images'.'/'.now()->year.'/'.now()->month.'/'.now()->day.'/';
//        $file=$request->file('image');
//        $file->move(public_path($destination),$file->getClientOriginalName());
//        $validatedata['image']=$destination.$file->getClientOriginalName();
//        $validatedata['date']=now();
//        $validatedata['views']='0';

        if ($request->has('is_published')){
            $validatedata['is_published']=1;
        }else{
            $validatedata['is_published']=0;
        }
        $article=auth()->user()->articles()->create($validatedata);
        $article->categories()->sync($validatedata['categories']);

        return redirect(route('articles'));




        //
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
    public function edit(Article $article)
    {
        return view('profile.articles.edit',compact('article'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

        $validatedata=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'categories'=>['required','array'],

        ]);

        if ($request->file()){
            $validatedata['image']=$request->validate([
                'image'=>'required',
            ]);
        }
//        if ($request->file()){
//            $request->validate([
//                'image'=>'required',
//            ]);
//
//
//            if (File::exists(public_path($article['image']))){
//                File::delete(public_path($article['image']));
//        }
//
//            $destination='/images'.'/'.now()->year.'/'.now()->month.'/'.now()->day.'/';
//            $file=$request->file('image');
//            $file->move(public_path($destination),$file->getClientOriginalName());
//            $validatedata['image']=$destination.$file->getClientOriginalName();
//
//
//
//        }





        if ($request->has('is_published')){
            $validatedata['is_published']=1;
        }else{
            $validatedata['is_published']=0;
        }


        $article->update($validatedata);
        $article->categories()->sync($validatedata['categories']);
        return redirect(route('articles'));


        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('profile'));
        //
    }
}
