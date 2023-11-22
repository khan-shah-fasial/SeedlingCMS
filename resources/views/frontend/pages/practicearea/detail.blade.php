@extends('frontend.layouts.app')

@section('page.title', "$detail->meta_title")

@section('page.description', "$detail->meta_description")

@section('page.type', 'practice area')

@section('page.publish_time', "$detail->updated_at")

@section('page.schema')
<!--------------------------- Page Schema --------------------------------->

<script type="application/ld+json">
    {
      "@context": "https://schema.org/", 
      "@type": "BreadcrumbList", 
      "itemListElement": [{
        "@type": "ListItem", 
        "position": 1, 
        "name": "Home",
        "item": "{{ url(route('index')) }}"  
      },{
        "@type": "ListItem", 
        "position": 2, 
        "name": "Practice Areas",
        "item": "{{ url(route('practicearea')) }}"  
      },{
        "@type": "ListItem", 
        "position": 3, 
        "name": "@php echo str_replace('&nbsp;',' ',htmlspecialchars_decode ($detail->title)); @endphp",
        "item": "{{ url()->current() }}"  
      }]
    }
</script>
  
<!--------------------------- Page Schema end--------------------------------->
@endsection

@section('page.content')


<!-------===========practicearea start===================------------>


    <!-- -------------------------- Service banner Start ---------------- -->
    <section class="service_banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="service_banner_heading mb-3">
                {{ $detail->breadcrumb_title }}
              </h1>
              <p class="service_banner_para">
                {{ $detail->breadcrumb_subtitle }}
              </p>
              <div
                class="service_price_btn d-flex align-items-center gap-4 justify-content-center"
              >
                <h2 class="mb-0">Price Start at Rs {{ $detail->indian_price }}/-</h2>
                <button class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#ask-modal">
                  <img src="assets/frontend/images/nav_btn_icon.png" alt="" />
                  <img src="assets/frontend/images/ask_hover_btn.png" alt="" />
                  <span>Ask an Expert</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- -------------------------- Service banner End ---------------- -->
  
@php 
    $progress_bar = json_decode($detail->progress_bar, true);
@endphp

