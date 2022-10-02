@extends('back.layout.admin')
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">With Draw</h3>
                <br>

            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th style="text-align: inherit !important;">Name </th>
                        <th style="text-align: inherit !important;">Email </th>
                        <th style="text-align: inherit !important;">Number </th>
                        <th style="text-align: inherit !important;">Amount </th>
                        <th style="text-align: inherit !important;">User Name </th>
                        <th style="text-align: inherit !important;">User Code </th>
                        <th style="text-align: inherit !important;">Status </th>
                        <th style="text-align: inherit !important;">Edit</th>
                        <th style="text-align: inherit !important;">Delete</th>

                    </tr>
                    @foreach($draws as $draw)
                        <tr>
                            <td>{{$draw->name}}</td>
                            <td>{{$draw->email}}</td>
                            <td>{{$draw->number}}</td>
                            <td>{{$draw->amount}}</td>
                            <td>{{$draw->user_name}}</td>
                            <td>{{$draw->user_code}}</td>
                            <td>{{$draw->status}}</td>
                            <td><a href="{{route('withdraw.edit',$draw->id)}}" type="submit" class="btn btn-info pull-center">Edit</a></td>
                            <td style="text-align: inherit !important;"><form action="{{route('withdraw.destroy',$draw->id)}}"  method="post">
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