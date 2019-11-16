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
                            <h2>{{$contact->id}}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="{{url('admin/contact/')}}"><i class="fa fa-bookmark"></i> Iletisim</a>
                                </li>
                                <li><a href="{{url('admin/contact/'.$contact->id.'/edit')}}"><i class="fa fa-edit"></i> Düzenle</a>
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
                                    <td><p>{{$contact->id}}</p></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><p>{{$contact->address}}</p></td>
                                </tr>
                                <tr>
                                    <td>Telefon</td>
                                    <td><p>{{$contact->telephone}}</p></td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td><p>{{$contact->email}}</p></td>
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
