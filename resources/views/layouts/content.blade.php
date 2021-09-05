<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 8/27/2021
 * Time: 10:57 AM
 */


?>


@extends('master')

@section('title')

{{$title}}
    @endsection

@section('content')


    <body class="transition-none">
    <div class="search-section">
        <div class="wrap">
            <div class="wrap_float">
                <div class="search-form">
                    <input type="text" class="search-input" placeholder="Search…">
                    <button class="search-submit"></button>
                </div>
                <div class="search-close" id="search-close"></div>
            </div>
        </div>
    </div>
    <div class="container page">
        <div class="container-wrap">
            <div class="mobile-panel">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="mobile-btn" id="js-menu-open">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <a class="logo" href="/">
                            uipaper
                        </a>
                        <div class="search-button"></div>
                    </div>
                </div>
            </div>
            <div class="container-wrap--dummy"></div>


            @include('layouts.toppanel')


            <div class="page-wrap archive-page with-sidebar">
                {{$breadcrumb}}
                <div class="archive-header">
                    <div class="wrap wrap-center">
                        <div class="wrap_float">
                            <div class="title-wrap">
                                <h1 class="page-title">{{$maintitle}}</h1>
                                <div class="posts-count">
                                    {{count(\App\Models\Article::all())}} Posts
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

