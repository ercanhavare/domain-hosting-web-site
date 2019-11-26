<footer class="footer">
    <div class="footer_phone d-flex flex-row align-items-center justify-content-sm-end justify-content-center">
        <div>Yardıma mı ihtiyacınız var? 24/7 Bizi Arayın</div>
        <div class="d-flex flex-row align-items-center justify-content-start">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <div style="font-size: 28px">@if(isset($contact->telephone)){{$contact->telephone}}@endif</div>
        </div>
    </div>
    <div class="footer_content">
        <div class="container">
            <div class="row footer_row">

                <!-- Footer Column -->
                <div class="col-xl-3 col-md-6">
                    <div class="footer_title">Hosting Paketleri</div>
                    <div class="footer_list">
                        <ul>
                            <li><a href="#">Cloud Hosting</a></li>
                            <li><a href="#">Web Hosting</a></li>
                            <li><a href="#">Reseller Hosting</a></li>
                            <li><a href="#">VPS Hosting</a></li>
                            <li><a href="#">Dedicated Sunucular</a></li>
                            <li><a href="#">Windows Hosting</a></li>
                            <li><a href="#">Linux Sunucular</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-xl-3 col-md-6">
                    <div class="footer_title">Hizmetlerimiz</div>
                    <div class="footer_list">
                        <ul>
                            <li><a href="#">Web Dizayn</a></li>
                            <li><a href="#">Logo Dizayn</a></li>
                            <li><a href="#">Alan Adı Kayıt</a></li>
                            <li><a href="#">Arama Reklamcılığı</a></li>
                            <li><a href="#">Eposta pazarlama</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-xl-3 col-md-6">
                    <div class="footer_title">Kullanışlı bağlantılar</div>
                    <div class="footer_list">
                        <ul>
                            <li><a href="#">Hakkımızda</a></li>
                            <li><a href="#">Görüşler</a></li>
                            <li><a href="#">Hizmetler</a></li>
                            <li><a href="#">Haberler</a></li>
                            <li><a href="#">İletişim</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-xl-3 col-md-6">
                    <div class="logo footer_logo"><a href="#"><span>Pasa</span>Net</a></div>
                    <div class="footer_info">
                        <ul class="pt-2">
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div><div>Adres: </div></div>
                                <div class="pl-2">@if(isset($contact->address)){{$contact->address}}@endif</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div><div>Telefon: </div></div>
                                <div class="pl-2">@if(isset($contact->telephone)){{$contact->telephone}}@endif</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div><div>E-mail: </div></div>
                                <div class="pl-2">@if(isset($contact->email)){{$contact->email}}@endif</div>
                            </li>
                        </ul>
                    </div>
                    <div class="cards">
                        <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <li><a href="#"><img src="{{asset('images/card_1.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('images/card_2.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('images/card_3.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('images/card_4.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('images/card_5.png')}}" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="social footer_social">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_bar text-center">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Her hakkı saklıdır
        </div>
</footer>
