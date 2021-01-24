<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Auth;
use App\Models\Order_item;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addToCart($id){
        $count = Product::where('id',$id)->get();
        $user =  Auth::id();
        if(count($count) > 0){
            $order = Order::where([['user_id',$user],['ordered',false]])->get();
            if(count($order) > 0){
                $cond = [['ordered',false],['user_id',$user],['order_id',$order[0]->id],['product_id',$id]];
                $order_item = Order_item::where($cond)->get();

                if(count($order_item) > 0){
                    $qty = $order_item->qty+=1;
                    Order_item::where($cond)->update('qty',$qty);
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
                $orders = Order::insert(["ordered"=>false,"user_id"=>$user]);
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
}
