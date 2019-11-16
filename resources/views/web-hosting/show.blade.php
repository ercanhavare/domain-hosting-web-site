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
                            <h2>{{$webHosting->host_os}}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="{{url('admin/web-hosting/')}}"><i class="fa fa-adjust"></i> Web Hosting</a>
                                </li>
                                <li><a href="{{url('admin/web-hosting/'.$webHosting->id.'/edit')}}"><i class="fa fa-edit"></i> Düzenle</a>
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
                                    <td><p>{{$webHosting->id}}</p></td>
                                </tr>
                                <tr>
                                    <td>Host OS</td>
                                    <td><p>{{$webHosting->host_os}}</p></td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td><p>{{$webHosting->title}}</p></td>
                                </tr>
                                <tr>
                                    <td>Web Space</td>
                                    <td><p>{{$webHosting->web_space}}</p></td>
                                </tr>
                                <tr>
                                    <td>Web Permission</td>
                                    <td><p>{{$webHosting->web_permission}}</p></td>
                                </tr>
                                <tr>
                                    <td>Traffic</td>
                                    <td><p>{{$webHosting->traffic}}</p></td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td><p>{{$webHosting->e_mail}}</p></td>
                                </tr>
                                <tr>
                                    <td>Sub-domain</td>
                                    <td><p>{{$webHosting->sub_domain}}</p></td>
                                </tr>
                                <tr>
                                    <td>Domain Redirect</td>
                                    <td><p>{{$webHosting->domain_redirect}}</p></td>
                                </tr>
                                <tr>
                                    <td>Database</td>
                                    <td><p>{{$webHosting->database}}</p></td>
                                </tr>
                                <tr>
                                    <td>Panel</td>
                                    <td><p>{{$webHosting->panel}}</p></td>
                                </tr>
                                <tr>
                                    <td>Support</td>
                                    <td><p>{{$webHosting->support}}</p></td>
                                </tr>
                                <tr>
                                    <td>Ftp</td>
                                    <td><p>{{$webHosting->ftp}}</p></td>
                                </tr>
                                <tr>
                                    <td>Reseller</td>
                                    <td><p>{{$webHosting->reseller}}</p></td>
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
