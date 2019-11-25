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
                            <h2>Alan adı</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="{{url('admin/domain-name/')}}"><i class="fa fa-table"></i> Alan adi</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form method="POST" action="{{route('domain-name.store')}}"
                                  class="form-horizontal form-label-left">
                                @csrf

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="extension">Extension <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="extension" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('extension') is-invalid @enderror"
                                               name="extension" value="{{ old('extension') }}" required autocomplete="extension"
                                               autofocus>

                                        @error('extension')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="registration_fee">Registration Fee ( TL ) <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="registration_fee" type="number"
                                               class="form-control col-md-7 col-xs-12 @error('registration_fee') is-invalid @enderror"
                                               name="registration_fee" value="{{ old('registration_fee') }}" required autocomplete="price"
                                               autofocus>

                                        @error('registration_fee')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="renewal_fee">Renewal Fee ( TL ) <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="renewal_fee" type="number"
                                               class="form-control col-md-7 col-xs-12 @error('renewal_fee') is-invalid @enderror"
                                               name="renewal_fee" value="{{ old('renewal_fee') }}" required autocomplete="renewal_fee"
                                               autofocus>

                                        @error('renewal_fee')
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
