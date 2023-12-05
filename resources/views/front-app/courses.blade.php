@extends('front-app.layout.template')
@section('content')
<div class="top_panel_title top_panel_style_1 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_1">
        <div class="content_wrap">
            <h1 class="page_title">Courses</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{route('home')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Courses</span>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumbs -->
<!-- Page Content -->
<div class="page_content_wrap page_paddings_no">
    <!-- Content -->
    <div class="content">
        <article class="post_item post_item_single">
            <section class="post_content">
                <!-- Welcome to our store -->
                <div class="empty_space height_4_8em"></div>
                <div class="sc_section">
                    <div class="content_wrap">
                        <div class="sc_section_inner">
                            <h2 class="sc_section_title sc_item_title">Courses
                                <span class="thin"> We Offer</span>
                            </h2>

                        </div>
                    </div>
                </div>
                <div class="empty_space height_3_9em"></div>
                <!-- /Welcome to our store -->
                <!-- Our team -->
                <div class="bg_dark_style_1">
                    <div class="content_wrap">
                        <div class="empty_space height_6_9em"></div>
                        <div class="sc_team_wrap">
                            <div  class="sc_team sc_team_style_team-1">


                                <div class="row">
                                    @forelse ($courses as $item)
                                    <div class="col-lg-3 col-md-3 col-12 col-sm-12 my-2 mb-4">
                                        <div class="sc_team_item sc_team_item_1 odd first">
                                            <div  class="rounded-3" class="sc_team_item_avatar">
                                                <img  class="rounded-3" alt="" src="{{asset('assets/courses/'.$item->img)}}" style="height:300px;width:100%;object-fit:cover;"></div>
                                            <div class="sc_team_item_info">
                                                <h4 class="sc_team_item_title">
                                                    <a href="{{route('course-detail',['slug'=>$item->slug])}}">{{$item->name}}</a>
                                                </h4>
                                               <a href="{{route('course-detail',['slug'=>$item->slug])}}"> <div class="sc_team_item_position">Book Now</div></a>
                                            </div>
                                        </div>
                                    </div>
                                    @empty

                                    @endforelse

                                    @foreach ($private as $item)
                                    <div class="col-lg-3 col-md-3 col-12 col-sm-12 my-2">
                                        <div class="sc_team_item sc_team_item_1 odd first">
                                            <div  class="rounded-3" class="sc_team_item_avatar">
                                                <img  class="rounded-3" alt="" src="{{asset('assets/courses/'.$item->img)}}"></div>
                                            <div class="sc_team_item_info">
                                                <h4 class="sc_team_item_title">
                                                    <a href="{{route('course-detail',['slug'=>$item->slug])}}">{{$item->name}}</a>
                                                </h4>

                                                <a href="{{route('course-detail',['slug'=>$item->slug])}}"> <div class="sc_team_item_position">Book Now</div></a>


                                            </div>
                                        </div>
                                    </div>

                                    @endforeach




                                </div>
                            </div>
                        </div>
                        <div class="empty_space height_5em"></div>
                    </div>
                </div>
                <!-- /Our team -->
                <!-- Book Right Now -->

                <!-- /Book Right Now -->
            </section>
        </article>
    </div>
</div>
@endsection
