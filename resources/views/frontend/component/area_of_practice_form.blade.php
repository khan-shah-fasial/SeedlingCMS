<form id="area_practice_form" action="{{url(route('contact.create'))}}" method="post"
      enctype="multipart/form-data">
    @csrf
    <h1 class="service_last_form_heading text-center">
      Want to Know More
    </h1>
    <input type="hidden" name="section" value="Area of Practice Form" data-aos-once="true" data-aos="fade-up" />
    <input type="hidden" name="url" value="{{ url()->current() }}" data-aos-once="true" data-aos="fade-up" />
    <input type="text" name="name" placeholder="Name" required/>
    <input type="email" name="email" placeholder="Email" required/>
    <input type="tel" name="phone" placeholder="Phone" required/>
    <textarea name="description" placeholder="How we can help"> </textarea>
    <button type="submit" >SEND</button>
</form>