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
            <form role="form" method="POST" action="{{route('process.store')}}" enctype="multipart/form-data">
                @csrf
                <!-- text input -->

                <div class="form-group">
                    <label>Choose user </label>
                    <select name="user_id" class="form-control">
                        <option>...</option>
                        @foreach($users as $user)

                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label>Choose Product</label>
                    <select name="product_id" class="form-control">
                        <option>...</option>
                        @foreach($products as $product)

                            <option value="{{$product->id}}">{{$product->name}} - {{$product->color}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Add</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>



@endsection

