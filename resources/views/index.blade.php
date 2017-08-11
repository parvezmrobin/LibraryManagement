@extends('layouts.app')

@section('style')
    <style>
        .intro {
            background: url({{asset('img/intro-bg.jpg')}}) bottom center no-repeat #000;
        }

        @media (min-width: 767px) {
            .content-section {
                padding-top: 150px;
            }
            #author.content-section {
                padding-top: 100px;
            }
            .text-border{
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }
            .text-border:hover {
                text-shadow: none;
            }

            .btn-circle {
                box-shadow: -1px -1px black
            }
        }
    </style>
@endsection

@section('menu')
    <li>
        <a class="page-scroll" href="#about">About</a>
    </li>
    <li>
        <a class="page-scroll" href="#category">Category</a>
    </li>
    <li>
        <a class="page-scroll" href="#author">Author</a>
    </li>
    <li>
        <a class="page-scroll" href="#contact">Contact</a>
    </li>
@endsection

@section('content')
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">{{config('app.name', 'Library Management')}}</h1>
                        <form action="{{url('home')}}" class="form-horizontal">
                            <div class="input-group">
                                <span class="input-group-addon" style="border-radius: 1px"><i
                                            class="glyphicon glyphicon-search"></i></span>
                                <input class="form-control" placeholder="Type Something And Press Enter" name="search" type="text"
                                       style="border-radius: 1px">
                            </div>
                        </form>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Library Management</h2>
                <p>
                    <b>Library Management</b> is a sample project created by <a
                            href="https://parvezmahbub.wordpress.com/">Parvez M Robin</a> to smoothly manage the task of a general library. This project includes <b>search</b> by <i>Category</i>, <i>Author</i> and <i>keyword</i>. On registering, from this application user can <i>find a book</i>, <i>issue</i> it, <b>view previous</b> <i>ratings</i> and <i>reviews</i>, <b>provide</b> rating and review, checkout <i>author details</i> and get <i>notifications</i> on new book arrival. Again, each user has a <i>personal page</i> showing the books he/she read.
                </p>
                <p>
                    For the <b>administration</b> side, this site provides <b>approval</b> of <i>new user</i> and <i>book issue</i> with return date, <b>creating</b> <i>book</i>, <i>author</i> and <i>publisher</i>.
                </p>
                <a href="#category" class="btn btn-circle page-scroll">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Category Section -->
    <section id="category" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Category</h2>
                    <div>
                        @foreach(\App\Category::all() as $category)
                            <a href="#" class="btn btn-default btn-lg text-border"
                               style="margin: 5px;">
                                {{$category->category}}
                            </a>
                        @endforeach
                    </div>
                    <a href="#author" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Section -->
    <section id="author" class="content-section text-center">
        <div class="download-section" style="background: url({{asset('img/author-bg.jpg')}}) bottom center no-repeat #000;">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="text-border">Author</h2>
                    <div>
                        @foreach(\App\Author::all() as $author)
                            <a href="#" class="btn btn-default btn-lg text-border"
                               style="margin: 5px;">
                                {{$author->name}}
                            </a>
                        @endforeach
                    </div>
                    <a href="#contact" class="btn btn-circle page-scroll text-border">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Developer</h2>
                <p>Feel free to email me to provide some feedback on this application, give suggestions for new
                    feature, or to just say hello!</p>
                <p><a href="mailto:parvezmrobin@gmail.com">parvezmrobin@gmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/parvezmrobin" class="btn btn-default btn-lg"><i
                                    class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/parvezmrobin/librarymanagement" class="btn btn-default btn-lg"><i
                                    class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/parvezmrobin" class="btn btn-default btn-lg"><i
                                    class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://parvezmahbub.wordpress.com" class="btn btn-default btn-lg"><i
                                    class="fa fa-wordpress fa-fw"></i> <span class="network-name">Wordpress</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>
@endsection

@section('script')
    <!-- Google Maps API Key - Use your own API key to enable the map feature.
More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
    <script src="{{ asset('js/grayscale.min.js') }}"></script>
@endsection
