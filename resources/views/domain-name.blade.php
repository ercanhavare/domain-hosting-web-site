@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/about.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/about_responsive.css')}}">
@endsection

@section('content')
    <!-- Home -->

    <div class="home">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_image"><img src="images/about_page.png" alt=""></div>
                        <div class="home_title">Alan Adı</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="domain_search_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                       @include('domain-search')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Domain Pricing -->

    <div class="domain_pricing">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="domain_pricing_content">
                        <ul class="d-flex flex-md-row flex-column align-items-center justify-content-md-between justify-content-center">
                            <li><a href="#"><span>.</span>com<span>$3.99</span></a></li>
                            <li><a href="#"><span>.</span>net<span>$1.99</span></a></li>
                            <li><a href="#"><span>.</span>org<span>$2.99</span></a></li>
                            <li><a href="#"><span>.</span>io<span>$3.99</span></a></li>
                            <li><a href="#"><span>.</span>info<span>$13.99</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about mt-5">
        <div class="container">
            <div class="row row-lg-eq-height mb-5">

                <!-- About Image -->
                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="about_image d-flex flex-column align-items-center justify-content-center">
                        <img src="{{asset('images/servers.png')}}" alt="">
                    </div>
                </div>

                <!-- About Content -->
                <div class="col-lg-8 order-lg-2 order-1">
                    <div class="about_content">
                        <div class="section_title"><h2>Alan Adı Tescil ve Yenileme Ücretleri</h2></div>
                        <div class="about_text">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Uzantı</th>
                                    <th>Kayıt ( TL )</th>
                                    <th>Yenileme ( TL )</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($domain_names as $domain_name)
                                    <tr>
                                        <td>{{$domain_name->extension}}</td>
                                        <td>{{$domain_name->registration_fee}}</td>
                                        <td>{{$domain_name->renewal_fee}}</td>
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


@endsection

@section('js')

    <script src="{{asset('js/about.js')}}"></script>
@endsection
