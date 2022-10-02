@extends('back.layout.admin')
@section('content')
    <div class="box ">
        <div class="box-header with-border">
            <h3 class="box-title">Contact Us</h3>
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
            <form role="form" method="POST" action="{{route('contact.update' , 1)}}">
                @csrf
            {{method_field('put')}}
            <!-- text input -->

                <div class="form-group">
                    <label>Our Email</label>
                    <input type="email" name="email" value="{{$contact->email}}" class="form-control">
                </div>


                <div class="form-group">
                    <label>Our Number</label>
                    <input type="text" name="number" value="{{$contact->number}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Our Skype</label>
                    <input type="text" value="{{$contact->skype}}" name="skype" class="form-control">
                </div>

                <div class="form-group">
                    <label>Our FaceBook</label>
                    <input type="text" value="{{$contact->facebook}}" name="facebook" class="form-control">
                </div>


                <div class="form-group">
                    <label>Our Twitter</label>
                    <input type="text" value="{{$contact->twitter}}" name="twitter" class="form-control">
                </div>

                <div class="form-group">
                    <label>Our Gmail</label>
                    <input type="text" value="{{$contact->gmail}}" name="gmail" class="form-control">
                </div>


                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>

@endsection