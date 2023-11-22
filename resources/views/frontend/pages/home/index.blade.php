@extends('frontend.layouts.app')

@section('page.title', 'Seedling Associates: Top Lawyers &amp; Law Firms in Delhi, India')

@section('page.description', 'Seedling & Associates is one of the best law firms in Delhi, India. We provide legal
assistance for startups, FDI, Property law, IP, and more')

@section('page.type', 'website')

@section('page.content')

<!-----===== home content start============---->

<div id="banner" class="noBannerImage noBannerImage">
    <div id="homeAnimation">
      <div class="results_list">
        <div class="current">
          <div class="image">
            <picture>
              <source srcset="{{ asset('/assets/frontend/images/banner_1.png') }} 2400w" type="image/webp" sizes="100vw" />
              <img alt="See Things in a New Way" src="{{ asset('/assets/frontend/images/banner_1.png') }}" srcset="{{ asset('/assets/frontend/images/banner_1.png') }} 2400w" sizes="100vw" />
            </picture>
          </div>
          <div class="titleGroup">
            <div class="title">
              Our mission is to facilitate the path to business success and legal compliance.
            </div>
            <div class="desc">
                Our experts will assist you in unlocking the power of intellectual property, safeguarding your
                innovation and creativity.
             
            </div>
            
          </div>
          <div class="contentGroup">
            <div class="teaser"></div>
            <div class="content"></div>
          </div>
          <div class="animatingSlash"></div>
        </div>
        <div>
          <div class="image">
            <picture>
              <source srcset="{{ asset('/assets/frontend/images/main_banner2.png') }} 2400w" type="image/webp" sizes="100vw" />
              <img alt="Effective Partnership" src="{{ asset('/assets/frontend/images/main_banner2.png') }}" srcset="{{ asset('/assets/frontend/images/main_banner2.png') }} 2400w" sizes="100vw"/>
            </picture>
          </div>
          
          <div class="contentGroup">
            <div class="teaser">
              Your gateway to hassle-free licenses and registrations
            </div>
            <div class="content">
              <p>
                 Make the most of your business potential with our simplified licensing and registration services.
              </p>
            </div>
          </div>
          <div class="animatingSlash"></div>
        </div>
        
        <div>
          <div class="image">
            <picture>
              <source srcset="{{ asset('/assets/frontend/images/main_banner1.png') }} 2400w" type="image/webp" sizes="100vw" />
              <img alt="See Things in a New Way" src="{{ asset('/assets/frontend/images/main_banner1.png') }}" srcset="{{ asset('/assets/frontend/images/main_banner1.png') }} 2400w" sizes="100vw" />
            </picture>
          </div>
          <div class="titleGroup">
            <div class="title">
             Our mission is to facilitate the path to business success and legal compliance.
            </div>
            <div class="desc">
             Our experts will assist you in unlocking the power of intellectual property, safeguarding your
                innovation and creativity.
            </div>
            
          </div>
          <div class="contentGroup">
            <div class="teaser"></div>
            <div class="content"></div>
          </div>
          <div class="animatingSlash"></div>
        </div>
        <div>
          <div class="image">
            <picture>
              <source srcset="{{ asset('/assets/frontend/images/main_banner2.png') }} 2400w" type="image/webp" sizes="100vw" />
              <img alt="Effective Partnership" src="{{ asset('/assets/frontend/images/main_banner2.png') }}" srcset="{{ asset('/assets/frontend/images/main_banner2.png') }} 2400w" sizes="100vw"/>
            </picture>
          </div>
          
          <div class="contentGroup">
            <div class="teaser">
              Your gateway to hassle-free licenses and registrations
            </div>
            <div class="content">
              <p>
               Make the most of your business potential with our simplified licensing and registration services.
              </p>
            </div>
          </div>
          <div class="animatingSlash"></div>
        </div>
        
      </div>
    </div>
  </div>




<!--Hero End-->
<!--Banner Slider Start-->
<section class="banner_slider">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
          <div class="owl-carousel owl-theme" id="banner_slider_carousel">
             <div class="item">
                 <a href="#">
                    <div class="slider_banner_box">
                       <img src="{{ asset('/assets/frontend/images/banner_slider_1.png') }}" alt="" />
                       <img src="{{ asset('/assets/frontend/images/banner_slider_1_white.png') }}"/>
                       <span>Start Up India Registration</span>
                    </div>
                 </a>
             </div>
             <div class="item">
                 <a href="#">
                    <div class="slider_banner_box">
                       <img src="{{ asset('/assets/frontend/images/banner_slider_2.png') }}" alt="" />
                       <img src="{{ asset('/assets/frontend/images/banner_slider_4_white.png') }}"/>
                       <span>Trademark Filing</span>
                    </div>
                  </a>
             </div>
             <div class="item">
                 <a href="#">
                    <div class="slider_banner_box">
                       <img src="{{ asset('/assets/frontend/images/banner_slider_3.png') }}" alt="" />
                       <img src="{{ asset('/assets/frontend/images/banner_slider_3_white.png') }}"/>
                       <span>Gaming Licenses</span>
                    </div>
                </a>
             </div>
             <div class="item">
                 <a href="#">
                    <div class="slider_banner_box">
                       <img src="{{ asset('/assets/frontend/images/banner_slider_4.png') }}" alt="" />
                       <img src="{{ asset('/assets/frontend/images/banner_slider_2_white.png') }}"/>
                       <span>Gambling License</span>
                    </div>
                 </a>
             </div>
            
          </div>
       </div>
    </div>
 </div>
</section>
<!--Banner Slider End-->
<!--About Start-->
<section class="about">
 <div class="container">
    <div class="row">
       <div class="col-lg-6">
          <h6 class="color_heading  mb-3" data-aos="fade-up" data-aos-once="true" >Who We Are</h6>
          <h2 class="main_heading mb-4" data-aos="fade-up" data-aos-once="true">
             We are professionals to safeguard your business
          </h2>
          

  <article class="main">
   <p class="desc mb-0" data-aos="fade-up" data-aos-once="true">
             The Seedling Associates is a New Delhi-based business setup consultancy offering full-service
legal, tax, and corporate advisory services. A team of highly experienced professionals ensures
that we offer comprehensive solutions to businesses of all sizes, from large corporations to mid-
sized businesses and new startups.
          </p>
          
    <input id="read-more-check-1" type="checkbox" class="read-more-check" />
   
    <p class="read-more">
      Our services include business incorporation, Start-up India
registrations, trademark and copyright filings, Audit and assurance services, Taxation
consultancy, and financial advisory services.
    </p>
     <label for="read-more-check-1" class="read-more-label"></label>
  </article>
          <div class="about_points first">
             <div class="icon_container"data-aos="fade-up"data-aos-once="true">
                <div class="img_container">
                   <img src="{{ asset('/assets/frontend/images/check.png') }}" alt="Check Icon" />
                   <img src="{{ asset('/assets/frontend/images/white_check.png') }}" alt="Check Icon" />
                </div>
             </div>
             <div>
                <h5 class="about_point_heading" data-aos="fade-up" data-aos-once="true">Vision</h5>
                <p class="desc mb-0" data-aos="fade-up" data-aos-once="true">
                   We aim to be the leading provider of corporate legal services, delivering exceptional accuracy
and service to customers. In everything we do, we are committed to meet the highest standards of
corporate compliance.
                </p>
             </div>
          </div>
          <div class="about_points">
             <div class="icon_container">
                <div class="img_container"data-aos="fade-up" data-aos-once="true">
                   <img src="{{ asset('/assets/frontend/images/check.png') }}" alt="Check Icon" />
                   <img src="{{ asset('/assets/frontend/images/white_check.png') }}" alt="Check Icon" />
                </div>
             </div>
             <div>
                <h5 class="about_point_heading" data-aos="fade-up" data-aos-once="true">Mission</h5>
                <p class="desc mb-0" data-aos="fade-up" data-aos-once="true">
                   We offer the best services to our clients while ensuring compliance with the law. In order to
increase awareness of governance principles in business, we work with clients.
                </p>
             </div>
          </div>
       </div>
       <div class="col-lg-6" id="counter">
          <div class="row">
             <div class="col-md-6 col-6 first_counter">
                <div class="about_counter_container">
                   <div class="about_right_counter"data-aos="fade-up" data-aos-once="true">
                      <div class="about_counter_icon">
                         <div class="about_counter_img">
                            <img src="{{ asset('/assets/frontend/images/counter_medal.png') }}" alt="counter 1" class="mb-4" />
                            <img src="{{ asset('/assets/frontend/images/counter_medal_1.png') }}" alt="counter 1" class="mb-4"  />
                            
                         </div>
                      </div>
                      <div class="about_counter">
                         <p class="about_counter_number">
                            <span class="counter-value" data-count="40">0</span>+
                         </p>
                         <p class="about_counter_para">years of experience</p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-6 second_counter">
                <div class="about_counter_container">
                   <div class="about_right_counter"data-aos="fade-up" data-aos-once="true">
                      <div class="about_counter_icon">
                         <div class="about_counter_img">
                            <img src="{{ asset('/assets/frontend/images/counter_hand.png') }}" alt="counter 2" />
                            <img src="{{ asset('/assets/frontend/images/counter_hand_1.png') }}" alt="counter 1" />
                         </div>
                      </div>
                      <div class="about_counter">
                         <p class="about_counter_number">
                            <span class="counter-value" data-count="10">0</span>k
                         </p>
                         <p class="about_counter_para">Satisfied Clients</p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-6 third_counter">
                <div class="about_counter_container">
                   <div class="about_right_counter"data-aos="fade-up" data-aos-once="true">
                      <div class="about_counter_icon">
                         <div class="about_counter_img">
                            <img src="{{ asset('/assets/frontend/images/counter_doc.png') }}" alt="counter 3" />
                            <img src="{{ asset('/assets/frontend/images/counter_doc_1.png') }}" alt="counter 1" />
                         </div> 
                      </div>
                      <div class="about_counter w149">
                         <p class="about_counter_number">
                            <span class="counter-value" data-count="700">0</span>+
                         </p>
                         <p class="about_counter_para">Licenses &amp; Registration Done.</p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-6">
                <div class="about_counter_container">
                   <div class="about_right_counter"data-aos="fade-up" data-aos-once="true">
                      <div class="about_counter_icon">
                         <div class="about_counter_img">
                            <img src="{{ asset('/assets/frontend/images/counter_man.png') }}" alt="counter 4" />
                            <img src="{{ asset('/assets/frontend/images/counter_man_1.png') }}" alt="counter 1" />
                         </div>
                      </div>
                      <div class="about_counter">
                         <p class="about_counter_number">
                            <span class="counter-value" data-count="50">0</span>+
                         </p>
                         <p class="about_counter_para">Team of Experts</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<!--About End-->
<!--Payment Start-->
@include('frontend.component.lets_talk_section')
<!--Payment End-->
<!--Blog Start-->
@include('frontend.component.blog')
<!--Blog End-->
<!--Contact Start-->
@include('frontend.component.contact_us_section')
<!--Contact End-->
<!--Social Icons Start-->
@include('frontend.component.testimonials')
<!--Testimonials End-->

<!----------------------- home content end --------------->
@endsection