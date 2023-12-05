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
                        <h2 class="content-header-title float-start mb-0">Orders</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Orders
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

                                        <th>Order-ID</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Price</th>
                                        <th>Delivery Status</th>
                                        <th>Payment Method</th>
                                        <th>Payment Status</th>

                                        <th>Functions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key=>$item)
                                    <tr>



                                        <td>{{$item->id}}</td>
                                        <td>{{$item->first_name}}</td>
                                        <td>{{$item->email}}</td>

                                        <td>
                                          ${{$item->total}}
                                        </td>

                                        <td> <form class="statusform" action="{{ route('update-status') }}" method="POST" onchange="submitStatus(this)">
                                            @csrf
                                                <select name="status" class="form-select text-danger fw-bold" id="">
                                                <option @if($item->delivery_status === "pending") selected @endif value="pending">Pending</option>
                                                <option @if($item->delivery_status === "delivered") selected @endif value="delivered">Delivered</option>
                                                <option @if($item->delivery_status === "return") selected @endif value="return">Return</option>
                                            </select>
                                            <input type="hidden"  value="{{$item->id}}" name="id">
                                        </form></td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">{{$item->payment_method}}</span></td>

                                        <td><span class="badge rounded-pill badge-light-primary me-1">{{$item->bank_status}}</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{route('order-detail',['id'=>$item->id])}}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>View Detail</span>
                                                    </a>
                                                    <a class="dropdown-item" href="{{route('delete-order',['id'=>$item->id])}}">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach



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
<script>
      function submitStatus(selectElement) {
        // Traverse up the DOM to find the closest form element
        var form = selectElement.closest(".statusform");

        // Check if a form is found before submitting
        if (form) {
            form.submit();
        }
    }
  </script>
@endsection
