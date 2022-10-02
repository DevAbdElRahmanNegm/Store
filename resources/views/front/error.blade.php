@extends('front.layout')
@section('content')

    <main class="site-wrapper">
        <div class="pt-table">
            <div class="pt-tablecell page-quotes relative">
                <!-- .close -->
                <a href="{{url()->previous()}}" class="page-close"><i class="tf-ion-close"></i></a>
                <!-- /.close -->

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <div class="page-title home text-center" style="margin-top: 150px;">
                                <h2><span class="primary">Error</span> <span class="title-bg">Error</span></h2>
                                <br>
                               <br>
                                @if(session()->has('message'))

                                <p>{{ session()->get('message') }}</p>
                                @endif
                                <br>

                                <a href="{{route('contact')}}" class="btn btn-primary text-uppercase" style="margin-top: 50px;">Contact Us</a>
                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->



            </div> <!-- /.pt-tablecell -->
        </div> <!-- /.pt-table -->
    </main>

    @endsection