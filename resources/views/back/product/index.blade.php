@extends('back.layout.admin')
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Products</h3>
                <br>
                <a href="{{route('product.create')}}" type="submit" class="btn btn-info center-block pull-center">Add</a>

            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th style="text-align: inherit !important;">Name </th>
                        <th style="text-align: inherit !important;">Color </th>
                        <th style="text-align: inherit !important;">Price </th>
                        <th style="text-align: inherit !important;">desc </th>
                        <th style="text-align: inherit !important;">Image </th>
                        <th style="text-align: inherit !important;">Orders</th>
                        <th style="text-align: inherit !important;">Edit</th>
                        <th style="text-align: inherit !important;">Delete</th>

                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->color}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->desc}}</td>
                            @php
                            $order = \App\Models\Order::where('product_id' , '=' , $product->id)->count();
                            @endphp
                            <td><img src="{{asset('images/products/' . $product->image)}}" width="100px" height="100px"></td>
                            <td><a href="{{route('orders.products',$product->id)}}" type="submit" class="btn btn-info pull-center">{{$order}} Orders</a></td>
                            <td><a href="{{route('product.edit',$product->id)}}" type="submit" class="btn btn-info pull-center">Edit</a></td>
                            <td style="text-align: inherit !important;"><form action="{{route('product.destroy',$product->id)}}"  method="post">
                                    @csrf
                                    {{method_field('delete')}}

                                    <button type="submit"   class="btn btn-danger">
                                        <i class="material-icons">Delete</i>
                                    </button>
                                </form></td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

@endsection