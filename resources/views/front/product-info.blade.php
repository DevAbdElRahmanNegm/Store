@extends('front.layout')
@section('content')

    <style>
        .rightside .title_product {
            font-size: 2rem;
            color: #442b38 !important;
            font-weight: bold;
            letter-spacing: normal;
            font-family: 'Cairo', serif;
            display: flex;
            justify-content: center;
            margin: 3rem 0;
        }

        .rightside .color,
        .rightside .price,
        .rightside .discripe {
            line-height: 1.7;
            letter-spacing: normal;
            font-size: 1.7rem;
            padding: .5em;
            border-radius: .5rem;
            font-weight: bold;
            background-color: rgb(0, 154, 174);
            color: #fff;
            display: flex;
            justify-content: center;
            margin: auto;
            text-align: center;
            transition: .4s ease-in-out;
            margin-bottom: .8rem;
        }

        .rightside .copy,
        .rightside .order {
            font-size: 1.5rem;
            width: 80%;
        }

        .rightside .order {
            background-color: rgb(0, 154, 174);
            cursor: pointer;
        }

        .rightside .order:hover {
            background-color: rgb(0, 192, 218);
        }

        .code-user {
            text-transform: none;
        }

        .rightside .discripe {
            background-color: rgb(0, 90, 102);
        }

        .over-hide {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            transition: .4s ease-in-out;
        }

        .main-form {
            position: absolute;
            top: 57%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 100vh;
            width: 70%;
            /* background-color: rgba(255, 255, 255, 0.8); */
            background: linear-gradient(45deg, #02b7cf71 20%, rgba(0, 0, 0, 0.8) 10%);
            overflow: hidden;
            padding: 3rem;
        }

        .main-form .form-order {
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 3rem;
            margin-top: 3rem;
        }

        .form-order .inputbox {
            border: none;
            background-color: transparent;
            border-bottom: 3px solid rgb(147, 0, 0);
            transition: .3s ease-in-out;
            font-size: 1.5rem;
            color: #fff;
            letter-spacing: 1.1px;
            font-weight: bold;
        }

        .form-order .inputbox:focus {
            border-color: #02b7cf;
            box-shadow: inset 0 0 0 2rem #005b67;
        }

        .form-order .area:focus {
            box-shadow: inset 0 0 0 5rem #005b67;
        }

        .form-order p {
            display: block;
            z-index: -1;
            font-size: 1.4rem;
            font-weight: bold;
            letter-spacing: 1.2px;
            color: rgb(255, 255, 255);
            position: relative;
            top: -85px;
            transition: .3s ease-in-out;
        }

        .btn {
            margin-bottom: 20px;
            background-color: rgb(147, 0, 0);
            text-transform: uppercase;
            font-size: 1.5rem;
            letter-spacing: 1.3px;
        }

        .details .title_product {
            letter-spacing: normal;
        }

        .close {
            color: #fff;
            opacity: 1;
            transition: .4s ease-in-out;
        }

        .close:hover {
            color: rgb(147, 0, 0);
            border: none;
            outline: none;
            box-shadow: none;
            opacity: 1;
        }

        @media only screen and (min-width: 767px) {
            .main-form {
                overflow: hidden;
                background: linear-gradient(45deg, #61686971 20%, rgba(0, 0, 0, 0.8) 10%);
            }

            .main-form .form-order {
                width: 60%;
                margin-left: 140px;
                display: grid;
            }

            .main-form .information {
                width: 30%;
                margin-right: 30px;
                overflow: hidden;
                margin-bottom: 20px;
                display: grid;
                gap: 1.5rem;
                justify-content: center;
                text-align: center;
            }

            .main-form .form-order .inputbox {
                width: 100%;
            }

            .main-form .information .image {
                height: 250px;
                width: 250px;
                margin-bottom: 20px;
            }

            .main-form .information .image img {
                height: 100%;
                width: 100%;
            }

            .details .color,
            .details .price {
                color: #fff;
                font-size: 1.6rem;
                font-weight: bold;
                margin-top: 20px;
                display: block;
                background-color: rgb(147, 0, 0);
            }
        }

        @media only screen and (max-width: 767px) {
            .main-form {
                width: 90%;
                height: 125vh;
            }

            .main-form .form-order .inputbox {
                width: 100%;
            }

            .main-form .information {
                margin-bottom: 20px;
                display: flex;
                gap: 1.5rem;
            }

            .details {
                line-height: 1.7;
            }

            .details .color,
            .details .price {
                font-size: 1.2rem;
                font-weight: bold;
                display: block;
                text-align: center;
            }

            .details .color {
                margin-top: 10px;
            }

        }
    </style>



    <main class="site-wrapper">
        <div class="pt-table">
            <div class="pt-tablecell page-welcome relative">
                <!-- .close -->
                <a href="{{url('/home')}}" class="page-close"><i class="tf-ion-close"></i></a>
                <!-- /.close -->

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <div class="page-title text-center">
                                <h2>Product <span class="primary">Page</span> <span class="title-bg">Info</span></h2>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                    @if(session()->has('message'))
                        <div class="alert alert-success" style="text-align: center; font-size: 20px">
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
                    <div class="mainscreen">
                        <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg"  class="bgimg " alt="">-->
                        <div class="card card-profile">
                            <div class="leftside">
                                <img src="{{asset('images/products/'.$product->image.'')}}" class="product" alt="Shoes" />

                            </div>

                            <div class="rightside">
                                <h3 class="title_product">{{$product->name}}</h3>
                                <span class="color">اللون : {{$product->color}}</span>
                                <span class="price">السعر : {{$product->price}} جم</span>
                                <span    class="discripe">{{$product->desc}}</span>
                                </p>
                                <b class="copy">
                                    Copy
                                    <i  class="tf-ion-ios-paper icon-copy"></i>
                                </b>
                                <b class="copy order">
                                    Order
                                    <i class="tf-pencil2 icon-copy"></i>
                                </b>
                            </div>
                        </div>
                    </div>


                    <div class="over-hide hide">
                        <div class="main-form">
                            <i class="tf-ion-close close" id="close"></i>
                            <div class="information">
                                <div class="image">
                                    <img class="card__thumb" src="{{asset('images/products/'.$product->image.'')}}" alt="" />
                                </div>
                                <div class="details">
                                    <h3 class="title_product">{{$product->name}}</h3>
                                    <span class="color">اللون : {{$product->color}}</span>
                                    <span class="price">السعر : {{$product->price}} جم</span>
                                </div>
                            </div>
                            <form action="{{route('order.create')}}" class="form-order" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}" class="inputbox" style="direction: rtl;">
                                <input type="hidden" name="product_name" value="{{$product->name}}" class="inputbox" style="direction: rtl;">
                                <input type="hidden" name="product_name" value="{{auth()->user()->code}}" class="inputbox" style="direction: rtl;">

                                <input type="text" name="name" class="inputbox" style="direction: rtl;">
                                <p>Customer's Name</p>

                                <input type="text" name="phone" class="inputbox" maxlength="11" onkeypress="isnumber(event)">
                                <p>Customer's Phone</p>

                                <input type="text" name="address" class="inputbox" style="direction: rtl;">
                                <p>Customer's Address</p>

                                <textarea rows="3" name="notes" class="inputbox area" style="resize: none;"></textarea>
                                <p style="top: -155px;">Notes</p>

                                <button type="submit" class="button btn">Submit</button>
                            </form>
                        </div>
                    </div>

                </div> <!-- /.container -->

            </div> <!-- /.pt-tablecell -->
        </div> <!-- /.pt-table -->
    </main>




    <script>
        function isnumber(evt) {
            var ch = String.fromCharCode(evt.which);

            if (!/[0-9]/.test(ch)) {
                evt.preventDefault();
            }
        };

        let close = document.getElementById('close'),
            over = document.querySelector('.over-hide'),
            order_btn = document.querySelector('.order')

        close.addEventListener('click', function(){
            over.classList.add('hide')
        })
        order_btn.addEventListener('click', function(){
            over.classList.remove('hide')
        })
    </script>

    <script>
        function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");
            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);
            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
        }
    </script>
    @endsection