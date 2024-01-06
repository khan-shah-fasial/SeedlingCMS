@extends('frontend.layouts.app')

@section('page.title', 'Seedling Associates: Top Lawyers &amp; Law Firms in Delhi, India')

@section('page.description',
    'Seedling & Associates is one of the best law firms in Delhi, India. We provide legal
    assistance for startups, FDI, Property law, IP, and more')

@section('page.type', 'website')

@section('page.content')

    <!----------========== contact start ===============-------------------->

    <!-- ---------------------- Contact banner start ---------------- -->

    <section class="contact_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h1 class="breadcrumb_heading text-center">Online Payment</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url(route('index')) }}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">
                                   Online Payment
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------- Contact banner End ---------------- -->
    <!-- ---------------------- Contact process start ---------------- -->

    <section class="contact_process">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                <h2 class="color_heading">Payment Process</h2>
                    <div class="payment_box">
                    
                            @php
                                $practice_Area = DB::table('practice_areas')->orderBy('id', 'asc')->get();
                            @endphp

                            <form>
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option value="">Select the Service</option>
                                    @foreach ($practice_Area as $row)
                                        <option value="{{ $row->title }}">{{ $row->title }}</option>
                                    @endforeach
                                </select>


                                <div class="radio_container">
                                    <input type="radio" name="radio" id="one" checked />
                                    <label for="one"> <span class="price" >
                                    ₹{{ get_contactpage('p_20') }}
                                    </span> for 20 mins</label>
                                    <input type="radio" name="radio" id="two" />
                                    <label for="two"> <span class="price" >
                                    ₹{{ get_contactpage('p_40') }}
                                    </span>  for 40 mins</label>
                                </div>
                            </form>
                            <p class="desc">
                                {{ get_contactpage('f_description') }}
                            </p>

                            <div class="text-center mt-4 mb-4">
                                <a class="backhomebutton" href="#">
                                    BOOK CONSULTATION
                                </a>
                            </div>
                        </div>
                   
                </div>
                <div class="col-xl-7">
                    
                    <h4 class="main_heading">{{ get_contactpage('p_title') }}</h4>
                    <p class="desc text_justify">{{ get_contactpage('p_description') }}</p>

                    <div class="ms-4 mt-5">
                        <div class="main-timeline">
                            @php 
                            $i = 1; 
                            $step_bar = json_decode(get_contactpage('steps'), true);
                            @endphp
                    
                            @foreach ($step_bar as $innerArray)
                                @foreach ($innerArray as $title => $description)    
                                    <div class="timeline">
                                        <a href="#" class="timeline-content">
                                            <div class="timeline-icon">
                                                @if($i != '2' && $i != '4') <!-- Use && instead of || -->
                                                    <img src="{{ asset('assets/frontend/images/p_' . $i . '.png') }}" alt="" />
                                                @else
                                                    <img src="{{ asset('assets/frontend/images/a_' . $i . '.png') }}" alt="" />
                                                @endif
                                            </div>
                                            <h5 class="description">
                                                {{ $title }}
                                            </h5>
                                            <p class="text_justify" >{{ $description }}</p>
                                        </a>
                                    </div>
                                    @php $i++; @endphp 
                                @endforeach
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------- Contact process End ---------------- -->

    <!-------------=============== contact end =============== -------------------->

@endsection
