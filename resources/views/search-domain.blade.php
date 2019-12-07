@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
@endsection

@section('home')
    @include('layouts.partials.home')
@endsection

@section('content')

    <!-- Why Choose Us -->

    <div class="why">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <div class="section_title"><h2>Alan Adı Sorgulama Sonucu</h2></div>
                        <div class="section_subtitle mt-5 mb-5">
                            @if($domain_name!="" && $result!="")
                                <div class="table-responsive p-5" style="margin-left: 15%">
                                    <table class="table table-responsive table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th style="width: 400px">Domain Adı</th>
                                            <th style="width: 400px">Durum</th>
                                        </tr>
                                        <tr>
                                            <td>{{$domain_name}}</td>
                                            <td>{{$result}}</td>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            @else
                                <p class="mt-5 mb-5">Sonuç bulunamadı.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/custom.js')}}"></script>
@endsection
