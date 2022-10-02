@extends('back.layout.admin')
@section('content')
    <div class="box ">
        <div class="box-header with-border">
            <h3 class="box-title">About Us</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
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
            <form role="form" method="POST" action="{{route('about.update' , 1)}}" enctype="multipart/form-data">
                @csrf
            {{method_field('put')}}
            <!-- text input -->

                <div class="form-group">
                    <label>Our DATE CREATED</label>
                    <input type="text" name="date" value="{{$about->date}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Our Country</label>
                    <input type="text" name="country" value="{{$about->country}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>EXPERT IN</label>
                    <input type="text" name="expert" value="{{$about->expert}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>About Description</label>
                    <textarea type="text" name="desc" class="form-control" >{{$about->desc}}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Product Image</label>
                    <br>
                    <img src="{{asset('images/'.$about->image)}}" height="100" width="100">
                    <br>
                    <br>
                    <input type="file" value="{{$about->image}}" name="image" id="exampleInputFile">


                </div>


                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>

@endsection