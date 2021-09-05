<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 8/28/2021
 * Time: 1:34 PM
 */


?>


@component('profile.layouts.content')




    @slot('title')
        Articles ...

    @endslot

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
                <div class="mr-auto d-none d-lg-block">
                    <h2 class="text-black font-w600">Articles ...</h2>
                    <p class="mb-0">The list of users ...</p>
                </div>

            </div>


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Payments Queue</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                <tr>
                                    <th class="width80"><strong>ID</strong></th>
                                    <th><strong>Title</strong></th>
                                    <th><strong>Date</strong></th>
                                    <th><strong>STATUS</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($articles as $article)






                                    <tr>
                                        <td><strong>{{$article['id']}}</strong></td>

                                        <td><a href="/articles/{{$article['id']}}"
                                               target="_blank">{{$article['title']}} </a></td>

                                        <td>{{$article['date']}}</td>
                                        <td>
                                            @if($article->published())

                                                <span class="badge light badge-primary">Published</span>
                                            @else
                                                <span class="badge light badge-danger">Pending</span>

                                            @endif
                                        </td>
                                        <td>
                                            @canany(['edit-article','delete-article'])

                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp"
                                                        data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <circle fill="#000000" cx="5" cy="12" r="2"/>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"/>
                                                            <circle fill="#000000" cx="19" cy="12" r="2"/>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu text-center">
                                                    @can('edit-article')
                                                        <a class="dropdown-item"
                                                           href="{{route('edit.article',['article'=>$article['id']])}}">Edit</a>
                                                    @endcan
                                                    @can('delete-article')
                                                        <form method="post"
                                                              action="{{route('article.delete',['article'=>$article['id']])}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn">Delete</button>

                                                        </form>
                                                    @endcan

                                                </div>
                                            </div>
                                            @endcanany


                                        </td>
                                    </tr>






                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">{{$articles->render()}}</div>

                </div>
            </div>


        </div>
    </div>

@endcomponent
