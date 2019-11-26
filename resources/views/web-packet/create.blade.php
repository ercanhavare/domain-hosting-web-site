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
                            <h2>Web Packet ( Yazılımlar )</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a href="{{url('admin/web-packet/')}}"><i class="fa fa-code"></i> Web Packet</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form method="POST" action="{{route('web-packet.store')}}" enctype="multipart/form-data"
                                  class="form-horizontal form-label-left">
                                @csrf

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Paket Adı <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="name" class="form-control col-md-7 col-xs-12" required>
                                            @foreach($packet_names as $packet_name)
                                                <option value="{{$packet_name->id}}">{{$packet_name->packet_name}}</option>
                                                @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Fiyat ( TL )
                                        <span
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
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="file_image">Resim (
                                        756 x 322 ) <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="file_image" type="file"
                                               class="form-control col-md-7 col-xs-12 @error('file_image') is-invalid @enderror"
                                               name="file_image" value="{{ old('file_image') }}" required
                                               autocomplete="file_image"
                                               autofocus style="padding: 10px 10px 40px;">

                                        @error('file-image')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Açıklama
                                        *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <textarea id="desc" required="required"
                                                  class="form-control @error('desc') is-invalid @enderror"
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
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" style="float: right">
                                        <button class="btn btn-primary" type="button">İptal</button>
                                        <button class="btn btn-primary" type="reset">Temizle</button>
                                        <button type="submit" class="btn btn-success">Kaydet</button>
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