{{$slot}}
                @include('layouts.sidebar')
            </div>
            <div class="footer">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="footer-content">
                            <div class="logo">uipaper</div>
                            <div class="wrap-center">
                                {{--<div class="socials">--}}
                                    {{--<a class="soc-link">--}}
                                        {{--<img src="img/facebook-icon.svg" class="img-svg" alt="">--}}
                                    {{--</a>--}}
                                    {{--<a class="soc-link">--}}
                                        {{--<img src="img/twitter-soc-icon.svg" class="img-svg" alt="">--}}
                                    {{--</a>--}}
                                    {{--<a class="soc-link">--}}
                                        {{--<img src="img/behance-icon.svg" class="img-svg" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                <div class="menu">
                                    <ul>
                                        <li><a href="{{route('contact')}}">Contact Form</a></li>
                                        <li><a href="/">Archives</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-right">
                                <a href="{{route('profile')}}" class="login-link">Profie ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay" id="overlay"></div>
        </div>
    </div>


    <div style="display: none;">
        <div class="modal modal_default modal_login" id="modal-login">
            <div class="modal_wrap">
                <h2 class="title">Sign in</h2>
                <div class="modal-form">
                    <div class="input-wrap white-label">
                        <input type="email" class="input" placeholder="Email" required>
                    </div>
                    <div class="input-wrap white-label password-field">
                        <input type="password" class="input password-input" placeholder="Password">
                        <button class="show-password-btn"></button>
                    </div>
                    <div class="agreement">
                        <input type="checkbox" class="agreement-checkbox" id="remember-1">
                        <label for="remember-1" class="agreement-label">
                            <span>
                                Remember me
                            </span>
                        </label>
                    </div>
                    <button class="btn submit-btn">
                        <span>Login</span>
                    </button>
                    <div class="authorization-socials">
                        <div class="authorization-socials-variants">
                            <div class="socials">
                                <div class="soc-link">
                                    <img src="img/facebook-icon.svg" class="img-svg" alt="">
                                </div>
                                <div class="soc-link">
                                    <img src="img/twitter-soc-icon.svg" class="img-svg" alt="">
                                </div>
                                <div class="soc-link">
                                    <img src="img/behance-icon.svg" class="img-svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-info">
                    <p><a href="#">Forgot password?</a></p>
                    <p>Don’t have an account? <a data-href="#modal-registration" class="getModal">Create your own right now.</a></p>
                </div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_default modal_registration" id="modal-registration">
            <div class="modal_wrap">
                <h2 class="title">Sign up</h2>
                <div class="modal-form">
                    <div class="input-wrap white-label">
                        <input type="text" class="input" placeholder="Email">
                    </div>
                    <div class="input-wrap white-label password-field">
                        <input type="password" class="input password-input" placeholder="Password">
                        <button class="show-password-btn"></button>
                    </div>
                    <div class="agreement">
                        <input type="checkbox" class="agreement-checkbox" id="agree-1">
                        <label for="agree-1" class="agreement-label">
                            <span>
                                I accept the conditions of transmitting information
                            </span>
                        </label>
                    </div>
                    <button class="btn submit-btn">
                        <span>Sign up</span>
                    </button>
                    <div class="authorization-socials">
                        <div class="authorization-socials-variants">
                            <div class="socials">
                                <div class="soc-link">
                                    <img src="img/facebook-icon.svg" class="img-svg" alt="">
                                </div>
                                <div class="soc-link">
                                    <img src="img/twitter-soc-icon.svg" class="img-svg" alt="">
                                </div>
                                <div class="soc-link">
                                    <img src="img/behance-icon.svg" class="img-svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-info">
                    <p>Have an account? <a href="#modal-login" class="getModal">Sign in your right now.</a></p>
                </div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>


    <div style="display: none;">
        <div class="modal modal_default modal_reset" id="modal-reset-password">
            <div class="modal_wrap">
                <h2 class="title">Forgot password?</h2>
                <div class="subtitle">
                    Use the e-mail and password that you specified when registering on the site
                </div>
                <div class="modal-form">
                    <div class="input-wrap white-label">
                        <input type="text" class="input" placeholder="Email">
                    </div>
                    <button class="btn submit-btn">
                        <span>Reset Password</span>
                    </button>
                </div>
                <div class="modal-info">
                    <p>Don’t have an account? <a data-href="#modal-registration" class="getModal">Create your own right now.</a></p>
                </div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_default modal_success" id="modal-reset-password-success">
            <div class="modal_wrap">
                <div class="success-icon"></div>
                <h2 class="title">Success</h2>
                <div class="subtitle">
                    Your message was successfully sent. We will contact you shortly
                </div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_default modal_order" id="book-now">
            <div class="modal_wrap">
                <h2 class="title">Please fill in this quick form</h2>
                <div class="subtitle">
                    Your personal travel expert will get back to you in a few hours to introduce themselves and start planning an exceptional holiday experience with you.
                </div>
                <div class="modal-form">
                    <div class="input-wrap date-wrap white-label">
                        <input type="text" class="input js_calendar" placeholder="When would you like to travel?" readonly>
                    </div>
                    <div class="input-wrap date-wrap white-label">
                        <input type="text" class="input js_calendar" placeholder="When do you plan to come back?" readonly>
                    </div>
                    <div class="input-wrap white-label">
                        <input type="text" class="input" placeholder="Name">
                    </div>
                    <div class="input-wrap white-label">
                        <input type="text" class="input" placeholder="Surname">
                    </div>
                    <div class="input-wrap white-label">
                        <input type="tel" class="input js-tel" placeholder="Contact Number">
                    </div>
                    <div class="input-wrap white-label">
                        <input type="email" class="input" placeholder="Email Address">
                    </div>
                    <div class="input-wrap white-label fullwidth">
                        <textarea class="input textarea" placeholder="More details about your trip"></textarea>
                    </div>
                    <div class="agreement">
                        <input type="checkbox" class="agreement-checkbox" id="agree-1b">
                        <label for="agree-1b" class="agreement-label">
                            <span>
                                I accept the conditions of transmitting information
                            </span>
                        </label>
                    </div>
                    <button class="btn submit-btn">
                        <span>Submit</span>
                    </button>
                </div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_default modal_order" id="ask-question">
            <div class="modal_wrap">
                <h2 class="title">Ask a question</h2>
                <div class="subtitle">
                    Please fill out the form and our manager will contact you
                </div>
                <div class="modal-form">
                    <div class="input-wrap white-label">
                        <input type="text" class="input" placeholder="Name">
                    </div>
                    <div class="input-wrap white-label">
                        <input type="text" class="input" placeholder="Last name">
                    </div>
                    <div class="input-wrap white-label">
                        <input type="text" class="input" placeholder="Contact Number">
                    </div>
                    <div class="input-wrap white-label">
                        <input type="text" class="input" placeholder="Email Address">
                    </div>
                    <div class="input-wrap white-label fullwidth">
                        <textarea class="input textarea" placeholder="Your question"></textarea>
                    </div>
                    <div class="agreement">
                        <input type="checkbox" class="agreement-checkbox" id="agree-1c">
                        <label for="agree-1c" class="agreement-label">
                            <span>
                                I accept the conditions of transmitting information
                            </span>
                        </label>
                    </div>
                    <button class="btn submit-btn">
                        <span>Submit</span>
                    </button>
                </div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>


    <div class="bottom-message success-message" id="success-message">
        <span>
            Thanks! Your subscription <br>has been successfully issued
        </span>
    </div>

    <div class="bottom-message error-message" id="error-message">
        <span>
            Error occurred
        </span>
    </div>
    </body>




    @endsection
