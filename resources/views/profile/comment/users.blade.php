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
    Users ...

    @endslot

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
                <div class="mr-auto d-none d-lg-block">
                    <h2 class="text-black font-w600">Users ...</h2>
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
                                    <th><strong>Name</strong></th>

                                    <th><strong>STATUS</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $user)






                                    <tr>
                                        <td><strong>{{$user['id']}}</strong></td>
                                        <td>{{$user['comment']}}</td>

                                        <td>
                                            @if($user->is_approved())

                                                <span class="badge light badge-primary">Verify</span>
                                                @else
                                                <span class="badge light badge-danger">Pending</span>

                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                </button>
                                                <div class="dropdown-menu text-center">
                                                    <a class="dropdown-item" href="{{route('users.edit',['user'=>$user['id']])}}">Edit</a>
                                                    <form method="post" class="dropdown-item" action="{{route('deleteuser',['user'=>$user])}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="dropdown-item " type="submit">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>






                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">{{$users->render()}}</div>
                </div>
            </div>




        </div>
    </div>


    @endcomponent
