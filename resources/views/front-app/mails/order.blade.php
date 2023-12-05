

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table, th, td {
      border:1px solid #8B0000;
    }
    </style>
</head>
  <body>
    <div >
        <div class="container-fluid" style="padding-top:3%;">

            <div class="row">
                <img  src="https://www.vatactical.com/assets/logo.webp" style="width:25%; margin:auto; display:block;" alt="logo">
            </div>
        </div>
        <div class="container" style="padding: 20px">
            <div class="row text-center" style="text-align:center;">
                {{-- <h1>T</h1> --}}
                <p class="text-white">Thank You For Your Order!</p>
                <p class="text-white">
                    Hi :{{$order->first_name}}</p>

                   <p>Your Order# {{$order->id}} has been placed successfully and we will let you know once your package is on its way. check the status of your success order using the tracking link below .</p>
                <a href="https://www.vatactical.com/"><button style="padding:10px; background-color:#8B0000; color:white; border:none; border-radius:30px">Track My Order</button></a>
            </div>
        </div>
        <div class="container" style="padding:20px;">
            <div class="row">

                <div class="col-12">
                    <p style="font-weight: bold">Delivery Details</h2>
                        <table class="table">
                            <tr>
                                <th>Order-ID:</th>
                                <td>{{$order->id}}</td>
                            </tr>
                        <tr>
                            <th>Name:</th>
                            <td>{{$order->first_name}}</td>
                        </tr>
                        <tr>
                            <th>Address:</th>
                            <td>{{$order->address}}</td>
                        </tr>
                        <tr>
                            <th>Phone:</th>
                            <td>{{$order->phone_no}}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{$order->email}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="container" style="padding:20px;">
            <div class="row">

                <div class="col-12 position-relative">
                    <p style="font-weight: bold">Order Details</h2>
                        @foreach ($products as $item)
                        <div class="row" style="border:1px solid #8B0000;">
                            <div style="width:30%;float:left;"><img src="https://www.vatactical.com/assets/featured_images/{{$item->products->img}}" width="100%;" alt=""></div>
                            <div style="width:70%;float:left;">
                            <span style="display: block;margin-left:10px" class="d-block">Name{{$item->products->name}}</span>
                            <span style="display: block;margin-left:10px" class="d-block">Quantity:{{$item->quantity}}</span>
                            <span style="display: block;margin-left:10px" class="d-block">Sub Total:${{$item->sub_total}}</span>

                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>




