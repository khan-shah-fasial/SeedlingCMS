<!DOCTYPE html>
<html lang="en">

<head>

    <!----------Meta Information---------->
    @include('frontend.partials.meta')

    <!-----------Stylesheets------------>
    @include('frontend.partials.css')

</head>

<body id="index">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2TMWPX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



    <!---========Header======----->

        @include('frontend.partials.header')

    <!---========end Header======----->

    <!---======== page content ====-------->

        @yield('page.content')

    <!---======== page content ===== -------->

    <!-----------------------Footer Start------------------------------------------->

        @include('frontend.partials.footer')

    <!--Footer Ends-->


    <!--javascript-->
    @include('frontend.partials.js')
    @yield('page.scripts')
    @yield('component.scripts')

</body>

</html>