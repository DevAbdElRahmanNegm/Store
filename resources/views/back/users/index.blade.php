@extends('back.layout.admin')
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users</h3>
                <br>

            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th style="text-align: inherit !important;">User Name </th>
                        <th style="text-align: inherit !important;">User Email </th>
                        <th style="text-align: inherit !important;">User Code </th>
                        <th style="text-align: inherit !important;">User Number </th>
                        <th style="text-align: inherit !important;">Edit</th>
                        <th style="text-align: inherit !important;">Delete</th>

                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->code}}</td>
                            <td>{{$user->number}}</td>

                            <td><a href="{{route('user.edit',$user->id)}}" type="submit" class="btn btn-info pull-center">Edit user code</a></td>

                            <td style="text-align: inherit !important;"><form action="{{route('user.destroy',$user->id)}}"  method="post">
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