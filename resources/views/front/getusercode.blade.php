@extends('front.layout')
@section('content')

    <main class="site-wrapper">
        <div class="pt-table">
            <div class="pt-tablecell page-quotes relative">
                <!-- .close -->
                <a href="./" class="page-close"><i class="tf-ion-close"></i></a>
                <!-- /.close -->

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <div class="page-title home text-center" style="margin-top: 150px;">
                                <h2>Get Your<span class="primary"> Password</span> <span class="title-bg">Pass</span></h2>
                                <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-1 col-lg-offset-2" style="margin-top: 50px;">
                                    <form class="input-field name" method="GET">
                                        @csrf
                                        <input type="text" name="number" class="form-control" id="num-code"  placeholder="Enter your number" required maxlength="11"
                                               style="height: 40px;letter-spacing: 2px;font-size: 1.7rem;font-weight: bold;text-align: center;">
                                        <button type="button" id="btn-sub" class="btn btn-primary text-uppercase" style="margin-top: 50px;">Get Password</button>
                                    </form>
                                    <p style="margin-top: 30px;">If You Have A Problem Please
                                        <a href="contact.html" style="color: blue;">Contact</a>
                                        With Us
                                    </p>

                                    <p class="btn-primary btn-pri hide" id="show-pass">Your Password Is : <span id="pass-user"></span></p>
                                    <p class="btn-primary btn-pri hide" id="show-code">Your Code Is : <span id="code-user"></span></p>
                                </div> <!-- ./col- -->

                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->



            </div> <!-- /.pt-tablecell -->
        </div> <!-- /.pt-table -->
    </main>
    @endsection