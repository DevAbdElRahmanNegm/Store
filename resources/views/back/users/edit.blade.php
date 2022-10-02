
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
            <form role="form" method="POST" action="{{route('user.update' , $user->id)}}" enctype="multipart/form-data">
                @csrf

                <!-- text input -->
                <div class="form-group">
                    <label>User Code</label>
                    <input type="text" name="code" value="{{$user->code}}" class="form-control"  >
                </div>


                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>

@endsection