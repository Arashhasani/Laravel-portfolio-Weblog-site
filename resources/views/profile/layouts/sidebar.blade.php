<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 8/28/2021
 * Time: 1:21 PM
 */


?>


<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('profile')}}">Dashboard</a></li>

                </ul>
            </li>


            <li><a class="has-arrow ai-icon" aria-expanded="false">
                    <i class="flaticon-381-user-7"></i>
                    <span class="nav-text">Users</span>
                </a>
                <ul aria-expanded="false">
                        <li><a href="{{route('users.list')}}">Users</a></li>

                        <li><a href="{{route('user.add')}}">Add User</a></li>
                </ul>
            </li>

            <li><a class="has-arrow ai-icon " aria-expanded="false">
                    <i class="flaticon-381-newspaper"></i>
                    <span class="nav-text">Articles</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('articles')}}">Articles</a></li>
                    {{--<li><a href="{{route('addarticle')}}">Add Article</a></li>--}}
                </ul>
            </li>


            <li><a class="has-arrow ai-icon " aria-expanded="false">
                    <i class="flaticon-381-archive"></i>
                    <span class="nav-text">categories</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('categories')}}">Categories</a></li>
                    <li><a href="{{route('addcategory')}}">Add Category</a></li>
                </ul>
            </li>


            <li><a class="has-arrow ai-icon " aria-expanded="false">
                    <i class="flaticon-381-id-card-4"></i>
                    <span class="nav-text">Permissions</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('permissins')}}">Permissions</a></li>
                    <li><a href="{{route('addpermission')}}">Add Permission</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon " aria-expanded="false">
                    <i class="flaticon-381-news"></i>
                    <span class="nav-text">Comments</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('comments')}}">Comments</a></li>
                </ul>
            </li>




        </ul>

        <div class="copyright">
            <p><strong>Eclan Dashboard</strong><br/>© All Rights Reserved</p>
            <p>By DexignZone</p>
        </div>
    </div>
</div>

