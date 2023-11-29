@extends('frontend.layouts.app')

@section('page.title', 'Seedling Associates: Top Lawyers &amp; Law Firms in Delhi, India')

@section('page.description', 'Seedling & Associates is one of the best law firms in Delhi, India. We provide legal assistance for startups, FDI, Property law, IP, and more')

@section('page.type', 'website')

@section('page.content')
    <!-- -------------------- blog banner start ---------------- -->

    <section class="blog_page_banner breadcrumes_padd">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 class="heading">Terms Of Use</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-center mb-0">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item home">
                                    <a href="{{ url(route('index')) }}" data-aos="fade-up" data-aos-once="true">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                Terms Of Use
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------- blog banner end   ---------------- -->
    <!-- -------------------- privacy content  start ---------------- -->

    <section class="privacy_content mb-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padd00mb">
                  <ol>
                    <li>
                        <h3>Refund Policy</h3>
                        <p>Please read this document carefully regarding information about your rights and obligations
as our customer, with respect to any purchase or service we provide to you.</p>
<p>We make every effort to provide the service as per the specifications mentioned against each
service or product purchased from Seedling. However, in the event that we are unable to
provide to you the service or product you purchased from us (except any Act of God e.g.
flood, earthquake, fire etc. or riots, any incident beyond our reasonable control), then you
shall be entitled to a refund, subject to the following conditions:</p>
<ul>
    <li>The refund shall be only considered in the event there is a clear, visible deficiency as
regards the service purchased from Seedling.</li>
<li>In the event a customer has paid for a service and then requests for a refund on the
ground that he/she does not want the service anymore, the customer/user shall not be
eligible for a refund in such a scenario.</li>
<li>Refund requests shall not be entertained after the service has been provided.</li>
<li>If the request for a refund has been raised 15 (fifteen) days after the purchase of a
service, such refund request shall be deemed invalid and shall not be considered.</li>
</ul>
<p>If a refund request has been approved by Seedling, the same shall be processed and intimated
to you via email. This refund process could take a minimum of 15 (fifteen) business days to
process and shall be credited to your bank account (or any other method chosen by Seedling).</p>
                    </li>
                    <li>
                        <h3>Cancellation policy</h3>
                        <p>No refunds will be initiated except in the case of non-performance of service by Seedling.</p>
                        <p>However, situations may arise when refund is desired by you such as when there is a delay on
our part in providing the services to you or where you found our services unsatisfactory. In
case of such situations, kindly send us an e-mail (to contact@register-india.com) and we will
look into your grievance. It is, however, clarified that only professional fee paid by you shall
be considered for a refund (and official fee shall not be refunded).</p>
<p>Upon receiving your mail/complaint/grievance, the Management at Seedling will peruse the
matter and shall decide on whether your request for a refund should be processed or not. The
decision of the Management will be final in case of any complaint raised by you.</p>
<p>Moreover, in case of Force Majeure, or any other reasons which are beyond our reasonable
control such as Flood, fire, earthquake, riots, Power/internet interruption, technical glitch,
hacking, Act of God etc., Seedling shall not be liable for any refunds.</p>
                    </li>
                  </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------- privacy content  end   ---------------- -->

    @endsection