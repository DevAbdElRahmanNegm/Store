@extends('back.layout.admin')
@section('content')

    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Properties</h3>
                <br>
                <a href="{{route('property.create')}}" type="submit" class="btn btn-info center-block pull-center">Add</a>

            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th style="text-align: inherit !important;">Property Title </th>
                        <th style="text-align: inherit !important;">Property Percentage </th>

                        <th style="text-align: inherit !important;">Edit</th>
                        <th style="text-align: inherit !important;">Delete</th>

                    </tr>
                    @foreach($properties as $property)
                        <tr>
                            <td>{{$property->title}}</td>
                            <td>{{$property->number}}</td>

                            <td><a href="{{route('property.edit',$property->id)}}" type="submit" class="btn btn-info pull-center">Edit</a></td>
                            <td style="text-align: inherit !important;"><form action="{{route('property.destroy',$property->id)}}"  method="post">
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