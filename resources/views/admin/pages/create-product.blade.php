@extends('admin.master')

@section('title', 'Create Product')

@section('top-resource')
@endsection

@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">PRODUCT</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Product Form
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('product-store') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="product_name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Product Code</label>
                                    <input type="text" name="product_code" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Product Price</label>
                                    <input type="text" name="product_price" class="form-control">
                                </div>                               
                                    
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                       
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection

@section('bottom-resource')
@endsection