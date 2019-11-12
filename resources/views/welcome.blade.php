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
                        <div class="section_title"><h2>Neden bizi seçmelisiniz?</h2></div>
                        <div class="section_subtitle">
                            Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row why_row">

                <!-- Why Item -->
                <div class="col-lg-4">
                    <div class="icon_box_1 text-center">
                        <div class="icon_box_1_image ml-auto mr-auto"><img src="{{asset('images/icon_2.svg')}}"
                                                                           alt="https://www.flaticon.com/authors/srip">
                        </div>
                        <div class="icon_box_1_title">
                            Sunucu Koruması
                        </div>
                        <div class="icon_box_1_text">
                            <p>Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere
                                bir yazı galerisini alarak karıştırdığı ...</p>
                        </div>
                    </div>
                </div>

                <!-- Why Item -->
                <div class="col-lg-4">
                    <div class="icon_box_1 text-center">
                        <div class="icon_box_1_image ml-auto mr-auto"><img src="{{asset('images/icon_3.svg')}}"
                                                                           alt="https://www.flaticon.com/authors/srip">
                        </div>
                        <div class="icon_box_1_title">
                            CloudFlare Entegrasyonu
                        </div>
                        <div class="icon_box_1_text">
                            <p>Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere
                                bir yazı galerisini alarak karıştırdığı ...</p>
                        </div>
                    </div>
                </div>

                <!-- Why Item -->
                <div class="col-lg-4">
                    <div class="icon_box_1 text-center">
                        <div class="icon_box_1_image ml-auto mr-auto"><img src="images/icon_4.svg"
                                                                           alt="https://www.flaticon.com/authors/srip">
                        </div>
                        <div class="icon_box_1_title">30 Gün Para İadesi</div>
                        <div class="icon_box_1_text">
                            <p>Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere
                                bir yazı galerisini alarak karıştırdığı ...</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Content Right -->

    <div class="c_right">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Content Right Image -->
                <div class="col-lg-6 c_right_col order-lg-1 order-2">
                    <div class="c_right_image d-flex flex-column align-items-center justify-content-center">
                        <img src="{{asset('images/pic_1.png')}}" alt="">
                    </div>
                </div>

                <!-- Content Right Content -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="c_right_content">
                        <div class="section_title_container">
                            <div class="section_title"><h2>En iyi hizmeti seç</h2></div>
                        </div>
                        <div class="c_right_text">
                            <p>Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere
                                bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte
                                metinler olarak kullanılmıştır.</p>
                        </div>
                        <div class="content_list_1 c_right_list">
                            <ul>
                                <li>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</li>
                                <li>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</li>
                                <li>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</li>
                            </ul>
                        </div>
                        <div class="button c_right_button"><a href="#">sipariş planı</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Left -->

    <div class="c_left">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Content Left Content -->
                <div class="col-lg-6">
                    <div class="c_left_content">
                        <div class="section_title_container">
                            <div class="section_title"><h2>En iyi sunucular</h2></div>
                        </div>
                        <div class="content_list_2 c_left_list">
                            <ul>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>01.</div>
                                    </div>
                                    <p>Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak
                                        üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri
                                        standardı sahte metinler olarak kullanılmıştır. </p>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>02.</div>
                                    </div>
                                    <p>Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak
                                        üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri
                                        standardı sahte metinler olarak kullanılmıştır. </p>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>03.</div>
                                    </div>
                                    <p>Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak
                                        üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri
                                        standardı sahte metinler olarak kullanılmıştır. </p>
                                </li>
                            </ul>
                        </div>
                        <div class="button c_left_button"><a href="#">sipariş planı</a></div>
                    </div>
                </div>

                <!-- Content Left Image -->
                <div class="col-lg-6 c_left_col">
                    <div class="c_left_image d-flex flex-column align-items-center justify-content-center">
                        <img src="{{asset('images/pic_2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/custom.js')}}"></script>
@endsection
