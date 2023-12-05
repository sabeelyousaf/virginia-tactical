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
                        <h2 class="content-header-title float-start mb-0">Course</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Update Course
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <form action="{{route('update-course',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
            </div>


            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                   <button class="btn btn-primary " type="submit">Publish</button>
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
                            <div class="col-12">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{$data->name}}">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-12 mt-1">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name="slug" placeholder="Slug" value="{{$data->slug}}">
                                @error('slug')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="col-3 mt-1">
                                <label for="">Price <span class="text-danger">*</span></label>
                                <input type="number" id="price" class="form-control" name="price" placeholder="Price" value="{{$data->price}}">
                                @error('price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-3 mt-1">
                                <label for="">Discounted price(%)</label>
                                <input id="discounted" type="number" class="form-control">
                            </div>
                            <div class="col-3 mt-1">
                                <label for="">Sale</label>
                                <input id="discountedPrice" type="number" name="sale_price" class="form-control text-dark"  readonly value="{{$data->sale_price}}">
                            </div>
                            <div class="col-3 mt-1">
                                <label for="">Seats</label>
                                <input id="discountedPrice" type="number" name="seats" class="form-control text-dark"  value="{{$data->seats}}">
                            </div>
                            <div class="col-12 mt-1">
                                <label for="">Private</label>
                                <select name="private"  id="" class="form-control">
                                    <option value="" disabled selected>Choose...</option>
                                    <option @if($data->private === "yes") selected @endif value="yes"  >Yes</option>
                                    <option @if($data->private === "no") selected @endif value="no"  >No</option>


                                </select>
                                @error('private')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>






                            <div class="col-12 mt-1">
                                <label for="">Description</label>
                                <textarea  id="" cols="30" rows="10" name="description" class="form-control" placeholder="Enter Description" >{{$data->description}}</textarea>
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
                                                <div class="col-12 mt-1">
                                                    <label for="">Display Sequence on website</label>
                                                    <input  type="number" name="order_number" class="form-control text-dark" placeholder="Enter Course Sequence"  value="{{$data->order_number}}">
                                                </div>
                                                <label for="" class="mt-1 fw-bold">Featured Image</label>
                                                <img src="{{asset('assets/courses/'.$data->img)}}" class="w-100 mt-2 rounded-3" alt="">
                                                <input type="file" class="form-control mt-1" name="img">






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

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>

    function updateDiscountedPrice() {
        var originalPrice = parseFloat($("#price").val());
        var discountPercentage = parseFloat($("#discounted").val());

        if (!isNaN(originalPrice) && !isNaN(discountPercentage)) {
            var discountedPrice = originalPrice - (originalPrice * discountPercentage / 100);
            $("#discountedPrice").val(discountedPrice);
        }
    }

    // Attach the event handler to the 'discounted' input field
    $("#discounted").on("input", updateDiscountedPrice);

</script>
@endsection
