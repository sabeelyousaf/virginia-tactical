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
                        <h2 class="content-header-title float-start mb-0">Course Subscriptions</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">All Subscriptions
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>

                                        <th>Course Name</th>

                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Date</th>
                                        <th>Paid</th>
                                        <th>Action</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $key=>$item)
                                    <tr>
                                        <td>{{$key}}</td>



                                        <td><span >{{$item->first_name}} {{$item->last_name}}</span></td>
                                        <td><span>{{$item->courses->name}}</span></td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">{{ date('h:i A', strtotime($item->start_time)) }}</span></td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">{{ date('h:i A', strtotime($item->end_time)) }}</span></td>
                                        <td><span > {{ \Carbon\Carbon::parse($item->date)->format('D M j Y') }}</span></td>

                                        <td><span class="badge rounded-pill badge-light-success me-1">${{$item->paid}}</span></td>





                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{route('subscription-detail',['id'=>$item->id])}}">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>View More</span>
                                                    </a>
                                                    <a class="dropdown-item" href="{{route('destroy-subscription',['id'=>$item->id])}}">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>Empty</tr>
                                    @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->

            <!-- Dark Tables start -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Responsive tables end -->

        </div>
    </div>
</div>
@endsection
