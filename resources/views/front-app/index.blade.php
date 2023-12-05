    @extends('front-app.layout.template')
    @section('content')
    <style>
        .mobile-hide{
            display: block!important;
        }
        .big-hide{
            display:none!important;
        }
        @media(max-width:768px){
            .mobile-hide{
            display: none!important;
            }
            .big-hide{
            display:block!important;
        }
        }
    </style>
    <marquee class="marq py-2" bgcolor = "#8B0000" direction = "left" loop="" >
        <div class="text-white">The website is undergoing maintenance. If you have any inquiries, please call us at (804) 234-3346.</div>


    </marquee>
    <div class="page_content_wrap page_paddings_no">
        <!-- Content -->

        <div class="content">
            <article class="post_item post_item_single">
                <section class="post_content">



                    <!-- Product Categories / Revolution Slider -->
                    <div class="bg_dark_style_1 hp1_custom_section_1">
                        <div class="content_wrap">
                            <div class="empty_space height_4_3em"></div>

                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4">
                                <div class="column-1_4 sc_column_item sc_column_item_1 odd first ">

                                    <div class="widget_area mobile-hide" style="background: #1d1e23; ">
                                        <aside class="widget woocommerce widget_product_categories">
                                            <h5 class="widget_title" style="background: #8b0000;">Categories</h5>
                                            <ul class="product-categories">

                                            @forelse ($categories as $item)
                                            @if ($item->parent_id===null)
                                            <li><a href="{{route('category',['slug'=>$item->slug])}}">{{$item->name}}</a>

                                                <ul class='children' style="background: #1D1E23;">
                                                    @foreach ($item->subcategories as $sub_item)
                                                    <li>
                                                        <a href="{{route('category',['slug'=>$sub_item->slug])}}">{{$sub_item->name}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                            @endif
                                            @empty
                                            <li class="text-white">Empty</li>
                                            @endforelse
                                            </ul>
                                        </aside>
                                    </div>
                                </div><div class="column-3_4 sc_column_item sc_column_item_2span_3">
                                    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slider_wrap" data-source="gallery">
                                        <!-- START REVOLUTION SLIDER -->
                                        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" data-version="5.4.3">
                                            <ul>
                                                <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                    <!-- MAIN IMAGE -->
                                                    {{-- <img src="js/vendor/revslider/images/#" data-bgcolor='#000000' alt="" title="Home 1" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> --}}
                                                    <!-- LAYERS -->
                                                    <!-- LAYER NR. 11 -->
                                                    <div class="tp-caption tp-resizeme" id="slide-5-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":300,"ease":"Linear.easeNone"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                        <img src="{{asset('assets/images/banner1.jpg')}}" alt="" data-ww="870px" data-hh="407px" width="870" height="407" data-no-retina>
                                                    </div>
                                                    <!-- LAYER NR. 12 -->
                                                    {{-- <div class="tp-caption black tp-resizeme" id="slide-4-layer-2" data-x="center" data-hoffset="-212" data-y="105" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1000,"to":"o:1;","delay":600,"split":"chars","splitdelay":0.1,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">get $25 off </div>
                                                    <!-- LAYER NR. 13 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-4-layer-6" data-x="center" data-hoffset="-212" data-y="70" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","speed":700,"to":"o:1;","delay":1300,"ease":"Power2.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">special offer </div>
                                                    <!-- LAYER NR. 14 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-4-layer-3" data-x="center" data-hoffset="-212" data-y="191" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','on','off']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;opacity:0;","speed":700,"to":"o:1;","delay":1700,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">when you spend $500
                                                        <p> on Handguns </p>
                                                    </div>
                                                    <!-- LAYER NR. 15 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-4-layer-5" data-x="center" data-hoffset="-213" data-y="260" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','off','off']" data-type="text" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"shop.html","delay":""}]' data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":700,"to":"o:1;","delay":2100,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(254,165,38,1);bw:2px 2px 2px 2px;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[28,28,28,28]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[28,28,28,28]">shop now </div> --}}
                                                </li>
                                                <!-- SLIDE 1 -->
                                                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                    <!-- MAIN IMAGE -->

                                                    <!-- LAYERS -->
                                                    <!-- LAYER NR. 1 -->
                                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":300,"ease":"Linear.easeNone"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                        <img src="{{asset('assets/size 2-01 copy.webp')}}" alt="" data-ww="870px" data-hh="407px" width="870" height="407" data-no-retina>
                                                    </div>
                                                    <!-- LAYER NR. 2 -->
                                                    {{-- <div class="tp-caption black tp-resizeme" id="slide-1-layer-2" data-x="center" data-hoffset="-205" data-y="70" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1000,"to":"o:1;","delay":600,"split":"chars","splitdelay":0.1,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">BERETTA </div>
                                                    <!-- LAYER NR. 3 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-1-layer-3" data-x="center" data-hoffset="-205" data-y="145" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','on','off']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;opacity:0;","speed":700,"to":"o:1;","delay":1300,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">MODEL 92FS INOX </div>
                                                    <!-- LAYER NR. 4 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-1-layer-4" data-x="center" data-hoffset="-205" data-y="190" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":700,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">$370.00 </div>
                                                    <!-- LAYER NR. 5 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-1-layer-5" data-x="center" data-hoffset="-205" data-y="260" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','off','off']" data-type="text" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"shop.html","delay":""}]' data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":700,"to":"o:1;","delay":"2100","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(255,255,255,1);bw:2px 2px 2px 2px;color:#000;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[28,28,28,28]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[28,28,28,28]">shop now </div> --}}
                                                </li>
                                                <!-- SLIDE 2 -->
                                                <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                    <!-- MAIN IMAGE -->
                                                    {{-- <img src="js/vendor/revslider/images/#" data-bgcolor='#000000' alt="" title="Home 1" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> --}}
                                                    <!-- LAYERS -->
                                                    <!-- LAYER NR. 6 -->
                                                    <div class="tp-caption tp-resizeme" id="slide-3-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":300,"ease":"Linear.easeNone"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                        <img src="{{asset('assets/size 3 web-01 copy.webp')}}" alt="" data-ww="870px" data-hh="407px" width="870" height="407" data-no-retina>
                                                    </div>
                                                    <!-- LAYER NR. 7 -->
                                                    {{-- <div class="tp-caption black tp-resizeme" id="slide-3-layer-2" data-x="center" data-hoffset="190" data-y="70" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1000,"to":"o:1;","delay":600,"split":"chars","splitdelay":0.1,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Steiner </div>
                                                    <!-- LAYER NR. 8 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-3-layer-3" data-x="center" data-hoffset="190" data-y="145" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','on','off']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;opacity:0;","speed":700,"to":"o:1;","delay":1300,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">AZ830 Binocular </div>
                                                    <!-- LAYER NR. 9 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-3-layer-4" data-x="center" data-hoffset="190" data-y="190" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":700,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">$180.00 </div>
                                                    <!-- LAYER NR. 10 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-3-layer-5" data-x="center" data-hoffset="190" data-y="260" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','off','off']" data-type="text" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"shop.html","delay":""}]' data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":700,"to":"o:1;","delay":2100,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(255,255,255,1);bw:2px 2px 2px 2px;color:#000;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[28,28,28,28]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[28,28,28,28]">shop now </div> --}}
                                                </li>
                                                <!-- SLIDE 3 -->
                                                <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                    <!-- MAIN IMAGE -->
                                                    {{-- <img src="js/vendor/revslider/images/#" data-bgcolor='#000000' alt="" title="Home 1" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> --}}
                                                    <!-- LAYERS -->
                                                    <!-- LAYER NR. 11 -->
                                                    <div class="tp-caption tp-resizeme" id="slide-4-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":300,"ease":"Linear.easeNone"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                        <img src="{{asset('assets/web size grid 1 copy.webp')}}" alt="" data-ww="870px" data-hh="407px" width="870" height="407" data-no-retina>
                                                    </div>
                                                    <!-- LAYER NR. 12 -->
                                                    {{-- <div class="tp-caption black tp-resizeme" id="slide-4-layer-2" data-x="center" data-hoffset="-212" data-y="105" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1000,"to":"o:1;","delay":600,"split":"chars","splitdelay":0.1,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">get $25 off </div>
                                                    <!-- LAYER NR. 13 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-4-layer-6" data-x="center" data-hoffset="-212" data-y="70" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","speed":700,"to":"o:1;","delay":1300,"ease":"Power2.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">special offer </div>
                                                    <!-- LAYER NR. 14 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-4-layer-3" data-x="center" data-hoffset="-212" data-y="191" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','on','off']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;opacity:0;","speed":700,"to":"o:1;","delay":1700,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">when you spend $500
                                                        <p> on Handguns </p>
                                                    </div>
                                                    <!-- LAYER NR. 15 -->
                                                    <div class="tp-caption black tp-resizeme" id="slide-4-layer-5" data-x="center" data-hoffset="-213" data-y="260" data-width="['auto']" data-height="['auto']" data-visibility="['on','on','off','off']" data-type="text" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"shop.html","delay":""}]' data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":700,"to":"o:1;","delay":2100,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(254,165,38,1);bw:2px 2px 2px 2px;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[28,28,28,28]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[28,28,28,28]">shop now </div> --}}
                                                </li>

                                            </ul>
                                            <div class="tp-bannertimer tp-bottom"></div>
                                        </div>
                                    </div>
                                    <!-- END REVOLUTION SLIDER -->
                                </div>
                            </div>
                            <div class="odd first big-hide mt-4">

                                <div class="widget_area" style="background: #1d1e23;">
                                    <aside class="widget woocommerce widget_product_categories">
                                        <h5 class="widget_title" style="background: #8b0000;">Categories</h5>
                                        <ul class="product-categories">

                                        @forelse ($categories as $item)
                                        @if ($item->parent_id===null)
                                        <li><a href="{{route('category',['slug'=>$item->slug])}}">{{$item->name}}</a>

                                            <ul class='children' style="background: #1D1E23;">
                                                @foreach ($item->subcategories as $sub_item)
                                                <li>
                                                    <a href="{{route('category',['slug'=>$sub_item->slug])}}">{{$sub_item->name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        @endif
                                        @empty
                                        <li class="text-white">Empty</li>
                                        @endforelse
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                            <div class="empty_space height_4_5em"></div>
                        </div>
                    </div>
                    <!-- / Product Categories / Revolution Slider -->
                    <!-- Featured Products -->
                    <div class="custom_texture_bg1">
                        <div class="content_wrap">
                            <div class="empty_space height_5_5em"></div>
                            <div class="sc_section scheme_light">
                                <div class="sc_section_inner">
                                    <h2 class="sc_section_title sc_item_title" style="color:white;">featured
                                        <span class="thin"> products</span>
                                    </h2>
                                    <div class="sc_section_descr sc_item_descr">
                                        <!-- Lorem ipsum dolor sit amet consectetur
                                        <p> adipisicing elit sed do eiusmod</p> -->
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="owl-carousel owl-theme">
                                                @foreach ($data as $item)
                                                <div class="item position-relative">

                                                    <div class="bg-white rounded-3 mb-3 p-3 shadow position-relative">
                                                        <small style="background: #8B0000;" class="text-white p-2  rounded-3 ">{{$item->stock}}</small>
                                                        <img src="{{asset('assets/featured_images/'.$item->img)}}" style="width: 350px;height:250px;object-fit:contain;" alt="">
                                                        <h6 class="fw-bold text-center">{{$item->name}}</h6>

                                                        <a href="{{route('add-to-fav',['id'=>$item->id])}}" class="text-dark position-absolute"><i class="fa-regular fa-heart text-center m-auto d-block  fs-4"></i></a>
                                                        @if($item->sale_price !== null)
                                                                <span class="price d-block text-center">
                                                                    <del>
                                                                        <span class="woocommerce-Price-amount amount ">
                                                                            <span class="woocommerce-Price-currencySymbol">&#36;</span>{{$item->price}}
                                                                        </span>
                                                                    </del>
                                                                    <ins>
                                                                        <span class="woocommerce-Price-amount amount fs-3 text-dark">
                                                                            <span class="woocommerce-Price-currencySymbol text-dark fs-3">&#36;</span>{{$item->sale_price}}
                                                                        </span>
                                                                    </ins>
                                                                </span>
                                                                @else
                                                                <span class="price d-block text-center">

                                                                    <ins>
                                                                        <span class="woocommerce-Price-amount amount fs-3 text-dark">
                                                                            <span class="woocommerce-Price-currencySymbol text-dark fs-3">&#36;</span>{{$item->price}}
                                                                        </span>
                                                                    </ins>
                                                                </span>
                                                                @endif
                                                        <a href="{{route('product_detail',['slug'=>$item->slug])}}"><button class=" m-auto d-block mt-3 rounded-3">View Detail</button></a>
                                                    </div>
                                                </div>
                                                    @endforeach

                                                <!-- Add more slides as needed -->
                                            </div>
                                            <!-- Product Item -->




                                            <!-- /Product Item -->
                                            <!-- Product Item -->

                                            <!-- /Product Item -->
                                            <a href="{{route('shop')}}"><button class="m-auto d-block rounded-3">View All</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="empty_space height_5_7em"></div>
                        </div>
                    </div>
                    <!-- /Featured Products -->
                    <!-- Counters -->
                    <div class="content_wrap">
                        <div class="empty_space height_7_65em"></div>
                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4 counters_section">
                                <div class="column-1_4 sc_column_item sc_column_item_1 odd first">
                                    <div class="sc_skills sc_skills_counter" data-type="counter" data-caption="Skills">
                                        <div class="sc_skills_item sc_skills_style_1 odd first">
                                            <div class="sc_skills_icon icon-iconmonstr-crosshair-7-icon"></div>
                                            <div class="sc_skills_count">
                                                <div class="sc_skills_total" data-start="0" data-stop="253" data-step="3" data-max="253" data-speed="16" data-duration="1349" data-ed="">0</div>
                                            </div>
                                            <div class="sc_skills_info">
                                                <div class="sc_skills_label">TOP BRANDS</div>
                                            </div>
                                            <a class="sc_skills_read_more" href="#">
                                                <span class="icon-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="column-1_4 sc_column_item sc_column_item_2 even">
                                    <div class="sc_skills sc_skills_counter" data-type="counter" data-caption="Skills">
                                        <div class="sc_skills_item sc_skills_style_1 odd first">
                                            <div class="sc_skills_icon icon-binocle"></div>
                                            <div class="sc_skills_count">
                                                <div class="sc_skills_total" data-start="0" data-stop="1200" data-step="12" data-max="1200" data-speed="22" data-duration="2200" data-ed="">0</div>
                                            </div>
                                            <div class="sc_skills_info">
                                                <div class="sc_skills_label"> LOYAL USERS</div>
                                            </div>
                                            <a class="sc_skills_read_more" href="#">
                                                <span class="icon-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="column-1_4 sc_column_item sc_column_item_3 odd">
                                    <div class="sc_skills sc_skills_counter" data-type="counter" data-caption="Skills">
                                        <div class="sc_skills_item sc_skills_style_1 odd first">
                                            <div class="sc_skills_icon icon-iconmonstr-police-weapon-icon"></div>
                                            <div class="sc_skills_count">
                                                <div class="sc_skills_total" data-start="0" data-stop="534" data-step="5" data-max="534" data-speed="33" data-duration="3524" data-ed="">0</div>
                                            </div>
                                            <div class="sc_skills_info">
                                                <div class="sc_skills_label">COMMITTED TRAINEES</div>
                                            </div>
                                            <a class="sc_skills_read_more" href="#">
                                                <span class="icon-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="column-1_4 sc_column_item sc_column_item_4 even">
                                    <div class="sc_skills sc_skills_counter" data-type="counter" data-caption="Skills">
                                        <div class="sc_skills_item sc_skills_style_1 odd first">
                                            <div class="sc_skills_icon icon-iconmonstr-trophy-6-icon"></div>
                                            <div class="sc_skills_count">
                                                <div class="sc_skills_total" data-start="0" data-stop="688" data-step="7" data-max="688" data-speed="13" data-duration="1278" data-ed="">0</div>
                                            </div>
                                            <div class="sc_skills_info">
                                                <div class="sc_skills_label">Active Members</div>
                                            </div>
                                            <a class="sc_skills_read_more" href="#">
                                                <span class="icon-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="empty_space height_8em"></div>
                    </div>
                    <!-- /Counters -->
                    <!-- Guns & Ammo -->
                @include('components.courses_ctn')
                    <!-- /Guns & Ammo -->
                    <!-- Popular News -->
                    <div class="empty_space height_6_6em"></div>
                    <div class="content_wrap">
                        <div class="widget_area sc_recent_news_wrap">
                            <aside class="widget widget_recent_news">
                                <div class="sc_recent_news sc_recent_news_style_news-magazine sc_recent_news_with_accented">
                                    <div class="sc_recent_news_header sc_recent_news_header_split">
                                        <div class="sc_recent_news_header_captions">
                                            <h3 class="sc_recent_news_title"> WHAT'S TRENDING
                                                <span class="thin"> News</span>
                                            </h3>
                                        </div><div class="sc_recent_news_header_categories">
                                            <a href="blog-classic.html" class="sc_recent_news_header_category_item">All News</a>
                                            <a href="certificate-single.html" class="sc_recent_news_header_category_item">Certificates</a>
                                            <a href="gallery-grid.html" class="sc_recent_news_header_category_item">Gallery</a>
                                            <span class="sc_recent_news_header_category_item sc_recent_news_header_category_item_more">More
                                                <span class="sc_recent_news_header_more_categories">
                                                    <a href="blog-masonry-2-columns.html" class="sc_recent_news_header_category_item">Masonry (2 columns)</a>
                                                    <a href="blog-masonry-3-columns.html" class="sc_recent_news_header_category_item">Masonry (3 columns)</a>
                                                    <a href="blog-portfolio-2-columns.html" class="sc_recent_news_header_category_item">Portfolio (2 columns)</a>
                                                    <a href="blog-masonry-3-columns.html" class="sc_recent_news_header_category_item">Portfolio (3 columns)</a>
                                                    <a href="post-formats.html" class="sc_recent_news_header_category_item">Post Formats</a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="columns_wrap">
                                        <div class="column-1_2">
                                            <!-- Post Item -->
                                           @foreach ($latest as $item)
                                           <article class="post_item post_accented_on">
                                            <div class="post_featured">
                                                <div class="post_thumb">
                                                    <a class="hover_icon hover_icon_link"  href="{{route('detail-blog',['slug'=>$item->slug])}}">
                                                        <img alt="" src="{{asset('assets/blogs/'.$item->img)}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post_header">
                                                <h5 class="post_title">
                                                    <a href="{{route('detail-blog',['slug'=>$item->slug])}}">{{$item->name}}</a>
                                                </h5>
                                                <div class="post_meta">
                                                    <span class="post_meta_date">Posted
                                                        <a  href="{{route('detail-blog',['slug'=>$item->slug])}}">{{$item->created_at->format("M Y D")}}</a>
                                                    </span>
                                                 {{-- <span class="post_meta_author">By Jack Black</span> --}}
                                                </div>
                                            </div>
                                            <div class="post_content">

                                            </div>
                                            <div class="post_footer">
                                                <a class="sc_button sc_button_style_dark rounded-3" href="{{route('front-blogs')}}">Learn More</a>
                                            </div>
                                        </article>
                                           @endforeach

                                        </div><div class="column-1_2">
                                            <!-- Post Item -->
                                            @foreach ($featured as $item)
                                            <article class="post_item post_accented_off">
                                                <div class="post_featured">
                                                    <div class="post_thumb">
                                                        <a class="hover_icon hover_icon_link" href="{{route('detail-blog',['slug'=>$item->slug])}}">
                                                            <img alt="Rental Firearms &#038; Fees" src="{{asset('assets/blogs/'.$item->img)}}">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post_header">
                                                    <h6 class="post_title">
                                                        <a href="{{route('detail-blog',['slug'=>$item->slug])}}">{{$item->name}}</a>
                                                    </h6>
                                                    <div class="post_meta">
                                                        <span class="post_meta_date">Posted
                                                            <a  href="{{route('detail-blog',['slug'=>$item->slug])}}">{{$item->created_at->format("M Y D")}}</a>
                                                        </span>
                                                        {{-- <span class="post_meta_author">By Jack Black</span> --}}
                                                    </div>
                                                </div>
                                            </article>
                                            @endforeach

                                            <!-- /Post Item -->
                                            <!-- Post Item -->

                                            <!-- /Post Item -->
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="empty_space height_7_8em"></div>
                    <!-- /Popular News -->
                    <!-- Clients -->

                    <!-- /Clients -->
                </section>
            </article>
        </div>
        <!-- /Content -->
    </div>
    @endsection
