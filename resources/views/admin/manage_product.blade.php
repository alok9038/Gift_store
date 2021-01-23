@extends('layouts.adminbase')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card border">
                    <div class="card-header bg-light">
                        <div class="row">
                            <div class="col-8">
                                <form action="" class="d-flex">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn bg-theme rounded-0 text-white border-0"><i class="fa fa-search"></i></button>
                                        </div>
                                        <input type="search" name="search" id="" class="form-control rounded-0 shadow-none bg-theme border-0 text-white" placeholder="search products">
                                    </div>
                                </form>
                            </div>
                            <div class="col-4"><a href="{{ route('insert.product') }}" class="btn btn-info float-end rounded-0 btn-sm">Add Product</a></div>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-stripped">
                            <tr>
                                <th>Sr no</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Model</th>
                                <th>Brand</th>
                                <th>Action</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection