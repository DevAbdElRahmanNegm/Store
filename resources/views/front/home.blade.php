@extends('front.layout')
@section('content')
    <main class="site-wrapper">
        <div class="pt-table">
            <div class="pt-tablecell page-home relative"
                 style="background-image: url('{{asset('front/img/banner.jpg')}}');">
                <div class="overlay"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <div class="page-title home text-center">
                                <img src="{{asset('front/img/affiliate.png')}}" alt="">
                                <p>OUR PRODUCTS ARE PUMPED TO THE EGYPTIAN MARKET WE AIM TO MAKE OUR PRODUCTS ARE
                                    EXPORTED TO COUNTRIES AND REGIONS AROUND THE WORLD.</p>
                                <div class="link">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a href="{{url('/logout')}}" class="log-out" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout

                                        <i class="fa fa-user icon-log"></i>

                                    </a>

                                </div>
                            </div>
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="hexagon-menu clear">

                                <div class="hexagon-item ">
                                    <div class="hex-item ">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <a href="{{route('product')}}" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa-brands fa-product-hunt"></i>
                                                </span>
                                                <span class="title">Products</span>
                                            </span>
                                        <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                                  fill="#1e2530"></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="hexagon-item">
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <a href="{{route('about')}}" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <span class="title">About</span>
                                            </span>
                                        <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                                  fill="#1e2530"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="hexagon-item">
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <a href="{{route('user-edit',auth()->user()->id)}}" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-user-gear"></i>
                                                </span>
                                                <span class="title">Profile</span>
                                            </span>
                                        <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                                  fill="#1e2530"></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="hexagon-item">
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <a href="{{route('withdraw')}}" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa-solid fa-hand-holding-dollar"></i>
                                                </span>
                                                <span class="title">Withdraw</span>
                                            </span>
                                        <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                                  fill="#1e2530"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="hexagon-item">
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <a href="{{route('balance')}}" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-money-check-dollar"></i>
                                                </span>
                                                <span class="title">Balance</span>
                                            </span>
                                        <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                                  fill="#1e2530"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="hexagon-item">
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <a href="{{route('soon')}}" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa-regular fa-hourglass"></i>
                                                </span>
                                                <span class="title">Soon</span>
                                            </span>
                                        <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                                  fill="#1e2530"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="hexagon-item">
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="hex-item">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <a href="{{route('contact')}}" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa-regular fa-paper-plane"></i>
                                                </span>
                                                <span class="title">Contact</span>
                                            </span>
                                        <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z"
                                                  fill="#1e2530"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div> <!-- /.hexagon-menu -->

                        </div> <!-- /.col-xs-12 -->

                    </div> <!-- /.row -->
                </div> <!-- /.container -->

            </div> <!-- /.pt-tablecell -->
        </div> <!-- /.pt-table -->
    </main>

@endsection