@php
//$practice_Area = DB::table('practice_areas')->where('parent_id', null)->orderBy('series', 'asc')->get();
@endphp
<!--------=============== Ask Popup Form start ==============------------------>
<div
class="modal fade"
id="ask-modal"
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
      <form id="ask_popup_form" action="{{url(route('contact.create'))}}" method="post"
      enctype="multipart/form-data">
      @csrf
          <p class="contact_form_logo fs-6 fw-bolder mb-3">
            HAVE ANY QUESTION ?
          </p>
          <h4 class="contact_form_heading fs-2 fw-bolder mb-1">
            Ask an Expert
          </h4>
          <p class="mb-3">
            There are many variations of passages of lorem available..
          </p>
          <input type="hidden" name="section" value="Popup Form" data-aos-once="true" data-aos="fade-up" />
          <input type="hidden" name="url" value="{{ url()->current() }}" data-aos-once="true" data-aos="fade-up" />
          <div class="mb-3">
            <input type="text" name="name" placeholder="Name" class="form-control" required/>
          </div>
          <div
            class="contact_email_phone d-flex align-items-center gap-3 mb-3"
          >
          <div   >

            <input type="email" name="email" placeholder="Email" class="form-control" required/>
          </div>
          <div>

            <input type="number" name="phone"  placeholder="Phone" class="form-control" required/>
          </div>
          </div>

          <select class="form-select mb-3" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
         
          <button type="submit" class="contact_form_button">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!--------=============== Ask Popup Form start ==============------------------>
