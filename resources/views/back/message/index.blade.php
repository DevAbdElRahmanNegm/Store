@extends('back.layout.admin')
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Messages</h3>
                <br>

            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th style="text-align: inherit !important;"> Name </th>
                        <th style="text-align: inherit !important;">Email </th>
                        <th style="text-align: inherit !important;">Number </th>
                        <th style="text-align: inherit !important;">Discussion title </th>
                        <th style="text-align: inherit !important;">Message </th>
                        <th style="text-align: inherit !important;">Delete</th>
                    </tr>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->number}}</td>
                            <td>{{$message->subject}}</td>
                            <td>{{$message->message}}</td>
                            <td style="text-align: inherit !important;">
                                <form action="{{route('message.destroy',$message->id)}}" method="post">
                                    @csrf


                                    <button type="submit" class="btn btn-danger">
                                        <i class="material-icons">Delete</i>
                                    </button>
                                </form>
                            </td>
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