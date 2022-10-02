@extends('back.layout.admin')
@section('content')


    <div class="box ">
        <div class="box-header with-border">
            <h3 class="box-title">Products</h3>
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
            <form role="form" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                @csrf
                <!-- text input -->

                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter ..." >
                    </div>


                <div class="form-group">
                    <label>Product Color</label>
                    <input type="text" name="color" class="form-control" placeholder="Enter ..." >
                </div>

                <div class="form-group">
                    <label>Product Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Enter ..." >
                </div>

                <div class="form-group">
                    <label>Product Description</label>
                    <textarea type="text" name="desc" class="form-control" placeholder="Enter ..." ></textarea>
                </div>


                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <input type="file" name="image" id="exampleInputFile">
                </div>




                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Add</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>



@endsection

