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
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Order Detail
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

                        <div class="row">
                            <div class="col-8  ">

                                <table class="table border bg-white ">
                                    <thead>
                                        <th>Items Summary</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Total-Price</th>


                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $item)
                                            <tr >
                                                <td><img class="w-25 rounded-3 me-2"
                                                        src="{{ asset('assets/featured_images/' . $item->products->img) }}">
                                                </td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->products->price }}</td>
                                                <td>{{ $item->sub_total }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </div>
                            <div class="col-4">
                                <table class="bg-white table ">
                                    <tr>
                                        <th colspan="2">Customer Detail</th>
                                    </tr>
                                    <tr>
                                        <td>First Name</td>
                                        <td class="text-center">{{ $order_detail->first_name }}</td>

                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td class="text-center">{{ $order_detail->last_name }}</td>

                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td class="text-center"><small>{{ $order_detail->email }}</small></td>

                                    </tr>
                                    <tr>
                                        <td>Phone No</td>
                                        <td class="text-center">{{ $order_detail->phone_no }}</td>
                                    </tr>

                                </table>
                                <table class="bg-white table ">
                                    <tr>
                                        <th class="text-start">Order Summary</th>
                                        <th>More</th>
                                    </tr>
                                    <tr>
                                        <td>Order Created</td>
                                        <td>{{ $order_detail->created_at->format('M Y D') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Order Time</td>
                                        <td>{{ $order_detail->created_at->format('H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Sub-Total</td>
                                        <td>${{ $order_detail->sub_total }}</td>
                                    </tr>
                                    <tr>
                                        <td>Delivery Fee</td>
                                        <td>$14.00</td>
                                    </tr>

                                </table>

                                <table class="bg-white table my-2">

                                    <tr>
                                        <th>Total</th>
                                        <th>${{ $order_detail->sub_total + 14 }}</th>
                                    </tr>


                                </table>

                                <table class="bg-white table ">

                                    <tr>

                                        <th colspan="2" class="text-start">Delivery Address</th>

                                    </tr>
                                    <tr>
                                        <td>Province</td>
                                        <td>{{ $order_detail->province }}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{ $order_detail->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td>{{ $order_detail->city }}</td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td>Appartment</td>
                                        <td>{{ $order_detail->appartment }}</td>
                                    </tr>
                                    <td>Postal Code</td>
                                    <td>{{ $order_detail->postal_code }}</td>
                                    </tr>

                                    <tr>
                                        <td>Payment Status</td>
                                        <td>{{ $order_detail->bank_status }}</td>
                                    </tr>

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


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

@endsection
