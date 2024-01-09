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
                        <h1 class="breadcrumb_heading text-center">Contact Us</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url(route('index')) }}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Contact Us
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
                <div class="col-xl-6">
                    <h3 class="color_heading mb-1"  >
                        CONTACT US
                    </h3>
                    <h2 class="main_heading mb-3"  >
                        Contact Information
                    </h2>
                    <div class="contact_icon_box">
                        <div class="row">
                            <div class="col-md-6 mb-md-0 mb-4">
                                <a href="https://maps.app.goo.gl/AzUYjhttgB6Ytswf7" class="contact_icon_container d-flex align-items-center justify-content-center flex-column        gap-md-4 gap-2 text-center"
                                     >
                                    <img src="assets/frontend/images/loaction.png" class="contact_icon" alt="Contact Icon" />
                                    <p class="contact_title">Location</p>
                                    <p class="desc mb-0">
                                        {{ get_contactpage('location') }}
                                    </p>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_icon_container d-flex align-items-center justify-content-center flex-column gap-md-4 gap-2 text-center"
                                     >
                                    <img src="assets/frontend/images/call_big.png" class="contact_icon" alt="Contact Icon" />
                                    <p class="contact_title">24/7 Support</p>
                                    <div>
                                       <a  class="desc mb-0" href="tel:+91-74288 99959">
                                        +{{ get_contactpage('number') }}
                                       </a>
                                       <a class="desc mb-0" href="mailto:admin@seedlingassociates.com">
                                       {{ get_contactpage('email') }}
                                       </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_rating_container d-flex align-items-center flex-md-row flex-column gap-2 mt-4" 
                            >
                            <div class="title">
                                Our Best Skilled Attorneys, Trust Score 5.0
                            </div>
                            <div class="icon">
                                <img src="assets/frontend/images/stars.png" alt="" />
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-6 mt-xl-0 mt-4">


                @php
$practice_Area = DB::table('practice_areas')->orderBy('id', 'asc')->get();
@endphp



                <form id="have_any_question_form" action="{{url(route('contact.create'))}}" method="post" enctype="multipart/form-data"   >
    @csrf
    <p class="contact_form_logo fs-6 fw-bolder mb-md-2 mb-1" >
       HAVE ANY QUESTION ?
    </p>
    <h5 class="contact_form_heading fs-3  fw-bolder mb-md-2 mb-2" >
       Drop Us a Line
    </h5>

    <input type="hidden" name="section" value="Have any Question Form"   />
    <input type="hidden" name="url" value="{{ url()->current() }}"   />

    <input type="text" placeholder="Name" name="name" class="form-control"   required/>
    <div
       class="row "
       >
       <div class="col-md-6 mt-4 mb-md-4" >
       <input
          type="email"
          name="email"
          placeholder="Email"
          class="form-control"
          
          
          required
          class="w-100"
          />
       </div>
     <div class="col-md-6 mt-4 mb-4" >
     <input
          type="number"
          name="phone"
          placeholder="Phone"
          class="form-control"
          
          
          required
          class="w-100"
          />
     </div>
      
    </div>
    <select aria-label="Select a service" name="services" class="contact_form_select form-select mb-4 select_drp_image"  required>
      <option value="">Select the Service</option>
      @foreach ($practice_Area as $row)
          <option value="{{ $row->title }}">{{ $row->title }}</option>
      @endforeach
    </select>
    <textarea name="description" placeholder="Description" class="mb-3" rows="1"></textarea>
    <button type="submit" class="contact_form_button" >Send</button>
 </form>
                </div>
            </div>
        </div>
    </section>




@endsection
