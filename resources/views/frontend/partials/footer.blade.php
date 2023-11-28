@php
$practice_Area = DB::table('practice_areas')->where('parent_id', null)->limit(4)->orderBy('id', 'asc')->get();
@endphp
<!--------------------footer start----------------------------->
<!------------------ Contact Start -------------------------->

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
                <li><a href="#"data-aos="fade-up" data-aos-once="true">© 2023 SEEDLING</a></li>
                <li>|</li>
                <li><a href="{{ url(route('terms')) }}"data-aos="fade-up" data-aos-once="true"> TERMS OF USE </a></li>
                <li>|</li>
                <li><a href="{{ url(route('privacy-policy')) }}" data-aos="fade-up" data-aos-once="true">PRIVACY</a></li>
                <li>|</li>
                <li><a href="#"data-aos="fade-up" data-aos-once="true">SITE MAP</a></li>
                <li>|</li>
                <li><a href="#"data-aos="fade-up" data-aos-once="true"> SITE BY NEXGENO</a></li>
             </ul>
             <p class="footer_desc mb-0">
                The choice of a lawyer is an important decision and should not
                be based solely on advertisements. <br />
                Past results do not guarantee future results. Every case is
                different and must be judged on its own merits.
             </p>
          </div>
       </div>
    </div>
 </footer>
 <!--Footer Ends-->
 
 
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