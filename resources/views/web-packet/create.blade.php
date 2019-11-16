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
                            <h2>Responsive example<small>Users</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="{{url('admin/web-packet/')}}"><i class="fa fa-code"></i> Web Packet</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form method="POST" action="{{route('web-packet.store')}}"
                                  class="form-horizontal form-label-left">
                                @csrf

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('name') is-invalid @enderror"
                                               name="name" value="{{ old('name') }}" required autocomplete="name"
                                               autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price ( TL ) <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="price" type="number"
                                               class="form-control col-md-7 col-xs-12 @error('price') is-invalid @enderror"
                                               name="price" value="{{ old('price') }}" required autocomplete="price"
                                               autofocus>

                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <textarea id="desc" required="required"  class="form-control @error('desc') is-invalid @enderror"
                                                  autofocus
                                                  name="desc"
                                                  data-parsley-trigger="keyup" data-parsley-minlength="20"
                                                  data-parsley-maxlength="100"
                                                  data-parsley-minlength-message="Come on! You need to enter at least a 20 characters long comment.."
                                                  data-parsley-validation-threshold="10">{{ old('desc') }}</textarea>

                                        @error('desc')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>

                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
