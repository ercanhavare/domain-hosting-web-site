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
                            <h2>.{{$domainName->extension}}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="{{url('admin/domain-name/')}}"><i class="fa fa-table"></i> Alan adi</a>
                                </li>
                                <li><a href="{{url('admin/domain-name/'.$domainName->id.'/edit')}}"><i class="fa fa-edit"></i> Düzenle</a>
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
                                    <td><p>{{$domainName->id}}</p></td>
                                </tr>
                                <tr>
                                    <td>Extension</td>
                                    <td><p>{{$domainName->extension}}</p></td>
                                </tr>
                                <tr>
                                    <td>Registration Fee ( TL )</td>
                                    <td><p>{{$domainName->registration_fee}}</p></td>
                                </tr>
                                <tr>
                                    <td>Renewal Fee ( TL )</td>
                                    <td><p>{{$domainName->renewal_fee}}</p></td>
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
