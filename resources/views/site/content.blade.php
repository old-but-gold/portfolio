<ul class="l-main-content main-content">

    <!-- home -->
    <li class="l-section section section--is-active">
        <div class="intro">
            <div class="intro--banner">
                <h1>Your next<br>interactive<br>experience</h1>
                <button class="cta">Hire Us
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                    <span class="btn-background"></span>
                </button>
                <img src="{{asset('assets/img/introduction-visual.png')}}" alt="Welcome">
            </div>
            <div class="intro--options">
                <a href="#0">
                    <h3>Metiew &amp; Smith</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
                </a>
                <a href="#0">
                    <h3>Fantasy interactive</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
                </a>
                <a href="#0">
                    <h3>Paul &amp; shark</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
                </a>
            </div>
        </div>
    </li>

    <!-- coders-works -->
    <li class="l-section section">
        <div class="work">
            <h2>Our Team</h2>
            <div class="work--lockup">
                <ul class="slider">
                    @if (isset($coders) && is_object($coders))
                    @foreach($coders as $c=>$coder)


                            @if ($c!=0 && $c%2==0 && $c%3!=0)
                                <li class="slider--item slider--item-center">
                                <a href="#0">
                                    <div class="slider--item-image">
                                        <img src="{{asset('assets/img/work-metiew-smith.jpg')}}" alt="{!! $coder->name !!}">
                                    </div>
                                    <p class="slider--item-title">{!! $coder->name !!}</p>
                                    <p class="slider--item-description">Bio: {!! $coder->bio !!}</p>
                                </a>
                                </li>
                            @elseif ($c!=0 && $c%3!=0)
                                <li class="slider--item slider--item-right">
                                <a href="#0">
                                    <div class="slider--item-image">
                                         <img src="{{asset('assets/img/work-alex-nowak.jpg')}}" alt="{!! $coder->name !!}">
                                    </div>
                                    <p class="slider--item-title">{!! $coder->name !!}</p>
                                    <p class="slider--item-description">Bio: {!! $coder->bio !!}</p>
                                </a>
                                </li>
                            @else
                                <li class="slider--item slider--item-left">
                                    <a href="#0">
                                        <div class="slider--item-image">
                                            <img src="{{asset('assets/img/work-victory.jpg')}}" alt="{!! $coder->name !!}">
                                        </div>
                                        <p class="slider--item-title">{!! $coder->name !!}</p>
                                        <p class="slider--item-description">Bio: {!! $coder->bio !!}</p>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                        @endif
                </ul>
                <div class="slider--prev">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                    c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                    c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                  </g>
                  </svg>
                </div>
                <div class="slider--next">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                </div>
            </div>
        </div>
    </li>

    <!--  portfolio -about -->
    <li class="l-section section">
        <div class="about">
            <div class="about--banner">
                <h2>We<br>believe in<br>passionate<br>people</h2>
                <a href="#0">Career
                    <span>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                    </g>
                    </svg>
                  </span>
                </a>
                <img src="{{asset('assets/img/about-visual.png')}}" alt="About Us">
            </div>
            <div class="#">
                @if (isset($portfolios) && is_object($portfolios))
                @foreach($portfolios as $portfolio )
                    <a>{!! Html::image($portfolio->images) !!}{!! $portfolio->name !!}</a>
                @endforeach
                @endif
            </div>
        </div>
    </li>

    <!-- contact -->
    <li class="l-section section">
        <div class="contact">
            <div class="contact--lockup">
                <div class="modal">
                    <div class="modal--information">
                        <p>Pawia 5, 31-154 Kraków, Poland</p>
                        <a href="mailto:ouremail@gmail.com">ouremail@gmail.com</a>
                        <a href="tel:+148126287560">+48 12 628 75 60</a>
                    </div>
                    <ul class="modal--options">
                        <li><a href="#0">Bēhance</a></li>
                        <li><a href="#0">dribbble</a></li>
                        <li><a href="mailto:ouremail@gmail.com">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>

    <!-- services-hire us  -->
    <li class="l-section section">
        <div class="hire">
            <h2>You want us to do</h2>
            <!-- checkout formspree.io for easy form setup -->
            <form class="work-request" action="{{ route('send_mail') }}" method="post">
                <div class="work-request--options">
                     <span class="options-b">
                      @if (isset($services) && is_object($services))
                        @foreach($services as $s=>$service)

                            <input id="opt-{!! $s !!}}" type="checkbox" value="{!! $service->name !!}">
                            <label for="opt-{!! $s !!}}">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                              <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                  <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                              </g>
                              </svg>
                                {!! $service->name !!}
                            </label>
                        @endforeach
                      @endif
                     </span>
                </div>
                <div class="work-request--information">
                    <div class="information-name">
                        <input id="name" name="name" type="text" spellcheck="false">
                        <label for="name">Name</label>
                    </div>
                    <div class="information-email">
                        <input id="email" name="email" type="email" spellcheck="false">
                        <label for="email">Email</label>
                    </div>
                </div>
                <input type="submit" value="Send Request">

                {{ csrf_field() }}
            </form>
        </div>
    </li>
</ul>