@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact_responsive.css')}}">
@endsection

@section('content')
    <!-- Home -->

    <div class="home">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_image"><img src="images/contact.png" alt=""></div>
                        <div class="home_title">İletişim</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact -->



    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Contact Info -->
                <div class="col-lg-4">
                    <div class="contact_info_container">
                        <div class="contact_title">İletişim bilgileri</div>
                        <div class="contact_text">
                            <p>Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere
                                bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte
                                metinler</p>
                        </div>
                        <div class="logo contact_logo"><a href="#"><span>Paşa </span>Network</a></div>
                        <div class="contact_info">
                            <ul>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>Adres</div>
                                    </div>
                                    <div>{{$contact->address}}</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>Telefon</div>
                                    </div>
                                    <div>{{$contact->telephone}}</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>E-mail</div>
                                    </div>
                                    <div>{{$contact->email}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8 contact_form_col">
                    <div class="contact_form_container">
                        <div class="contact_title">iletişim kurun</div>
                        <form action="#" class="contact_form" id="contact_form">
                            <div class="row contact_row">
                                <div class="col-lg-6"><input type="text" class="contact_input" placeholder="isim"
                                                             required="required"></div>
                                <div class="col-lg-6"><input type="email" class="contact_input" placeholder="E-mail"
                                                             required="required"></div>
                                <div class="col-12"><input type="text" class="contact_input" placeholder="Konu"
                                                           required="required"></div>
                                <div class="col-12"><textarea class="contact_input contact_textarea"
                                                              placeholder="İleti" required="required"></textarea>
                                </div>
                            </div>
                            <button class="contact_button trans_200">Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row google_map_row">
                <div class="col">

                    <!-- Contact Map -->

                    <div class="contact_map">

                        <!-- Google Map -->

                        <div class="map">
                            <div id="google_map" class="google_map">
                                <div class="map_container">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13036.744721563233!2d33.3263852!3d35.2267351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb704548b1127a239!2zWWFrxLFuIERvxJ91IMOcbml2ZXJzaXRlc2k!5e0!3m2!1str!2s!4v1573212143384!5m2!1str!2s"
                                        width="1200" height="600" frameborder="0" style="border:0;"
                                        allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script> -->
    <script src="{{asset('js/contact.js')}}"></script>
@endsection
