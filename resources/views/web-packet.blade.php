@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blog_responsive.css')}}">
@endsection
@section('content')

    <!-- Home -->

    <div class="home">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_image"><img src="{{'images/blog.png'}}" alt=""></div>
                        <div class="home_title">Yazılımlar</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->

    <div class="blog">
        <div class="container">
            <div class="row blog_row">

                <!-- Blog Posts -->
                <div class="col-lg-8">
                    <div class="blog_posts">

                        <!-- Blog Post -->
                        <div class="blog_post">
                            <div class="blog_post_image"><img src="{{'images/blog_1.jpg'}}"
                                                              alt="https://unsplash.com/@sapegin"></div>
                            <div class="blog_post_content">
                                <div class="blog_post_title"><a href="#">Kurumsal Firma Scripti</a></div>
                                <div class="blog_post_text">
                                    <p>Creative Business Kurumsal Firma Scripti ile firma, kurum ya da kuruşunuzun
                                        etkileyici, ilgi çekici ve akılda kalıcı bir web sitesi olsun.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post -->
                        <div class="blog_post">
                            <div class="blog_post_image"><img src="{{'images/blog_2.jpg'}}"
                                                              alt="https://unsplash.com/@fancycrave"></div>
                            <div class="blog_post_content">
                                <div class="blog_post_title"><a href="#">Rent a Car Sripti</a></div>
                                <div class="blog_post_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#">July 12, 2018</a></li>
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="blog_post_text">
                                    <p>Profesyonel Rent a Car Sripti ile firma, kurum ya da kuruşunuzun etkileyici, ilgi
                                        çekici ve akılda kalıcı bir web sitesi olsun.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post -->
                        <div class="blog_post">
                            <div class="blog_post_image"><img src="{{'images/blog_3.jpg'}}"
                                                              alt="https://unsplash.com/@helloquence"></div>
                            <div class="blog_post_content">
                                <div class="blog_post_title"><a href="#">Restaurant - Cafe - Lokanta Scripti</a></div>
                                <div class="blog_post_info">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#">July 12, 2018</a></li>
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="blog_post_text">
                                    <p>Profesyonel Restaurant - Cafe - Lokanta Scripti ile firma, kurum ya da kuruşunuzun etkileyici, ilgi
                                        çekici ve akılda kalıcı bir web sitesi olsun.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page_nav">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">

                        <!-- Categories -->
                        <div class="categories mt-0">
                            <div class="sidebar_title">Web Paketlerimiz</div>
                            <div class="categories_list">
                                <ul>
                                    <li><a href="#">
                                            <div class="d-flex flex-row align-items-start justify-content-start">
                                                <div>Tüm paketler</div>
                                                <div class="ml-auto">(09)</div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="d-flex flex-row align-items-start justify-content-start">
                                                <div>Kurumsal Firma Scriptleri</div>
                                                <div class="ml-auto">(12)</div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="d-flex flex-row align-items-start justify-content-start">
                                                <div>Rent a Car Scrıptleri</div>
                                                <div class="ml-auto">(16)</div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="d-flex flex-row align-items-start justify-content-start">
                                                <div>Nakliyat Scriptleri</div>
                                                <div class="ml-auto">(19)</div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="d-flex flex-row align-items-start justify-content-start">
                                                <div>Restaurant - Cafe - Lokanta</div>
                                                <div class="ml-auto">(12)</div>
                                            </div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Popular Posts -->
                        <div class="popular">
                            <div class="sidebar_title">Popular Web Paketlerimiz</div>
                            <div class="popular_container">

                                <!-- Popular Post -->
                                <div class="popular_post d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="pop_image"><img src="{{'images/pop_1.jpg'}}"
                                                                    alt="https://unsplash.com/@andipalmer"></div>
                                    </div>
                                    <div class="pop_content">
                                        <div class="pop_date"><a href="#">July 12, 2018</a></div>
                                        <div class="pop_title"><a href="#">Nakliyat Scriptleri</a></div>
                                        <div class="pop_author"><a href="#">Maria Smith</a></div>
                                    </div>
                                </div>

                                <!-- Popular Post -->
                                <div class="popular_post d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="pop_image"><img src="{{'images/pop_2.jpg'}}"
                                                                    alt="https://unsplash.com/@cikstefan"></div>
                                    </div>
                                    <div class="pop_content">
                                        <div class="pop_date"><a href="#">July 12, 2018</a></div>
                                        <div class="pop_title"><a href="#">Rent a Car Scrıptleri</a></div>
                                        <div class="pop_author"><a href="#">Maria Smith</a></div>
                                    </div>
                                </div>

                                <!-- Popular Post -->
                                <div class="popular_post d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="pop_image"><img src="{{'images/pop_3.jpg'}}"
                                                                    alt="https://unsplash.com/@gbeaudry"></div>
                                    </div>
                                    <div class="pop_content">
                                        <div class="pop_date"><a href="#">July 12, 2018</a></div>
                                        <div class="pop_title"><a href="#">Kurumsal Firma Scriptleri</a></div>
                                        <div class="pop_author"><a href="#">Maria Smith</a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Extra (ad) -->
                        <div class="extra">
                            <div class="extra_content">
                                <div class="extra_image text-center"><img src="{{'images/extra.png'}}" alt=""></div>
                                <div class="extra_title">Para İade Garantisi</div>
                                <div class="extra_text">
                                    <p>Aliquam erat volutpat. Sed efficitur diam ut inte rdum ultricies. In a leo vel
                                        dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
                                </div>
                            </div>
                            <div class="button extra_button"><a href="#">daha fazla</a></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script src="{{asset('js/blog.js')}}"></script>
@endsection
