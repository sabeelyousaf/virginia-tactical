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
                        <h2 class="content-header-title float-start mb-0">Blogs</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">All Blogs
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                   <a href="{{route('add-blog')}}"> <button class="btn btn-primary">Add Blog +</button></a>
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
                                        <th>Slug</th>
                                        <th>Functions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $key=>$item)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>
                                            <img src="{{asset('assets/blogs/'.$item->img)}}" class="me-1 rounded-3" width="60" alt="blog" />
                                            {{$item->name}}
                                        </td>


                                        <td><span class="badge rounded-pill badge-light-primary me-1">{{$item->slug}}</span></td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{route('edit-blog', ['id' => $item->id]) }}">

                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="{{route('destroy-blog',['id'=>$item->id])}}">
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
