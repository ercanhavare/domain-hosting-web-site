<div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll"
         data-image-src="{{asset('images/index.jpg')}}" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div
                            class="home_icon ml-auto mr-auto d-flex flex-column align-items-center justify-content-center">
                            <div><img src="{{asset('images/icon_1.svg')}}" alt="https://www.flaticon.com/authors/srip">
                            </div>
                        </div>
                        <div class="home_title">Mükemmel hostingi seçin</div>
                        <div class="domain_search">
                            <div class="domain_search_background"></div>

                            <form action="{{route('searchDomain')}}" class="domain_search_form" id="domain_search_form"
                                  method="post">
                                @csrf
                                <input type="text" class="domain_search_input" id="enter_domain_name" name="domain_name"
                                       placeholder="pasanetwork.com" required="required">
                                <button type="submit" class="domain_search_button">Alan Adı Sorgula</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
