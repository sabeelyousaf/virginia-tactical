@extends('backend_app.layouts.template')
@section('content')
@php
    $category= App\Models\Category::all();
    $brands= App\Models\Brand::all();
@endphp
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Setting</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">General Setting
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <form action="{{route('update-setting')}}" method="POST" enctype="multipart/form-data">
                    @csrf
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <button class="btn btn-primary" type="submit">Publish</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">


                        <div class="row p-3">
                            <div class="col-6">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{$data->email}}">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-6 ">
                                <label for="">Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="address" placeholder="Enter Address" value="{{$data->address}}">
                                @error('address')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="col-6 mt-1">
                                <label for="">Phone No <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="phone_no" placeholder="Phone No" value="{{$data->phone_no}}">
                                @error('phone_no')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="col-6 mt-1">
                                <label for="">Footer Tagline</label>
                                <input type="text" class="form-control" name="footer_tagline" placeholder="Enter footer tagline" value="{{$data->footer_tagline}}">
                            </div>

                            <div class="col-4 mt-1">
                                <label for="">Facebook</label>
                                <input type="text" class="form-control" name="facebook" placeholder="Enter Facebook Link" value="{{$data->facebook}}">
                            </div>
                            <div class="col-4 mt-1">
                                <label for="">Instagram</label>
                                <input type="text" class="form-control" name="instagram" placeholder="Enter Instagram Link" value="{{$data->instagram}}">
                            </div>
                            <div class="col-4 mt-1">
                                <label for="">Twitter</label>
                                <input type="text" class="form-control" name="twitter" placeholder="Enter Twitter Link" value="{{$data->twitter}}">
                            </div>
                            <div class="col-12 mt-1">
                                <label for="">Pinterest</label>
                                <input type="text" class="form-control" name="pinterest" placeholder="Enter Pinterest Link" value="{{$data->pinterest}}">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->

            <!-- Dark Tables start -->

                        </div>
                    </div>

                    <div class="col-3">
                        <div class="content-body">
                            <!-- Basic Tables start -->
                            <div class="row" id="basic-table">
                                <div class="col-12">
                                    <div class="card">


                                        <div class="row p-2">
                                            <div class="col-12">
                                                <h5>Advance Options</h5>
                                                <label for="" class="mt-1 fw-bold">Logo</label>
                                                <img src="{{asset('assets/'.$data->logo)}}" alt="" class="w-100">
                                                <input type="file" class="form-control mt-1" name="logo">
                                                <img src="{{asset('assets/'.$data->footer_logo)}}" alt="" class="w-100">
                                                <label for="" class="mt-1 fw-bold mb-1">Footer Logo</label>
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <input type="file" class="form-control" multiple name="footer_logo">
                                                </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12">
                                                        <label for="">Meta Title</label>
                                                    <input type="text" class="form-control" name="meta_title" placeholder="Enter Meta Title" value="{{$data->meta_title}}">
                                                </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-12">
                                                        <label for="">Meta Description</label>

                                                   <textarea name="meta_description" id="" cols="30" rows="5" placeholder="Enter Meta Description" class="form-control">{{$data->meta_description}}</textarea>
                                                    </div>
                                                </div>



                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
