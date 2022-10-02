
@extends('back.layout.admin')
@section('content')
    <div class="box ">
        <div class="box-header with-border">
            <h3 class="box-title">Money</h3>
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
            <form role="form" method="POST" action="{{route('money.update' , $money->id)}}" enctype="multipart/form-data">
                @csrf
                {{method_field('put')}}
                <!-- text input -->

                <div class="form-group">
                    <label>User Name</label>
                    <select name="user_id" class="form-control">

                        @foreach($users as $user)

                            <option value="{{$user->id}}" {{$money->user_id == $user->id ? 'selected' : ''}}> {{$user->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Product</label>
                    <select name="product_id" class="form-control">

                        @foreach($processes as $process)

                            <option value="{{$process->id}}" {{$money->process_id == $process->id ? 'selected' : ''}}> {{$process->user->name}} - {{$process->product->name}} -  {{$process->product->color}} </option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label> Price</label>
                    <input type="text" name="price" value="{{$money->price}}" class="form-control" placeholder="Enter ..." >
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>

@endsection