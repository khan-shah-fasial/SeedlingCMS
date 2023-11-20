<!-------------------------------contact us----------------------------->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-lg-0 mb-5">
                <h3 class="color_heading mb-2" data-aos="fade-up" data-aos-once="true">CONTACT US</h3>
                <h2 class="main_heading mb-3" data-aos="fade-up" data-aos-once="true">
                    We&#39;d love to hear from you
                </h2>
                <div class="contact_icon_box">
                    <div class="row">
                        <div class="col-6 mb-md-0 mb-4">
                            <div class="contact_icon_container d-flex align-items-center justify-content-center flex-column text-center"
                                data-aos="fade-up" data-aos-once="true">
                                <div class="contact_icon_box" data-aos="fade-up" data-aos-once="true">
                                    <img src="{{ asset('/assets/frontend/images/loaction.png') }}" class="contact_icon"
                                        alt="Contact Icon" />
                                    <img src="{{ asset('/assets/frontend/images/white_location.png') }}"
                                        class="contact_icon" alt="Contact Icon" />
                                </div>


                                <p class="contact_title" data-aos="fade-up" data-aos-once="true">Location</p>
                                <p class="desc mb-0" data-aos="fade-up" data-aos-once="true">
                                    Kohinoor Mall City Premier Road Kurla Mumbai 400070
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="contact_icon_container d-flex align-items-center justify-content-center flex-column text-center"
                                data-aos="fade-up" data-aos-once="true">
                                <div class="contact_icon_box" data-aos="fade-up" data-aos-once="true">
                                    <img src="{{ asset('/assets/frontend/images/call_big.png') }}" class="contact_icon"
                                        alt="Contact Icon" />
                                    <img src="{{ asset('/assets/frontend/images/white_call.png') }}"
                                        class="contact_icon" alt="Contact Icon" />
                                </div>
                                <p class="contact_title" data-aos="fade-up" data-aos-once="true">24/7 Support</p>
                                <p class="desc mb-0" data-aos="fade-up" data-aos-once="true">
                                    +{{ get_settings('mobile') }}
                                </p>
                                <p class="desc mb-0" data-aos="fade-up" data-aos-once="true">
                                    <!-- {{ get_settings('email') }} -->
                                    contact@ahlawat <br> associates.in

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact_rating_container d-flex align-items-center flex-md-row flex-column gap-2 mt-md-4 mt-0"
                        data-aos="fade-up" data-aos-once="true">
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
                <div class="contact_form_container d-flex align-items-center justify-content-center">
                    @include('frontend.component.have_any_question_form')
                </div>
            </div>
        </div>
    </div>
</section>
<!-------------------------------contact us----------------------------->