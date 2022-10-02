
@extends('back.layout.admin')
@section('content')
    <div class="box ">
        <div class="box-header with-border">
            <h3 class="box-title">With Draw</h3>
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
            <form role="form" method="POST" action="{{route('withdraw.update' , $draw->id)}}" enctype="multipart/form-data">
                @csrf
                {{method_field('put')}}
                <!-- text input -->


                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">

                            <option value="pending" {{$draw->status == 'pending' ? 'selected' : ''}}> Pending </option>
                        <option value="approved" {{$draw->status == 'approved' ? 'selected' : ''}}> Approved </option>

                    </select>
                </div>



                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>

@endsection