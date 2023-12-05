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
                        <h2 class="content-header-title float-start mb-0">Courses Session</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">              {{ \Carbon\Carbon::parse($time)->format('D M j Y') }}
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

                        <div class="container p-2">
                            <form action="{{route('courses-filter')}}" method="GET">
                            <h4>Search Class</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="">Search By Date</label>
                                    <input type="date" class="form-control" name="date">
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-25 float-end">Search</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Date</th>

                                        <th>Hours</th>

                                        <th>Course Name</th>
                                        <th>Staff Name</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $key=>$item)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($item->date)->format('D M j Y') }}


                                        </td>


                                        <td><span class="badge rounded-pill badge-light-primary me-1"> {{ date('h:i A', strtotime($item->start_time)) }}/{{ date('h:i A', strtotime($item->end_time)) }}</span></td>
                                        <td>{{$item->course->name}}</td>
                                        <td class="fw-bold"><img src="{{asset('assets/staff/'.$item->staff->img)}}" width="50" height="50" class="rounded-circle mx-2" alt="">{{$item->staff->name}}</td>

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
