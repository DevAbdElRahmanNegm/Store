@extends('front.layout')
@section('content')

    <main class="site-wrapper">
        <div class="pt-table">
            <div class="pt-tablecell page-works relative">
                <!-- .close -->
                <a href="./" class="page-close"><i class="tf-ion-close">    </i></a>
                <!-- /.close -->

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <div class="page-title text-center">
                                <h2>My <span class="primary">Balance</span> <span class="title-bg">Balance</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div> <!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="history-block">
                                <div class="section-title light clear">
                                    <h3>Processes</h3>
                                </div>
                                <!-- /.section-title -->
                                <div class="history-scroller">
                                    @foreach($processes as $process)
                                    <div class="history-item">
                                        <div class="history-icon">
                                            <span class="history-hex"></span>
                                            <i class="fa fa-file-invoice-dollar"></i>
                                        </div>
                                        <div class="history-text" style="line-height: normal;">
                                            <span><b style="color: white; letter-spacing: normal;"> ID : {{$process->id}}</b><br></span>
                                            <h5>{{$process->user->name}}</h5>
                                            <span><b style="color: white; letter-spacing: normal;">{{$process->product->name}}</b><br></span>
                                            <span>{{$process->created_at}}</span>
                                        </div>
                                    </div>
                                    <!-- /.history-item -->
                                    @endforeach
                                </div>
                            </div> <!-- /.history-block -->
                        </div> <!-- /.col -->
                        <div class="col-xs-12 col-sm-6">
                            <div class="history-block">
                                <div class="section-title light clear">
                                    <h3>Added Money</h3>
                                    <br>
                                    <h3 style="font-size: 19px; color: #02B7CF;">All Money = {{$price}} L.E</h3>

                                </div>
                                <br>
                                <!-- /.section-title -->
                                <div class="history-scroller">
                                    @foreach($monies as $money)
                                    <div class="history-item">
                                        <div class="history-icon">
                                            <span class="history-hex"></span>
                                            <i class="fa fa-dollar-sign"></i>
                                        </div>
                                        <div class="history-text" style="line-height: normal;">
                                            <h5>{{$money->price}} L.E</h5>
                                            <span><b style="color: white; letter-spacing: normal;">{{$money->process_id}}</b><br></span>
                                            <span>{{$money->created_at}}</span>
                                        </div>
                                    </div>

                                    <!-- /.history-item -->
                                        @endforeach
                                </div>
                            </div> <!-- /.history-block -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->





            </div> <!-- /.pt-tablecell -->
        </div> <!-- /.pt-table -->
    </main>

    @endsection