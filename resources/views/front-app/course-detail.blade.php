@extends('front-app.layout.template')
@section('content')
<style>.custom-radio input[type="radio"] {
    display: none; /* Hide the radio button */
  }

  .custom-label {
    padding: 10px 15px;
    border: 1px solid #ccc;
    background-color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .custom-radio input[type="radio"]:checked + .custom-label {
    background-color: #8B0102; /* Change the background color when selected */
    color: #fff; /* Change text color when selected */
    border: 1px solid #8B0102;
  }
  @keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.blinking-text {

  animation: blink 2s infinite;
}

  </style>
<div class="single-product woocommerce woocommerce-page body_transparent article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
        <!-- Body wrap -->
        <div class="body_wrap bg_image">
            <!-- Page wrap -->
            <div class="page_wrap">
<div class="top_panel_title top_panel_style_1  title_present navi_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_1">
        <div class="content_wrap">
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{route('home')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="{{route('front-courses')}}">Courses</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">{{$data->name}}</span>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumbs -->
<!-- Page Content -->
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">

            <article class="post_item post_item_single post_item_product">
                <div class="product">
                    <!-- Product Image -->
                    <div class=" woocommerce-product-gallery--columns-4 images" data-columns="4" >

                        <img src="{{asset('assets/courses/'.$data->img)}}" class="w-100 rounded-3" alt="">

                    </div>

                    <!-- /Product Image -->
                    <!-- Product Summary -->
                    <div class="summary entry-summary">
                        <h1 class="product_title">{{$data->name}}</h1>
                        <p>@php echo $data->description @endphp</p>
                         <p class="price">
                            <span class="woocommerce-Price-amount amount">
                                @if ($data->sale_price === null)
                                <span class="woocommerce-Price-currencySymbol">&#36;</span>{{$data->price}}

                                @else
                                <span class="price d-block text-center fs-6">

                                        <span class="woocommerce-Price-amount amount " style="text-decoration:line-through;">
                                            <span class="woocommerce-Price-currencySymbol" >&#36;</span>{{$data->price}}
                                        </span>

                                    <ins>
                                        <span class="woocommerce-Price-amount amount fs-4 text-dark">
                                            <span class="woocommerce-Price-currencySymbol text-dark fs-3">&#36;</span>{{$data->sale_price}}

                                        </span>
                                    </ins>
                                </span>
                                @endif


                                  <!-- Modal -->

                            </span>
                        </p>
                        <div class="woocommerce-product-details__short-description">
                            <p>{{$data->excerpt}}</p>
                        </div>

                            @csrf


                            <a href="{{route('date-picker',['slug'=>$data->slug])}}" class="btn btn-primary py-3 px-4">Book Now</a>


                    </div>
                    <!-- /Product Summary -->
                    <!-- Tabs -->

                    <!-- /Tabs -->
                    <!-- Related Products -->

                    <!-- /Related Products -->
                </div>
            </article>
        </div>
        <!-- /Content -->
    </div>
</div>
            </div>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
  $('.custom-label').on('click', function() {
    const radioId = $(this).attr('for');
    $(`#${radioId}`).prop('checked', true);
  });
});
</script>

@endsection
