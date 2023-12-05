<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>VTSA Dashboard</title>
    <link rel="apple-touch-icon float-left" href="../../../app-assets/images/ico/apple-icon float-left-120.png">
    <link rel="shortcut icon float-left" type="image/x-icon float-left" href="../../../app-assets/images/ico/favicon float-left.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/plugins/charts/chart-apex.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/plugins/extensions/ext-component-toastr.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/style.css')}}">
    <!-- END: Custom CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
      <script type="text/javascript" src="https://checkout-sdk.sezzle.com/checkout.min.js"></script>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
{{-- success alert --}}
@if(session('success'))
    <div id="success" class="success alert">
        <div class="content w-100">
          <div class="icon " style="float:left!important;">
            <svg width="40" height="40" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle fill="#fff" cx="64" cy="64" r="64"/></g><g><path fill="#3EBD61" d="M54.3,97.2L24.8,67.7c-0.4-0.4-0.4-1,0-1.4l8.5-8.5c0.4-0.4,1-0.4,1.4,0L55,78.1l38.2-38.2   c0.4-0.4,1-0.4,1.4,0l8.5,8.5c0.4,0.4,0.4,1,0,1.4L55.7,97.2C55.3,97.6,54.7,97.6,54.3,97.2z"/></g></svg>
        </div>
          <p class="mt-1"> {{ session('success') }}</p>
        </div>
        <button class="close">
         <svg height="18px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="18px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#69727D" d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z"/></svg>
        </button>
      </div>
      @endif
      @if(session('info'))
      {{-- Info Alert --}}
      <div id="info" class="info alert">
        <div class="content w-100">
          <div class="icon" style="float:left!important;">
            <svg width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect width="40" height="40" rx="25" fill="white"/>
    <path d="M27 22H23V40H27V22Z" fill="#006CE3"/>
    <path d="M25 18C24.2089 18 23.4355 17.7654 22.7777 17.3259C22.1199 16.8864 21.6072 16.2616 21.3045 15.5307C21.0017 14.7998 20.9225 13.9956 21.0769 13.2196C21.2312 12.4437 21.6122 11.731 22.1716 11.1716C22.731 10.6122 23.4437 10.2312 24.2196 10.0769C24.9956 9.92252 25.7998 10.0017 26.5307 10.3045C27.2616 10.6072 27.8864 11.1199 28.3259 11.7777C28.7654 12.4355 29 13.2089 29 14C29 15.0609 28.5786 16.0783 27.8284 16.8284C27.0783 17.5786 26.0609 18 25 18V18Z" fill="#006CE3"/>
    </svg>
        </div>
          <p class="mt-1"> {{ session('info') }}</p>
        </div>
        <button class="close">
         <svg height="18px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="18px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#69727D" d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z"/></svg>
        </button>
      </div>
      @endif
      @if(session('warning'))
      {{-- Warning Alert --}}
      <div id="warning" class="warning alert">
        <div class="content w-100">
          <div class="icon float-left">
            <svg height="40" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M449.07,399.08,278.64,82.58c-12.08-22.44-44.26-22.44-56.35,0L51.87,399.08A32,32,0,0,0,80,446.25H420.89A32,32,0,0,0,449.07,399.08Zm-198.6-1.83a20,20,0,1,1,20-20A20,20,0,0,1,250.47,397.25ZM272.19,196.1l-5.74,122a16,16,0,0,1-32,0l-5.74-121.95v0a21.73,21.73,0,0,1,21.5-22.69h.21a21.74,21.74,0,0,1,21.73,22.7Z"/></svg>
        </div>
          <p> {{ session('warning') }}</p>
        </div>
        <button class="close">
         <svg height="18px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="18px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#69727D" d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z"/></svg>
        </button>
      </div>
      @endif
      @if(session('error'))
      {{-- danger alert --}}
      <div id="error" class="danger alert">
        <div class="content w-100">
          <div class="icon" style="float:left!important;" >
            <svg height="40" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M449.07,399.08,278.64,82.58c-12.08-22.44-44.26-22.44-56.35,0L51.87,399.08A32,32,0,0,0,80,446.25H420.89A32,32,0,0,0,449.07,399.08Zm-198.6-1.83a20,20,0,1,1,20-20A20,20,0,0,1,250.47,397.25ZM272.19,196.1l-5.74,122a16,16,0,0,1-32,0l-5.74-121.95v0a21.73,21.73,0,0,1,21.5-22.69h.21a21.74,21.74,0,0,1,21.73,22.7Z"/></svg>
        </div>
          <p class="mt-1" style="color:black!important;"> {{ session('error') }}</p>
        </div>
        <button class="close">
         <svg height="18px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="18px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#69727D" d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z"/></svg>
        </button>
      </div>
@endif

    @include('backend_app.layouts.header')
@yield('content')
@include('backend_app.layouts.footer')


</body>
@if(!request()->is('dashboard'))
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- BEGIN: Vendor JS-->
  <script src="{{asset('backend/vendors/js/vendors.min.js')}}"></script>
  <!-- BEGIN Vendor JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>
  <!-- BEGIN: Page Vendor JS-->
  <script src="{{asset('backend/vendors/js/charts/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/vendors/js/extensions/toastr.min.js')}}"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="{{asset('backend/js/core/app-menu.js')}}"></script>
  <script src="{{asset('backend/js/core/app.js')}}"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="{{asset('backend/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
  <script src="https://cdn.tiny.cloud/1/t8dblobhkcxvbbhrazojj9b04ieji4j69cycmor6ms2050nq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- END: Page JS-->
    @endif
  <script>

    $(document).ready(function() {
        setTimeout(function() {
  var successDiv = document.getElementById('success');
  if (successDiv) {
    successDiv.style.display = 'none';
  }
}, 3000);

setTimeout(function() {
  var successDiv = document.getElementById('warning');
  if (successDiv) {
    successDiv.style.display = 'none';
  }
}, 3000);

setTimeout(function() {
  var successDiv = document.getElementById('info');
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



        $(".close").click(function(){
    $(this).parent().fadeOut();
 });

  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip w-25\">" +
            "<img class=\"w-100\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });

          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/

        });
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
      $(window).on('load', function() {
          if (feather) {
              feather.replace({
                  width: 14,
                  height: 14
              });
          }
      })
  </script>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>
</body>


</html>
