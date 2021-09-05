<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 8/27/2021
 * Time: 10:58 AM
 */


?>


@component('layouts.content',['title'=>'Category Page'])



    @slot('maintitle')

    {{$category['name']}}
        @endslot

    @slot('breadcrumb')

        <div class="breadcrumbs">
            <div class="wrap wrap-center">
                <div class="wrap_float">
                    <a href="/">Home</a> / <span class="current">Main Page</span>/ <span class="current">{{$category['name']}}</span>
                </div>
            </div>
        </div>
    @endslot


    <div class="archive-body">
        <div class="wrap">
            <div class="page-wrap-content">
                <div class="post-items-list posts-two-columns">


                    <div class="card">

                        <div class="card-body">

                            @foreach($articles as $article)

                                <a href="/articles/{{$article['id']}}" class="post-item">
                                    <img src="{{$article['image']}}" alt="" class="post-bg-img">
                                    <div class="post-tags">
                                        <div class="tag">Mobile</div>
                                        <div class="tag">APP</div>
                                    </div>
                                    <h3 class="post-title">
                                        {{$article['title']}}
                                    </h3>
                                    <div class="post-info">
                                        <div class="post-author post-info-author">
                                            <div class="author-image">
                                                <img src="img/author.jpg" alt="" class="image-cover">
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

                        <div class="d-flex  justify-content-between card-footer pagination">
                            <div class="d-flex  justify-content-between pagination-links">
                               {{--<div class="pag-link"> {{$articles->render()}}</div>--}}

                            </div>
                        </div>
                    </div>


                </div>


                {{--<div class="pagination">--}}
                    {{--<div class="pagination-links">--}}
                        {{--<a href="#" class="pag-link ">1</a>--}}
                        {{--<a href="#" class="pag-link">2</a>--}}
                        {{--<a href="#" class="pag-link">3</a>--}}
                        {{--<span class="pag-link extend">...</span>--}}
                        {{--<a href="#" class="pag-link">33</a>--}}
                        {{--<a href="#" class="pag-link">34</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>


        </div>
    </div>




@endcomponent

