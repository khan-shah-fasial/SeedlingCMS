@php
$practice_Area = DB::table('practice_areas')->where('parent_id', null)->limit(4)->orderBy('id', 'asc')->get();
@endphp
<!--------------------footer start----------------------------->
<!------------------ Contact Start -------------------------->
@if(count($practice_Area) > 1)
<section class="links">
    <div class="container">
       <div class="row">
         @foreach ($practice_Area as $row)
            @php
               $sub_cate = DB::table('practice_areas')->where('parent_id', $row->id)->limit('10')->get();
            @endphp

            @if(count($sub_cate) > 0)
                  <div class="col-md-3 first_links">
                     <ul class="links_url"data-aos="fade-up" data-aos-once="true">
                        @foreach ($sub_cate as $item)
                           <li data-aos="fade-up" data-aos-once="true"><a href="{{ url(route('practicearea-detail', ['slug' => $item->slug] )) }}">{{ $item->title }}</a></li>
                        @endforeach
                     </ul>
                  </div>
            @endif
         @endforeach

       </div>
    </div>
 </section>
 @endif
 <!--links End-->
 
 <!--Footer Start-->
 <footer>
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="footer_btn_container">
                <a href="{{ url(route('contact')) }}" class="footer_btn" data-aos="fade-up" data-aos-once="true">Online Payment</a>
             </div>
             <ul class="footer_links">
                <li><span data-aos="fade-up" data-aos-once="true">© 2023 SEEDLING</span></li>
                <li>|</li>
                <li><a href="{{ url(route('terms')) }}"data-aos="fade-up" data-aos-once="true"> TERMS OF USE </a></li>
                <li>|</li>
                <li><a href="{{ url(route('privacy-policy')) }}" data-aos="fade-up" data-aos-once="true">PRIVACY POLICY</a></li>
                <li>|</li>
                <li><a href="{{ url(route('refund-policy')) }}" data-aos="fade-up" data-aos-once="true">REFUND POLICY</a></li>
                <li>|</li>
                <li><a href="#"data-aos="fade-up" data-aos-once="true">SITE MAP</a></li>
                <li>|</li>
                <li><a href="https://nexgeno.in/"data-aos="fade-up" data-aos-once="true"> SITE BY NEXGENO</a></li>
             </ul>
             <p class="footer_desc mb-lg-0 mb-5 pb-lg-0 pb-2">
             SEEDLING ASSOCIATES PRIVATE LIMITED | CIN U69100DL2022PTC403662 | <span> Registered Office : Plot No. 66, First Floor, Okhla Industrial Estate, #TheHub Okhla Phase III, New Delhi 110020, India  | </span> Phone Number : +91 7428899959 | <span> Email Address: admin@seedlingassociates.com </span>
             </p>
          </div>
       </div>
    </div>
    <div class="fix_footer">
        <a href="https://api.whatsapp.com/send?phone={{ get_settings('whatsapp') }}">
            <span>
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </span>
            <span>
                Whatsapp
            </span>
        </a>
        <a href="tel:+{{ get_settings('mobile') }}">
            <span>
                <i class="fa fa-phone" aria-hidden="true"></i>
            </span>
            <span>
                Call
            </span>
        </a>
        <a href="mailto:{{ get_settings('email') }}">
            <span>
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
            <span>
                Mail
            </span>
        </a>
        <button class="nav_button" data-bs-toggle="modal" data-bs-target="#ask-modal" type="button">
                        <!-- <img src="{{ asset('/assets/frontend/images/nav_btn_icon.png') }}" alt="" />
                        <img src="{{ asset('/assets/frontend/images/ask_hover_btn.png') }}" alt="" /> -->
                        <span>Request a Consultation</span>
                    </button>

    </div>
 </footer>


 <!--Footer Ends-->

 <!-- whatsapp -->
 <div class="">
                <div class="whatsapp_chat_support wcs_fixed_right" id="example_1">

                    <div class="wcs_button wcs_button_circle">
                        <div class="whatsapp_blink">
                            <span href="" class="btn-whatsapp-pulse">
                                <span class="fa fa-whatsapp"></span>
                            </span>
                        </div>
                    </div>
                    <div class="wcs_button_label">
                        Need Help? Chat with us
                    </div>

                    <div class="wcs_popup">
                        <div class="wcs_popup_close">
                            <span class="fa fa-close"></span>
                        </div>
                        <div class="wcs_popup_header">
                            <strong>Hi, I am interested in consulting with you regarding this service</strong>
                            <br>
                            <div class="wcs_popup_header_description">Click one of our representatives below</div>
                        </div>
                        <div class="wcs_popup_person_container">
                            <div class="wcs_popup_person" data-number="+{{ get_settings('whatsapp') }}">
                                <div class="wcs_popup_person_img"><img src="/assets/frontend/images/wh.png"
                                        alt="" /></div>
                                <div class="wcs_popup_person_content">
                                    <div class="wcs_popup_person_name">Seedling  Associates</div>
                                    <div class="wcs_popup_person_description">Seedling  Associates</div>
                                    <div class="wcs_popup_person_status">I'm Online</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 <!-- whatsapp -->
 
 
 <!--Popup End-->
@include('frontend.component.ask_popup_form')
 <!-- <div
       class="modal fade"
       id="pay-modal"
       tabindex="-1"
       role="dialog"
       aria-labelledby="modal-title"
       aria-hidden="true"
     >
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="d-flex justify-content-end pt-4 pe-4">
             <button
               type="button"
               class="btn-close"
               data-bs-dismiss="modal"
               aria-label="Close"
             ></button>
           </div>
 
           <div class="popup">
             <div
               class="contact_form_container d-flex align-items-center justify-content-center"
             >
               <form>
                 <p class="contact_form_logo fs-6 fw-bolder mb-3">
                   HAVE ANY QUESTION suhail
                 </p>
                 <h4 class="contact_form_heading fs-2 fw-bolder mb-1">
                   Make A Payment
                 </h4>
                 <p class="mb-3">
                   There are many variations of passages of lorem available..
                 </p>
                 <input type="text" placeholder="Name" class="form-control" />
                 <div
                   class="contact_email_phone d-flex align-items-center gap-3"
                 >
                   <input type="text" placeholder="Email" class="form-control" />
                   <input type="text" placeholder="Phone" class="form-control" />
                 </div>
                 <select class="contact_form_select form-select">
                   <option value="">Services</option>
                   <option value="">Option !</option>
                   <option value="">Option !</option>
                   <option value="">Option !</option>
                 </select>
                 <button class="contact_form_button">Send</button>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div> -->




<!------------------ footer End -------------------------->


<!--start cookies code-->
<!----<div class="cookies_section">
    <div class="title-box">
        <i class="bx bx-cookie"></i>
        <h3> <img src="/assets/frontend/images/cookie_image.png" alt="" /> Cookies Consent</h3>
    </div>
    <div class="info">
        <p>
            We use cookies to help you navigate efficiently and perform certain functions. You will find detailed
            information about all cookies under each consent category below.
            <a href="{{url(route('cookie-policy'))}}"> Read more...</a>
        </p>
    </div>
    <div class="buttons">
        <button class="cookies_button" id="cookieAccept">Accept</button>
        <button class="cookies_button">Decline</button>
    </div>
</div> --->
<!--end cookies code-->