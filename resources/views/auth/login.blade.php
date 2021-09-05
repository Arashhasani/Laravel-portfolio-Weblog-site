<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 8/28/2021
 * Time: 11:40 AM
 */


?>


        <!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Eclan - Ads Campaign Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="/admin/image/png" sizes="16x16" href="/admin/images/favicon.png">
    <link href="/admin/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                @if($errors->any())
                                    <br>

                                    <ul class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                    <br>

                                @endif
                                <h4 class="text-center mb-4">Sign in your account</h4>
                                <form action="{{route('login')}}"  method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input name="email" type="email" class="form-control"placeholder="Enter Your email here ...">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input name="password" type="password" class="form-control" placeholder="Enter Your password here ...">
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        <a href="{{route('google.auth')}}" type="button" class="btn btn-danger btn-block text-white">Login with google account ...</a>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Don't have an account? <a class="text-primary" href="{{route('register')}}">Sign up</a></p>
                                    <p>Do you forget password ?<a class="text-primary" href="{{route('password.request')}}">Reset your password here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="/admin/vendor/global/global.min.js"></script>
<script src="/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="/admin/js/custom.min.js"></script>
<script src="/admin/js/deznav-init.js"></script>

</body>

</html>
