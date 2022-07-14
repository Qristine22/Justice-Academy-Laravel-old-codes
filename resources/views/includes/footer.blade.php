<footer class="footer">
    <div class="wrapper">
        <div class="footer__cont flex">
            <h3 class="footer__text">© @lang('home.footer-text')</h3>
            <div class="footer__sites">
                @foreach($sitesLinks as $sitesLink)
                    <a class="footer__link" href="{{ $sitesLink->link }}">
                        <img src="{{ Storage::url($sitesLink->icon) }}" alt="icon">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>