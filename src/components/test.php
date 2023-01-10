// Casino Ads EN
add_shortcode('casino-cta-EN', 'casinoctaEN');

function casinoctaEN(){
global $post;
$data = "<style scoped>
    .container {
        background: white;
    }

    .comparo-table *,
    .clovr-cta * {
        font-family: Montserrat, Sans-serif;
    }

    .comparo-table p {
        margin-bottom: 0;
    }

    .bg-gold {
        background: #ffc20c;
        background: -moz-linear-gradient(left, #ffc20c 1%, #ffdd15 100%);
        background: -webkit-linear-gradient(left, #ffc20c 1%, #ffdd15 100%);
        background: linear-gradient(to right, #ffc20c 1%, #ffdd15 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc20c', endColorstr='#ffdd15', GradientType=1);

    }

    .featured-review {
        z-index: 1;
        transform: scaleY(1.1) scaleX(1.04);
    }

    @media only screen and (max-width: 48em) {

        .featured-review {
            transform: scale(1);
        }

        h6#fancy-title-3 {
            padding-bottom: 40px;
        }

    }

    .logo-section img {
        max-width: 180px !important;
        max-height: 16em;
    }

    #fancy-title-2 h1 {
        font-size: 1.5rem;
    }

    .text-xs {
        font-size: 0.65rem !important;
    }

    .text-xs-xs {
        font-size: 0.55rem;
    }

    .games-section img {
        max-width: 45px;
    }

    .mt-1\/2 {
        margin-top: .1rem;
    }

    .games-section p {
        margin-bottom: 0 !important;
    }

    @media screen and (max-width: 800px) {
        .container {
            width: 375px;
        }

        .claim-bonus-img {
            width: 390px !important;
        }
    }

    p.text-center.text-3xl.font-light.text-green-600.leading-none.px-0.pt-1 {
        margin-bottom: 0 !important;
    }

    .wpb_single_image.wpb_content_element.vc_align_center.top-image {
        margin-bottom: 0;
    }

    .p-0 {
        padding: 0 !important;
    }
</style>";

$data .= '<div class="clovr-cta cta-1 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">

        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6 ">
                <img class="aligncenter size-full wp-image-49776"
                    src="https://www.clovr.com/wp-content/uploads/2022/10/metaspins.png" alt="" width="192"
                    height="66" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript>
            </div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">UP TO 57%
                            RAKEBACK</span></div>
                    <div class="col-xs-12">
                        <p class="text-center text-3xl font-light text-green-600 leading-none px-0 pt-1">FREE</p>

                        <div class="text-center text-sm text-green-600">WAGER</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Slots</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://track.bankrolls.com/trk.php?t=2956&amp;c=6536"
                            data-event="“home”" data-event-label="“betchain”"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded">CLAIM BONUS</button></a>
                    </div>
                    <div class="col-xs-12 mb-4">Read Review</div>
                </div>
            </div>
        </div>

        <div class="cta-item row middle-xs center-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6"><img class="wp-image-52702 aligncenter"
                    src="https://www.clovr.com/wp-content/uploads/2022/12/Stake_logo.svg-300x149.png" alt="" width="131"
                    height="65" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">Up to 10,000</div>
                    <div class="col-xs-12">
                        <p class="text-center text-3xl font-light text-green-600 leading-none px-0 pt-1">Weekly</p>
                        <p class="text-center text-sm text-green-600">Giveaways</p>
                        <p class="text-center text-sm text-green-600">Win Rate: 90%</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="size-full wp-image-49779 aligncenter"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Slots</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://gtly.to/QP6ZcNyC5" data-event="“home”"
                            data-event-label="“mbit”"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded">CLAIM BONUS</button></a>
                    </div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="https://www.clovr.com/reviews/stake-com/">Read Review</a></div>
                </div>
            </div>
        </div>


        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49532"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/resized-1.png" alt="" width="192"
                    height="65" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">FIRST DEPOSIT BONUS</div>
                    <div class="col-xs-12">
                        <p class="text-center text-3xl font-light text-green-600 leading-none px-0 pt-1">0.2 BTC</p>
                        <p class="text-center text-sm text-green-600">+ 40 spins</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><span data-mce-type="bookmark"
                                    style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"
                                    class="mce_SELRES_start"></span><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /><span data-mce-type="bookmark"
                                    style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"
                                    class="mce_SELRES_end"></span></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Slots</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/BitcoinPenguin-usa" data-event="“home”"
                            data-event-label="“bitcoinpenguin”"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded">CLAIM BONUS</button></a>
                    </div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="https://www.clovr.com/reviews/bitcoinpenguin-casino/" data-event="“home”"
                            data-event-label="“bitcoinpenguin”">Read Review</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clovr-cta cta-2 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row center-xs middle-xs bg-blue-600">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0"><img class="inline w-4 mr-1"
                    src="http://www.clovr.com/wp-content/uploads/2019/11/ethereum-mini.png" /> Our Top Rated Ethereum
                Casinos</h2>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-10 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49534"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitstarz-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONUS</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">20 ETH</div>
                    <div class="text-center text-sm text-green-600">+ 180 spins</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Slots</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/Bitstarz-usa" data-event="“home”"
                            data-event-label="“bitstarz”"><button
                                class="bg-blue-600 text-white font-bold mt-1 py-2 px-4 rounded">CLAIM BONUS</button></a>
                    </div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitstarz-casino/" data-event="“home”"
                            data-event-label="“bitstarz”">Read Review</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-10 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49535"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/fortune-dark-min.png" alt="" width="192"
                    height="65" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONUS</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">33 ETH</div>
                    <div class="text-center text-sm text-green-600">+ 250 spins</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Slots</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/FortuneJack-usa"><button
                                class="bg-blue-600 text-white font-bold mt-1 py-2 px-4 rounded">CLAIM BONUS</button></a>
                    </div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/fortunejack-casino/">Read Review</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clovr-cta cta-3 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row middle-xs bg-red-600">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0"><img class="inline w-4 mr-1"
                    src="http://www.clovr.com/wp-content/uploads/2019/11/tron-min-logo.png" /> Our Top Rated Tron
                Casinos</h2>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49536"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitcasino-min.png" alt="" width="192"
                    height="77" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONUS</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">50 TRX</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Slots</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="http://www.clovr.com/Bitcasinoio-usa" data-event="“home”"
                            data-event-label="“bitcasinoio”"><button
                                class="bg-red-600 text-white font-bold mt-1 py-2 px-4 rounded">CLAIM BONUS</button></a>
                    </div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitcasino-io/" data-event="“home”"
                            data-event-label="“bitcasinoio”">Read Review</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49777"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/1xbit-min_new.png" alt="" width="192"
                    height="99" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONUS</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">20 TRX</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Slots</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/1xBit-usa" data-event="“home”"
                            data-event-label="“1xbit”"><button
                                class="bg-red-600 text-white font-bold mt-1 py-2 px-4 rounded">CLAIM BONUS</button></a>
                    </div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/1xbit-casino/" data-event="“home”"
                            data-event-label="“1xbit”">Read Review</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clovr-cta cta-4 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row middle-xs bg-blue-900">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0"><img class="inline w-4 mr-1"
                    src="http://www.clovr.com/wp-content/uploads/2019/11/easio-logo-mini.png" /> Our Top Rated Eos
                Casinos</h2>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49538"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/7bit-casino-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">WELCOME PACK</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">16 EOS</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Slots</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/7bit-usa" data-event="“home”"
                            data-event-label="“7bit”"><button
                                class="bg-blue-900 text-white font-bold mt-1 py-2 px-4 rounded">CLAIM BONUS</button></a>
                    </div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/7bit-casino/" data-event="“home”"
                            data-event-label="“7bit”">Read Review</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49534"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitstarz-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">WELCOME PACK</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">10 EOS</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49778"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new.png" alt=""
                                width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49497"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png" alt=""
                                width="136" height="136" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49483"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt=""
                                width="136" height="136" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Slots</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/Bitstarz-usa" data-event="“home”"
                            data-event-label="“bitstarz”"><button
                                class="bg-blue-900 text-white font-bold mt-1 py-2 px-4 rounded">CLAIM BONUS</button></a>
                    </div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitstarz-casino/" data-event="“home”"
                            data-event-label="“bitstarz”">Read Review</a></div>
                </div>
            </div>
        </div>
    </div>
</div>';

return $data;
}

// Casino Ads BR
add_shortcode('casino-cta-BR', 'casinoctaBR');

function casinoctaBR(){
global $post;
$data = "<style scoped>
    .container {
        background: white;
    }

    .comparo-table *,
    .clovr-cta * {
        font-family: Montserrat, Sans-serif;
    }

    .comparo-table p {
        margin-bottom: 0;
    }

    .bg-gold {
        background: #ffc20c;
        background: -moz-linear-gradient(left, #ffc20c 1%, #ffdd15 100%);
        background: -webkit-linear-gradient(left, #ffc20c 1%, #ffdd15 100%);
        background: linear-gradient(to right, #ffc20c 1%, #ffdd15 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc20c', endColorstr='#ffdd15', GradientType=1);

    }

    .featured-review {
        z-index: 1;
        transform: scaleY(1.1) scaleX(1.04);
    }

    @media only screen and (max-width: 48em) {

        .featured-review {
            transform: scale(1);
        }

        h6#fancy-title-3 {
            padding-bottom: 40px;
        }

    }

    .logo-section img {
        max-width: 180px !important;
        max-height: 16em;
    }

    #fancy-title-2 h1 {
        font-size: 1.5rem;
    }

    .text-xs {
        font-size: 0.65rem !important;
    }

    .text-xs-xs {
        font-size: 0.55rem;
    }

    .games-section img {
        max-width: 45px;
    }

    .mt-1\/2 {
        margin-top: .1rem;
    }

    .games-section p {
        margin-bottom: 0 !important;
    }

    @media screen and (max-width: 800px) {
        .container {
            width: 375px;
        }

        .claim-bonus-img {
            width: 390px !important;
        }
    }

    p.text-center.text-3xl.font-light.text-green-600.leading-none.px-0.pt-1 {
        margin-bottom: 0 !important;
    }

    .wpb_single_image.wpb_content_element.vc_align_center.top-image {
        margin-bottom: 0;
    }

    .p-0 {
        padding: 0 !important;
    }
</style>";

$data .= '<div class="clovr-cta cta-1 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49776"
                    src="https://www.clovr.com/wp-content/uploads/2022/10/metaspins.png" alt="" width="192"
                    height="66" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">ATÉ 57% RAKEBACK</span>
                    </div>
                    <div class="col-xs-12">
                        <p class="text-center text-sm text-green-600"><span style="font-weight: 400;"><span
                                    style="font-weight: 400;">Aposta</span></span></p>

                        <div class="text-center text-sm text-green-600"><span style="font-weight: 400;">Gratis</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Bacará</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Blackjack</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Roleta</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Caça-Níqueis</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://track.bankrolls.com/trk.php?t=2956&amp;c=6536"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded"><span
                                    style="font-weight: 400;">Reivindicar Bônus</span></button></a></div>
                    <div class="col-xs-12 mb-4">Ler Análise</div>
                </div>
            </div>
        </div>
        <div class="cta-item row middle-xs center-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49533"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/mbit-min.png" alt="" width="192"
                    height="110" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">Bônus de Primeiro
                            Depósito</span></div>
                    <div class="col-xs-12">
                        <p class="text-center text-3xl font-light text-green-600 leading-none px-0 pt-1">1.5 BTC</p>
                        <p class="text-center text-sm text-green-600">+ 100 rotaciona</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Bacará</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Blackjack</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Roleta</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Caça-Níqueis</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/mBit-usa"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded"><span
                                    style="font-weight: 400;">Reivindicar Bônus</span></button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="https://www.clovr.com/reviews/mbit-casino/">Ler Análise</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49532"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/resized-1.png" alt="" width="192"
                    height="65" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">Bônus de Primeiro
                            Depósito</span></div>
                    <div class="col-xs-12">
                        <p class="text-center text-3xl font-light text-green-600 leading-none px-0 pt-1">0.2 BTC</p>
                        <p class="text-center text-sm text-green-600">+ 40 rotaciona</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Bacará</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Blackjack</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><span data-mce-type="bookmark"
                                    style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"
                                    class="mce_SELRES_start"></span><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /><span data-mce-type="bookmark"
                                    style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"
                                    class="mce_SELRES_end"></span></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Roleta</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Caça-Níqueis</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/BitcoinPenguin-usa"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded"><span
                                    style="font-weight: 400;">Reivindicar Bônus</span></button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="https://www.clovr.com/reviews/bitcoinpenguin-casino/">Ler Análise</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clovr-cta cta-2 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row center-xs middle-xs bg-blue-600">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0"><img class="inline w-4 mr-1"
                    src="http://www.clovr.com/wp-content/uploads/2019/11/ethereum-mini.png" /> NOSSOS MELHORES CASSINOS
                ETHEREUM</h2>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-10 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49534"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitstarz-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">Bônus</span></div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">20 ETH</div>
                    <div class="text-center text-sm text-green-600">+ 180 rotaciona</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Bacará</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Blackjack</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Roleta</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Caça-Níqueis</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/Bitstarz-usa"><button
                                class="bg-blue-600 text-white font-bold mt-1 py-2 px-4 rounded"><span
                                    style="font-weight: 400;">Reivindicar Bônus</span></button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitstarz-casino/">Ler Análise</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-10 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49535"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/fortune-dark-min.png" alt="" width="192"
                    height="65" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">Bônus </span></div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">33 ETH</div>
                    <div class="text-center text-sm text-green-600">+ 250 rotaciona</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Bacará</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Blackjack</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Roleta</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Caça-Níqueis</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/FortuneJack-usa"><button
                                class="bg-blue-600 text-white font-bold mt-1 py-2 px-4 rounded"><span
                                    style="font-weight: 400;">Reivindicar Bônus</span></button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/fortunejack-casino/">Ler Análise</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clovr-cta cta-3 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row middle-xs bg-red-600">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0"><img class="inline w-4 mr-1"
                    src="http://www.clovr.com/wp-content/uploads/2019/11/tron-min-logo.png" /> NOSSOS MELHORES CASSINOS
                TRON</h2>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49536"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitcasino-min.png" alt="" width="192"
                    height="77" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">Bônus </span></div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">50 TRX</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Bacará</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Blackjack</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Roleta</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Caça-Níqueis</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="http://www.clovr.com/Bitcasinoio-usa"><button
                                class="bg-red-600 text-white font-bold mt-1 py-2 px-4 rounded"><span
                                    style="font-weight: 400;">Reivindicar Bônus</span></button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitcasino-io/">Ler Análise</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49777"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/1xbit-min_new.png" alt="" width="192"
                    height="99" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">Bônus </span></div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">20 TRX</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Bacará</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Blackjack</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Roleta</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Caça-Níqueis</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/1xBit-usa"><button
                                class="bg-red-600 text-white font-bold mt-1 py-2 px-4 rounded"><span
                                    style="font-weight: 400;">Reivindicar Bônus</span></button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/1xbit-casino/">Ler Análise</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clovr-cta cta-4 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row middle-xs bg-blue-900">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0"><img class="inline w-4 mr-1"
                    src="http://www.clovr.com/wp-content/uploads/2019/11/easio-logo-mini.png" /> <span
                    style="font-weight: 400;">NOSSOS MELHORES CASSINOS EOS</span></h2>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49538"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/7bit-casino-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">Pacote de
                            Boas-Vindas</span></div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">16 EOS</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Bacará</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Blackjack</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Roleta</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Caça-Níqueis</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/7bit-usa"><button
                                class="bg-blue-900 text-white font-bold mt-1 py-2 px-4 rounded"><span
                                    style="font-weight: 400;">Reivindicar Bônus</span></button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/7bit-casino/">Ler Análise</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49534"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitstarz-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">Pacote de
                            Boas-Vindas</span></div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">10 EOS</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49778"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new.png" alt=""
                                width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Bacará</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49497"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png" alt=""
                                width="136" height="136" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Blackjack</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49483"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt=""
                                width="136" height="136" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Roleta</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Caça-Níqueis</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/Bitstarz-usa"><button
                                class="bg-blue-900 text-white font-bold mt-1 py-2 px-4 rounded"><span
                                    style="font-weight: 400;">Reivindicar Bônus</span></button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitstarz-casino/">Ler Análise</a></div>
                </div>
            </div>
        </div>
    </div>
</div>';

return $data;
}


// Casino Ads ES
add_shortcode('casino-cta-ES', 'casinoctaES');

function casinoctaES(){
global $post;
$data = "<style scoped>
    .container {
        background: white;
    }

    .comparo-table *,
    .clovr-cta * {
        font-family: Montserrat, Sans-serif;
    }

    .comparo-table p {
        margin-bottom: 0;
    }

    .bg-gold {
        background: #ffc20c;
        background: -moz-linear-gradient(left, #ffc20c 1%, #ffdd15 100%);
        background: -webkit-linear-gradient(left, #ffc20c 1%, #ffdd15 100%);
        background: linear-gradient(to right, #ffc20c 1%, #ffdd15 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc20c', endColorstr='#ffdd15', GradientType=1);

    }

    .featured-review {
        z-index: 1;
        transform: scaleY(1.1) scaleX(1.04);
    }

    @media only screen and (max-width: 48em) {

        .featured-review {
            transform: scale(1);
        }

        h6#fancy-title-3 {
            padding-bottom: 40px;
        }

    }

    .logo-section img {
        max-width: 180px !important;
        max-height: 16em;
    }

    #fancy-title-2 h1 {
        font-size: 1.5rem;
    }

    .text-xs {
        font-size: 0.65rem !important;
    }

    .text-xs-xs {
        font-size: 0.55rem;
    }

    .games-section img {
        max-width: 45px;
    }

    .mt-1\/2 {
        margin-top: .1rem;
    }

    .games-section p {
        margin-bottom: 0 !important;
    }

    @media screen and (max-width: 800px) {
        .container {
            width: 375px;
        }

        .claim-bonus-img {
            width: 390px !important;
        }
    }

    p.text-center.text-3xl.font-light.text-green-600.leading-none.px-0.pt-1 {
        margin-bottom: 0 !important;
    }

    .wpb_single_image.wpb_content_element.vc_align_center.top-image {
        margin-bottom: 0;
    }

    .p-0 {
        padding: 0 !important;
    }
</style>";

$data .= '<div class="clovr-cta cta-1 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49776"
                    src="https://www.clovr.com/wp-content/uploads/2022/10/metaspins.png" alt="" width="192"
                    height="66" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">Hasta 57%
                            RAKEBACK</span></div>
                    <div class="col-xs-12">
                        <p class="text-center text-sm text-green-600">Apuesta</p>
                        <div class="text-center text-sm text-green-600">Gratis</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Ruleta</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Tragamonedas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://track.bankrolls.com/trk.php?t=2956&amp;c=6536"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded">OBTENER EL BONO</button></a>
                    </div>
                    <div class="col-xs-12 mb-4">LEER LA RESEÑA</div>
                </div>
            </div>
        </div>
        <div class="cta-item row middle-xs center-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49533"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/mbit-min.png" alt="" width="192"
                    height="110" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONO DE PRIMER DEPÓSITO</div>
                    <div class="col-xs-12">
                        <p class="text-center text-3xl font-light text-green-600 leading-none px-0 pt-1">1.5 BTC</p>
                        <p class="text-center text-sm text-green-600">+ 100 giros</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Ruleta</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Tragamonedas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/mBit-usa"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded">OBTENER EL BONO</button></a>
                    </div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="https://www.clovr.com/reviews/mbit-casino/">LEER LA RESEÑA</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49532"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/resized-1.png" alt="" width="192"
                    height="65" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONO DE PRIMER DEPÓSITO</div>
                    <div class="col-xs-12">
                        <p class="text-center text-3xl font-light text-green-600 leading-none px-0 pt-1">0.2 BTC</p>
                        <p class="text-center text-sm text-green-600">+ 40 giros</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><span data-mce-type="bookmark"
                                    style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"
                                    class="mce_SELRES_start"></span><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /><span data-mce-type="bookmark"
                                    style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"
                                    class="mce_SELRES_end"></span></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Ruleta</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Tragamonedas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/BitcoinPenguin-usa"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded">OBTENER EL BONO</button></a>
                    </div>
                    <div class="col-xs-12"><a class="font-light uppercase text-xs"
                            href="https://www.clovr.com/reviews/bitcoinpenguin-casino/">LEER LA RESEÑA</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clovr-cta cta-2 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row center-xs middle-xs bg-blue-600">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0"><img class="inline w-4 mr-1"
                    src="http://www.clovr.com/wp-content/uploads/2019/11/ethereum-mini.png" /> NUESTRA LISTA DE LOS
                MEJORES CASINOS ETHEREUM</h2>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-10 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49534"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitstarz-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONO</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">20 ETH</div>
                    <div class="text-center text-sm text-green-600">+ 180 giros</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Ruleta</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Tragamonedas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/Bitstarz-usa"><button
                                class="bg-blue-600 text-white font-bold mt-1 py-2 px-4 rounded">OBTENER EL
                                BONO</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitstarz-casino/">LEER LA RESEÑA</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-10 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49535"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/fortune-dark-min.png" alt="" width="192"
                    height="65" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONO</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">33 ETH</div>
                    <div class="text-center text-sm text-green-600">+ 250 giros</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Ruleta</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Tragamonedas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/FortuneJack-usa"><button
                                class="bg-blue-600 text-white font-bold mt-1 py-2 px-4 rounded">OBTENER EL
                                BONO</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/fortunejack-casino/">LEER LA RESEÑA</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clovr-cta cta-3 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row middle-xs bg-red-600">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0"><img class="inline w-4 mr-1"
                    src="http://www.clovr.com/wp-content/uploads/2019/11/tron-min-logo.png" /> NUESTRA LISTA DE LOS
                MEJORES CASINOS TRON</h2>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49536"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitcasino-min.png" alt="" width="192"
                    height="77" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONO</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">50 TRX</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Ruleta</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Tragamonedas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="http://www.clovr.com/Bitcasinoio-usa"><button
                                class="bg-red-600 text-white font-bold mt-1 py-2 px-4 rounded">OBTENER EL
                                BONO</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitcasino-io/">LEER LA RESEÑA</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49777"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/1xbit-min_new.png" alt="" width="192"
                    height="99" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONO</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">20 TRX</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Ruleta</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Tragamonedas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/1xBit-usa"><button
                                class="bg-red-600 text-white font-bold mt-1 py-2 px-4 rounded">OBTENER EL
                                BONO</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/1xbit-casino/">LEER LA RESEÑA</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clovr-cta cta-4 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row middle-xs bg-blue-900">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0"><img class="inline w-4 mr-1"
                    src="http://www.clovr.com/wp-content/uploads/2019/11/easio-logo-mini.png" /> NUESTRA LISTA DE LOS
                MEJORES CASINOS EOS</h2>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49538"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/7bit-casino-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">PAQUETE DE BIENVENIDA</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">16 EOS</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Ruleta</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Tragamonedas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/7bit-usa"><button
                                class="bg-blue-900 text-white font-bold mt-1 py-2 px-4 rounded">OBTENER EL
                                BONO</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/7bit-casino/">LEER LA RESEÑA</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49534"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitstarz-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">PAQUETE DE BIENVENIDA</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">10 EOS</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49778"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new.png" alt=""
                                width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Baccarat</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49497"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png" alt=""
                                width="136" height="136" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49483"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt=""
                                width="136" height="136" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Ruleta</p>
                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Tragamonedas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/Bitstarz-usa"><button
                                class="bg-blue-900 text-white font-bold mt-1 py-2 px-4 rounded">OBTENER EL
                                BONO</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitstarz-casino/">LEER LA RESEÑA</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"
    class="mce_SELRES_start">﻿</span>';

return $data;
}

// Casino Ads DE
add_shortcode('casino-cta-DE', 'casinoctaDE');

function casinoctaDE(){
global $post;
$data = "<style scoped>
    .container {
        background: white;
    }

    .comparo-table *,
    .clovr-cta * {
        font-family: Montserrat, Sans-serif;
    }

    .comparo-table p {
        margin-bottom: 0;
    }

    .bg-gold {
        background: #ffc20c;
        background: -moz-linear-gradient(left, #ffc20c 1%, #ffdd15 100%);
        background: -webkit-linear-gradient(left, #ffc20c 1%, #ffdd15 100%);
        background: linear-gradient(to right, #ffc20c 1%, #ffdd15 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc20c', endColorstr='#ffdd15', GradientType=1);

    }

    .featured-review {
        z-index: 1;
        transform: scaleY(1.1) scaleX(1.04);
    }

    @media only screen and (max-width: 48em) {

        .featured-review {
            transform: scale(1);
        }

        h6#fancy-title-3 {
            padding-bottom: 40px;
        }

    }

    .logo-section img {
        max-width: 180px !important;
        max-height: 16em;
    }

    #fancy-title-2 h1 {
        font-size: 1.5rem;
    }

    .text-xs {
        font-size: 0.65rem !important;
    }

    .text-xs-xs {
        font-size: 0.55rem;
    }

    .games-section img {
        max-width: 45px;
    }

    .mt-1\/2 {
        margin-top: .1rem;
    }

    .games-section p {
        margin-bottom: 0 !important;
    }

    @media screen and (max-width: 800px) {
        .container {
            width: 375px;
        }

        .claim-bonus-img {
            width: 390px !important;
        }
    }

    p.text-center.text-3xl.font-light.text-green-600.leading-none.px-0.pt-1 {
        margin-bottom: 0 !important;
    }

    .wpb_single_image.wpb_content_element.vc_align_center.top-image {
        margin-bottom: 0;
    }

    .p-0 {
        padding: 0 !important;
    }
</style>";

$data .= '<div class="clovr-cta cta-1 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49776"
                    src="https://www.clovr.com/wp-content/uploads/2022/10/metaspins.png" alt="" width="192"
                    height="66" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">BIS ZU 57%
                            RAKEBACK</span></div>
                    <div class="col-xs-12">
                        <p class="text-center text-3xl font-light text-green-600 leading-none px-0 pt-1">WETTE</p>

                        <div class="text-center text-sm text-green-600">FREI</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Bakkarat</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Steckplätze</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://track.bankrolls.com/trk.php?t=2956&amp;c=6536"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded">BONUS
                                BEANSPRUCHEN</button></a></div>
                    <div class="col-xs-12 mb-4">BEWERTUNGEN LESEN</div>
                </div>
            </div>
        </div>
        <div class="cta-item row middle-xs center-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49533"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/mbit-min.png" alt="" width="192"
                    height="110" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span
                            style="font-weight: 400;">ERSTEINZAHLUNGSBONUS</span></div>
                    <div class="col-xs-12">
                        <p class="text-center text-3xl font-light text-green-600 leading-none px-0 pt-1">1.5 BTC</p>
                        <p class="text-center text-sm text-green-600">+ 100 <span
                                style="font-weight: 400;">Drehungen</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Bakkarat</span></p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Steckplätze</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/mBit-usa"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded">BONUS
                                BEANSPRUCHEN</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="https://www.clovr.com/reviews/mbit-casino/">BEWERTUNGEN LESEN</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49532"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/resized-1.png" alt="" width="192"
                    height="65" /><noscript><img
                        src="http://www.clovr.com/wp-content/uploads/2019/11/xBitstarz-Casino-Review.png.pagespeed.ic.pAcSicjhnJ.webp"
                        data-pagespeed-url-hash="2700551004" /></noscript></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span
                            style="font-weight: 400;">ERSTEINZAHLUNGSBONUS</span></div>
                    <div class="col-xs-12">
                        <p class="text-center text-3xl font-light text-green-600 leading-none px-0 pt-1">0.2 BTC</p>
                        <p class="text-center text-sm text-green-600">+ 40 <span
                                style="font-weight: 400;">Drehungen</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxcards1,,402x.png,Mic.kM3u0HGHRK.webp.pagespeed.ic.jdYUULKDfJ.webp"
                                    alt="" data-pagespeed-url-hash="2630329793" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Bakkarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xx1c,,402x.png,Mic.Q3pigOfI9M.webp.pagespeed.ic.9aaUaBk8t1.webp"
                                    alt="" data-pagespeed-url-hash="303985453" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png"
                                alt="" /><noscript><span data-mce-type="bookmark"
                                    style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"
                                    class="mce_SELRES_start"></span><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxroulette1,,402x.png,Mic.M65Dzn8hL7.webp.pagespeed.ic.LiYvmUOLVj.webp"
                                    alt="" data-pagespeed-url-hash="562060687" /><span data-mce-type="bookmark"
                                    style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"
                                    class="mce_SELRES_end"></span></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img style="display: block;"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /><noscript><img
                                    src="http://www.clovr.com/wp-content/uploads/2019/10/xxslot-machinesq,,402x.png,Mic.kJ8tsLNlRc.webp.pagespeed.ic.S3sVq5hSwF.webp"
                                    alt="" data-pagespeed-url-hash="4073062064" /></noscript></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Steckplätze</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/BitcoinPenguin-usa"><button
                                class="bg-gold text-white font-bold mt-1 py-2 px-4 rounded">BONUS
                                BEANSPRUCHEN</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="https://www.clovr.com/reviews/bitcoinpenguin-casino/">BEWERTUNGEN LESEN</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clovr-cta cta-2 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row center-xs middle-xs bg-blue-600">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0"><img class="inline w-4 mr-1"
                    src="http://www.clovr.com/wp-content/uploads/2019/11/ethereum-mini.png" />UNSERE BESTBEWERTETEN
                ETHEREUM-CASINOS</h2>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-10 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49534"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitstarz-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONUS</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">20 ETH</div>
                    <div class="text-center text-sm text-green-600">+ 180 <span
                            style="font-weight: 400;">Drehungen</span></div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Bakkarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0"><span style="font-weight: 400;">Steckplätze</span></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/Bitstarz-usa"><button
                                class="bg-blue-600 text-white font-bold mt-1 py-2 px-4 rounded">BONUS
                                BEANSPRUCHEN</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitstarz-casino/">BEWERTUNGEN LESEN</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-10 col-lg-3 px-6 py-6"><img class="aligncenter size-full wp-image-49535"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/fortune-dark-min.png" alt="" width="192"
                    height="65" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONUS</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">33 ETH</div>
                    <div class="text-center text-sm text-green-600">+ 250 <span
                            style="font-weight: 400;">Drehungen</span></div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Bakkarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Steckplätze</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/FortuneJack-usa"><button
                                class="bg-blue-600 text-white font-bold mt-1 py-2 px-4 rounded">BONUS
                                BEANSPRUCHEN</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/fortunejack-casino/">BEWERTUNGEN LESEN</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clovr-cta cta-3 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row middle-xs bg-red-600">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0">UNSERE BESTBEWERTETEN TRON CASINOS</h2>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49536"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitcasino-min.png" alt="" width="192"
                    height="77" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONUS</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">50 TRX</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Bakkarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49485"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png" alt=""
                                width="126" height="126" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Steckplätze</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="http://www.clovr.com/Bitcasinoio-usa"><button
                                class="bg-red-600 text-white font-bold mt-1 py-2 px-4 rounded">BONUS
                                BEANSPRUCHEN</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitcasino-io/">BEWERTUNGEN LESEN</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row center-xs middle-xs lg:border-b lg:border-gray-200">
            <div class="col-xs-9 col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49777"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/1xbit-min_new.png" alt="" width="192"
                    height="99" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none">BONUS</div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">20 TRX</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Bakkarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Steckplätze</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/1xBit-usa"><button
                                class="bg-red-600 text-white font-bold mt-1 py-2 px-4 rounded">BONUS
                                BEANSPRUCHEN</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/1xbit-casino/">BEWERTUNGEN LESEN</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clovr-cta cta-4 row center-xs my-4 mb-8 px-4">
    <div class="col-lg-12 shadow-lg rounded-lg overflow-hidden">
        <div class="cta-item row middle-xs bg-blue-900">
            <h2 class="text-white py-3 px-5 text-lg uppercase mb-0">UNSERE BESTBEWERTETEN EOS CASINOS</h2>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49538"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/7bit-casino-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">WILLKOMMENSPAKET</span>
                    </div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">16 EOS</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49779"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new-1.png"
                                alt="" width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Bakkarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt="" />
                        </p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Steckplätze</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/7bit-usa"><button
                                class="bg-blue-900 text-white font-bold mt-1 py-2 px-4 rounded">BONUS
                                BEANSPRUCHEN</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/7bit-casino/">BEWERTUNGEN LESEN</a></div>
                </div>
            </div>
        </div>
        <div class="cta-item row middle-xs lg:border-b lg:border-gray-200">
            <div class="col-lg-3 px-6 py-6 "><img class="aligncenter size-full wp-image-49534"
                    src="https://www.clovr.com/wp-content/uploads/2020/01/bitstarz-min.png" alt="" width="192"
                    height="64" /></div>
            <div class="col-lg-2 lg:border-l-2 lg:border-r-2 lg:border-gray-200">
                <div class="row center-xs">
                    <div class="col-xs-12 text-xs leading-none"><span style="font-weight: 400;">WILLKOMMENSPAKET</span>
                    </div>
                    <div class="col-xs-12 text-4xl font-light text-green-600 leading-none px-0">10 EOS</div>
                </div>
            </div>
            <div class="col-lg-4 lg:border-r-2 lg:border-gray-200">
                <div class="row around-xs px-2 games-section">
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49778"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/baccarat-resized-1_new.png" alt=""
                                width="46" height="46" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Bakkarat</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49497"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/ezgif-6-resized.png" alt=""
                                width="136" height="136" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Blackjack</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img class="aligncenter size-full wp-image-49483"
                                src="https://www.clovr.com/wp-content/uploads/2020/01/loul-ette-resized.png" alt=""
                                width="136" height="136" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Roulette</p>

                    </div>
                    <div class="col-2 p-0">
                        <p class="mb-0"><img src="https://www.clovr.com/wp-content/uploads/2020/01/slots-resized.png"
                                alt="" /></p>
                        <p class="text-xs-xs mt-1/2 mb-0">Steckplätze</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 lg:border-gray-200">
                <div class="row">
                    <div class="col-xs-12"><a href="https://www.clovr.com/Bitstarz-usa"><button
                                class="bg-blue-900 text-white font-bold mt-1 py-2 px-4 rounded">BONUS
                                BEANSPRUCHEN</button></a></div>
                    <div class="col-xs-12 mb-4"><a class="font-light uppercase text-xs"
                            href="http://www.clovr.com/reviews/bitstarz-casino/">BEWERTUNGEN LESEN</a></div>
                </div>
            </div>
        </div>
    </div>
</div>';

return $data;
}



add_shortcode('quote-block', 'testquote');

function testquote()
{

global $post;
$data = "<style scoped>
    .quote-bold {
        font-weight: 700;
    }

    .quote-wrap {
        margin: 50px;
        padding: 25px;
        box-shadow: rgb(60 64 67 / 30%) 0px 0px 0px 0px, rgb(60 64 67 / 15%) 0px 0px 4px 1px;
        display: flex;
    }

    .quote-icon {
        width: 9%;
        padding: 2px 0px 0px 0px;
    }

    i.fas.fa-bolt {
        color: #d58181;
        font-size: 20px;
    }
</style>";

$quote = get_field('quote');
$data .= '<div class="quote-wrap">
    <div class="quote-icon"> <i class="fas fa-bolt"></i> </div>
    <div class="quote-details"> <span class="quote-bold"> Important: </span> ' . $quote . ' </div>
</div>';

return $data;

}