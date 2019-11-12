@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blog_responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
@endsection

@section('content')
    <!-- Home -->
    <div class="home" style="height: 430px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_image"><img src="{{'images/blog.png'}}" alt=""></div>
                        <div class="home_title">Web Hosting</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Pricing -->

    <div class="pricing">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <div class="section_title"><h2>Paket 4 size</h2></div>
                        <div class="section_subtitle">Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune
                            kitabı oluşturmak üzere
                            bir yazı ...
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pricing_row">

                <!-- beginner - recommended - professional -->

            @foreach($server_packets as $server_packet)
                <!-- Pricing Item -->
                    <div class="col-lg-4">
                        <div class="pricing_item trans_200">
                            <div class="pricing_item_background trans_200"></div>
                            <div
                                class="pricing_title_container d-flex flex-column align-items-center justify-content-start">
                                <div class="pricing_title_background trans_200">
                                    <svg class="waves" width="100%" height="100%" viewBox="0 0 1920 218"
                                         preserveAspectRatio="none">
                                        <path class="wave_path trans_200" fill="url(#grad_1)"
                                              d="M0,0 V210 S500,218 860,193  S1400,125 1920,155 V0 H0"></path>
                                        <defs>
                                            <linearGradient id="grad_1">
                                                <stop offset="0%" stop-color="#487fee"></stop>
                                                <stop offset="100%" stop-color="#b632fa"></stop>
                                            </linearGradient>
                                            <linearGradient id="grad_2">
                                                <stop offset="0%" stop-color="#9cb9f6"></stop>
                                                <stop offset="100%" stop-color="#d691fc"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="pricing_title">beginner</div>
                                <div class="pricing_price">Free
                                    <div>Always</div>
                                </div>
                            </div>
                            <div class="pricing_content d-flex flex-column align-items-center justify-content-start">
                                <div class="pricing_list">
                                    <ul class="d-flex flex-column align-items-center justify-content-start">
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div
                                                class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                     viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px"
                                                     height="26px">
                                                    <path class="check_svg trans_200"
                                                          d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                                                          fill="#606ef1"></path>
                                                </svg>
                                            </div>
                                            <div>2 E-mail Addresess</div>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div
                                                class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                     viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px"
                                                     height="26px">
                                                    <path class="check_svg trans_200"
                                                          d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                                                          fill="#606ef1"></path>
                                                </svg>
                                            </div>
                                            <div>25 GB Space</div>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div
                                                class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                     viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px"
                                                     height="26px">
                                                    <path class="check_svg trans_200"
                                                          d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                                                          fill="#606ef1"></path>
                                                </svg>
                                            </div>
                                            <div>24h Live Support</div>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div
                                                class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                     viewBox="0 0 26 26"
                                                     enable-background="new 0 0 26 26" width="26px" height="26px">
                                                    <path class="check_svg trans_200"
                                                          d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                                                          fill="#606ef1"></path>
                                                </svg>
                                            </div>
                                            <div>Documetation inside</div>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div>X</div>
                                            <div>SEO Plan</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing_info"><a href="#">
                                        <div>i</div>
                                    </a></div>
                                <div class="button pricing_button trans_200"><a href="#">order plan</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="pricing_text text-center">
                        <p>Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir
                            yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{asset('js/custom.js')}}"></script>
@endsection
