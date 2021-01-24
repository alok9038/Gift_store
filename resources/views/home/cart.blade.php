
@extends('layouts.homebase')
@section('content')
<style>
    .card-footer{
        -webkit-box-shadow:0 -0.5rem 1.10rem rgba(0,0,0,.075)!important;
    -moz-box-shadow:0 -0.5rem 1.10rem rgba(0,0,0,.075)!important;
    box-shadow:0 -0.5rem 1.10rem rgba(0,0,0,.075)!important;
    }
    .border-dotted{
    border-style: dashed!important;
    border-top:2px rgb(0 0 0 / 50%);
    border-bottom:0;
    border-left:0;
    border-right:0;
    }
    @media (max-width: 1068px) {
        .col-lg-4{
            position:relative!important;
            bottom:0!important;
            right:0!important;
        }
    }
    

</style>

<div class="container mb-5 mt-0">

    <div class="row mb-5 ">
        <div class="col-lg-8">
            <div class="card rounded-0 shadow-sm mt-5">
            <div class="card-header bg-white h5">My Cart ()</div>
                <div class="card-body p-0 px-3">
                    <div class="row  mt-4 pb-3 border-bottom">
                        <div class="col-lg-3 ">
                            <div class="h-50 w-100 mb-4">
                                <img src="" class="img-fluid  w-100 " alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="text-truncate h6" title=""></h4>
                            <p class="text-muted small">black</p>
                            <h4 class="h6">₹ discount_price/- <span class="small font-weight-light ml-3 text-muted"><del>₹ price/-</del></span></h4>                                 
                        </div>
                        <div class="col-lg-3">
                            <div class="box btn-group">
                                <a href="" class="btn border-0 btn-secondary rounded-0">-</a>
                                <a href="" class="btn btn-light  text-dark border disabled rounded-0"></a>
                                <a href="" class="btn border-0 btn-secondary rounded-0">+</a>
                            </div>
                            <div class="box mt-3">
                                <a href="" class="text-muted small text-decoration-none"> <i class="fa fa-trash"></i>  Remove</a>
                            </div>
                        </div>
                    </div>
                
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-lg-4 mb-5" style="position:absolute; right:50px;">
            <div class="card mt-5 rounded-0 shadow-sm ">
                <div class="card-header h5 bg-white text-muted">Order Summary</div>
                <div class="card-body">
                    <table class="table-md table table-borderless">
                        <tr>
                            <td>Subtotal </td>
                            <td>₹ </td>
                        </tr>
                        <tr>
                            
                        </tr>
                        <tr class="">
                            <td >Shipping</td>
                            <td class="text-success-2 pb-5">Free</td>
                        </tr>
                        <tr class="border-dotted">
                            
                        </tr>
                    </table>
                    <form action="" class="mt-3" method="post">
                        <div class="input-group">
                            <input type="search" name="code" id="" placeholder="Enter coupon code" class="form-control shadow-none rounded-0">
                            <div class="input-group-append">
                                <input type="submit" value="Apply" class="btn btn-info rounded-0">
                            </div>
                        </div>
                    </form>

                        <h6 class="mt-3 text-success-2">
                            <a href="" class="text-theme"><i class="fa fa-trash"></i></a>  <small>Applied</small>
                        </h6>
                    
                    <a href="" class="btn bg-green text-white rounded-0 w-100 shadow mt-4">Checkout</a>
                    <a href="" class="text-decoration-none text-info small float-end mt-3">Continue shopping.</a>
                </div>            
            </div>
        </div>
        
    </div>
   
        <div class="container pt-5">
            <div class="row mt-5">
                <div class="col-lg-5 mx-auto">
                <h6 class="text-center"><img src="" style="width:60%" alt=""></h6>
                <h5 class="text-center font-weight-light">Your cart is empty!</h5>
                <p class="text-center small">Add items to it now.</p>
                </div>
            </div>
        </div>


</div>
@endsection
    
                    
    
    
    
    
    
    
    
    