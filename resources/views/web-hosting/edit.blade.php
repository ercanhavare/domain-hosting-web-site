@extends('layouts.app')

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
                                <li><a href="{{url('admin/web-hosting/')}}"><i class="fa fa-adjust"></i> Web Hosting</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form method="POST" action="{{route('web-hosting.update',$webHosting->id)}}" class="form-horizontal form-label-left">
                                @csrf @method('PUT')

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="host_os">Host OS <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="host_os" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('host_os') is-invalid @enderror"
                                               name="host_os" value="{{ $webHosting->host_os }}" required autocomplete="host_os"
                                               autofocus>

                                        @error('host_os')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Title <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="title" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('title') is-invalid @enderror"
                                               name="title" value="{{ $webHosting->title }}" required autocomplete="title"
                                               autofocus>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="web_space">Web Space <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="web_space" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('web_space') is-invalid @enderror"
                                               name="web_space" value="{{ $webHosting->web_space }}" required autocomplete="web_space"
                                               autofocus>

                                        @error('web_space')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Web Permission <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="web_permission" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('web_permission') is-invalid @enderror"
                                               name="web_permission" value="{{ $webHosting->web_permission }}" required autocomplete="web_permission"
                                               autofocus>

                                        @error('web_permission')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="traffic">Traffic <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="traffic" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('traffic') is-invalid @enderror"
                                               name="traffic" value="{{ $webHosting->traffic}}" required autocomplete="traffic"
                                               autofocus>

                                        @error('traffic')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="e_mail">E-mail <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="e_mail" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('e_mail') is-invalid @enderror"
                                               name="e_mail" value="{{ $webHosting->e_mail }}" required autocomplete="e_mail"
                                               autofocus>

                                        @error('e_mail')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sub_domain">Sub-domain <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="sub_domain" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('sub_domain') is-invalid @enderror"
                                               name="sub_domain" value="{{ $webHosting->sub_domain }}" required autocomplete="sub_domain"
                                               autofocus>

                                        @error('sub_domain')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Domain Redirect <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="domain_redirect" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('domain_redirect') is-invalid @enderror"
                                               name="domain_redirect" value="{{ $webHosting->domain_redirect }}" required autocomplete="domain_redirect"
                                               autofocus>

                                        @error('domain_redirect')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="database">Database <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="database" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('database') is-invalid @enderror"
                                               name="database" value="{{ $webHosting->database }}" required autocomplete="database"
                                               autofocus>

                                        @error('database')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="panel">Panel <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="panel" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('panel') is-invalid @enderror"
                                               name="panel" value="{{ $webHosting->panel }}" required autocomplete="panel"
                                               autofocus>

                                        @error('panel')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="support">Support <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="support" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('support') is-invalid @enderror"
                                               name="support" value="{{ $webHosting->support }}" required autocomplete="support"
                                               autofocus>

                                        @error('support')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ftp">Ftp <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="ftp" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('ftp') is-invalid @enderror"
                                               name="ftp" value="{{ $webHosting->ftp }}" required autocomplete="ftp"
                                               autofocus>

                                        @error('ftp')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="reseller">Reseller <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="reseller" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('reseller') is-invalid @enderror"
                                               name="reseller" value="{{ $webHosting->reseller }}" required autocomplete="reseller"
                                               autofocus>

                                        @error('reseller')
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
