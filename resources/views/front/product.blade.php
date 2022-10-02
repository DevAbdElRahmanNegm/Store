@extends('front.layout')
@section('content')

@php(\Carbon\Carbon::setLocale('ar'))
    <main class="site-wrapper">
        <div class="pt-table">
            <div class="pt-tablecell page-welcome relative">
                <!-- .close -->
                <a href="./home" class="page-close"><i class="tf-ion-close"></i></a>
                <!-- /.close -->

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <div class="page-title text-center">
                                <h2>Affiliate <span class="primary">Store</span> <span class="title-bg">Product</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repellendus corporis, tenetur inventore perferendis reprehenderit autem dignissimos non quos unde eveniet sapiente necessitatibus consequuntur ea ab dolore, minus nam eaque.</p>
                            </div>
                        </div>
                    </div> <!-- /.row -->

                </div> <!-- /.container -->

                <ul class="cards">
                    @foreach($products as $product)
                    <li>
                        <a  class="card">
                            <img src="{{asset('images/products/'.$product->image.'')}}" class="card__image" alt="" />
                            <div class="card__overlay">
                                <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                    <img class="card__thumb" src="{{asset('images/products/'.$product->image.'')}}" alt="" />
                                    <div class="card__header-text">
                                        <h3 class="card__title_product" > {{$product->name}}</h3>
                                        <span class="card__status">{{$product->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                                <p class="card__description">

                                    <span class="discripe" >{{substr($product->desc, 0,100)}}....... </span>

                                    <button onclick="document.location = '{{route('ProductShow',$product->id)}}'" class="copy" style="border: none;">
                                        <i class="tf-ion-ios-paper icon-copy"></i>
                                        Info</button>

                                </p>
                            </div>
                        </a>
                    </li>
                @endforeach
                </ul>
                {!! $products->links() !!}

            </div> <!-- /.pt-tablecell -->

        </div> <!-- /.pt-table -->

    </main>


    @endsection