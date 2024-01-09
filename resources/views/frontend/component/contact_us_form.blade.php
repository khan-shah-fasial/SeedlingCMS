<!----============ Form start =================-------------------->
<form id="add_contact_us_form" action="{{url(route('contact.create'))}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">

        <input type="hidden" name="section" value="Contact us Form"   />
    </div>
    <div class="mb-3">

        <input type="hidden" name="url" value="{{ url()->current() }}"   />
    </div>
    <div class="mb-3">

        <input type="text" placeholder="Name" name="name"   required />
    </div>
    <div class="mb-3">

        <input type="email" placeholder="Email" name="email"   required />
    </div>
    <div class="mb-3">

        <input type="number" placeholder="Phone" name="phone"   required />
    </div>
    <div class="mb-3">

        <input type="text" placeholder="Other" name="other_info"   />
    </div>
    <div class="mb-3">

        <textarea placeholder="Brief Description of your legal issue" rows="3" name="description" 
            ></textarea>
    </div>
	
	<div class="mb-3">
     <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_CAPTCHA_SITEKEY')}}"></div>
    </div>
	
    <div class="">
        <button type="submit"  >
            SUBMIT
        </button>
    </div>
</form>

<!----============ Form End =================-------------------->
@section('component.scripts')
<script>
$(document).ready(function() {
    initValidate('#add_contact_us_form');
    $("#add_contact_us_form").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, responseHandler);
    });

    var responseHandler = function(response) {
        $('input, textarea').val('');
        $("select option:first").prop('selected', true);
        setTimeout(function() {
            window.location.href = $('#baseUrl').attr('href') + '/thank-you';
        }, 2000);
    }
});
</script>
@endsection