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
                        <div class="home_title">Hakkımızda</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Milestones -->

    <div class="milestones">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div
                        class="milestones_container d-flex flex-lg-row flex-column align-items-center justify-content-lg-between justify-content-start">

                        <!-- Milestone Item -->
                        <div class="milestone d-flex flex-row align-items-center justify-content-start">
                            <div class="milestone_icon"><img src="{{asset('/images/icon_5.svg')}}"
                                                             alt="https://www.flaticon.com/authors/srip"></div>
                            <div class="milestone_content">
                                <div class="milestone_counter" data-end-value="12557">0</div>
                                <div class="milestone_text">Web siteleri</div>
                            </div>
                        </div>

                        <!-- Milestone Item -->
                        <div class="milestone d-flex flex-row align-items-center justify-content-start">
                            <div class="milestone_icon"><img src="{{asset('/images/icon_6.svg')}}"
                                                             alt="https://www.flaticon.com/authors/srip"></div>
                            <div class="milestone_content">
                                <div class="milestone_counter" data-end-value="100000" data-sign-before="+">0</div>
                                <div class="milestone_text">Web siteleri</div>
                            </div>
                        </div>

                        <!-- Milestone Item -->
                        <div class="milestone d-flex flex-row align-items-center justify-content-start">
                            <div class="milestone_icon"><img src="{{asset('/images/icon_7.svg')}}"
                                                             alt="https://www.flaticon.com/authors/srip"></div>
                            <div class="milestone_content">
                                <div class="milestone_counter" data-end-value="14610">0</div>
                                <div class="milestone_text">Web siteleri</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- About Image -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="about_image d-flex flex-column align-items-center justify-content-center">
                        <img src="{{asset('/images/servers.png')}}" alt="">
                    </div>
                </div>

                <!-- About Content -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="about_content">
                        <div class="section_title"><h2>{{$about->title}}</h2></div>
                        <div class="about_text">
                            <p>{{$about->desc}}</p>
                        </div>
{{--                        <div class="button about_button"><a href="#">daha fazla oku</a></div>--}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Video -->

    <!-- Team -->

    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <div class="section_title"><h2>Takım</h2></div>
                        <div class="team_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque
                                dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam
                                ut interdum ultricies.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row team_row">

                <!-- Team Item -->
                <div class="col-xl-3 col-md-6">
                    <div class="team_item">
                        <div class="team_image">
                            <img src="{{asset('images/team_1.jpg')}}" alt="https://unsplash.com/@michaeldam">
                            <div class="team_overlay trans_400"></div>
                            <div class="team_social">
                                <ul class="d-flex flex-row align-items-center justify-content-between">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_content text-center">
                            <div class="team_name">Julia Williams</div>
                            <div class="team_title">Takım menajeri</div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-xl-3 col-md-6">
                    <div class="team_item">
                        <div class="team_image">
                            <img src="{{asset('images/team_2.jpg')}}" alt="https://unsplash.com/@stairhopper">
                            <div class="team_overlay trans_400"></div>
                            <div class="team_social">
                                <ul class="d-flex flex-row align-items-center justify-content-between">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_content text-center">
                            <div class="team_name">Michael Smith</div>
                            <div class="team_title">Yönetici</div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-xl-3 col-md-6">
                    <div class="team_item">
                        <div class="team_image">
                            <img src="{{asset('images/team_3.jpg')}}" alt="https://unsplash.com/@chrisjoelcampbell">
                            <div class="team_overlay trans_400"></div>
                            <div class="team_social">
                                <ul class="d-flex flex-row align-items-center justify-content-between">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_content text-center">
                            <div class="team_name">Jessica Brown</div>
                            <div class="team_title">Proje Müdürü</div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-xl-3 col-md-6">
                    <div class="team_item">
                        <div class="team_image">
                            <img src="{{asset('images/team_4.jpg')}}" alt="https://unsplash.com/@brookecagle">
                            <div class="team_overlay trans_400"></div>
                            <div class="team_social">
                                <ul class="d-flex flex-row align-items-center justify-content-between">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_content text-center">
                            <div class="team_name">Jack Parker</div>
                            <div class="team_title">Geliştirici</div>
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
