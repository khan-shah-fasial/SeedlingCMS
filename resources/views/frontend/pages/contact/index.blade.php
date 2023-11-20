@extends('frontend.layouts.app')

@section('page.title', 'Ahlawat Associates: Top Lawyers &amp; Law Firms in Delhi, India')

@section('page.description',
    'Ahlawat &amp; Associates is one of the best law firms in Delhi, India. We provide legal
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
                        <h1 class="heading text-center fs-2">Contact Us</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-center mb-0">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item home"><a href="{{ url(route('index')) }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
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
                <div class="col-xl-7">
                    <h2 class="color_heading">PROCESS</h2>
                    <h4 class="main_heading">The 4 Steps of Proccessing</h4>
                    <p class="desc">Our paid consultation is designed to offer you a convenient and efficient way to seek
                        legal advice and direction tailored to
                        your unique situation.</p>
                    <div class="ms-5 mt-5">
                        <div class="main-timeline">
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <img src="assets/frontend/images/p_1.png" alt="" />
                                    </div>
                                    <h5 class="description">
                                        Choose Your Legal Issue:
                                    </h5>
                                    <p>Start by selecting the specific legal problem you're facing.</p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <img src="assets/frontend/images/p_2.png" alt="" />
                                    </div>
                                    <h5 class="description">
                                        Pay Online:
                                    </h5>
                                    <p>You’ll be required to pay the consultation fee through our online portal. This fee
                                        covers the initial consultation with a legal expert.</p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <img src="assets/frontend/images/p_3.png" alt="" />
                                    </div>
                                    <h5 class="description">
                                        Schedule Your Call:
                                    </h5>
                                    <p>After making the payment, you can get in touch with us. You can either call the
                                        provided number or send an email to request a consultation. If you have a preferred
                                        time for your consultation, please mention it. We'll do our best to accommodate your
                                        schedule.</p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <img src="assets/frontend/images/p_4.png" alt="" />
                                    </div>
                                    <h5 class="description">
                                        Connect with a Specialized Lawyer:
                                    </h5>
                                    <p>
                                        We will connect you with a lawyer who specializes in dealing with your particular
                                        legal issue. This ensures you get advice tailored to your specific needs.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <h3 class="color_heading mb-1" data-aos="fade-up" data-aos-once="true">
                        CONTACT US
                    </h3>
                    <h2 class="main_heading mb-3" data-aos="fade-up" data-aos-once="true">
                        Contact Information
                    </h2>
                    <div class="contact_icon_box">
                        <div class="row">
                            <div class="col-md-6 mb-md-0 mb-4">
                                <div class="contact_icon_container d-flex align-items-center justify-content-center flex-column gap-4 text-center"
                                    data-aos="fade-up" data-aos-once="true">
                                    <img src="assets/frontend/images/loaction.png" class="contact_icon" alt="Contact Icon" />
                                    <p class="contact_title">Location</p>
                                    <p class="desc mb-0">
                                        Kohinoor Mall City Premier Road Kurla Mumbai 400070
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_icon_container d-flex align-items-center justify-content-center flex-column gap-4 text-center"
                                    data-aos="fade-up" data-aos-once="true">
                                    <img src="assets/frontend/images/call_big.png" class="contact_icon" alt="Contact Icon" />
                                    <p class="contact_title">24/7 Support</p>
                                    <p class="desc mb-0">
                                        +91 987456321 <br />
                                        admin@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="contact_rating_container d-flex align-items-center gap-2 mt-4" data-aos="fade-up"
                            data-aos-once="true">
                            <div class="title">
                                Our Best Skilled Attorneys, Trust Score 5.0
                            </div>
                            <div class="icon">
                                <img src="assets/frontend/images/stars.png" alt="" />
                            </div>
                        </div>

                        <div class="payment_box">


                            <form>
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </form>
                            <label for="699" class="price_list">
    <h4>₹699 <span>for 20 mins</span></h4>
</label>
<input type="radio" id="699" name="price" hidden>

<label for="999" class="price_list">
    <h4>₹999 <span>for 40 mins</span></h4>
</label>
<input type="radio" id="999" name="price" hidden>
                            <p class="desc">
                                A 20 minute consultation will be enough to identify the material facts, process and
                                documents to be collected in your case
                            </p>

                            <div class="text-center mt-4 mb-4">
                                <a class="backhomebutton" href="#">
                                    BOOK CONSULTATION
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------- Contact process End ---------------- -->

    <!-------------=============== contact end =============== -------------------->

@endsection
