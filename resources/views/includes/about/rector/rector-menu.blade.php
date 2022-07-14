<section class="section-text rector__bot">
    <div class="wrapper">
        <div class="rector__bot_cont">
            <a class="about__link text-18 @if (Request::is('about/rector/decrees')) about__link-active @endif"
            href="{{ route('rectorsDecrees') }}">
                @lang('about.rector.decrees')
            </a>
            <a class="about__link text-18 @if (Request::is('about/rector/rectors-biography')) about__link-active @endif"
            href="{{ route('rectorsBiography') }}">
                @lang('about.rector.biography')
            </a>
            <a class="about__link text-18 @if (Request::is('about/rector/former-rectors-biography')) about__link-active @endif"
            href="{{ route('formerRectorsBiography') }}">
                @lang('about.rector.former-rector')    
            </a>
        </div>
    </div>
</section>