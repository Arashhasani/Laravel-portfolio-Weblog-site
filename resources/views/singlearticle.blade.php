<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 8/27/2021
 * Time: 11:47 AM
 */

?>



@component('layouts.content')


    @slot('maintitle')

    @endslot


    @slot('title')

        {{$article['title']}}
    @endslot

    @slot('breadcrumb')

        <div class="breadcrumbs">
            <div class="wrap wrap-center">
                <div class="wrap_float">
                    <a href="/">Home</a> / <span class="current">Main Page</span> / <span
                            class="current">{{$article['title']}}</span>
                </div>
            </div>
        </div>
    @endslot



    <div class="archive-body">
        <div class="wrap">
            <div class="page-wrap-content">
                <div class="post-items-list posts-two-columns">


                    <div class="single-header">
                        <div class="wrap wrap-center">
                            <div class="wrap_float">
                                <div class="post-tags">
                                    <a href="#" class="tag">Mobile</a>
                                    <a href="#" class="tag">APP</a>
                                    <a href="#" class="hashtag">#Device</a>
                                    <a href="#" class="hashtag">#iPhone</a>
                                </div>
                                <h1 class="page-title">
                                    {{$article['title']}}
                                </h1>
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

                                <div class="post-image-large wide">
                                    <img src=" {{$article['image']}}" alt="">
                                    <span class="caption-text">Photo caption</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-content wp-content">


                        <div class="wrap wrap-center">
                            <div class="wrap_float">
                                <p>
                                    {{$article['description']}}
                                </p>

                            </div>
                        </div>
                    </div>



                    <div class="comments-section" id="comments-section">
                        <div class="wrap wrap-center">
                            <div class="wrap_float">
                                @if($errors->any())
                                    <br>

                                    <ul class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                    <br>

                                @endif
                                <h2 class="title">Comments <span class="comments-count">234</span></h2>

                                <form method="post" action="{{route('postcomment',['article'=>$article['id']])}}">
                                    @csrf
                                <div class="comments-form">
                                    <div class="input-wrap textarea-wrap white-label comment-field">
                                        <textarea name="comment" class="input textarea" placeholder="Write a comment"></textarea>
                                    </div>
                                    <div class="input-wrap white-label name-field">
                                        <input name="name" type="text" class="input" placeholder="Name*">
                                    </div>
                                    <div class="input-wrap white-label email-field">
                                        <input name="email" type="email" class="input" placeholder="Email*">
                                    </div>
                                    <button class="btn submit submit-btn">
                                        <span>Post Comment</span>
                                    </button>
                                </div>
                                </form>
                                <div class="comments-list">

                                    <div class="comments-list-item">
                                        @foreach($article->comments()->where('is_approved',1)->get() as $comment)


                                        <div class="comment-item">
                                            <div class="comment-item-userpic">
                                                <img src="/img/man.jpg" alt="" class="image-cover">
                                            </div>
                                            <div class="comment-item-name">{{$comment['name']}}</div>
                                            <div class="comment-item-date">{{now()}}</div>
                                            <div class="comment-item-text">
                                                {{$comment['comment']}}
                                            </div>
                                            {{--<div class="reply-link">Reply</div>--}}
                                        </div>
                                        @endforeach

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endcomponent

