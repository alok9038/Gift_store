<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Address;
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
                $orders = Order::insert(["ordered"=>false,"user_id"=>$user,"coupon_id"=>null, "address"=>null]);
                echo $last_id = $orders[0]->id;

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

        // remove coupon
        if($id!= null){
            $query = Order::where('id',$id)->update([
                'coupon_id' => null
                ]);
                return redirect()->back();
        }
        else{
            echo "<script>alert('Something Went Wrong')</script>";
        }

        // add coupon
        $check = Coupon::where(['code',$coupon],['status'=> 1])->get();
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
    
    public function remove_item($id){
        $user = Auth::id();
        $order = Order::where([['user_id',$user],['ordered',false]])->get();
        $cond = [['ordered',false],['user_id',$user],['order_id',$order[0]->id],['product_id',$id]];
        Order_item::where($cond)->delete();

        return redirect()->back();
    }

    public function address(Request $req){
        $user_id = Auth::id();

        if(!empty($req->address)){
            $address_id = $req->address;
            $order = Order::where(['ordered'=>false],['user_id'=>$user_id])->update(['address'=>$address_id, 'user_id'=>$user_id, 'ordered'=>false]);
            return redirect()->back();
        }else{
            $req->validate([
                'name' => 'required',
                'contact' => 'required',
                'street' => 'required',
                'city' => 'required',
                'pincode' => 'required',
                'state' => 'required',
                'pincode' => 'required',
                'landmark' => 'required'
            ]);

            
            $add = new Address();
            $add->name = $req->name;
            $add->street = $req->street;
            $add->city = $req->city;
            $add->pincode = $req->pincode;
            $add->contact = $req->contact;
            $add->state = $req->state;
            $add->pincode = $req->pincode;
            $add->landmark = $req->landmark;
            $add->user_id = $user_id;
            $add->save();
            echo $last_id = $add->id;

            $order = Order::where(['ordered'=>false],['user_id'=>$user_id])->update(['address'=>$last_id, 'user_id'=>$user_id, 'ordered'=>false]);
        
        }
        return redirect()->back();
    }

    public function checkout(){

        $data['items'] = Order_item::where([['user_id',Auth::id()],['ordered',false]])->get();
        // count cart items
        $data['category'] = Category::all();
        
        $u_id = Auth::id();
        $data['user'] = Auth::user()->where(['id'=>$u_id],['is_admin'=>'USR'])->first();
        $data['address'] = Address::where('user_id',$u_id)->get();

        return view('home.checkout',$data);

    }

}
