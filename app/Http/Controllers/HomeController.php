<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        
        $data['products']= Product::orderBy('id','desc')->get();
        $data['category'] = Category::all();
        return view('home.index',$data);
    }
    public function product($name){
        $data['category'] = Category::all();
        $data['s_products'] = Product::where('slug !',$name);
        $data['product'] = Product::where('slug',$name)->first();
        return view('home.product',$data);
    }
    
}
