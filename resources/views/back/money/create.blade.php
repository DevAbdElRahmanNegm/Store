@extends('back.layout.admin')
@section('content')


    <div class="box ">
        <div class="box-header with-border">
            <h3 class="box-title">Money</h3>
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
            <form role="form" method="POST" action="{{route('money.store')}}" enctype="multipart/form-data">
                @csrf
                <!-- text input -->

                <div class="form-group">
                    <label>Choose user </label>
                    <select name="user_id" class="form-control">
                        <option>...</option>
                        @foreach($users as $user)

                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label>Choose Process</label>
                    <select name="process_id" class="form-control">
                        <option>...</option>
                        @foreach($processes as $process)

                            <option value="{{$process->id}}">{{$process->user->name}} - {{$process->product->name}} -  {{$process->product->color}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label> Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Enter ..." >
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Add</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>



@endsection

