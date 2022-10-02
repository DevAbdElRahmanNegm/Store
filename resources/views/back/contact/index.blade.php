@extends('back.layout.admin')
@section('content')
    <div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Contact Us</h3>
            </div>
            @if($contact)



            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>Our Email</td>
                        <td>{{$contact->email}}</td>


                    </tr>


                    <tr>
                        <td>Our Number</td>
                        <td>{{$contact->number}}</td>


                    </tr>


                    <tr>
                        <td>Our Skype</td>
                        <td>{{$contact->skype}}</td>


                    </tr>
                    <tr>
                        <td>Our FaceBook</td>
                        <td>{{$contact->facebook}}</td>


                    </tr>




                    <tr>
                        <td>Our Twitter</td>
                        <td>{{$contact->twitter}}</td>

                    </tr>
                    <tr>
                        <td>Our Gmail</td>
                        <td>{{$contact->gmail}}</td>

                    </tr>



                    <tr>




                    </tbody>
                </table>
            </div>
            <div class="box-footer clearfix">
                <a href="{{route('contact.edit',$contact->id)}}" type="submit" class="btn btn-info pull-right">Edit</a>
            </div>
                @else
                <h1>No foud Data</h1>
            @endif
            <!-- /.box-body -->
        </div>
    </div>
    </div>
@endsection