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
                                <li><a href="{{url('admin/server-packet/')}}"><i class="fa fa-server"></i> Server Packet</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form method="POST" action="{{route('server-packet.update',$serverPacket->id)}}"
                                  class="form-horizontal form-label-left">
                                @csrf @method('PUT')

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('name') is-invalid @enderror"
                                               name="name" value="{{ $serverPacket->name }}" required autocomplete="name"
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
                                               name="price" value="{{ $serverPacket->price }}" required autocomplete="price"
                                               autofocus>

                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cpu">Cpu <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="cpu" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('cpu') is-invalid @enderror"
                                               name="cpu" value="{{ $serverPacket->cpu }}" required autocomplete="cpu"
                                               autofocus>

                                        @error('cpu')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ram">Ram <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="ram" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('ram') is-invalid @enderror"
                                               name="ram" value="{{ $serverPacket->ram }}" required autocomplete="ram"
                                               autofocus>

                                        @error('ram')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Hdd <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="hdd" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('hdd') is-invalid @enderror"
                                               name="hdd" value="{{ $serverPacket->hdd }}" required autocomplete="hdd"
                                               autofocus>

                                        @error('hdd')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="internet">Internet <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="internet" type="text"
                                               class="form-control col-md-7 col-xs-12 @error('internet') is-invalid @enderror"
                                               name="internet" value="{{ $serverPacket->internet }}" required autocomplete="internet"
                                               autofocus>

                                        @error('internet')
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
                                               name="traffic" value="{{ $serverPacket->traffic }}" required autocomplete="traffic"
                                               autofocus>

                                        @error('traffic')
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
