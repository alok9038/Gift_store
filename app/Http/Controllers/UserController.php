<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Coupon;
use Auth;
use App\Models\Order_item;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function addToCart($id){
        $count = Product::where('id',$id)->get();
        $user =  Auth::id();
        if(count($count) > 0){
            $order = Order::where([['user_id',$user],['ordered',false]])->get();
            if(count($order) > 0){
                $cond = [['ordered',false],['user_id',$user],['order_id',$order[0]->id],['product_id',$id]];
                $order_item = Order_item::where($cond)->get();

                if(count($order_item) > 0){
                    $qty = $order_item[0]->qty+=1;
                    Order_item::where($cond)->update(['qty'=>$qty]);
                }
                else{
                    Order_item::insert([
                        'ordered' => false,
                        'user_id' => $user,
                        'order_id' => $order[0]->id,
                        'qty' => 1,
                        'product_id' => $id
                    ]);
                    
                }
            }
            else{
                $orders = Order::insert(["ordered"=>false,"user_id"=>$user, 'coupon'=>0, 'address'=>0]);
                echo $last_id = $order->id;

                $orderitem = Order_item::insert([
                    "ordered"=>false,
                    "user_id"=>$user,
                    "order_id"=>$last_id,
                    'item_id'=>$id
                    ]);

                // $this->session->set_flashdata('msg', 'Item successfully added to cart');

            }
            return redirect()->route('cart');
        }
        
    }

    public function cart(){
        $data['items'] = Order_item::where([['user_id',Auth::id()],['ordered',false]])->get();        
        $data['order'] = Order::where([['user_id',Auth::id()],['ordered',false]])->first();        
        $data['category'] = Category::all();
        return view('home.cart',$data);
    }
    public function coupon(Request $req, $id = null){
        $order_id = $req->order_id;
        $coupon = $req->code;

        if($id!= null){
            $query = Order::where('id',$id)->update([
                'coupon_id' => 0
                ]);
                return redirect()->back();
        }
        else{
            echo "<script>alert('Something Went Wrong')</script>";
        }

        $check = Coupon::where('code',$coupon)->get();
        if(count($check) == 0){
            echo "<script>alert('coupon code not valid')</script>";
            //return redirect()->back();
        }else{
            $query = Order::where('id',$order_id)->update([
                'coupon_id' => $check[0]->id,
                ]);
                return redirect()->back();
        }
        
    }

    public function minus($id){
       
        $user = Auth::id();
        $item = Product::where('id',$id)->get();
        
        if(count($item) > 0){
            $order = Order::where([['user_id',$user],['ordered',false]])->get();
            if(count($order) > 0){
                // if exist
                $cond = [['ordered',false],['user_id',$user],['order_id',$order[0]->id],['product_id',$id]];
                $order_item = Order_item::where($cond)->get();

                if($order_item[0]->qty > 1){
                    $qty = $order_item[0]->qty-=1;
                    Order_item::where($cond)->update(['qty'=>$qty]);
                }
                else{
                    Order_item::where($cond)->delete();
                }
                return redirect()->back();
            }
            
        }
        
    }

}
