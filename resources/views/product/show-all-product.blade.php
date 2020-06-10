@extends('admin.admin') @include('admin.admin-right-side') @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <th>Company Name</th>
                                <th>Product Name</th>
                                <th>Product Sku</th>
                                <th>Product Price</th>

                                <th>Product Quantity</th>
                                <th>Product Description</th>
                                <th>Edite</th>
                                <th>Delete</th>
                                </thead>
                                <tbody>
                                @foreach($getAllProduct as $product)
                                    <tr>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_sku}}</td>
                                        <td>{{$product->product_price}}</td>
                                        <td>{{$product->product_quantity}}</td>
                                        <td>{{$product->product_description}}</td>
                                        <td><a href="#" class="btn btn-primary openModal btn-xs" data-id="{{$product->id}}">Edit</a> </td>
                                        <td><a href="#"
                                               class="btn btn-danger delete_btn btn-xs"
                                               id="del_{{$product->id}}"
                                               data-id="{{$product->id}}"
                                               data-path="{{asset('/delete')}}">
                                                Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
