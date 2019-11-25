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
                            <h2>Web Hosting</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="{{url('admin/web-hosting/')}}"><i class="fa fa-adjust"></i> Web Hosting</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form method="POST" action="{{route('web-hosting.store')}}"
                                  class="form-horizontal form-label-left">
                                @csrf

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Başlık<span
                                            class="required"> *</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="title" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('title') is-invalid @enderror"
                                               name="title" value="{{ old('title') }}" required autocomplete="title"
                                               autofocus>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Fiyat<span
                                            class="required"> * ( TL )</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="price" type="text"
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
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="host">Host<span
                                            class="required"> *</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="host" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('host') is-invalid @enderror"
                                               name="host" value="{{ old('host') }}" required autocomplete="host"
                                               autofocus>

                                        @error('host')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-mail<span
                                            class="required"> *</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="email" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required autocomplete="email"
                                               autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="web_space">Web Alanı<span
                                            class="required"> *</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="web_space" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('web_space') is-invalid @enderror"
                                               name="web_space" value="{{ old('web_space') }}" required autocomplete="web_space"
                                               autofocus>

                                        @error('web_space')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="support">Destek<span
                                            class="required"> *</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="support" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('support') is-invalid @enderror"
                                               name="support" value="{{ old('support') }}" required autocomplete="support"
                                               autofocus>

                                        @error('support')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="database">Database<span
                                            class="required"> *</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="database" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('database') is-invalid @enderror"
                                               name="database" value="{{ old('database') }}" required autocomplete="database"
                                               autofocus>

                                        @error('database')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="reseller">Reseller
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="reseller" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('reseller') is-invalid @enderror"
                                               name="reseller" value="{{ old('reseller') }}"  autocomplete="reseller"
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
