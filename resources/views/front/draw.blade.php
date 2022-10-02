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
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
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
        <div class="pt-tablecell page-welcome relative">
            <!-- .close -->
            <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
            <!-- /.close -->

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <div class="page-title text-center">
                            <h2>Withdraw <span class="primary">Page</span> <span class="title-bg">Money</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div> <!-- /.row -->

                <div class="mainscreen">
                    <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg"  class="bgimg " alt="">-->
                    <div class="card card-profile">
                        <div class="leftside">
                            <img
                                    src="{{asset('front/img/vod-cash.PNG')}}"
                                    class="product"
                                    alt="Shoes"
                            />

                        </div>
                        <div class="rightside">
                            <form action="{{route('withDrawSent')}}" method="post">
                                @csrf
                                <h2>Withdraw</h2>
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif

                                @if($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>

                                        @foreach($errors->all() as $error)
                                            {{ $error }}<br/>
                                        @endforeach
                                    </div>
                                @endif
                                <input type="text" class="inputbox" name="name" required />
                                <p>Name</p>
                                <input type="text" class="inputbox" name="number" required />
                                <p>Phone Number</p>

                                <input type="email" class="inputbox" name="email" required />
                                <p>Email Address</p>
                                <input type="number" class="inputbox" name="amount" required />
                                <p>Withdraw Amount</p>
                                <input type="hidden" value="{{auth()->user()->name}}" class="inputbox" name="user_name" required />
                                <input type="hidden" value="{{auth()->user()->code}}" class="inputbox" name="user_code" required />

                                <button type="submit" class="button">Submit Withdraw</button>

                            </form>
                        </div>
                    </div>
                </div>

            </div> <!-- /.container -->

        </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
</main> <!-- /.site-wrapper -->

<!-- ================================
JavaScript Libraries
================================= -->
<script src="{{asset('front/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('front/js/vendor/bootstrap.min.js')}}"></script>
<!-- <script src="js/jquery.easing.min.js"></script> -->
<script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('front/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery-validation.min.js')}}"></script>
<script src="{{asset('front/js/form.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>
<script src="{{asset('front/js/log-sign.js')}}"></script>
</body>
</html>