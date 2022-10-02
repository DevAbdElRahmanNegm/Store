@extends('back.layout.admin')
@section('content')

    <div class="row">

        <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active" style="text-align: center  ">
                    <h3 class="widget-user-username" style="font-size: 43px">Welcome To</h3>
                    <h5 class="widget-user-desc" style="font-size: 22px">  Affiliate Family Deshboard</h5>
                </div>

                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{\App\Models\User::count()}}</h5>
                                <span class="description-text">Users</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">{{\App\Models\Product::count()}}</h5>
                                <span class="description-text">Products</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">{{\App\Models\WithDraw::count()}}</h5>
                                <span class="description-text">With Draw</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">{{\App\Models\Process::count()}}</h5>
                                <span class="description-text">Process</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">{{\App\Models\Admin::count()}}</h5>
                                <span class="description-text">Admins</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">{{\App\Models\Message::count()}}</h5>
                                <span class="description-text">Messages</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
    </div>

    @endsection