@if(count($progress_bar) > 0)
<!-- -------------------------- Service steps Start ---------------- -->
  
      <div class="service_steps">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="service_steps_heading text-center">
                {{ $detail->progress_bar_title }}
              </h1>
              <div class="service_steps_main_timeline">
                <div class="conference_center_line"></div>
                <div class="conference_timeline_content">
                    
                    @php 
                        $i = 1; 
                        $progress_bar_reversed = array_reverse($progress_bar);
                        $i = count($progress_bar_reversed) + 1;
                    @endphp
                    
                    @foreach ($progress_bar_reversed as $innerArray)
                        @foreach ($innerArray as $title => $description)
                            @php $i--; @endphp 
                            <div class="timeline_article timeline_article_{{ $i % 2 == 0 ? 'bottom' : 'top' }}">
                                <div class="meta_date">{{ $i }}</div>
                                <div class="content_box">
                                    <h3>{{ $title }}</h3>
                                    <p>{{ $description }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
<!-- -------------------------- Service steps End ---------------- -->
@endif  

<!-- -------------------------- Service last start ---------------- -->
  
      <div class="service_last">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <!-- -------------service last header start -------------- -->
              <div>
                <h1 class="service_last_logo" data-aos="fade-up"data-aos-once="true" >{{ $detail->Content_title }}</h1>
                <div class="service_content"data-aos="fade-up"data-aos-once="true" >
                    @php echo html_entity_decode($detail->content) @endphp
                </div>
              </div>
              <!-- -------------service last header End -------------- -->
              <!-- -------------service last Benefit Start -------------- -->
  
              <div class="service_last_benefit">
                <h1 class="benefits_heading text-center" data-aos="fade-up"data-aos-once="true">
                  Benefits of Private Limited <br />
                  Company registration
                </h1>
                <div class="row">
                  <div class="col-md-4">
                    <div class="benefit_box" data-aos="fade-up"data-aos-once="true">
                      Limited <br />
                      Liability
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="benefit_box"data-aos="fade-up"data-aos-once="true">
                      Separate <br />
                      Legal Enity
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="benefit_box"data-aos="fade-up"data-aos-once="true">
                      Trust <br />
                      worthiness
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="benefit_box"data-aos="fade-up"data-aos-once="true">
                      Perpetual <br />
                      Existence
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="benefit_box"data-aos="fade-up"data-aos-once="true">
                      Tax <br />
                      Benefits
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="benefit_box" data-aos="fade-up"data-aos-once="true">
                      Easy access <br />
                      to Loans
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- -------------service last Benefit End -------------- -->
              <h3 class="service_last_sub_heading"data-aos="fade-up"data-aos-once="true">Limited Liability</h3>
              <p class="service_last_sub_para mb-5" data-aos="fade-up"data-aos-once="true">
                The main benefit of setting up a private limited company is that
                the liability of members becomes limited means they don’t have to
                sell their personal assets at the time of liquidation. The
                liability will be limited to the part of your share in the
                company.
              </p>
              <h3 class="service_last_sub_heading" data-aos="fade-up"data-aos-once="true">Separate Legal Entity</h3>
              <p class="service_last_sub_para mb-5" data-aos="fade-up"data-aos-once="true">
                In a private limited company, the company has a separate entity
                from its members. This means that the company is liable for all
                the management of assets, liabilities, debtors and creditors. So,
                in case of any loss, the creditors cannot legally proceed against
                you.
              </p>
              <h3 class="service_last_sub_heading" data-aos="fade-up"data-aos-once="true">Trustworthiness</h3>
              <p class="service_last_sub_para mb-5" data-aos="fade-up"data-aos-once="true">
                In India, if you have to register a company, then you must
                register with the Registrar of Companies as per the Companies Act,
                2013. Anyone can check the details of the company through the
                online portal of MCA. So, the company is registered on a
                government website which shows credibility and builds the trust of
                the clients.
              </p>
              <h3 class="service_last_sub_heading" data-aos="fade-up"data-aos-once="true">Perpetual Existence</h3>
              <p class="service_last_sub_para mb-5" data-aos="fade-up"data-aos-once="true">
                The company has a perpetual succession, meaning it will continue
                or its existence will be uninterrupted until it is dissolved
                legally. On the death or cessation of a member, the company
                continues without any change in the membership.
              </p>
              <h3 class="service_last_sub_heading" data-aos="fade-up"data-aos-once="true"  >Easy Access to Loans</h3>
              <p class="service_last_sub_para" data-aos="fade-up"data-aos-once="true">
                Compared to public companies, private limited companies have more
                options to generate funds by offering securities to the public
                without any limitation and can get money from angel investors.
              </p>
              <p class="service_last_sub_para" data-aos="fade-up"data-aos-once="true">
                However, acquiring this business entity is no small task, for
                there are many requirements for a private limited company. And if
                you want to register any company type including, public limited
                company or one person company - read full process here How to
                Register a Company in India.
              </p>
  
              <!-- -------------service last Eligibility start -------------- -->
  
              <div class="service_last_eligibility" data-aos="fade-up"data-aos-once="true">
                <h2 class="logo" data-aos="fade-up"data-aos-once="true">Eligibility</h2>
                <h3 class="heading" data-aos="fade-up"data-aos-once="true">
                  Eligibility criteria for Private Limited Company Registration in
                  India
                </h3>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Private Limited Company registration requirements:
                </p>
                <ul class="first_list" data-aos="fade-up"data-aos-once="true">
                  <li>Minimum two directors</li>
                  <li>Minimum two shareholders</li>
                  <li>At least one director should be from India</li>
                  <li>Maximum 200 shareholders</li>
                  <li>The name must be unique</li>
                  <li>Minimum capital should be Rs. 1 lakh</li>
                  <li>
                    Registered address of company should be commercial space or
                    ranted with NOC
                  </li>
                </ul>
                <p class="desc"data-aos="fade-up"data-aos-once="true">
                  As per the Companies Act, 2013, the private limited company must
                  fulfill the below criteria before applying for the registration
                  process in India.
                </p>
                <ul class="second_list" data-aos="fade-up"data-aos-once="true">
                  <li>
                    A company must have a minimum of two directors and a maximum
                    of fifteen. One member must be a resident of India.
                  </li>
                  <li>
                    There should be a minimum of two shareholders and a maximum of
                    200 shareholders.
                  </li>
                  <li>
                    The name must be unique, and it should not be similar to any
                    existing company name or trademark in India.
                  </li>
                  <li>
                    The minimum capital amount required for a Private Limited
                    company should be Rs. 1 lakh.
                  </li>
                  <li>
                    The registered address of the company should be a commercial
                    space, even the rented home can be registered as an office, as
                    long as NOC is taken from the landlord.
                  </li>
                </ul>
              </div>
  
              <!-- -------------service last Eligibility End -------------- -->
              <!-- -------------service last Documents  start -------------- -->
  
              <div class="service_last_documents">
                <h1 class="logo" data-aos="fade-up"data-aos-once="true">Documents Required</h1>
                <h2 class="heading mb-5" data-aos="fade-up"data-aos-once="true">
                  Documents required for Private Limited Company Registration in
                  India
                </h2>
  
                <h4 class="list_heading" data-aos="fade-up"data-aos-once="true">Documents Required</h4>
                <ul class="first_list" data-aos="fade-up"data-aos-once="true">
                  <li>
                    Self-attested copy of identify proof of all the Directors
                  </li>
                  <li>Address proof of all the directors and shareholders</li>
                  <li>DIN and DSC of the Directors</li>
                </ul>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">
                  Documents required for Private Limited Company Registration in
                  India
                </h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Self-attested copy of identity proof of all the Directors and
                  Shareholders. Any one of the following can be used as proof of
                  identification.
                </p>
                <ul class="second_list" data-aos="fade-up"data-aos-once="true">
                  <li>Self-attested PAN card copy</li>
                  <li>PAN card</li>
                  <li>Aadhar card</li>
                  <li>Driving license</li>
                  <li>Passport</li>
                </ul>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Self-attested copy of identity proof of all the Directors and
                  Shareholders. Any one of the following can be used as proof of
                  identification.
                </p>
                <ul class="second_list" data-aos="fade-up"data-aos-once="true">
                  <li>Latest telephone bill (not older than 2 months)</li>
                  <li>Latest electricity bill (not older than 2 months)</li>
                  <li>Bank account statement showing address</li>
                </ul>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Self-attested copy of identity proof of all the Directors and
                  Shareholders. Any one of the following can be used as proof of
                  identification.
                </p>
              </div>
  
              <!-- -------------service last Documents  End -------------- -->
  
              <!-- -------------service last Process  start -------------- -->
  
              <div class="service_last_process">
                <h1 class="logo" data-aos="fade-up"data-aos-once="true">Process</h1>
                <h2 class="main_heading mb-4" data-aos="fade-up"data-aos-once="true">
                  Process for Private Limited Company Registration in India
                </h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Want to know the procedure for the formation of a Private
                  Limited Company in India?
                </p>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  But before jumping into the procedure, you must know that the
                  registration process is not easy, it's complex because of the
                  many compliances involved. Here you don’t need to worry about
                  the process because our expert will assist you at every step.
                </p>
                <p class="desc mb-4" data-aos="fade-up"data-aos-once="true">
                  sWell, the procedure for online Pvt Ltd Co incorporation in
                  India is as follows:
                </p>
                <h3 class="list_heading mb-4" data-aos="fade-up"data-aos-once="true">
                  Process for Private Limited Company Registration in India
                </h3>
                <ul class="first_list" data-aos="fade-up"data-aos-once="true">
                  <li>Obtain Digital Signature Certificate</li>
                  <li>Apply for Director Identification Number (DIN)</li>
                  <li>Get Name Approval</li>
                  <li>Form SPICe+ (INC-32)</li>
                  <li>e-MoA(INC-33) and e-AoA (INC-34)</li>
                  <li>PAN and TAN Application</li>
                </ul>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">
                  Step 1: Obtain Digital Signature Certificate
                </h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  The Directors of the company must have a digital signature
                  certificate to file the company formation. As the process is
                  completely online, so all the forms are required to have a
                  signature.
                </p>
                <p class="desc mb-4" data-aos="fade-up"data-aos-once="true">
                  A DSC certificate is compulsory for all subscribers and has it
                  in the Memorandum of Association (MoA) and Articles of
                  Association (AoA). The certificate must be Government
                  recognised, and the cost depends on the certifying authority.
                </p>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">
                  Step 2: Apply for Director Identification Number (DIN)
                </h2>
                <p class="desc mb-4" data-aos="fade-up"data-aos-once="true">
                  The DIN number must be obtained by the person who wants to be a
                  Director of a company. One DIN is enough to become a director.
                  To obtain the number, fill the SPICe+ Form with details such as
                  the name of the proposed director, PAN card, Aadhar card, and
                  address proof. A maximum of three directors can apply for DIN
                  but if the applicant wants to incorporate more than three
                  directors. Here first the company should be incorporated with
                  three directors and then appoint a new director after
                  incorporation.
                </p>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">Step 3: Get Name Approval</h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Reserve the name through the SPICe+ form, in this two proposed
                  names can be reserved and one re-submission can be done while
                  reserving Unique Names of the Companies.
                </p>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  In case the name gets rejected due to any similarity or other
                  reason, the applicant has to refile another SPICe+ form with the
                  prescribed fees. Once the name gets approved, it will be
                  reserved for 20 days. During this time the company must proceed
                  with the incorporation process by submitting Part B of the
                  SPICe+ form.
                </p>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Another option for name approval is by filing Part-A and Part-B
                  of the SPICe+ Form together: The company can file the name along
                  with the application for incorporation. Part B of the SPICe+
                  enables applying for incorporation.
                </p>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  In case of rejection of the application due to non-approval of
                  the name, the applicant will get a chance to refill the same
                  SPICe+ form without any further charges. This means you get two
                  chances to change the name without paying an extra charge of Rs.
                  1000/- both times.
                </p>
                <p class="desc mb-4" data-aos="fade-up"data-aos-once="true">
                  After getting the second chance, even if the name gets rejected,
                  then the applicant has to file the SPICe+ form from scratch. So,
                  this option is cheaper as compared to the first one. The whole
                  process of name approval and incorporation takes 2-3 days.
                </p>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">Step 4: Form SPICe+ (INC-32)</h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  The MCA has introduced the Form SPICe+ form for new companies.
                  The process is web-based and it makes the process easier. The
                  online process helps in real-time validation of the
                  incorporation process seamlessly and quickly.
                </p>
                <p class="desc mb-4" data-aos="fade-up"data-aos-once="true">
                  Information filled in Part -A and Part B of the SPICe+ form will
                  be automatically shown in the linked forms such as AGILE PRO,
                  eAoA, eMoA, URC1, and INC-9. Download the forms in PDF and sign
                  digitally.
                </p>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">Step 5: e-MoA(INC-33) and e-AoA (INC-34)</h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  It is an electronic Memorandum of Association and an electronic
                  Article of Association. These forms have brought the simplified
                  process of company registration in India. Memorandum shows the
                  charter of the company whereas the other hand AoA shows the
                  internal rules and regulations of the company.
                </p>
  
                <p class="desc mb-4" data-aos="fade-up"data-aos-once="true">
                  First, the MoA and AoA are required to be filed physically. But
                  now these forms are filed online on the MCA portal as a linked
                  form with SPICe+ (INC-32). Both documents must be digitally
                  signed by the subscribers.
                </p>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">Step 6: PAN and TAN Application</h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  With the help of the SPICe+ form, PAN and TAN can be applied.
                  The system will automatically generate the form after the
                  submission of the SPICe+ form. An email containing the
                  certificate of incorporation, PAN and TAN will be sent to the
                  applicant. The PAN card will be issued by the Income Tax
                  Department.
                </p>
  
                <p class="desc mb-4" data-aos="fade-up"data-aos-once="true">
                  If all the details filled in the form are correct, the MCA will
                  approve the registration and provide a Corporate Identity Number
                  (CIN). Applicants can track the application MCA portal.
                </p>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">
                  Capital Required to Set Up a Private Limited Company
                </h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  A company can incorporate in India with a minimum amount of
                  capital, and there is no need for shareholders to have a fixed
                  amount of capital. So, while setting up the capital structure
                  the following points should be considered:
                </p>
  
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Face Value of Share: The face value of a share is typically the
                  price per share at which the company is incorporated. The face
                  value of shares can be Rs. 1 or Rs. 10 or Rs. 100 or Rs. 1000 or
                  Rs. 10,000.
                </p>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Authorized Capital: The total amount of stock that a company can
                  issue to its shareholders. All companies are typically formed
                  with an authorized capital of Rs. 1 lakh or Rs. 10 lakhs. If a
                  larger authorized capital is required, the company must pay
                  additional fees to the Ministry of Corporate Affairs. A
                  company's authorized capital can be increased at any time after
                  incorporation.
                </p>
  
                <p class="desc mb-4" data-aos="fade-up"data-aos-once="true">
                  Paid-up Capital: A company's paid-up capital is the number of
                  shares issued to shareholders in exchange for money paid or
                  deposited to the company. A company's paid-up capital cannot be
                  greater than its authorized share capital.
                </p>
              </div>
  
              <!-- -------------service last Process  End -------------- -->
              <!-- -------------service last Compliances start -------------- -->
  
              <div class="service_last_compliances">
                <h1 class="logo mb-4" data-aos="fade-up"data-aos-once="true">Compliances</h1>
                <h2 class="heading mb-4" data-aos="fade-up"data-aos-once="true">Private Limited Company Compliances</h2>
  
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Once a company got registered, the following compliances have to
                  be maintained:
                </p>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Directors KYC: Every individual must have a Director
                  Identification Number (DIN) which is assigned during the
                  incorporation process. The KYC process should be complete. This
                  verification ensures that their phone number and email address
                  on record with the Ministry of Corporate Affairs are up to
                  date-and accurate.
                </p>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Business Commencement: Within 180 days of incorporating a
                  company it is mandatory to open a Bank Current Account and have
                  shareholders deposit the subscription amount mentioned in the
                  Memorandum of Association (MOA).
                </p>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  For example, if a company is incorporated with a paid-up capital
                  of Rs. 1 lakh then the shareholders must deposit Rs. 1 lakh into
                  the company's bank account. Alongside this, they also need to
                  file the bank statement with the MCA in order to obtain a
                  certificate for commencing business operations.
                </p>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Annual Filings with MCA: All companies which are registered in
                  India are required to submit their statements to the Ministry of
                  Corporate Affairs each year. If a company is incorporated
                  between January and March it has the option to include its MCA
                  return, as part of the next financial year's filings. The MCA
                  annual return includes Form MGT 7 and Form AOC 4 both of which
                  need to be signed by the Directors and a practicing professional
                </p>
                <p class="desc mb-4" data-aos="fade-up"data-aos-once="true">
                  Income Tax Filing: Every company must file an income tax return
                  using Form ITR 6 each year. Income tax filing needs to be
                  completed every year, before the deadline regardless of when the
                  company was incorporated. To file a company's income tax return
                  one of the Directors should digitally sign it using their
                  signature.
                </p>
  
                <h2 class="heading mb-4" data-aos="fade-up"data-aos-once="true">
                  Bank Account for Private Limited Company
                </h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Within 180 days of company registration, a bank current account
                  in the company's name must be opened and the subscription amount
                  deposited. If the above steps are not followed, the certificate
                  of commencement of business will not be issued, and a penalty
                  will be imposed.
                </p>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  The following documents are required to open a bank account for
                  a private limited company:
                </p>
                <ul class="first_list" data-aos="fade-up"data-aos-once="true">
                  <li>Incorporation Certificate of Company</li>
                  <li>Directors KYC Documents</li>
                  <li>
                    Board Resolution Authorizing the Directors to Open Bank
                    Account
                  </li>
                  <li>Address Proof of the Company</li>
                  <li>
                    At IndiaFilings, we work with various banks to help our
                    clients open current accounts for their companies in a
                    seamless fashion.
                  </li>
                </ul>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">
                  GST Registration for Private Limited Company
                </h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  The Directors can choose to obtain GST registration along with
                  the incorporation during the company registration process.
                  Unless certain turnover thresholds are met, a company is not
                  required to register for GST. More information on the turnover
                  limit and the process for obtaining GST registration can be
                  found in our comprehensive guide to GST registration in India.
                </p>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">
                  Time and Cost Required to Register a Private Limited Company
                </h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  The entire process, including DIN, Name, and Incorporation
                  approval, takes about 10 working days. Registering a company is
                  now a quick process because all documents are dragged into a
                  single application form with MCA. It is a significant step
                  toward e-governance and for businesses looking to expand their
                  operations.
                </p>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">
                  Time and Cost Required to Register a Private Limited Company
                </h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  The entire process, including DIN, Name, and Incorporation
                  approval, takes about 10 working days. Registering a company is
                  now a quick process because all documents are dragged into a
                  single application form with MCA. It is a significant step
                  toward e-governance and for businesses looking to expand their
                  operations.
                </p>
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">
                  Cost Required to Set Up a Private Limited Company
                </h2>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Cost Required to Set Up a Private Limited Company
                </p>
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div class="col-6">
                        <div class="list_head" data-aos="fade-up"data-aos-once="true">Plan amount</div>
                        <ul>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">DSC</li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">DIN</li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">Professional Fees</li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">Stamp Duty (approx)</li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">Notary Fees</li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">
                            Government Fees (RUN, PAN, TAN)
                          </li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">Goods and Services Tax @18%</li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <div class="list_head" data-aos="fade-up"data-aos-once="true">INR</div>
                        <ul>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">2000</li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">1000</li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">3799</li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">2000</li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">500</li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">1200</li>
                          <li class="list_box" data-aos="fade-up"data-aos-once="true">684</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Note: Prices shown above can vary as per the requirements of the
                  client. To know the right price, please contact our experts for
                  pricing details.
                </p>
              </div>
  
              <!-- -------------service last Compliances  End -------------- -->
              <!-- -------------service last  Assistance  start -------------- -->
  
              <div class="service_last_assistance">
                <h2 class="logo mb-4" data-aos="fade-up"data-aos-once="true">Our Assistance</h2>
                <h3 class="heading" data-aos="fade-up"data-aos-once="true">
                  Our Assistance in Private Limited Company Registration in India
                </h3>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  We at Registrationwala provide end-to-end solutions for private
                  limited registration in India.
                </p>
                <ul>
                  <li>Company name research</li>
                  <li>Obtaining DSC and DIN</li>
                  <li>MOA and AOA drafting</li>
                  <li>Application filing</li>
                  <li>Following up with the Ministry of Corporate Affairs</li>
                </ul>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  In order to keep up with these requirements, you need the
                  assistance of business experts. Additionally, the Pvt Ltd
                  registration process in India is something that only experts
                  like CA or CS should handle.
                </p>
                <p class="desc" data-aos="fade-up"data-aos-once="true">
                  Therefore, Registrationwala is here to help out. Our complete
                  Private Limited Company Registration services shall ensure that
                  you can set up your company and be on your way to success in no
                  time.
                </p>
              </div>
  
              <div class="service_last_faq">
                <h2 class="heading" data-aos="fade-up"data-aos-once="true">Most common question about our services</h2>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item" data-aos="fade-up"data-aos-once="true">
                    <h2 class="accordion-header" id="headingOne">
                      <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                      >
                        How much time is needed for setting up a Pvt. Ltd. Co. in
                        India?
                      </button>
                    </h2>
                    <div
                      id="collapseOne"
                      class="accordion-collapse collapse show"
                      aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong>
                        It is shown by default, until the collapse plugin adds the
                        appropriate classes that we use to style each element.
                        These classes control the overall appearance, as well as
                        the showing and hiding via CSS transitions. You can modify
                        any of this with custom CSS or overriding our default
                        variables. It's also worth noting that just about any HTML
                        can go within the <code>.accordion-body</code>, though the
                        transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item" data-aos="fade-up"data-aos-once="true">
                    <h2 class="accordion-header" id="headingTwo">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                      >
                        Do I need to be physically present during this process?
                      </button>
                    </h2>
                    <div
                      id="collapseTwo"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingTwo"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong>
                        It is hidden by default, until the collapse plugin adds
                        the appropriate classes that we use to style each element.
                        These classes control the overall appearance, as well as
                        the showing and hiding via CSS transitions. You can modify
                        any of this with custom CSS or overriding our default
                        variables. It's also worth noting that just about any HTML
                        can go within the <code>.accordion-body</code>, though the
                        transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item" data-aos="fade-up"data-aos-once="true">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                      >
                        Do I need to be physically present during this process?
                      </button>
                    </h2>
                    <div
                      id="collapseThree"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#accordionExample"
                    >
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong>
                        It is hidden by default, until the collapse plugin adds
                        the appropriate classes that we use to style each element.
                        These classes control the overall appearance, as well as
                        the showing and hiding via CSS transitions. You can modify
                        any of this with custom CSS or overriding our default
                        variables. It's also worth noting that just about any HTML
                        can go within the <code>.accordion-body</code>, though the
                        transition does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- -------------service last  Assistance  End -------------- -->
            </div>
            <div class="col-md-4 position_sticky">
              <div
                class="service_last_form_container d-flex align-items-center justify-content-center" data-aos="fade-up"data-aos-once="true"
              >
                <form>
                  <h1 class="service_last_form_heading text-center">
                    Want to Know More
                  </h1>
                  <input type="text" placeholder="Name" />
                  <input type="email" placeholder="Email" />
                  <input type="number" placeholder="Phone" />
                  <textarea placeholder="How we can help"> </textarea>
                  <button>SEND</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-------===========practicearea end===================------------>
@endsection