@extends('admin.admin')
@include('admin.admin-right-side')
@section('content')
    <div class="wrapper">
        <div class="login-section section mt-90 mb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Login -->
                    <div class="col-md-5 ">
                        <div class="card">
                            <div class="card-header">{{ __('Add Product') }}</div>
                            <div class="card-body">
                                <div class="ee-email-reset">
                                    <form id="form" method="post" action="{{asset('/addproduct')}}" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-12 mb-30">
                                                <input id="product_name" type="text" placeholder="Type your product name" >
                                            </div>
                                            <div class="col-12 mb-30">
                                                <input id="product_sku" type="text" placeholder="Type your product sku" >
                                            </div>
                                            <div class="col-12 mb-30">
                                                <input id="product_quantity" type="text" placeholder="Type your product quantity" >
                                            </div>
                                            <div class="col-12 mb-30">
                                                <input id="product_price" type="text" placeholder="Type your product price" >
                                            </div>
                                            <div class="col-12 mb-30">
                                                <textarea class="form-control" rows="5" id="product_description" placeholder="Type your product description"></textarea>
                                            </div>
                                            <div class="col-12 mb-30 ">
                                                <input type="file" class="custom-file-input" id="imageFile" name="image_upload[]"  multiple>
                                                <label class="custom-file-label" for="image_upload">Choose file</label>
                                            </div>
                                            <div class="col-12">
                                                <input type="submit" class="create" value="Add Product">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- Login Section End -->

    </div>

@endsection
