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
                            <h2>Server Packet - {{$serverPacket->name}}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="{{url('admin/server-packet/')}}"><i class="fa fa-server"></i> Server Packet</a>
                                </li>
                                <li><a href="{{url('admin/server-packet/'.$serverPacket->id.'/edit')}}"><i class="fa fa-edit"></i> Düzenle</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content table-responsive">

                            <table class="table table-striped table-bordered dt-responsive nowrap show-table">

                            <tr>
                                    <td>ID</td>
                                    <td><p>{{$serverPacket->id}}</p></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><p>{{$serverPacket->name}}</p></td>
                                </tr>
                                <tr>
                                    <td>Price ( TL )</td>
                                    <td><p>{{$serverPacket->price}}</p></td>
                                </tr>
                                <tr>
                                    <td>Cpu</td>
                                    <td><p>{{$serverPacket->cpu}}</p></td>
                                </tr>
                                <tr>
                                    <td>Ram</td>
                                    <td><p>{{$serverPacket->ram}}</p></td>
                                </tr>
                                <tr>
                                    <td>Hdd</td>
                                    <td><p>{{$serverPacket->hdd}}</p></td>
                                </tr>
                                <tr>
                                    <td>Internet</td>
                                    <td><p>{{$serverPacket->internet}}</p></td>
                                </tr>
                                <tr>
                                    <td>Traffic</td>
                                    <td><p>{{$serverPacket->traffic}}</p></td>
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
