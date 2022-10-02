@extends('back.layout.admin')
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Orders for This Product</h3>
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

                    </tr>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->notes}}</td>

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