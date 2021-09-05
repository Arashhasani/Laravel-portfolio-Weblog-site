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
    Create Article ...

    @endslot
<script src="/js/ckeditor/ckeditor.js"></script>

<script>



    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('button-image').addEventListener('click', (event) => {
            event.preventDefault();

            window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        });
    });

    // set file link
    function fmSetLink($url) {
        document.getElementById('image_label').value = $url;
    }


</script>


    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex mb-0 mb-lg-4 align-items-start">
                <div class="mr-auto d-none d-lg-block">
                    <h2 class="text-black font-w600"> Create Article ...</h2>
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
                                        <form method="post" action="{{route('addarticle')}}" enctype="multipart/form-data">

                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Title</label>
                                                    <input name="title" type="text" class="form-control" placeholder="Name ...">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Category</label>
                                                    <select class="form-control" name="categories[]" multiple>
                                                        @foreach(\App\Models\Category::all() as $cate)

                                                            <option value="{{$cate['id']}}">{{$cate['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>






                                                <div class="form-group col-md-12">
                                                    <label>Description</label>
                                                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter your description here ..."></textarea>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Image</label>

                                                    <div class="input-group">
                                                        <input type="text" id="image_label" class="form-control" name="image"
                                                               aria-label="Image" aria-describedby="button-image">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group col-md-12">
                                                    <div  class="form-check">
                                                        <input name="is_published" class="form-check-input" type="checkbox">
                                                        <label  class="form-check-label">
                                                            Verified
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>


                                            <button type="submit" class="btn btn-primary">Register</button>
                                            <script>
                                                // Replace the <textarea id="editor1"> with a CKEditor 4
                                                // instance, using default configuration.
                                                CKEDITOR.replace('description', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
                                                CKEDITOR.replace( 'description' );
                                            </script>
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
