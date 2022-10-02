
@extends('back.layout.admin')
@section('content')
    <div class="box ">
        <div class="box-header with-border">
            <h3 class="box-title">Processes</h3>
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
            <form role="form" method="POST" action="{{route('process.update' , $process->id)}}" enctype="multipart/form-data">
                @csrf
                {{method_field('put')}}
                <!-- text input -->

                <div class="form-group">
                    <label>User Name</label>
                    <select name="user_id" class="form-control">

                        @foreach($users as $user)

                            <option value="{{$user->id}}" {{$process->user_id == $user->id ? 'selected' : ''}}> {{$user->name}} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Product</label>
                    <select name="product_id" class="form-control">

                        @foreach($products as $product)

                            <option value="{{$product->id}}" {{$process->product_id == $product->id ? 'selected' : ''}}> {{$product->name}}- {{$product->color}} </option>
                        @endforeach
                    </select>
                </div>



                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>

@endsection