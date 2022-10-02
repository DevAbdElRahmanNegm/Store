@extends('back.layout.admin')
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Orders</h3>
                <br>

            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th style="text-align: inherit !important;">Costumer Name </th>
                        <th style="text-align: inherit !important;">Costumer Phone </th>
                        <th style="text-align: inherit !important;">Costumer Address </th>
                        <th style="text-align: inherit !important;">Notes </th>

                        <th style="text-align: inherit !important;">Delete </th>
                    </tr>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->notes}}</td>
                            <td style="text-align: inherit !important;"><form action="{{route('order.destroy',$order->id)}}"  method="post">
                                    @csrf


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