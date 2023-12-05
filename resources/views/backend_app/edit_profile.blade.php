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
                        <h2 class="content-header-title float-start mb-0">Profile</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Edit Profile
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <form action="{{route('update-profile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <button class="btn btn-primary" type="submit">Publish</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">


                        <div class="row p-3">
                            <div class="col-12 ">

                                <img src="{{asset('assets/users/'.$data->img)}}" width="150" height="150" style="object-fit: cover;" class=" rounded-circle" alt="">
                                <label class="d-block mt-3" for="">Upload Image </label>
                                <input type="file" class="form-control w-25 my-2" name="img" placeholder="Enter Full Name" >
                                @error('phone_no')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12  ">
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <label for="">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="{{$data->name}}">
                                @error('phone_no')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 ">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{$data->email}}">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12  mt-1">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Enter Address" value="{{$data->address}}">
                                @error('address')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12  mt-1">
                                <label for="">Phone No</label>
                                <input type="number" class="form-control" name="phone_no" placeholder="Phone No" value="{{$data->phone_no}}">
                                @error('phone_no')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12  mt-1">
                                <label for="">Password</label><span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" value="">
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12  mt-1">
                                <label for="">Confirm Password</label><span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" value="">
                                @error('confirm_password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>



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
                </div>
            </div>
            <!-- Responsive tables end -->

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

Dropzone.options.myDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true, // Show remove link on each preview
        init: function () {
            this.on("success", function (file, response) {
                // Handle successful uploads
            });
            this.on("removedfile", function (file) {
                // Handle file removal
            });
        }
    };

</script>
@endsection
