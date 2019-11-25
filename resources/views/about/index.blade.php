@extends('layouts.admin.app')

@section('content')

    <!-- Datatables -->
    <link href="{{asset('/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Hakkımızda</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="{{url('admin/about/create')}}"><i class="fa fa-plus"></i> Yeni Oluştur</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table id="datatable-responsive"
                                   class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($abouts as $about)
                                    <tr>
                                        <td>{{$about->id}}</td>
                                        <td>{{$about->title}}</td>
                                        <td>
                                            <a href="{{url('/admin/about/'.$about->id)}}">
                                                <i class="fa fa-info"></i> Show</a> |
                                            <a href="{{url('/admin/about/'.$about->id.'/edit')}}">
                                                <i class="fa fa-edit"></i> Edit</a> |
                                            <a href="#" onclick="deleteItem({{$about->id}})"><i
                                                    class="fa fa-trash"></i> Delete</a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    <!-- Datatables -->
    <script src="{{asset('/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('/vendors/pdfmake/build/vfs_fonts.js')}}"></script>


    <script type="text/javascript">
        function deleteItem(id) {


            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "/admin/about/" + id,
                        type: "POST",
                        data: {_method: 'delete'},
                        success: function (result) {
                            Swal.fire({
                                text: "Deleted",
                                type: 'success',
                                showConfirmButton: false,
                                timer: 1000,
                            });
                            setTimeout(function () {
                                window.location.href = '/admin/about'
                            }, 1000);
                        },
                        error: function (result) {
                            Swal.fire({
                                text: "Not Deleted",
                                type: 'error',
                                showConfirmButton: false,
                                timer: 1000,

                            });
                        }
                    });


                } else {
                    Swal.fire({
                        text: "Not Deleted",
                        type: 'warning',
                        showConfirmButton: false,
                        timer: 1000,

                    });
                }
            })

        }
    </script>

@endsection
