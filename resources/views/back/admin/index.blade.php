@extends('back.layout.admin')
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admins</h3>
                <br>
                <a href="{{route('admins.create')}}" type="submit" class="btn btn-info center-block pull-center">Add</a>

            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th style="text-align: inherit !important;">Admin Name </th>
                        <th style="text-align: inherit !important;">Admin Email </th>
                        <th style="text-align: inherit !important;">Edit</th>
                        <th style="text-align: inherit !important;">Delete</th>

                    </tr>
                    @foreach($admins as $admin)
                        <tr>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            @if(auth()->user()->id == $admin->id)
                            <td><a href="{{route('admins.edit',$admin->id)}}" type="submit" class="btn btn-info pull-center">Edit</a></td>
                            @else
                                <td>You Don't Have Access</td>

                            @endif
                            @if(auth()->user()->id == 1)
                            <td style="text-align: inherit !important;"><form action="{{route('admins.destroy',$admin->id)}}"  method="post">
                                    @csrf
                                    {{method_field('delete')}}

                                    <button type="submit"   class="btn btn-danger">
                                        <i class="material-icons">Delete</i>
                                    </button>
                                </form></td>
                            @else
                                <td>You Don't Have Access</td>
                            @endif
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