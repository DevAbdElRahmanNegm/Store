
@extends('back.layout.admin')
@section('content')
    <div class="box ">
        <div class="box-header with-border">
            <h3 class="box-title">Admins</h3>
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
            <form role="form" method="POST" action="{{route('admins.update' , $admin->id)}}" enctype="multipart/form-data">
                @csrf
                {{method_field('put')}}
                <!-- text input -->
                <div class="form-group">
                    <label>Admin Name</label>
                    <input type="text" name="name" value="{{$admin->name}}" class="form-control"  >
                </div>


                <div class="form-group">
                    <label>Admin Name</label>
                    <input type="text" name="email" value="{{$admin->email}}" class="form-control"  >
                </div>

                <div class="form-group">
                    <label>Admin New Password</label>
                    <input type="password" name="password"  class="form-control"  >
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>

@endsection