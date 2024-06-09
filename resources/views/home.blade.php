@extends('master')
@section('contents')
  <div class="page-wrapper">
    <!-- NAVBAR SECTION -->
    <div class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium" role="banner"
      data-duration="400">
      <nav id="w-node-d215a018-b744-ad0a-7a5f-733e90fb71cd-e6ef39a8" class="naw-container"><a href="#Home"
          class="brand w-nav-brand"><img src="images/svgs/raily img.svg" loading="eager" alt="Logo"
            class="image-logo" /></a>
        <nav role="navigation" id="nav-wrapper" class="nav-menu w-nav-menu">
          <div class="box-menu"><a href="#meetups" class="nav-link dtsctop w-nav-link">Meetups</a><a href="#"
              class="nav-link non-desctop w-nav-link">Date</a><a href="#"
              class="nav-link dtsctop non w-nav-link">AR</a><a href="#Ai" class="nav-link w-nav-link">AI</a><a
              href="#Gamification" class="nav-link w-nav-link">Gamification</a><a href="#Rewards"
              class="nav-link w-nav-link">Rewards</a><a href="#web-3" class="nav-link w-nav-link">Web 3</a><a href="#"
              class="nav-link non-desctop non w-nav-link">AR</a><a href="#xr"
              class="nav-link dtsctop non w-nav-link">XR</a><a href="#"
              class="nav-link non-desctop non w-nav-link">XR</a><a href="#concierge"
              class="nav-link w-nav-link">Concierge</a><a href="#charity" class="nav-link w-nav-link">Charity</a><a
              href="#all-features" class="nav-link w-nav-link">All Features</a></div>
        </nav>
        <div class="menu-button w-nav-button" onclick="toggleNav()">
          <div class="box-burger"><img src="images/svgs/menu.svg" loading="lazy" alt="" class="image-73" /></div>
        </div>
        <div class="div-block-320">
          <div><a data-popup-initiator="home" href="#" class="link-contact-naw w-inline-block">
              <div>Contact us</div>
            </a></div>
        </div>
      </nav>
      <!-- MOBILE NAVIGATION -->
      <div class="mobile-nav" id="mobileNav">
        <ul class="nav-list">
          <li>Meetups</li>
          <li>Date</li>
          <li>AR</li>
          <li>Gamification</li>
          <li>Rewards</li>
          <li>Web 3</li>
          <li>Concierge</li>
          <li>Charity</li>
          <li>All features</li>
        </ul>
      </div>
    </div>
    <!-- BANNER SECTION -->
    <section id="Home" class="section-home-header">
      <div class="box-h1 animate__animated animate-on-scroll">
        <h1 class="h1">MEETS ON THE MOVE</h1><img src="images/imgs/meets1.webp" alt="" class="im-h1 ps" /><img
          src="images/imgs/meets2.webp" alt="" class="im-h1 mob" />
      </div>
      <div class="container pl-no-pading">
        <div class="box-m-d-55">
          <div class="text-32 central mob-non">AI-Driven + Gamify</div>
        </div>
        <div class="wrapper-hiro-phon">
          <div class="block-phone-hiro"><img src="images/imgs/gamify1.webp" alt=""
              class="im-hiro-phon animate__animated animate-on-scroll" /><img src="images/imgs/gamify2.webp" alt=""
              class="im-hiro-phon animate__animated animate-on-scroll" /><img src="images/imgs/gamify3.webp" alt=""
              class="im-hiro-phon animate__animated animate-on-scroll" /></div>
        </div>
        <div class="wrapper-form-hiro">
          <div class="box-h-form">
            <div class="form-block-3 w-form">
             {{-- Contact Form --}}
             <form action="{{ route('formsubmit') }}" method="POST" class="form-3">
              @csrf
              <input class="text-field-3 w-input" maxlength="256" name="email"
                placeholder="Enter your email" type="email" id="email-14" required="" /><input type="submit"
                class="form-button-3 w-button" value="Ask for Early Access" />
            </form>
            </div>
          </div>
        </div>

        <div class="wrapper-planet">
          <div class="block-planet">
            <div class="box-im-planet">
              <img src="images/imgs/earth1.webp" alt="" class="im-planet _1" /><img src="images/imgs/earth2.webp" alt=""
                class="im-planet _2" /><img src="images/imgs/earth3.webp" alt="" class="im-planet _3" /><img
                src="images/imgs/earth4.webp" alt="" class="im-planet _4" /><img src="images/imgs/earth5.webp" alt=""
                class="im-planet _5" /><img src="images/imgs/earth6.webp" alt="" class="im-planet _6" /><img
                src="images/imgs/earth7.webp" class="im-planet _7" /><img src="images/imgs/earth8.webp"
                class="im-planet _8" />
            </div>
            <div class="wraapper-h2">
              <div class="box-h2">
                <h2 class="h2-hiro">TRAVEL. CONNECT. </h2>
              </div>
              <div class="box-h2">
                <h2 class="h2-hiro">EXPLORE.</h2>
              </div>
            </div>
            <div class="box-logo-hiro">
              <div class="text-16 pl-s-14">Trusted by <br />industry <br />leaders</div><img
                src="https://cdn.prod.website-files.com/64aceaf9cb10fc1c8e4efdbc/6631eab0d8356cb70198ba08_Frame%201948757889.svg"
                loading="lazy" alt="" class="im-logo-compani" /><img src="images/svgs/microsoft.svg" loading="lazy"
                alt="" class="im-logo-compani" /><img src="images/svgs/amazon.svg" loading="lazy" alt=""
                class="im-logo-compani" /><img src="images/svgs/google.svg" loading="lazy" alt=""
                class="im-logo-compani" />
              <div class="div-block-303"><img src="images/svgs/leap.webp" loading="lazy" alt=""
                  class="im-logo-compani smol" />
                <div class="text-11">RocketFuel Semi-<br />Finalist 2024</div>
              </div><img src="images/svgs/beta.webp" loading="lazy" alt="" class="im-logo-compani" />
            </div>
          </div>
        </div>
        <div class="wrapper-lovedloved non">
          <div class="div-block-239 div-block-240 div-block-241 div-block-242 box-loved">
            <h2 class="heading-5">Loved by</h2>
            <div class="blok-star"><a class="w-inline-block"><img src="images/svgs/star.svg" loading="lazy" alt=""
                  class="image-star" /></a>
              <div class="text-20 w500 planset-14">5.0</div>
            </div><a href="#" class="btn-reviews visibol w-inline-block">
              <div class="text-16 planset-14 w300 mob-1-2">Spill Your Thoughts</div>
            </a>
          </div>
          <div class="image-container">
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
            <div class="userimg">
              <img src="images/imgs/user1.webp" alt="Image 1">
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- MEET RILEY SECTION -->
    <section id="meetups" class="section-meet-raily">
      <div class="container">
        <div class="box-text-audio-meet animate__animated animate-on-scroll">
          <h2 class="h3 central ps">Meet Raily where you can</h2>
          <h2 class="h3 central mob">With Raily you can</h2>
        </div>
        <div class="w-layout-grid wrapper-meet">
          <div id="w-node-cd9d25c8-3306-5886-feb2-e15afec3a7cb-e6ef39a8" class="block-cart-meet">
            <div class="box-im-fon" id="background-blur"><img src="images/imgs/back.webp" loading="lazy" alt=""
                class="im-bg-slide" /></div>
            <div class="wrapper-cart-meet animate__animated animate-on-scroll phone" id="phone1">
              <div id="w-node-c4cd6c7f-a25f-91db-3f81-e7b942b2d46d-e6ef39a8" class="block-text-meet pl">
                <div class="text-40-mit">Connect</div>
                <div class="text-20-col-w50">Meet interesting people anywhere with our AI matchmaker.</div>
              </div>
              <div class="cart-bg-meet">
                <div class="bg-black-meet-phone"></div><img src="images/imgs/connect.webp" loading="lazy" alt=""
                  class="image-meet" />
                <div class="zatemenie"></div>
              </div>
            </div>
            <div class="wrapper-cart-meet animate__animated animate-on-scroll phone" id="phone2">
              <div id="w-node-_2fcb7b46-76f2-3940-477c-e2bee9b698a6-e6ef39a8" class="block-text-meet pl">
                <div class="text-40-mit">Discover</div>
                <div class="text-20-col-w50">See who&#x27;s at your destination or nearby that shares your interests.
                </div>
              </div>
              <div class="cart-bg-meet-2"><img src="images/imgs/discover.webp" loading="lazy" alt=""
                  class="image-meet-2" />
                <div style="background-color:rgba(0,0,0,0.08)" class="zatemenie"></div>
              </div>
            </div>
            <div class="wrapper-cart-meet animate__animated animate-on-scroll phone" id="phone3">
              <div id="w-node-f8551021-3d25-b5e7-f430-77ca0fdb17bd-e6ef39a8" class="block-text-meet pl">
                <div class="text-40-mit">Bond</div>
                <div class="text-20-col-w50">Moving or relaxing, our AI magically finds your connections.</div>
              </div>
              <div class="cart-bg-meet-3"><img src="images/imgs/bond.webp" loading="lazy" alt="" class="image-meet-3" />
                <div class="zatemenie"></div>
              </div>
            </div>
            <div class="wrapper-cart-meet animate__animated animate-on-scroll phone" id="phone4">
              <div id="w-node-_5385c4c3-84a4-730c-41db-e39a36b54973-e6ef39a8"
                class="block-text-meet block-cart-meet pl">
                <div class="text-40-mit">Explore</div>
                <div class="text-20-col-w50">Journey together to new places and experiences with Raily AI concierge.
                </div>
              </div>
              <div class="cart-bg-meet-4"><img src="images/imgs/explore.webp" loading="lazy" alt=""
                  class="image-meet-4" />
                <div class="zatemenie"></div>
              </div>
            </div>
          </div>
          <div class="block-slid-bar">
            <div class="wrapper-slid-bar"><img src="images/svgs/underline.svg" loading="lazy" alt="" class="image-16" />
              <div class="line"></div>
              <div class="line"></div>
              <div class="circul _1">
                <div class="line-circul"></div>
                <div class="div-block-128"></div>
              </div>
              <div class="circul _2">
                <div class="line-circul"></div>
              </div>
              <div class="circul _3">
                <div class="line-circul"></div>
              </div>
              <div class="circul _4">
                <div class="line-circul"></div>
                <div class="div-block-128-copy"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-layout-grid wrapper-meet-2">
          <div class="block-cart-meet mar178">
            <div class="block-text-meet">
              <div class="text-40-mit">Connect</div>
              <div class="text-20-col-w50">Meet interesting people anywhere with our AI matchmaker.</div>
            </div>
            <div class="block-text-meet">
              <div class="text-40-mit">Discover</div>
              <div class="text-20-col-w50">See who&#x27;s at your destination or nearby that shares your interests.
              </div>
            </div>
            <div class="block-text-meet">
              <div class="text-40-mit">Bond</div>
              <div class="text-20-col-w50">Moving or relaxing, our AI magically finds your connections.</div>
            </div>
            <div class="block-text-meet block-cart-meet">
              <div class="text-40-mit">Explore</div>
              <div class="text-20-col-w50">Journey together to new places and experiences with Raily AI concierge.
              </div>
            </div>
          </div>
        </div>
        <div class="box-embet-meet">
          <div class="box-h-form">
            <div class="form-block-3 w-form">
              {{-- Contact Form --}}
              <form action="{{ route('formsubmit') }}" method="POST" class="form-3">
                @csrf
                <input class="text-field-3 w-input" maxlength="256" name="email"
                  placeholder="Enter your email" type="email" id="email-14" required="" /><input type="submit"
                  class="form-button-3 w-button" value="Ask for Early Access" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- RAILY ECOSYSTEM -->
    <section class="section-ecosystem">
      <div class="container-0">
        <div class="box-text-audio-meet">
          <h2 class="h3 central">Raily ecosystem</h2>
        </div>
        <div class="wrapper-ecosystem">
          <div class="div-block-328">
            <div class="box-imag-orbita"><img src="images/svgs/eco_bg.svg" loading="lazy" alt=""
                class="im-orbita ps" /><img src="images/svgs/eco_bg_mob.svg" loading="lazy" alt=""
                class="im-orbita mob" /></div>
          </div>
          <div class="block-mach">
            <div class="teg-mach">
              <div class="text-24 pl-18 mob-14">Matchmaking</div>
            </div>
            <div class="box-logo-mach"><img src="images/svgs/match1.svg" loading="lazy" alt="" class="icon-mach" /><img
                src="images/svgs/match2.webp" loading="lazy" alt="" class="im-ligo-mach" />
              <div class="text-24">AI Raily</div>
            </div>
            <div class="teg-mach _9a5bff">
              <div class="text-24 pl-18 mob-14">Concierge</div>
            </div>
          </div>
          <div class="block-mach-absolut">
            <div class="teg-mach-ar pl-absolut">
              <div class="text-29">AR</div><img src="images/svgs/ar1.svg" loading="lazy" alt="" class="icon-teg" />
            </div>
            <div class="box-im-mach"><img src="images/svgs/ar2.webp" loading="lazy" alt="" class="in-mach" /></div>
          </div>
          <div class="block-mach-2">
            <div class="box-im-mach-2"><img src="images/svgs/watch1.webp" loading="lazy" alt="" class="in-mach-2" />
            </div>
            <div class="teg-mach-smart"><img src="images/svgs/watch2.svg" loading="lazy" alt="" class="icon-teg" />
              <div class="text-29">Smartwatches</div>
            </div>
          </div>
          <div class="div-block-326">
            <div class="div-block-327">
              <div class="block-mach-3">
                <div class="teg-mach-smart app"><img src="images/svgs/mobile.svg" loading="lazy" alt=""
                    class="icon-teg" />
                  <div class="text-29">Mobile App</div>
                </div>
                <div class="box-im-mach-3"><img src="images/svgs/mobile2.webp" loading="lazy" alt=""
                    class="in-mach-3" /></div>
              </div>
            </div>
          </div>
          <div class="div-block-324">
            <div class="div-block-325">
              <div class="block-mach-4">
                <div class="teg-mach-xr"><img src="images/svgs/xr.svg" loading="lazy" alt="" class="icon-teg ochki" />
                  <div class="text-29">XR</div>
                </div>
                <div class="box-im-mach-3"><img src="images/svgs/xr2.webp" loading="lazy" alt="" class="i-4n-mach" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ALL FEATURES -->
    <section id="all-features" class="section-all-features">
      <div class="container _10-5-7 mob-margen">
        <div class="box-text-central animate__animated animate-on-scroll">
          <h2 class="h3 central">All Features</h2>
        </div>
        <div class="wrapper-grid">
          <div class="blok-vertikal">
            <div class="blok-1">
              <div class="wrapper_perspective features">
                <div class="box_cart"><img src="images/features/1.webp" loading="lazy" alt=""
                    class="image-features-1" />
                </div>
              </div><img src="images/features/2.webp" loading="lazy" alt="" class="image-features-1-1" />

              <div class="wrapper_perspective features">
                <div class="box_cart">
                  <div class="div-block-131"><img src="images/features/3.webp" loading="lazy" alt=""
                      class="image-features-2 animate__animated animate-zoom-on-scroll" />
                  </div>
                </div>
              </div>
            </div>
            <div class="blok-1">
              <div class="blok-vertikal"><img src="images/features/4.webp" loading="lazy" alt=""
                  class="image-features-9 animate__animated animate-on-scroll" />
                <div class="wrapper_perspective features">
                  <div class="box_cart"><img src="images/features/5.webp" loading="lazy" alt=""
                      class="image-features-10 animate__animated animate-on-scroll" /></div>
                </div>
              </div>
              <div class="blok-vertikal">
                <div class="wrapper_perspective features">
                  <div class="box_cart"><img src="images/features/6.webp" loading="lazy" alt=""
                      class="image-features-12" /></div>
                </div>
                <div class="blok-1"><img src="images/features/7.webp" loading="lazy" alt=""
                    class="image-features-13" /><img src="images/features/8.webp" loading="lazy" alt=""
                    class="image-features-14" /><img src="images/features/9.webp" loading="lazy" alt=""
                    class="image-features-15" />
                </div>
                <div class="blok-1"><img src="images/features/10.webp" loading="lazy" alt=""
                    class="image-features-16" /><img src="images/features/11.webp" loading="lazy" alt=""
                    class="image-features-14" /><img src="images/features/12.webp" loading="lazy" alt=""
                    class="image-features-18" />
                </div>
              </div>
            </div>
          </div>
          <div class="blok-vertikal">
            <div class="blok-1"><img src="images/features/13.webp" loading="lazy" alt="" class="image-features-3" /><img
                src="images/features/14.webp" loading="lazy" alt="" class="image-features-3-1" />
            </div>
            <div class="wrapper_perspective features">
              <div class="box_cart"><img src="images/features/15.webp" loading="lazy" alt=""
                  class="image-features-6 animate__animated animate-zoom-on-scroll" />
              </div>
            </div>
            <div class="blok-1"><img src="images/features/16.webp" loading="lazy" alt="" class="image-features-7" /><img
                src="images/features/17.webp" loading="lazy" alt="" class="image-features-8" />
            </div><img src="images/features/18.webp" loading="lazy" alt=""
              class="image-features-19 animate__animated animate-on-scroll" />
            <div class="blok-1"><img src="images/features/19.webp" loading="lazy" alt=""
                class="image-features-20 animate__animated animate-on-scroll" /><img src="images/features/20.webp"
                loading="lazy" alt="" class="image-features-21" />
            </div>
          </div>
        </div><img src="images/features/21.webp" loading="lazy" alt="" class="image-all-features non-planset" />
      </div>
    </section>
    <!-- AR SECTION -->
    <section class="setion-ar">
      <div class="container">
        <div class="wrapper-video-ar">
          <div id="ar" class="blok-text-ar">
            <div class="box-text-date-4 _3">
              <div class="box-text--audio-xr">
                <h1 class="text-160-xr">AR mode</h1>
                <div class="text--60 w300 mob-24">Turn your smartphone into a magic window opening up a new world of
                  meetups.</div>
              </div>
            </div>
          </div>
          <div id="ar" class="embet-video-ar w-embed">
            <video autoplay controls muted id="xr-video" src="{{ asset('videos/AR_demo.mp4')}}">
            </video>
          </div>
          <div id="ar-mobile" class="embet-video-ar is-mobile w-embed">
            <video autoplay controls muted id="xr-video-mobile" class="video-js vjs-raily" src="{{ asset('videos/AR_demo.mp4') }}">
            </video>
          </div>
        </div>
      </div>
    </section>
    <!-- XR SECTION -->
    <section id="xr" class="section-xr">
      <div class="container">
        <div class="box-text-xr">
          <h1 class="text-160 planshet-96">XR</h1>
        </div>
        <div class="wrapper-video-ar" style="margin-top: 60px;">
          <div id="ar" class="blok-text-ar">
            <div class="box-text-date-4 _3">
              <div class="box-text--audio-xr">
                <h1 class="text-160-xr">XR mode</h1>
                <div class="text--60 w300 mob-24">XR mode immerses users in
                  a unique atmosphere of interacting with people in their surroundings.</div>
              </div>
            </div>
          </div>
          <div id="ar" class="embet-video-ar w-embed">
            <video autoplay controls muted id="xr-video" src="{{ asset('videos/XR_Japan_1440_web.mp4')}}">
            </video>
          </div>
          <div id="ar-mobile" class="embet-video-ar is-mobile w-embed">
            <video autoplay controls muted id="xr-video-mobile" class="video-js vjs-raily"
              src="{{ asset('videos/XR_Japan_1440_web.mp4')}}">
            </video>
          </div>
        </div>
      </div>
    </section>
    <!-- SMART WATCH SECTION -->
    <section id="xr" class="section-smartatch">
      <div class="container">
        <div class="box-text-smart">
          <div class="h3 central mob-left">Smartwatch as Social Circle</div>
        </div>
        <div class="wrapper-xr">
          <aside class="box-text-xr1-copy-copy">
            <div class="box-text-smart-2">
              <div class="div-block-193">
                <div class="text-32 w300">Your Watch Your Network Grow</div>
              </div>
              <div class="text--60 w300 _w-90">Find your perfect match, right on your wrist</div>
            </div>
          </aside>
          <div class="embet-video-ticket xr-video-player w-embed"><video autoplay controls muted
              class="video-js vjs-raily">
              <source src="{{ asset('videos/Smartwatches_1440_web.mp4') }}" type='video/mp4'>
            </video></div>
          <div class="embet-video-ticket xr-video-player is-mobile w-embed"><video autoplay controls muted
              data-player-id="WatchPlayerMobile" data-vjs-player data-is-mobile preload="none"
              class="video-js vjs-raily" poster="images/poster.jpeg">
              <source src="{{ asset('videos/Smartwatches_1440_web.mp4') }}" type='video/mp4'>
            </video></div>
          <div class="div-block-260">
            <div class="embet-video-ticket embed-video-watch-mobile w-embed"><video autoplay controls muted
                class="video-js vjs-raily" poster="images/poster.jpeg">
                <source src="{{ asset('videos/Smartwatches_1440_web.mp4') }}" type='video/mp4'>
              </video></div>
          </div>
        </div>
        <div class="wrapper-form-smart">
          <div class="box-h-form">
            <div class="form-block-3 w-form">
              {{-- Contact Form --}}
              <form action="{{ route('formsubmit') }}" method="POST" class="form-3">
                @csrf
                <input class="text-field-3 w-input" maxlength="256" name="email"
                  placeholder="Enter your email" type="email" id="email-14" required="" /><input type="submit"
                  class="form-button-3 w-button" value="Ask for Early Access" />
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection