@php
$practice_Area = DB::table('practice_areas')->where('parent_id', null)->limit(5)->orderBy('id', 'asc')->get();

@endphp

<!--------------Header start----------------->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!----=========topbar=========----->

                @include('frontend.partials.topbar')

                <!----=========End topbar=========----->
                <!-- <div class="bottom_nav_links d-flex align-items-center gap-4">
                    <ul class="nav_links d-flex align-items-center gap-4 list-unstyled mb-0">
                        @foreach ($practice_Area as $row)

                            <li>
                                <a href="{{ url(route('practicearea-detail', ['slug' => $row->slug] )) }}">
                                    <span>{{ $row->title }}</span>
                                    @php
                                        $sub_cate = DB::table('practice_areas')->where('parent_id', $row->id)->get();
                                    @endphp

                                    @if(count($sub_cate) > 0)
                                    <img src="{{ asset('/assets/frontend/images/down.png') }}" alt="down Arrow" />
                                    @endif

                                </a>
                                @if(count($sub_cate) > 0)
                                    <ul class="dropdown">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    @foreach ($sub_cate as $item)
                                                        <li>
                                                            <a href="{{ url(route('practicearea-detail', ['slug' => $item->slug] )) }}">
                                                                {{ $item->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                            {{--
                                            <div class="col-md-6">
                                                <ul>
                                                    <li>
                                                        <a href="practice-area.php">
                                                            Sole Proprietorship
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="practice-area.php">
                                                            Partnership Firm
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="practice-area.php">
                                                            Liability Partnership
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </ul>
                                @endif

                            </li>

                        @endforeach

                    </ul>
                    <button class="nav_button" data-bs-toggle="modal" data-bs-target="#ask-modal" type="button">
                        <img src="{{ asset('/assets/frontend/images/nav_btn_icon.png') }}" alt="" />
                        <img src="{{ asset('/assets/frontend/images/ask_hover_btn.png') }}" alt="" />
                        <span>Ask an Expert</span>
                    </button>
                </div> -->
                 <div class="bottom_nav_links d-flex align-items-center gap-4">
                    <ul class="nav_links d-flex align-items-center gap-4 list-unstyled mb-0">
                       
                            <li>
                                <a href="{{ url(route('practicearea-detail', ['slug' => $row->slug] )) }}">
                                    <span>Title</span>
                                 
                                    <img src="{{ asset('/assets/frontend/images/down.png') }}" alt="down Arrow" />
                                   

                                </a>
                              
                                    <ul class="dropdown">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                  
                                                        <li>
                                                            <a href="{{ url(route('practicearea-detail', ['slug' => $item->slug] )) }}">
                                                               Sub Title
                                                            </a>
                                                        </li>
                                                        <li>
                                                        <a href="practice-area.php">
                                                            Sole Proprietorship
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="practice-area.php">
                                                            Partnership Firm
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="practice-area.php">
                                                            Liability Partnership
                                                        </a>
                                                    </li>
                                                   

                                                </ul>
                                            </div>
                                            
                                            
                                        </div>
                                    </ul>

                            </li>
                            <li>
                                <a href="{{ url(route('practicearea-detail', ['slug' => $row->slug] )) }}">
                                    <span>Title</span>
                                 
                                    <img src="{{ asset('/assets/frontend/images/down.png') }}" alt="down Arrow" />
                                   

                                </a>
                              
                                    <ul class="dropdown">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                  
                                                        <li>
                                                            <a href="{{ url(route('practicearea-detail', ['slug' => $item->slug] )) }}">
                                                               Sub Title
                                                            </a>
                                                        </li>
                                                        <li>
                                                        <a href="practice-area.php">
                                                            Sole Proprietorship
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="practice-area.php">
                                                            Partnership Firm
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="practice-area.php">
                                                            Liability Partnership
                                                        </a>
                                                    </li>
                                                   

                                                </ul>
                                            </div>
                                            
                                            
                                        </div>
                                    </ul>

                            </li>
                            <li>
                                <a href="{{ url(route('practicearea-detail', ['slug' => $row->slug] )) }}">
                                    <span>Title</span>
                                 
                                    <img src="{{ asset('/assets/frontend/images/down.png') }}" alt="down Arrow" />
                                   

                                </a>
                              
                                    <ul class="dropdown">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                  
                                                        <li>
                                                            <a href="{{ url(route('practicearea-detail', ['slug' => $item->slug] )) }}">
                                                               Sub Title
                                                            </a>
                                                        </li>
                                                        <li>
                                                        <a href="practice-area.php">
                                                            Sole Proprietorship
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="practice-area.php">
                                                            Partnership Firm
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="practice-area.php">
                                                            Liability Partnership
                                                        </a>
                                                    </li>
                                                   

                                                </ul>
                                            </div>
                                            
                                            
                                        </div>
                                    </ul>

                            </li>
                            <li>
                                <a href="{{ url(route('practicearea-detail', ['slug' => $row->slug] )) }}">
                                    <span>Title</span>
                                 
                                    <img src="{{ asset('/assets/frontend/images/down.png') }}" alt="down Arrow" />
                                   

                                </a>
                              
                                    <ul class="dropdown">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                  
                                                        <li>
                                                            <a href="{{ url(route('practicearea-detail', ['slug' => $item->slug] )) }}">
                                                               Sub Title
                                                            </a>
                                                        </li>
                                                        <li>
                                                        <a href="practice-area.php">
                                                            Sole Proprietorship
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="practice-area.php">
                                                            Partnership Firm
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="practice-area.php">
                                                            Liability Partnership
                                                        </a>
                                                    </li>
                                                   

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
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2"
                        stroke-linecap="butt" stroke-linejoin="arcs">
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
                                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000"
                                            stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                            <path d="M19 12H6M12 5l-7 7 7 7" />
                                        </svg>
                                    </label>
                                    <span>Start a Business</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="practice-area.php">
                                            Private Limited Company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            Public Limited Company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">One Person Company</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            Producer Company Limited
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Nidhi Company</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            Sole Proprietorship
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Partnership Firm</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
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
                                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000"
                                            stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                            <path d="M19 12H6M12 5l-7 7 7 7" />
                                        </svg>
                                    </label>
                                    <span>License & Registration</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="practice-area.php">
                                            Start Up India Registration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            Angel Tax Excemption (Section 56, IT Act)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            Start-up tax Excemption (Sec 80-IAC)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">IEC Registration</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">FSSAI License</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">ISP License</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">OSP License</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            MSME/UDHYOG Aadhar Registration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            ESI&amp;PF Registration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            ISO Registration (Non-Audit)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            Legal Entity Identifier Registration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">ISBN Registration</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Digital Signatures</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
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
                                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000"
                                            stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                            <path d="M19 12H6M12 5l-7 7 7 7" />
                                        </svg>
                                    </label>
                                    <span>Taxation</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="practice-area.php">GST Registration</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">GST Return Filing</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">GST Cancellation</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Income Tax Return</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">TDS Returns</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
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
                                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000"
                                            stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                            <path d="M19 12H6M12 5l-7 7 7 7" />
                                        </svg>
                                    </label>
                                    <span>IPR &amp; Gaming Services</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="practice-area.php">
                                            Online real money gaming licenses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Gambling Licenses</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Copyright searches</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Copyright filing</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            Copyright enforcement
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Design searches</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Design filings</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Design enforcement</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Design litigation</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Trademark searches</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Trademark filing</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            Trademark responses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">Trademark hearings</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            Trademark assignments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            Trademark oppositions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
                                            Trademark enforcement
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
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
                                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000"
                                            stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                            <path d="M19 12H6M12 5l-7 7 7 7" />
                                        </svg>
                                    </label>
                                    <span>NGO Compliances</span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="practice-area.php">
                                            Section 8 Company (NGO)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">FCRA Registration</a>
                                    </li>
                                    <li>
                                        <a href="practice-area.php">
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