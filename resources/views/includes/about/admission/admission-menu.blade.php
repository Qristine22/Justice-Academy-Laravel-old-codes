<section class="section-text rector__bot">
    <div class="wrapper">
        <div class="rector__bot_cont">
            <a class="about__link text-18 @if (Request::is('about/admission/judges-candidates')) about__link-active @endif"
                href="{{ route('judgesCandidates') }}">
                @lang('about.admission.judges')
            </a>
            <a class="about__link text-18 @if (Request::is('about/admission/prosecutors-candidates')) about__link-active @endif"
                href="{{ route('prosecutorsCandidates') }}">
                @lang('about.admission.prosecutor')
            </a>
            <a class="about__link text-18 @if (Request::is('about/admission/investigators-candidates')) about__link-active @endif"
                href="{{ route('investigatorsCandidates') }}">
                @lang('about.admission.investigator')
            </a>
        </div>
    </div>
</section>
