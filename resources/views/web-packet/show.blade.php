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
                            <h2>{{$webPacket->name}}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="{{url('admin/web-packet/')}}"><i class="fa fa-code"></i> Web Packet</a>
                                </li>
                                <li><a href="{{url('admin/web-packet/'.$webPacket->id.'/edit')}}"><i class="fa fa-edit"></i> Düzenle</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table id="datatable-responsive"
                                   class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                   width="100%">

                                <tr>
                                    <td>ID</td>
                                    <td><p>{{$webPacket->id}}</p></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><p>{{$webPacket->name}}</p></td>
                                </tr>
                                <tr>
                                    <td>Price ( TL )</td>
                                    <td><p>{{$webPacket->price}}</p></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><p>{{$webPacket->desc}}</p></td>
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
