@extends('front.layout')
@section('content')
<main class="site-wrapper">
    <div class="pt-table">
        <div class="pt-tablecell page-welcome relative">
            <!-- .close -->
            <a href="{{url('/home')}}" class="page-close"><i class="tf-ion-close"></i></a>
            <!-- /.close -->

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <div class="page-title home text-center">
                            <h2>My <span class="primary">Information</span> <span class="title-bg">Profile</span></h2>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica,quam nunc putamus parum claram anteposuerit.</p>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
            <div class="mainscreen">
                <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg"  class="bgimg " alt="">-->
                <form action="{{route('user-update', $user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                <div class="card card-profile">

                    <div class="leftside">
                        <img
                                src="{{asset('images/users/'.$user->image.'')}}"
                                class="product"
                                alt="Shoes"
                        />

                        <input class="edit" type="file" value="{{$user->image}}" name="image">



                    </div>
                    <div class="rightside">

                            <h2>Your Information</h2>

                            <input type="text" class="inputbox" name="name" value="{{$user->name}}" required />
                            <p>Name</p>
                            <input type="text" class="inputbox" name="number" value="{{$user->number}}" required />
                            <p>Phone Number</p>

                            <input type="email" class="inputbox" name="email" value="{{$user->email}}" required />
                            <p>Email Address</p>

                            <input type="password" class="inputbox"  name="password"  />
                            <p>New Password</p>

                            <button type="submit" class="button">Update Profile</button>


                    </div>

                </div>
                </form>
            </div>


        </div> <!-- /.pt-tablecell -->
    </div> <!-- /.pt-table -->
</main>
    @endsection