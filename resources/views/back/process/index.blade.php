@extends('back.layout.admin')
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Processes</h3>
                <br>
                <a href="{{route('process.create')}}" type="submit" class="btn btn-info center-block pull-center">Add</a>

            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th style="text-align: inherit !important;">Process ID </th>
                        <th style="text-align: inherit !important;">User Name </th>
                        <th style="text-align: inherit !important;">Product </th>
                        <th style="text-align: inherit !important;">Create_at </th>
                        <th style="text-align: inherit !important;">Edit</th>
                        <th style="text-align: inherit !important;">Delete</th>

                    </tr>
                    @foreach($processes as $process)
                        <tr>
                            <td>{{$process->id}}</td>
                            <td>{{$process->user->name}}</td>
                            <td>{{$process->product->name}}-{{$process->product->color}}</td>
                            <td>{{$process->created_at}}</td>

                            <td><a href="{{route('process.edit',$process->id)}}" type="submit" class="btn btn-info pull-center">Edit</a></td>
                            <td style="text-align: inherit !important;"><form action="{{route('process.destroy',$process->id)}}"  method="post">
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