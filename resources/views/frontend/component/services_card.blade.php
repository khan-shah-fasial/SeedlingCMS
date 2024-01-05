<!-------============================== Services card ===================-------------------->

<section class="home_service">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h4 class="color_heading text-center" data-aos="fade-up" data-aos-once="true">Our Services</h4>
                <h2 class="main_heading text-center mb-3" data-aos="fade-up" data-aos-once="true">Lorem Ipsum Doler Site
                    Emit.</h2>
            </div>

            <div class="col-xl-3  col-lg-4 col-md-6 mt-4">
                <div class="flip_card">
                    <div class="flip_card_front">
                        <div class="inner">
                            <img src="{{ asset('/assets/frontend/images/flip.png') }}" alt="">
                            <h5 class="py-3">Start a Business</h5>
                            <p>A private limited company is India's </p>
                        </div>
                    </div>

                    @php
                        $subcate = DB::table('practice_areas')
                            ->where('parent_id', 1)
                            ->where('status', 1)
                            ->get(['title', 'slug', 'status']);
                     @endphp

                    <div class="flip_card_back">
                        <div class="inner">
                            <ul>
                                @foreach ($subcate as $iteams)
                                    <li>
                                        <a
                                            href="{{ url(route('practicearea-detail', ['slug' => $iteams->slug])) }}">
                                            {{ $iteams->title }}
                                        </a>
                                    </li>
                                @endforeach
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3  col-lg-4 col-md-6 mt-4">
                <div class="flip_card">
                    <div class="flip_card_front">
                        <div class="inner">
                            <img src="{{ asset('/assets/frontend/images/flip.png') }}" alt="">
                            <h5 class="py-3">License & Registration </h5>
                            <p>A private limited company is India's </p>
                        </div>
                    </div>
                    @php
                        $subcate = DB::table('practice_areas')
                            ->where('parent_id', 2)
                            ->where('status', 1)
                            ->get(['title', 'slug', 'status']);
                    @endphp
                    <div class="flip_card_back">
                        <div class="inner">
                            <ul>
                                @foreach ($subcate as $iteams)
                                    <li>
                                        <a
                                            href="{{ url(route('practicearea-detail', ['slug' => $iteams->slug])) }}">
                                            {{ $iteams->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3  col-lg-4 col-md-6 mt-4">
                <div class="flip_card">
                    <div class="flip_card_front">
                        <div class="inner">
                            <img src="{{ asset('/assets/frontend/images/flip.png') }}" alt="">
                            <h5 class="py-3">Taxation</h5>
                            <p>A private limited company is India's </p>
                        </div>
                    </div>
                    @php
                        $subcate = DB::table('practice_areas')
                            ->where('parent_id', 3)
                            ->where('status', 1)
                            ->get(['title', 'slug', 'status']);
                    @endphp
                    <div class="flip_card_back">
                        <div class="inner">
                            <ul>
                                @foreach ($subcate as $iteams)
                                    <li>
                                        <a
                                            href="{{ url(route('practicearea-detail', ['slug' => $iteams->slug])) }}">
                                            {{ $iteams->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3  col-lg-4 col-md-6 mt-4">
                <div class="flip_card">
                    <div class="flip_card_front">
                        <div class="inner">
                            <img src="{{ asset('/assets/frontend/images/flip.png') }}" alt="">
                            <h5 class="py-3">IPR & Gaming Services</h5>
                            <p>A private limited company is India's </p>
                        </div>
                    </div>
                    @php
                        $subcate = DB::table('practice_areas')
                            ->where('parent_id', 4)
                            ->where('status', 1)
                            ->get(['title', 'slug', 'status']);
                    @endphp
                    <div class="flip_card_back">
                        <div class="inner">
                            <ul>
                                @foreach ($subcate as $iteams)
                                    <li>
                                        <a
                                            href="{{ url(route('practicearea-detail', ['slug' => $iteams->slug])) }}">
                                            {{ $iteams->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3  col-lg-4 col-md-6 mt-4">
                <div class="flip_card">
                    <div class="flip_card_front">
                        <div class="inner">
                            <img src="{{ asset('/assets/frontend/images/flip.png') }}" alt="">
                            <h5 class="py-3">NGO Compliances</h5>
                            <p>A private limited company is India's </p>
                        </div>
                    </div>
                    @php
                        $subcate = DB::table('practice_areas')
                            ->where('parent_id', 5)
                            ->where('status', 1)
                            ->get(['title', 'slug', 'status']);
                    @endphp
                    <div class="flip_card_back">
                        <div class="inner">
                            <ul>
                                @foreach ($subcate as $iteams)
                                    <li>
                                        <a
                                            href="{{ url(route('practicearea-detail', ['slug' => $iteams->slug])) }}">
                                            {{ $iteams->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="text-center pt-5 ">
                    <a class="text-decoration-none link" href="#">View All Services</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------============================== Services card ===================-------------------->