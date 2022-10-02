@extends('front.layout')
@section('content')

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
                                <h2>Sign <span class="primary">Up</span> <span class="title-bg">LogIn</span></h2>
                                <p></p>
                            </div>
                        </div>
                    </div> <!-- /.row -->

                    <section class="forms-section ">
                        <h1 class="section-title">Animated Forms</h1>
                        <div class="forms">
                            <div class="form-wrapper is-active">
                                <button type="button" class="switcher switcher-login">
                                    Login
                                    <span class="underline"></span>
                                </button>
                                <form method="POST" action="{{ route('login') }}" class="form form-login">
                                    @csrf
                                    <fieldset>
                                        <legend>Please, enter your email and password for login.</legend>
                                        <div class="input-block">
                                            <label for="login-email">E-mail</label>
                                            <input id="login-email" name="email" type="email" required>
                                        </div>
                                        <div class="input-block">
                                            <label for="login-password">Password</label>
                                            <input id="login-password" name="password" type="password" required>
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn-login">Login</button>
                                </form>
                            </div>
                            <div class="form-wrapper ">
                                <button type="button" class="switcher switcher-signup">
                                    Sign Up
                                    <span class="underline"></span>
                                </button>
                                <form  method="POST" action="{{route('create.user')}}" class="form form-signup">
                                    @csrf
                                    <fieldset>
                                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                                        <div class="input-block">
                                            <label for="signup-name">Name</label>
                                            <input id="signup-name" name="name" type="text" required>
                                        </div>
                                        <div class="input-block">
                                            <label for="signup-num">Number</label>
                                            <input id="signup-num" name="number" type="text" required>
                                        </div>
                                        <div class="input-block">
                                            <label for="signup-email">E-mail</label>
                                            <input id="signup-email" name="email" type="email" required>
                                        </div>
                                        <div class="input-block">
                                            <label for="signup-password">Password</label>
                                            <input id="signup-password" name="password" type="password" required>
                                        </div>

                                    </fieldset>
                                    <button type="submit" class="btn-signup">Continue</button>
                                </form>
                            </div>
                        </div>
                    </section>



                </div> <!-- /.container -->

            </div> <!-- /.pt-tablecell -->
        </div> <!-- /.pt-table -->
    </main>

    @endsection