<!----------------- Have any Question --------------------->
<form id="have_any_question_form" action="{{url(route('contact.create'))}}" method="post" enctype="multipart/form-data" data-aos="fade-up" data-aos-once="true" >
    @csrf
    <p class="contact_form_logo fs-6 fw-bolder mb-md-2 mb-1"data-aos="fade-up" data-aos-once="true">
       HAVE ANY QUESTION ?
    </p>
    <h4 class="contact_form_heading fs-2 fw-bolder mb-md-4 mb-2"data-aos="fade-up" data-aos-once="true">
       Drop Us a Line
    </h4>

    <input type="hidden" name="section" value="Have any Question Form" data-aos-once="true" data-aos="fade-up" />
    <input type="hidden" name="url" value="{{ url()->current() }}" data-aos-once="true" data-aos="fade-up" />

    <input type="text" placeholder="Name" name="name" class="form-control" data-aos="fade-up" data-aos-once="true" required/>
    <div
       class="contact_email_phone d-flex align-items-center gap-3"
       >
       <input
          type="email"
          name="email"
          placeholder="Email"
          class="form-control"
          data-aos="fade-up"
          data-aos-once="true"
          required
          />
       <input
          type="number"
          name="phone"
          placeholder="Phone"
          class="form-control"
          data-aos="fade-up"
          data-aos-once="true"
          required
          />
    </div>
    <select name="services" class="contact_form_select form-select"data-aos="fade-up" data-aos-once="true">
       <option value="">Services</option>
       <option value="">Option !</option>
       <option value="">Option !</option>
       <option value="">Option !</option>
    </select>
    <button type="submit" class="contact_form_button"data-aos="fade-up" data-aos-once="true">Send</button>
 </form>
 <!----------------- Have any Question --------------------->
