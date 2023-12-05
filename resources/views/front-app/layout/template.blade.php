<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VTSA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/003e68ae06.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('assets/js/vendor/woocommerce/css/woocommerce-layout.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/js/vendor/woocommerce/css/woocommerce-smallscreen.css')}}" type="text/css" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" href="{{asset('assets/js/vendor/woocommerce/css/woocommerce.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('assets/js/vendor/revslider/css/settings.css')}}" type="text/css" media="all" />
    {{-- <link rel="stylesheet" href="{{asset('assets/css/tpl-revslider.css" type="text/css')}}" media="all" /> --}}

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind:300,400,700%7CLato:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext">
    <link rel="stylesheet" href="{{asset('assets/css/fontello/css/fontello.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('assets/css/animation.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/css/shortcodes.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('assets/css/plugin.woocommerce.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('assets/css/skin.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('assets/css/messages.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/js/vendor/magnific/magnific-popup.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/js/vendor/swiper/swiper.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <script src="https://kit.fontawesome.com/003e68ae06.js" crossorigin="anonymous"></script>
<style>.text-primary{
    color:#8A0103!important;
}
.bg-background{
    background:#8A0103!important;
}
</style>
</head>
@if(session('success'))
<div id="success" class="myalert py-3  px-2 alert-success justify-content-start w-50 text-white fw-bold shadow" role="alert" style="background:#5F9C4F!important;z-index: 999;
position: absolute;
left: 424px;
right: 100px;
top: 10px;
z-index:1002;">
   <i class="fa-solid fa-circle-exclamation me-2" style="color:white;"></i> {{ session('success') }}

</div>
@elseif(session('error'))
<div id="error" class="myalert px-2 py-3 bg-white  alert-danger justify-content-start w-50 text-dark fw-bold shadow" role="alert" style="z-index: 999;
position: absolute;
left: 424px;
right: 100px;
top: 10px;
z-index:1002;">
   <i class="fa-solid fa-circle-exclamation me-2" style="color:red;"></i> {{ session('error') }}

</div>
@endif
<body class="body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide" style="background: black!important;">

    <!-- Body wrap -->
    <div class="body_wrap">
        <!-- Page wrap -->
        <div class="page_wrap">
    @include('front-app.layout.header')
    @yield('content')
    @include('front-app.layout.footer')

    <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 <!-- Add Owl Carousel JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script type="text/javascript" src="{{asset('assets/js/trx_utils.min.js')}}"></script>
    {{-- <script type="text/javascript" src="{{asset('assets/jsjs/_packed.js')}}"></script> --}}

    <script type="text/javascript" src="{{asset('assets/js/vendor/essential-grid/js/lightbox.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/vendor/essential-grid/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/vendor/revslider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/vendor/revslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/vendor/revslider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/vendor/revslider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/vendor/revslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/tpl-revslider-general.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/tpl-revslider-1.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/vendor/photostack/modernizr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/vendor/superfish.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/utils.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core.init.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/init.js')}}"></script>
 <!-- Add Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/js/shortcodes.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/messages.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/vendor/magnific/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/vendor/swiper/swiper.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
$("#search-area").hide();

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
     autoplayTimeout: 3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
        });
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64eb2fb5a91e863a5c10114b/1h8rb4npi';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();


      setTimeout(function() {
  var successDiv = document.getElementById('success');
  if (successDiv) {
    successDiv.style.display = 'none';
  }
}, 3000);

setTimeout(function() {
  var successDiv = document.getElementById('error');
  if (successDiv) {
    successDiv.style.display = 'none';
  }
}, 3000);


$(document).ready(function() {

$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

$('#search').on('input', function() {
var inputValue = $(this).val();
let formData = new FormData();
formData.append("search_val", inputValue);

$.ajax({
    url: "{{ route('product-filter') }}",
    type: 'POST',
    data: formData,
    processData: false, // Prevent jQuery from processing the data
    contentType: false, // Let jQuery set the content type
    success: function(response) {
       let html ='';
        let search_val=response.results;
        $("#search-area").show();
        search_val.forEach(element => {

            html +=`  <div class='row border  mx-2' style="background: white;">
                <a class="text-dark text-decoration-none w-100 search-hover" href="/product/${element.slug}">
                    <div class="row">
                <div class='col-3 d-flex align-items-center'><img class="rounded-3" src="{{asset('assets/featured_images/${element.img}')}}" width="100px" height="100px" alt="${element.name}"></div>
                <div class='col-9'><small>${element.name}</small>
                    </div>
                    </div>
                </a>
            </div>`
           $("#search-area").html(html);
       });
    },
    error: function(error) {
        // Handle errors if any
        console.error(error);
    }
});
});
$('.tawk-branding').hide();

});

</script>

  </body>
</html>
