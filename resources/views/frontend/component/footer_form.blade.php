@php
$practice_Area = DB::table('practice_areas')->where('parent_id', null)->orderBy('series', 'asc')->get();
@endphp

<!-----------================= Footer form start =============--------------->
<form class="contact_form" id="add_footer_form" action="{{url(route('contact.create'))}}" method="post"
    enctype="multipart/form-data">
    @csrf
    <h3 data-aos-once="true" data-aos="fade-up">Any query? Let’s connect</h3>
    <input type="hidden" name="section" value="Footer Form" data-aos-once="true" data-aos="fade-up" />
    <input type="hidden" name="url" value="{{ url()->current() }}" data-aos-once="true" data-aos="fade-up" />
    <div class="d-flex align-items-center gap-3 mb-3">
        <div class="w-100">
            <input type="text" class="form-control" placeholder="Write Your Name..." name="name" data-aos-once="true"
                data-aos="fade-up" required />
        </div>

        <div class="w-100">
            <input type="email" class="form-control" placeholder="Write Your Email..." name="email" data-aos-once="true"
                data-aos="fade-up" required />
        </div>
    </div>

    <div class="d-flex align-items-center gap-3 mb-3">

        <div class="w-100">
            <input type="number" class="form-control" placeholder="Write Your Phone No" name="phone"
                data-aos-once="true" data-aos="fade-up" required />
        </div>


        <div class="w-100">
            <select class="form-select" data-aos-once="true" name="services" data-aos="fade-up" required>
                <option value="">Select the Service</option>

                @foreach ($practice_Area as $row)
                <option value="{{ $row->title }}">{{ $row->title }}</option>
                @endforeach

            </select>
        </div>
    </div>

    <textarea class="form-select footer_textarea" name="description" placeholder="Brief description of your legal issue"
        data-aos-once="true" data-aos="fade-up" rows="2"></textarea>

    <div class="mt-3">
        <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_CAPTCHA_SITEKEY')}}"></div>
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="contact_form_button" data-aos-once="true" data-aos="fade-up">SEND</button>
    </div>
</form>

<!-------------------============= Footer Form end ===============-------------->