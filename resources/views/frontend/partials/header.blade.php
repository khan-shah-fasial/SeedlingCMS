
<!--------------Header start----------------->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!----=========topbar=========----->

                @include('frontend.partials.topbar')

                <!----=========End topbar=========----->

                <div class="bottom_nav_links d-flex align-items-center gap-4">
                    <ul class="nav_links d-flex align-items-center gap-4 list-unstyled mb-0">
                        <li>
                            @php
                                $subcate = DB::table('practice_areas')
                                    ->where('parent_id', 1)
                                    ->get();
                            @endphp
                            <a href="">
                                <span> Start a Business</span>

                                @if(count($subcate) > 0)
                                <img src="{{ asset('/assets/frontend/images/down.png') }}" alt="down Arrow" />
                                @endif

                            </a>

                            <ul class="dropdown">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul>
                                            @foreach ($subcate as $iteams)
                                                <li>
                                                    <a href="{{ url(route('practicearea-detail', ['slug' => $iteams->slug] )) }}">
                                                        {{ $iteams->title }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>


                                </div>
                            </ul>

                        </li>
                        <li>
                            @php
                            $subcate = DB::table('practice_areas')
                                    ->where('parent_id', 2)
                                    ->get();
                            @endphp
                            <a href="">
                                <span>License & Registration</span>

                                @if(count($subcate) > 0)        
                                <img src="{{ asset('/assets/frontend/images/down.png') }}" alt="down Arrow" />
                                @endif

                            </a>

                            <ul class="dropdown">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <ul>

                                            @foreach ($subcate as $iteams)
                                                <li>
                                                    <a href="{{ url(route('practicearea-detail', ['slug' => $iteams->slug] )) }}">
                                                        {{ $iteams->title }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>

                                        
                                    </div>


                                </div>
                            </ul>

                        </li>
                        <li>
                            @php
                                $subcate = DB::table('practice_areas')
                                    ->where('parent_id', 3)
                                    ->get();
                            @endphp
                            <a href="">
                                <span>Taxation</span>

                                @if(count($subcate) > 0)
                                <img src="{{ asset('/assets/frontend/images/down.png') }}" alt="down Arrow" />
                                @endif


                            </a>

                            <ul class="dropdown">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul>

                                            @foreach ($subcate as $iteams)
                                                <li>
                                                    <a href="{{ url(route('practicearea-detail', ['slug' => $iteams->slug] )) }}">
                                                        {{ $iteams->title }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>


                                </div>
                            </ul>

                        </li>
                        <li>
                            @php
                                $subcate = DB::table('practice_areas')
                                    ->where('parent_id', 4)
                                    ->get();
                            @endphp
                            <a href="">
                                <span>IPR & Gaming Services </span>

                                @if(count($subcate) > 0)
                                <img src="{{ asset('/assets/frontend/images/down.png') }}" alt="down Arrow" />
                                @endif


                            </a>

                            <ul class="dropdown">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul>
                                            @foreach ($subcate as $iteams)
                                                <li>
                                                    <a href="{{ url(route('practicearea-detail', ['slug' => $iteams->slug] )) }}">
                                                        {{ $iteams->title }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>


                                </div>
                            </ul>

                        </li>
                        <li>
                            @php
                            $subcate = DB::table('practice_areas')
                                    ->where('parent_id', 5)
                                    ->get();
                            @endphp
                            <a href="">
                                <span>NGO Compliances</span>

                                @if(count($subcate) > 0)
                                <img src="{{ asset('/assets/frontend/images/down.png') }}" alt="down Arrow" />
                                @endif

                            </a>

                            <ul class="dropdown">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul>

                                            @foreach ($subcate as $iteams)
                                                <li>
                                                    <a href="{{ url(route('practicearea-detail', ['slug' => $iteams->slug] )) }}">
                                                        {{ $iteams->title }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>


                                </div>
                            </ul>

                        </li>


                    </ul>
                    <button class="nav_button" data-bs-toggle="modal" data-bs-target="#ask-modal" type="button">
                        <img src="{{ asset('/assets/frontend/images/nav_btn_icon.png') }}" alt="" />
                        <img src="{{ asset('/assets/frontend/images/ask_hover_btn.png') }}" alt="" />
                        <span>Ask an Expert</span>
                    </button>
                </div>


            </div>
        </div>

        <div class="wrapper">
            <nav>
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('/assets/frontend/images/logo.png') }}" alt="logo" />
                    </a>
                </div>
                <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox" />
                <label class="m-menu__toggle" for="menu">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000"
                        stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </label>
                <label class="m-menu__overlay" for="menu"></label>

                <div class="m-menu">
                    <div class="m-menu__header">
                        <div class="logo">
                            <a href="index.php">
                                <img src="{{ asset('/assets/frontend/images/logo.png') }}" alt="logo" />
                            </a>
                        </div>
                        <label class="m-menu__toggle" for="menu">
                            <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000"
                                stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </label>
                    </div>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="blog.php">Blog</a>
                        </li>
                        <li>
                            <a href="contact-us.php">Contact Us</a>
                        </li>
                        <li>
                            <label class="a-label__chevron" for="item-1">
                                Start a Business
                            </label>
                            <input type="checkbox" id="item-1" name="item-1" class="m-menu__checkbox" />
                            <div class="m-menu">
                                <div class="m-menu__header">
                                    <label class="m-menu__toggle" for="item-1">
                                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                                            stroke="#000000" stroke-width="2" stroke-linecap="butt"
                                            stroke-linejoin="arcs">
                                            <path d="M19 12H6M12 5l-7 7 7 7" />
                                        </svg>
                                    </label>
                                    <span>Start a Business</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="">
                                            Private Limited Company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Public Limited Company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">One Person Company</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Producer Company Limited
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">Nidhi Company</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Sole Proprietorship
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">Partnership Firm</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Liability Partnership
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <label class="a-label__chevron" for="item-2">
                                License & Registration
                            </label>
                            <input type="checkbox" id="item-2" name="item-2" class="m-menu__checkbox" />
                            <div class="m-menu">
                                <div class="m-menu__header">
                                    <label class="m-menu__toggle" for="item-2">
                                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                                            stroke="#000000" stroke-width="2" stroke-linecap="butt"
                                            stroke-linejoin="arcs">
                                            <path d="M19 12H6M12 5l-7 7 7 7" />
                                        </svg>
                                    </label>
                                    <span>License & Registration</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="">
                                            Start Up India Registration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Angel Tax Excemption (Section 56, IT Act)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Start-up tax Excemption (Sec 80-IAC)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">IEC Registration</a>
                                    </li>
                                    <li>
                                        <a href="">FSSAI License</a>
                                    </li>
                                    <li>
                                        <a href="">ISP License</a>
                                    </li>
                                    <li>
                                        <a href="">OSP License</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            MSME/UDHYOG Aadhar Registration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            ESI&amp;PF Registration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            ISO Registration (Non-Audit)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Legal Entity Identifier Registration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">ISBN Registration</a>
                                    </li>
                                    <li>
                                        <a href="">Digital Signatures</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Embassy Attestations
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <label class="a-label__chevron" for="item-3">
                                Taxation
                            </label>
                            <input type="checkbox" id="item-3" name="item-3" class="m-menu__checkbox" />
                            <div class="m-menu">
                                <div class="m-menu__header">
                                    <label class="m-menu__toggle" for="item-3">
                                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                                            stroke="#000000" stroke-width="2" stroke-linecap="butt"
                                            stroke-linejoin="arcs">
                                            <path d="M19 12H6M12 5l-7 7 7 7" />
                                        </svg>
                                    </label>
                                    <span>Taxation</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="">GST Registration</a>
                                    </li>
                                    <li>
                                        <a href="">GST Return Filing</a>
                                    </li>
                                    <li>
                                        <a href="">GST Cancellation</a>
                                    </li>
                                    <li>
                                        <a href="">Income Tax Return</a>
                                    </li>
                                    <li>
                                        <a href="">TDS Returns</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            15 CA/CB Certifications
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <label class="a-label__chevron" for="item-4">
                                IPR &amp; Gaming Services
                            </label>
                            <input type="checkbox" id="item-4" name="item-4" class="m-menu__checkbox" />
                            <div class="m-menu">
                                <div class="m-menu__header">
                                    <label class="m-menu__toggle" for="item-4">
                                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                                            stroke="#000000" stroke-width="2" stroke-linecap="butt"
                                            stroke-linejoin="arcs">
                                            <path d="M19 12H6M12 5l-7 7 7 7" />
                                        </svg>
                                    </label>
                                    <span>IPR &amp; Gaming Services</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="">
                                            Online real money gaming licenses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">Gambling Licenses</a>
                                    </li>
                                    <li>
                                        <a href="">Copyright searches</a>
                                    </li>
                                    <li>
                                        <a href="">Copyright filing</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Copyright enforcement
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">Design searches</a>
                                    </li>
                                    <li>
                                        <a href="">Design filings</a>
                                    </li>
                                    <li>
                                        <a href="">Design enforcement</a>
                                    </li>
                                    <li>
                                        <a href="">Design litigation</a>
                                    </li>
                                    <li>
                                        <a href="">Trademark searches</a>
                                    </li>
                                    <li>
                                        <a href="">Trademark filing</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Trademark responses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">Trademark hearings</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Trademark assignments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Trademark oppositions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Trademark enforcement
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Trademark litigation
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <label class="a-label__chevron" for="item-5">
                                NGO Compliances
                            </label>
                            <input type="checkbox" id="item-5" name="item-5" class="m-menu__checkbox" />
                            <div class="m-menu">
                                <div class="m-menu__header">
                                    <label class="m-menu__toggle" for="item-5">
                                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                                            stroke="#000000" stroke-width="2" stroke-linecap="butt"
                                            stroke-linejoin="arcs">
                                            <path d="M19 12H6M12 5l-7 7 7 7" />
                                        </svg>
                                    </label>
                                    <span>NGO Compliances</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="">
                                            Section 8 Company (NGO)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">FCRA Registration</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Niti Aayog/NGO Darpan Registration
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    </div>
    </div>
</header>





<!--------------header end-------------------->
