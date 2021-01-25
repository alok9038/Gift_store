<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order_item;
use Auth;
use View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $data['items'] = Order_item::where([['user_id',Auth::id()],['ordered',false]])->get();
        // count cart items
        $data['products']= Product::orderBy('id','desc')->get();
        $data['category'] = Category::all();
        return view('home.index',$data);
    }
    public function product($name){
        $data['items'] = Order_item::where([['user_id',Auth::id()],['ordered',false]])->get();
        // count cart items
        $data['category'] = Category::all();
        $data['s_products'] = Product::where('slug !',$name);
        $data['product'] = Product::where('slug',$name)->first();
        return view('home.product',$data);
    }
    
}
