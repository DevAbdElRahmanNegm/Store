@extends('back.layout.admin')
@section('content')
    <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">About Us</h3>
            </div>
            @if($about)



            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>Our  DATE CREATED</td>
                        <td>{{$about->date}}</td>


                    </tr>


                    <tr>
                        <td>Our Country</td>
                        <td>{{$about->country}}</td>


                    </tr>


                    <tr>
                        <td>EXPERT IN</td>
                        <td>{{$about->expert}}</td>


                    </tr>
                    <tr>
                        <td>About Description</td>
                        <td>{{$about->desc}}</td>


                    </tr>


                    <tr>
                        <td>About Image</td>
                        <td><img src="{{asset('images/'.$about->image.'')}}" width="100px" height="100px" ></td>

                    </tr>






                    <tr>




                    </tbody>
                </table>
            </div>
            <div class="box-footer clearfix">
                <a href="{{route('about.edit',$about->id)}}" type="submit" class="btn btn-info pull-right">Edit</a>
            </div>
                @else
                <h1>No foud Data</h1>
            @endif
            <!-- /.box-body -->
        </div>
    </div>
    </div>
@endsection