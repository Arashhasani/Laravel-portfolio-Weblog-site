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
        Create ...

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
                        <h4 class="card-title">Add a new permission ...</h4>
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
                                        <form method="post" action="{{route('addpermission')}}">

                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Name</label>
                                                    <input name="name" type="text" class="form-control"
                                                           placeholder="Name ...">
                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label>Name</label>
                                                    <input name="lable" type="text" class="form-control"
                                                           placeholder="Lable ...">
                                                </div>

                                            </div>


                                            <button type="submit" class="btn btn-primary">Add</button>
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
