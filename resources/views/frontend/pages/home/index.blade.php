@extends('frontend.layouts.app')

@section('page.title', 'Ahlawat Associates: Top Lawyers &amp; Law Firms in Delhi, India')

@section('page.description', 'Ahlawat &amp; Associates is one of the best law firms in Delhi, India. We provide legal
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
<section class="payment">
 <div class="container">
    <div class="row">
       <div class="col-md-8">
          <h3 class="payment_para fs-5 mb-3 first text-md-start text-center"data-aos="fade-up" data-aos-once="true">
             Let our team of 
             <span style="color: #e36d6a">legal experts</span> 
          </h3>
          <h2 class="payment_heading text-md-start text-center fw-bolder mb-md-3 mb-0"data-aos="fade-up" data-aos-once="true">
              help you manage your business more 
             <span style="color: #e36d6a">effectively at an affordable cost.</span>
          </h2>

       </div>
       <div class="col-md-4">
          <div
             class="payment_right_container d-flex align-items-center justify-content-md-end justify-content-center"
             >
             <div class="payment_btn_call">
                <button data-bs-toggle="modal"
                  data-bs-target="#pay-modal"  type="button" class="payment_btn"data-aos="fade-up" data-aos-once="true">
                Let&#39;s Talk Now
                </button>
                <p
                   class="payment_call d-flex align-items-center justify-content-center gap-2 mb-0" data-aos="fade-up" data-aos-once="true"
                   >
                   <img src="{{ asset('/assets/frontend/images/call_white.png') }}" alt="" /><span class="fs-5"
                      >+91 9876 54321</span
                      >
                </p>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<!--Payment End-->
<!--Blog Start-->
<section class="blogs">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
          <h3 class="color_heading text-center mb-2"data-aos="fade-up" data-aos-once="true">
             BLOG
          </h3>
          <h1 class="main_heading text-center mb-4"data-aos="fade-up" data-aos-once="true">
             Insights from our experts on various subjects
          </h1>
       </div>
    </div>
    <div class="row">
       <div class="col-lg-3 col-6 mb-lg-0 mb-3">
          <div class="blog_box">
             <div class="blog_img_container"data-aos="fade-up" data-aos-once="true">
                <img
                   src="{{ asset('/assets/frontend/images/blog_1.png') }}"
                   alt="Blog Image"
                   class="blog_img"
                   />
             </div>
             <p class="blog_title"data-aos="fade-up" data-aos-once="true">
                How to Become Practical In House Lawyer
             </p>
             <a href="blog-detail.php" class="blog_link"data-aos="fade-up" data-aos-once="true">
             <span>Learn More </span>
             <img src="{{ asset('/assets/frontend/images/right.png') }}" alt="" />
             </a>
          </div>
       </div>
       <div class="col-lg-3 col-6 mb-lg-0 mb-3">
          <div class="blog_box">
             <div class="blog_img_container"data-aos="fade-up" data-aos-once="true">
                <img
                   src="{{ asset('/assets/frontend/images/blog_2.png') }}"
                   alt="Blog Image"
                   class="blog_img"
                   />
             </div>
             <p class="blog_title"data-aos="fade-up" data-aos-once="true">
                Our Business Thrives To Contribute Global
             </p>
             <a href="blog-detail.php" class="blog_link"data-aos="fade-up" data-aos-once="true">
             <span>Learn More </span>
             <img src="{{ asset('/assets/frontend/images/right.png') }}" alt="" />
             </a>
          </div>
       </div>
       <div class="col-lg-3 col-6">
          <div class="blog_box">
             <div class="blog_img_container"data-aos="fade-up" data-aos-once="true">
                <img
                   src="{{ asset('/assets/frontend/images/blog_3.png') }}"
                   alt="Blog Image"
                   class="blog_img"
                   />
             </div>
             <p class="blog_title"data-aos="fade-up" data-aos-once="true">Makin Innovative Business Strategies</p>
             <a href="blog-detail.php" class="blog_link"data-aos="fade-up" data-aos-once="true">
             <span>Learn More </span>
             <img src="{{ asset('/assets/frontend/images/right.png') }}" alt="" />
             </a>
          </div>
       </div>
       <div class="col-lg-3 col-6">
          <div class="blog_box">
             <div class="blog_img_container"data-aos="fade-up" data-aos-once="true">
                <img
                   src="{{ asset('/assets/frontend/images/blog_4.png') }}"
                   alt="Blog Image"
                   class="blog_img"
                   />
             </div>
             <p class="blog_title"data-aos="fade-up" data-aos-once="true">Makin Innovative Business Strategies</p>
             <a href="blog-detail.php" class="blog_link"data-aos="fade-up" data-aos-once="true">
             <span>Learn More </span>
             <img src="{{ asset('/assets/frontend/images/right.png') }}" alt="" />
             </a>
          </div>
       </div>
    </div>
 </div>
</section>
<!--Blog End-->
<!--Contact Start-->
<section class="contact">
 <div class="container">
    <div class="row">
       <div class="col-lg-6 mb-lg-0 mb-5">
          <h3 class="color_heading mb-2"data-aos="fade-up" data-aos-once="true">CONTACT US</h3>
          <h2 class="main_heading mb-3"data-aos="fade-up" data-aos-once="true">
             We&#39;d love to hear from you
          </h2>
          <div class="contact_icon_box">
             <div class="row">
                <div class="col-6 mb-md-0 mb-4">
                   <div
                      class="contact_icon_container d-flex align-items-center justify-content-center flex-column text-center"data-aos="fade-up" data-aos-once="true"
                      >
                      <div class="contact_icon_box" data-aos="fade-up" data-aos-once="true">
                          <img
                         src="{{ asset('/assets/frontend/images/loaction.png') }}"
                         class="contact_icon"
                         alt="Contact Icon"
                         />
                      <img
                         src="{{ asset('/assets/frontend/images/white_location.png') }}"
                         class="contact_icon"
                         alt="Contact Icon"
                         />
                      </div>
                      
                         
                      <p class="contact_title"data-aos="fade-up" data-aos-once="true">Location</p>
                      <p class="desc mb-0"data-aos="fade-up" data-aos-once="true">
                         Kohinoor Mall City Premier Road Kurla Mumbai 400070
                      </p>
                   </div>
                </div>
                <div class="col-6">
                   <div
                      class="contact_icon_container d-flex align-items-center justify-content-center flex-column text-center"data-aos="fade-up" data-aos-once="true"
                      >
                       <div class="contact_icon_box"data-aos="fade-up" data-aos-once="true" >
                      <img
                         src="{{ asset('/assets/frontend/images/call_big.png') }}"
                         class="contact_icon"
                         alt="Contact Icon"
                         />
                      <img
                         src="{{ asset('/assets/frontend/images/white_call.png') }}"
                         class="contact_icon"
                         alt="Contact Icon"
                         />
                         </div>
                      <p class="contact_title"data-aos="fade-up" data-aos-once="true">24/7 Support</p>
                      <p class="desc mb-0" data-aos="fade-up" data-aos-once="true">
                         +91 987456321 <br />
                         admin@gmail.com
                      </p>
                   </div>
                </div>
             </div>
             <div
                class="contact_rating_container d-flex align-items-center flex-md-row flex-column gap-2 mt-md-4 mt-0"data-aos="fade-up" data-aos-once="true"
                >
                <div class="title">
                   Team of experts, trusted by the clients, trust score 5.0.
                </div>
                <div class="icon">
                   <img src="{{ asset('/assets/frontend/images/stars.png') }}" alt="" />
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-6">
          <div
             class="contact_form_container d-flex align-items-center justify-content-center"
             >
             <form data-aos="fade-up" data-aos-once="true" >
                <p class="contact_form_logo fs-6 fw-bolder mb-md-2 mb-1"data-aos="fade-up" data-aos-once="true">
                   HAVE ANY QUESTION ?
                </p>
                <h4 class="contact_form_heading fs-2 fw-bolder mb-md-4 mb-2"data-aos="fade-up" data-aos-once="true">
                   Drop Us a Line
                </h4>
                <input type="text" placeholder="Name" class="form-control" data-aos="fade-up" data-aos-once="true" />
                <div
                   class="contact_email_phone d-flex align-items-center gap-3"
                   >
                   <input
                      type="text"
                      placeholder="Email"
                      class="form-control"
                      data-aos="fade-up"
                      data-aos-once="true"
                      />
                   <input
                      type="text"
                      placeholder="Phone"
                      class="form-control"
                      data-aos="fade-up"
                      data-aos-once="true"
                      />
                </div>
                <select class="contact_form_select form-select"data-aos="fade-up" data-aos-once="true">
                   <option value="">Services</option>
                   <option value="">Option !</option>
                   <option value="">Option !</option>
                   <option value="">Option !</option>
                </select>
                <button class="contact_form_button"data-aos="fade-up" data-aos-once="true">Send</button>
             </form>
          </div>
       </div>
    </div>
 </div>
</section>
<!--Contact End-->
<!--Social Icons Start-->
<section class="social">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
          <div class="social_icons"data-aos="fade-up" data-aos-once="true">
             <a href="#" class="icon" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
             <a href="#" class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
             <a href="#" class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </div>
       </div>
    </div>
 </div>
</section>
<!--Social Icons End-->
<!--Testimonials Start-->
<section class="testimonial">
 <div class="container">
    <div class="row">
       <div class="col-md-12">
          <h4 class="color_heading text-center"data-aos="fade-up" data-aos-once="true">OUR TESTIMONIALS</h4>
          <h2 class="main_heading text-center mb-3"data-aos="fade-up" data-aos-once="true">What our client says about us</h2>
       </div>
    </div>
    <div class="row">
       <div class="col-md-12">
          <div class="owl-carousel owl-theme">
             <div class="item">
                <div class="test_box"data-aos="fade-up" data-aos-once="true">
                   <div class="test_quote_box"data-aos="fade-up" data-aos-once="true">
                      <img
                         src="{{ asset('/assets/frontend/images/qoute.png') }}"
                         alt="testimonial quote"
                         class="test_quote"
                         />
                   </div>
                   <p class="desc"data-aos="fade-up" data-aos-once="true">
                      The team at Seedling Associates not only well equipped with an in-depth understanding
of the regulatory landscape in India but also an unwavering commitment to providing
top-notch service. They guided me through every step in the process of Udyog Aadhaar
registration, making the entire journey remarkably smooth thanks to seedling associate.
                   </p>
                   <h4 class="test_name"data-aos="fade-up" data-aos-once="true">Karla Clinton</h4>
                </div>
             </div>
             <div class="item">
                <div class="test_box">
                   <div class="test_quote_box"data-aos="fade-up" data-aos-once="true">
                      <img
                         src="{{ asset('/assets/frontend/images/qoute.png') }}"
                         alt="testimonial quote"
                         class="test_quote"
                         />
                   </div>
                   <p class="desc"data-aos="fade-up" data-aos-once="true">
                     Thanks to Seedling Associates, my company is now up and running within the target time
we set as a Company, which make me say that I made the right decision to engaging them
as our advisors. I wholeheartedly recommend their services to anyone looking to
establish a business in India. Seedling Associates truly exceeded my expectations, and I
am incredibly grateful for their support.
                   </p>
                   <h4 class="test_name"data-aos="fade-up" data-aos-once="true">Karla Clinton</h4>
                </div>
             </div>
             <div class="item">
                <div class="test_box">
                   <div class="test_quote_box"data-aos="fade-up" data-aos-once="true">
                      <img
                         src="{{ asset('/assets/frontend/images/qoute.png') }}"
                         alt="testimonial quote"
                         class="test_quote"
                         />
                   </div>
                   <p class="desc"data-aos="fade-up" data-aos-once="true">
                     I am thrilled to share my experience with Seedling Associates, who played an
instrumental role in helping me set up a private limited company in India. From the initial
consultation to the final incorporation, their dedication and expertise were truly
outstanding.
                   </p>
                   <h4 class="test_name"data-aos="fade-up" data-aos-once="true">Karla Clinton</h4>
                </div>
             </div>
             <div class="item">
                <div class="test_box">
                   <div class="test_quote_box"data-aos="fade-up" data-aos-once="true">
                      <img
                         src="{{ asset('/assets/frontend/images/qoute.png') }}"
                         alt="testimonial quote"
                         class="test_quote"
                         />
                   </div>
                   <p class="desc"data-aos="fade-up" data-aos-once="true">
                      Seedling Associates has been a tremendous help in facilitating my GST registration
process. Their team exhibited a deep understanding of the intricacies of the GST system,
guiding me through the application, documentation, and compliance procedures with
great professionalism. Seedling Associates has proven to be a reliable partner for anyone
seeking efficient and expert assistance in GST registration.
                   </p>
                   <h4 class="test_name"data-aos="fade-up" data-aos-once="true">Karla Clinton</h4>
                </div>
             </div>
             <div class="item">
                <div class="test_box">
                   <div class="test_quote_box"data-aos="fade-up" data-aos-once="true">
                      <img
                         src="{{ asset('/assets/frontend/images/qoute.png') }}"
                         alt="testimonial quote"
                         class="test_quote"
                         />
                   </div>
                   <p class="desc"data-aos="fade-up" data-aos-once="true">
                      Seedling Associates has played a pivotal role in making my trademark registration
experience seamless and efficient. Their expert guidance and in-depth knowledge of
trademark laws and procedures ensured that my application was handled with precision. I
couldn&#39;t be more pleased with the support I received from Seedling Associates. If you&#39;re
seeking top-notch trademark registration services, I highly recommend their expertise.
                   </p>
                   <h4 class="test_name"data-aos="fade-up" data-aos-once="true">Karla Clinton</h4>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<!--Testimonials End-->

<!----------------------- home content end --------------->
@endsection