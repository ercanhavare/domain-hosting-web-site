@extends('layouts.admin.app')

@section('content')


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Hakkımızda - {{$about->title}}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="{{url('admin/about/')}}"><i class="fa fa-desktop"></i> Kurumsal</a>
                                </li>
                                <li><a href="{{url('admin/about/'.$about->id.'/edit')}}"><i class="fa fa-edit"></i>
                                        Düzenle</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content table-responsive">

                            <table class="table table-striped table-bordered dt-responsive nowrap show-table">

                                <tr>
                                    <td>ID</td>
                                    <td><p>{{$about->id}}</p></td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td><p>{{$about->title}}</p></td>
                                </tr>
                                <tr>
                                    <td>Desc</td>
                                    <td><p>{{$about->desc}}</p></td>
                                </tr>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection
