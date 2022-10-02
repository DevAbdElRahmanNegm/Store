<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <!-- meta charset -->
    <meta charset="utf-8">
    <!-- site title -->
    <title>Affiliate Family</title>
    <!-- meta description -->
    <meta name="description" content="">
    <!-- mobile viwport meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fevicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/img/favicon.png')}}">

    <!-- ================================
    CSS Files
    ================================= -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/themefisher-fonts.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/dark.css')}}">
</head>

<body class="dark">

<div class="preloader">
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
    <div class="loading-mask"></div>
</div>


<main class="site-wrapper">
    <div class="pt-table">
        <div class="pt-tablecell page-about relative">
            <!-- .close -->
            <a href="{{url()->previous()}}" class="page-close"><i class="tf-ion-close"></i></a>
            <!-- /.close -->

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <div class="page-title text-center">
                            <h2>About <span class="primary">Us</span> <span class="title-bg">Details</span></h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, totam fuga labore nisi iure nihil, odit rerum veniam aliquid eveniet voluptas! Accusantium nihil neque veniam doloremque unde provident fuga cumque!</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="about-author">
                            <figure class="author-thumb">
                                <img src="{{asset('images/'.$about->image.'')}}" alt="">
                            </figure> <!-- /.author-bio -->
                            <div class="author-desc">
                                <p><b>Date Created:</b> {{$about->date}}</p>
                                <p><b>Country:</b> {{$about->country}}</p>
                                <p><b>Expert in:</b> {{$about->expert}}</p>
                            </div>
                            <!-- /.author-desc -->
                        </div> <!-- /.about-author -->
                        <p>{{$about->desc}}</p>
                    </div> <!-- /.col -->

                    <div class="col-xs-12 col-md-6">
                        <div class="section-title clear">
                            <h3>Properties</h3>
                        </div>
                        <div class="skill-wrapper">
                            @foreach($properties as $property)
                            <div class="progress clear">
                                <div class="skill-name">{{$property->title}}</div>
                                <div class="skill-bar">
                                    <div class="bar"></div>
                                </div>
                                <div class="skill-lavel" data-skill-value="{{$property->number}}"></div>
                            </div> <!-- /.progress -->
                            @endforeach
                        </div> <!-- /.skill-wrapper -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->

            <!-- /.container -->
        </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
</main> <!-- /.site-wrapper -->

<!-- ================================
JavaScript Libraries
================================= -->
<script src="{{asset('front/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('front/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('front/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery-validation.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>
</body>
</html>