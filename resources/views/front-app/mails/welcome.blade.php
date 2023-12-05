

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
<div style="border:2px solid #8B0000;background:white;">
    <div class="conatiner-fluid" style="padding-top:3%;">

        <div class="row">
            <img  src="https://www.vatactical.com/assets/logo.webp" style="width:100%; margin:auto; display:block;" alt="logo">
        </div>
    </div>
    <div class="container" style="padding: 20px">
        <div class="row text-center" style="text-align:center;">
            {{-- <h1>T</h1> --}}
            <p class="text-white">Welcome to Vatactical - Your New Account</p>
            <p class="text-white">
                Dear :{{$data->name}}</p>

               <p> We're thrilled to welcome you to Vatactical ! Your account registration is now complete, and we're excited to have you join our online shopping community.</p>
               <a href="{{route('home')}}"><button style="padding:10px; background-color:#8B0000; color:white; border:none; border-radius:30px">Visit Our Site</button></a>
        </div>
    </div>
</div>
  </body>
</html>

