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
                                <li><a href="{{url('admin/contact/')}}"><i class="fa fa-bookmark"></i> Iletisim</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form method="POST" action="{{route('contact.store')}}"
                                  class="form-horizontal form-label-left">
                                @csrf

                                <div class="form-group">
                                    <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <textarea id="address" required="required"  class="form-control @error('address') is-invalid @enderror"
                                                  autofocus
                                                  name="address"
                                                  data-parsley-trigger="keyup" data-parsley-minlength="20"
                                                  data-parsley-maxlength="100"
                                                  data-parsley-minlength-message="Come on! You need to enter at least a 20 characters long comment.."
                                                  data-parsley-validation-threshold="10">{{ old('address') }}</textarea>

                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="telephone" class="control-label col-md-3 col-sm-3 col-xs-12">Telephone</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <textarea id="telephone" required="required"  class="form-control @error('telephone') is-invalid @enderror"
                                                  autofocus
                                                  name="telephone"
                                                  data-parsley-trigger="keyup" data-parsley-minlength="20"
                                                  data-parsley-maxlength="100"
                                                  data-parsley-minlength-message="Come on! You need to enter at least a 20 characters long comment.."
                                                  data-parsley-validation-threshold="10">{{ old('telephone') }}</textarea>

                                        @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <textarea id="email" required="required"  class="form-control @error('email') is-invalid @enderror"
                                                  autofocus
                                                  name="email"
                                                  data-parsley-trigger="keyup" data-parsley-minlength="20"
                                                  data-parsley-maxlength="100"
                                                  data-parsley-minlength-message="Come on! You need to enter at least a 20 characters long comment.."
                                                  data-parsley-validation-threshold="10">{{ old('email') }}</textarea>

                                        @error('email')
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
