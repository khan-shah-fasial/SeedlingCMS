<form id="area_practice_form" action="{{url(route('contact.create'))}}" method="post"
      enctype="multipart/form-data">
    @csrf
    <h6 class="service_last_form_heading text-center">
     Get Consultation Today
    </h6>
    <input type="hidden" name="section" value="Area of Practice Form"   />
    <input type="hidden" name="url" value="{{ url()->current() }}"   />
    <div class="mb-3" >
      <input type="text" name="name" placeholder="Name" required/>
    </div>
    <div class="mb-3" >
      <input type="email" name="email" placeholder="Email" required/>
    </div>
    <div class="mb-3" >
      <input type="tel" name="phone" placeholder="Phone" required/>
    </div>
    <textarea name="description" id=""  rows="3" placeholder="How we can help"></textarea>
   
    <button type="submit" class="mt-2" >SEND</button>
</form>