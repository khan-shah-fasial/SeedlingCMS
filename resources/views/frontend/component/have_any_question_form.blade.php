@php
$practice_Area = DB::table('practice_areas')->orderBy('id', 'asc')->get();
@endphp
<!----------------- Have any Question --------------------->
<form id="have_any_question_form" action="{{url(route('contact.create'))}}" method="post" enctype="multipart/form-data"   >
    @csrf
    <p class="contact_form_logo fs-6 fw-bolder mb-md-2 mb-1" >
       HAVE ANY QUESTION ?
    </p>
    <p class="contact_form_heading  fw-bolder mb-md-2 mb-2" >
       Drop Us a Line
    </p>

    <input type="hidden" name="section" value="Have any Question Form"   />
    <input type="hidden" name="url" value="{{ url()->current() }}"   />

    <input type="text" placeholder="Name" name="name" class="form-control"   required/>
    <div
       class="contact_email_phone d-flex align-items-center justify-content-between gap-3 my-4"
       >
       <div>
       <input
          type="email"
          name="email"
          placeholder="Email"
          class="form-control"
          
          
          required
          class="w-100"
          />
       </div>
     <div>
     <input
          type="number"
          name="phone"
          placeholder="Phone"
          class="form-control"
          
          
          required
          class="w-100"
          />
     </div>
      
    </div>
    <select aria-label="Select a service" name="services" class="contact_form_select form-select mb-4 select_drp_image"  required>
      <option value="">Select the Service</option>
      @foreach ($practice_Area as $row)
          <option value="{{ $row->title }}">{{ $row->title }}</option>
      @endforeach
    </select>
    <textarea name="description" placeholder="Description" class="mb-3" rows="1"></textarea>
    <button type="submit" class="contact_form_button" >Send</button>
 </form>
 <!----------------- Have any Question --------------------->
