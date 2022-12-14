@extends('front.layout')
@section('content')

    <main class="site-wrapper">
        <div class="pt-table">
            <div class="pt-tablecell page-contact relative">
                <!-- .close -->
                <a href="{{url('/home')}}" class="page-close"><i class="tf-ion-close"></i></a>
                <!-- /.close -->

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <div class="page-title text-center">
                                <h2>Get in  <span class="primary">touch</span> <span class="title-bg">Contact</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div> <!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                            <div class="contact-block">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="tf-envelope2"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Email</h4>
                                        <p><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.contact-block -->
                            <div class="contact-block">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="tf-phone2"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Phone</h4>
                                        <p><a href="tel:{{$contact->number}}">{{$contact->number}}</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.contact-block -->
                            <div class="contact-block">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="tf-mobile"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Skype</h4>
                                        <p><a href="skype:{{$contact->skype}}">{{$contact->skype}}</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.contact-block -->

                            <ul class="contact-social">
                                <li>
                                    <span class="contact-social-hex"></span>
                                    <a href="{{$contact->facebook}}"><i class="tf-ion-social-facebook"></i></a>
                                </li>
                                <li>
                                    <span class="contact-social-hex"></span>
                                    <a href="{{$contact->twitter}}"><i class="tf-ion-social-twitter"></i></a>
                                </li>
                                <li>
                                    <span class="contact-social-hex"></span>
                                    <a href="{{$contact->gmail}}"><i class="tf-ion-social-google"></i></a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1 col-lg-offset-2">
                            <div class="section-title clear">
                                <h3>Send me a Message</h3>
                                <span class="bar-dark"></span>
                                <span class="bar-primary"></span>
                            </div>

                            <form id="contact-form" class="row contact-form no-gutter" action="{{route('message.store')}}" method="post">
                           @csrf
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                @if($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">??</span>
                                        </button>

                                        @foreach($errors->all() as $error)
                                            {{ $error }}<br/>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="col-xs-12 col-sm-6">
                                    <div class="input-field name">
                                        <span class="input-icon" id="name" ><i class="tf-profile-male"></i></span>
                                        <input type="text" name="name" class="form-control"  placeholder="Enter your name">
                                    </div>
                                </div> <!-- ./col- -->

                                <div class="col-xs-12 col-sm-6">
                                    <div class="input-field email">
                                        <span class= "input-icon" id="email"><i class="tf-envelope2"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Your email address">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="input-field name">
                                        <span class= "input-icon" id="number"><i class="tf-pricetags"></i></span>
                                        <input type="text" class="form-control" name="number" placeholder="Enter Your Number">
                                    </div>
                                </div><!-- ./col- -->

                                <div class="col-xs-12 col-sm-6">
                                    <div class="input-field">
                                        <span class= "input-icon" id="subject"><i class="tf-pricetags"></i></span>
                                        <input type="text" class="form-control" name="subject" placeholder="Enter the discussion title">
                                    </div>
                                </div>
                               <!-- ./col- -->
                                <div class="col-xs-12 col-sm-12">
                                    <div class="input-field message">
                                        <span class= "input-icon" ><i class="tf-pencil2"></i></span>
                                        <textarea name="message" id="message" class="form-control" placeholder="Write your message"></textarea>
                                    </div>
                                </div> <!-- ./col- -->

                                <div class="col-xs-12 col-sm-12">
                                    <div class="input-field">
                                            <span class="btn-border">
                                                <button type="submit" class="btn btn-primary btn-custom-border text-uppercase">Send now Message </button>
                                            </span>
                                    </div>
                                    <div class="msg-success">Your Message was sent successfully</div>
                                    <div class="msg-failed">Something went wrong, please try again later</div>
                                </div> <!-- ./col- -->


                            </form> <!-- /.row -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->


                <!-- /.container -->

            </div> <!-- /.pt-tablecell -->
        </div> <!-- /.pt-table -->
    </main>

    @endsection