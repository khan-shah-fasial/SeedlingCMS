@php
$awards = DB::table('awards')->get();
@endphp

<!--------=========== Awards =========================------------------------>

<section class="awards_section about_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 px0">
                <div class="underline_heading d-flex align-items-center justify-content-center">
                    <h6 class="main_heading text-center"  >AWARDS</h6>
                </div>
                <h2 class="main_heading text-center mb-md-4 mb-2"  >Awards &
                    Recognitions
                </h2>

                <div class="owl-carousel owl-theme" id="awards_slider">

                    @foreach ($awards as $row)

                    <div class="item">
                        <div class="awards_box">
                            <h4>{{ $row->title }}</h4>
                            <img src="{{ asset('storage/' . $row->image) }}" />
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


<!--------------================= end Awards ================------------------->