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
    Edit ...

    @endslot

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
                <div class="mr-auto d-none d-lg-block">
                    <h2 class="text-black font-w600">Edit ...</h2>
                    <p class="mb-0">The list of users ...</p>
                </div>
               
            </div>





            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Payments Queue</h4>
                    </div>
                    <div class="card-body">




                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal Form</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        @if($errors->any())
                                            <br>

                                            <ul class="alert alert-danger">
                                                @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                            <br>

                                        @endif
                                        <form method="post" action="{{route('users.edit',['user'=>$user])}}">

                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>First Name</label>
                                                    <input name="name" type="text" class="form-control" value="{{$user['name']}}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Email</label>
                                                    <input name="email" type="email" class="form-control" value="{{$user['email']}}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Password</label>
                                                    <input name="password" type="password" class="form-control">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Permissions</label>
                                                    <select class="form-control" name="permissions[]" multiple>


                                                        @foreach(\App\Models\Permission::all() as $permission)
                                                            <option value="{{$permission['id']}}" {{in_array($permission['id'] , $user->permissions->pluck('id')->toArray()) ? 'selected' : ''}}>{{$permission['name']}}</option>

                                                            @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">

                                                    @if($user->hasVerifiedEmail())
                                                        <div  class="form-check">
                                                            <input name="isverify" class="form-check-input" checked type="checkbox">
                                                            <label  class="form-check-label">
                                                                Verified
                                                            </label>
                                                        </div>

                                                    @else
                                                        <div  class="form-check">
                                                            <input name="isverify" class="form-check-input" type="checkbox">
                                                            <label  class="form-check-label">
                                                                Verified
                                                            </label>
                                                        </div>



                                                    @endif


                                                    @if($user->is_staff())

                                                            <div  class="form-check">
                                                                <input name="isstaff" class="form-check-input" checked type="checkbox">
                                                                <label  class="form-check-label">
                                                                    Staff
                                                                </label>
                                                            </div>

                                                        @else


                                                            <div  class="form-check">
                                                                <input name="isstaff" class="form-check-input"  type="checkbox">
                                                                <label  class="form-check-label">
                                                                    Staff
                                                                </label>
                                                            </div>

                                                        @endif





                                                </div>


                                            </div>



                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
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
