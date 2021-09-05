<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 8/27/2021
 * Time: 12:17 PM
 */


?>

@component('layouts.content')


    @slot('maintitle')
        Contact Page
    @endslot

    @slot('title')
        Contact Page

    @endslot

    @slot('breadcrumb')

        @slot('breadcrumb')

            <div class="breadcrumbs">
                <div class="wrap wrap-center">
                    <div class="wrap_float">
                        <a href="/">Home</a> / <span class="current">Main Page</span>
                    </div>
                </div>
            </div>
        @endslot

        <div class="archive-body">
            <div class="wrap">
                <div class="page-wrap-content">
                    <div class="post-items-list posts-two-columns">


                        <div class="newsletter-section contact-section">
                            <div class="wrap">
                                <div class="wrap_float">
                                    <div class="wrap wrap-center">

                                        <h2 class="title">
                                            Get in Touch
                                        </h2>
                                        <div class="form">
                                            <div class="form-fields">
                                                <div class="input-wrap name-field">
                                                    <input type="text" class="input" placeholder="Name*">
                                                </div>
                                                <div class="input-wrap email-field">
                                                    <input type="text" class="input" placeholder="Email*">
                                                </div>
                                                <div class="input-wrap textarea-wrap comment-field">
                                                    <textarea class="input textarea"
                                                              placeholder="Write a comment"></textarea>
                                                </div>
                                                <button class="btn submit submit-btn">
                                                    <span>Send Message</span>
                                                </button>
                                            </div>
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