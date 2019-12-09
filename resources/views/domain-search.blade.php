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
