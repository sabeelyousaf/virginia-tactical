@extends('backend_app.layouts.template')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{$data->name}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('all-courses')}}">Courses</a>
                                </li>
                                <li class="breadcrumb-item active">All Class Sessions
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <form action="{{route('submit-course-slot')}}" method="POST" enctype="multipart/form-data">
                    @csrf
            </div>

                <input type="hidden"  name="id" value="{{$data->id}}">

        </div>
        <div class="row">


                    <div class="col-12">
                        <div class="content-body">
                            <!-- Basic Tables start -->
                            <div class="row" id="basic-table">
                                <div class="col-12">
                                    <div class="card">


                                        <div class="row p-2">
                                            <div class="col-12">
                                                <h5>All Slots</h5>
                                               <table class="table">
                                                <tr>
                                                    <th>S.No</th>

                                                    <th>Date</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>


                                                    <th>Repeat</th>
                                                    <th class="text-center">Staff</th>
                                                    <th>Action</th>
                                                </tr>
                                                @foreach ($slots as $key=>$item)
                                                <tr>
                                                    <td>{{$key}}</td>

                                                    <td>{{ $item->date}}</td>
                                                    <td>{{ date('h:i A', strtotime($item->start_time)) }}</td>
                                                    <td>{{ date('h:i A', strtotime($item->end_time)) }}</td>

                                                    <td>{{$item->repeats}}</td>
                                                    <td><img src="{{asset('assets/staff/'.$item->staff->img)}}" class="rounded-circle mx-1" width="35" height="35" alt="">{{$item->staff->name}}</td>
                                                    <td><a class="dropdown-item" href="{{route('delete-slot',['id'=>$item->id])}}">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a></td>
                                                </tr>
                                                @endforeach
                                               </table>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Basic Tables end -->

                            <!-- Dark Tables start -->

                                        </div>
                                    </div>
                                </form>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Responsive tables end -->

        </div>
    </div>
</div>


@endsection
