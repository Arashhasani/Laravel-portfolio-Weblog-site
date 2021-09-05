<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 8/27/2021
 * Time: 10:54 AM
 */


?>


<div class="page-wrap-sidebar">
    <div class="sidebar">


        <div class="sidebar-item widget_categories">
            <h3 class="sidebar-item-title">Categories</h3>
            <ul>
                @foreach(\App\Models\Category::all() as $cate)
                <li class="cat-item cat-item-196">
                    <a href="{{route('categoryarticle',['category'=>$cate['id']])}}">{{$cate['name']}}</a> ({{count($cate->articles()->get())}})
                </li>
                @endforeach

            </ul>
        </div>

        <div class="sidebar-item popular-posts">
            <h3 class="sidebar-item-title">Latest Posts</h3>
            <div class="popular-posts-wrap">

                @foreach(\App\Models\Article::query()->where('is_published',1)->latest()->limit(3)->get() as $article)

                    <a href="/articles/{{$article['id']}}" class="post-item popular-posts-item">
                        <img src="{{$article['image']}}" alt="" class="post-bg-img">
                        <div class="post-tags">
                            <div class="tag">Mobile</div>
                            <div class="tag">APP</div>
                        </div>
                        <div class="post-title">
                            {{$article['title']}}
                        </div>
                        <div class="post-info">
                            <div class="post-author post-info-author">
                                <div class="author-image">
                                    <img src="/img/author.jpg" alt="" class="image-cover">
                                </div>
                                <span>Maya Delia</span>
                            </div>
                            <div class="post-date post-info-date">
                               {{$article['date']}}
                            </div>
                            <div class="post-views post-info-views">
                                {{$article['views']}}
                            </div>
                        </div>
                    </a>

                    @endforeach

            </div>
        </div>
    </div>
</div>

