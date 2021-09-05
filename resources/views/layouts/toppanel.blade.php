<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 8/27/2021
 * Time: 10:51 AM
 */


?>


<div class="top-panel" id="js-panel">
    <div class="wrap">
        <div class="wrap_float">
            <div class="mode-check">
                <input type="checkbox" id="mode-checkbox" class="mode-checkbox-input">
                <label for="mode-checkbox" class="mode-checkbox-label" data-dark-title="Dark Mode" data-light-title="Light Mode"></label>
            </div>
            <div class="wrap-center">
                <a href="/" class="logo">
                    uipaper
                </a>
                <div class="menu" id="js-menu">
                    {{--<ul>--}}
                        {{--<li>--}}
                            {{--<a href="#">Demos</a>--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<a href="index.html">Blog & Magazine</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">Travel</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="travel-home-1.html">Home 1</a></li>--}}
                                        {{--<li><a href="travel-home-2.html">Home 2</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Blog</a>--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<a href="">Archive Pages</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="archive-fullwidth.html">Fullwidth</a></li>--}}
                                        {{--<li><a href="archive-fullwidth-right-sidebar.html">Fullwidth Right Sidebar</a></li>--}}
                                        {{--<li><a href="archive-fullwidth-left-sidebar.html">Fullwidth Left Sidebar</a></li>--}}
                                        {{--<li><a href="archive-grid.html">Grid</a></li>--}}
                                        {{--<li><a href="archive-grid-sidebar-right.html">Grid Right Sidebar</a></li>--}}
                                        {{--<li><a href="archive-grid-sidebar-left.html">Grid Left Sidebar</a></li>--}}
                                        {{--<li><a href="archive-two-columns.html">Two Posts</a></li>--}}
                                        {{--<li><a href="archive-two-columns-sidebar-right.html">Two Posts Right Sidebar</a></li>--}}
                                        {{--<li><a href="archive-two-columns-sidebar-left.html">Two Posts Left Sidebar</a></li>--}}
                                        {{--<li><a href="archive-three-columns.html">Three Posts</a></li>--}}
                                        {{--<li><a href="archive-three-columns-sidebar-right.html">Three Posts Right Sidebar</a></li>--}}
                                        {{--<li><a href="archive-three-columns-sidebar-left.html">Three Posts Left Sidebar</a></li>--}}
                                        {{--<li><a href="archive-sticky-post.html">Archive with Sticky Post</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Post Pages</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="single.html">Standard Header</a></li>--}}
                                        {{--<li><a href="header-large.html">Large Header</a></li>--}}
                                        {{--<li><a href="header-large-video.html">Large with video Header</a></li>--}}
                                        {{--<li><a href="header-version-2.html">Large Header v2 Header</a></li>--}}
                                        {{--<li><a href="header-version-3.html">Large Header v2 video Header</a></li>--}}
                                        {{--<li><a href="single-sidebar-right.html">Standard Right Sidebar</a></li>--}}
                                        {{--<li><a href="single-sidebar-left.html">Standard Left Sidebar</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Author</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="author.html">Author Page</a></li>--}}
                                        {{--<li><a href="author-list.html">All Authors</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Related Post</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="related-posts-grid.html">Grid</a></li>--}}
                                        {{--<li><a href="related-posts-slider.html">Slider</a></li>--}}
                                        {{--<li><a href="related-posts-list.html">List</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="favorites.html">Favorites</a></li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Search Result</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="search-results.html">Result</a></li>--}}
                                        {{--<li><a href="search-results-not-found.html">No result</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Travel</a>--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<a href="">Tours Categories</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="tour-list-fullwidth.html">Fullwidth</a></li>--}}
                                        {{--<li><a href="tour-list-sidebar-right.html">Right Sidebar</a></li>--}}
                                        {{--<li><a href="tour-list-sidebar-left.html">Left Sidebar</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Tour Page</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="tour-page-fullwidth.html">Fullwidth</a></li>--}}
                                        {{--<li><a href="tour-page-sidebar-right.html">Right Sidebar</a></li>--}}
                                        {{--<li><a href="tour-page-sidebar-left.html">Left Sidebar</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Hotels Categories</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="hotel-list-fullwidth.html">Fullwidth</a></li>--}}
                                        {{--<li><a href="hotel-list-sidebar-right.html">Right Sidebar</a></li>--}}
                                        {{--<li><a href="hotel-list-sidebar-left.html">Left Sidebar</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Hotel Page</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="hotel-page-fullwidth.html">Fullwidth</a></li>--}}
                                        {{--<li><a href="hotel-page-sidebar-right.html">Right Sidebar</a></li>--}}
                                        {{--<li><a href="hotel-page-sidebar-left.html">Left Sidebar</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Favourites</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="favourites-tours-fullwidth.html">Favourites Tours</a></li>--}}
                                        {{--<li><a href="favourites-tours-right-sidebar.html">Favourites Tours Right Sidebar</a></li>--}}
                                        {{--<li><a href="favourites-tours-left-sidebar.html">Favourites Tours Left Sidebar</a></li>--}}
                                        {{--<li><a href="favourites-hotels.html">Favourites Hotels</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Search Result</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="search-results-travel.html">Results</a></li>--}}
                                        {{--<li><a href="search-results-travel-no-result.html">No results</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Elements</a>--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<a href="">Accordion</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="accordion.html">Accordion</a></li>--}}
                                        {{--<li><a href="accordion-sidebar-right.html">Accordion sidebar</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Gallery</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="gallery.html">Gallery</a></li>--}}
                                        {{--<li><a href="gallery-sidebar-right.html">Gallery sidebar</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Video</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="video.html">Video</a></li>--}}
                                        {{--<li><a href="video-sidebar-right.html">Video sidebar</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="socials.html">Social</a></li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Content Blocks</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="content-blocks.html">Content Blocks</a></li>--}}
                                        {{--<li><a href="content-blocks-sidebar-right.html">Content Blocks sidebar</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="ads.html">Ads</a></li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Top Panel</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="fixed-top-panel.html">Fixed top panel</a></li>--}}
                                        {{--<li><a href="fixed-top-panel-scroll-up.html">Fixing top panel when scrolling up</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="">Form</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="contact-form.html">Contact Form</a></li>--}}
                                        {{--<li><a href="subscribe-form.html">Subscribe Form</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="modals.html">Modals</a></li>--}}
                                {{--<li><a href="facebook-comments.html">Facebook Commets</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Pages</a>--}}
                            {{--<ul>--}}
                                {{--<li><a href="404.html">404 Pages</a></li>--}}
                                {{--<li><a href="profile.html">Profile</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    <ul>
                        {{--<li class="login-li"><a data-href="#modal-login" class="login-link getModal">Login</a></li>--}}
                        <li><a class="login-link" href="{{route('profile')}}">Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="search-button" id="btn-search"></div>
        </div>
        <div class="socials">
            <a class="soc-link">
                <img src="img/facebook-icon.svg" class="img-svg" alt="">
            </a>
            <a class="soc-link">
                <img src="img/twitter-soc-icon.svg" class="img-svg" alt="">
            </a>
            <a class="soc-link">
                <img src="img/behance-icon.svg" class="img-svg" alt="">
            </a>
        </div>
        <div class="menu-close" id="js-menu-close"></div>
    </div>
</div>

