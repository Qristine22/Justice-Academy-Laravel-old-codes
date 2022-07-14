<div class="header__bot">
    <div class="wrapper">
        <nav class="header__bot_nav">
            <ul class="header__bot_list">
                @foreach ($headersBot as $headerBot)
                    <li class="header__bot_item">
                        <a class="header__bot_link @if (Request::is($headerBot->link, $headerBot->link.'/*'))header__bot_link-active @endif"
                            href="{{ env('APP_URL').$headerBot->link }}">
                            {{ $headerBot->{'name_'.app()->getLocale()} }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
