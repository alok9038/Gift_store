<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index(){
        $data['products'] = Product::count();
        $data['category'] = Category::count();
        return view('admin.index',$data);
    }

    // public function store(request $request) {
        
    //     $images = $request->file('image');
    //     if ($request->hasFile('image')) :
    //             foreach ($images as $item):
    //                 $var = date_create();
    //                 $time = date_format($var, 'YmdHis');
    //                 // $imageName = time() . "." . $request->file('image')->extension();
    //                 // $request->file('image')->move(public_path("album"),$imageName);

    //                 $imageName = $time . '-' . $item->getClientOriginalName();
    //                 $item->move(public_path("album"), $imageName);
    //                 $arr[] = $imageName;
    //             endforeach;
                
    //             $image = implode(",", $arr);
    //             else:
    //                     $image = '';
    //             endif;



    //     DB::table('image')->insert(
    //     array(
    //         'images' => $image
    //        )
    //    );

    //    return redirect()->back();

    // }

    public function category(){
        $data['categories'] = Category::all();
        return view('admin.category',$data);
    }

    public function storeCategory(Request $request){
        $request->validate([
            'title'          => 'required',
            'description'    => 'required',
            'image'          => 'required',
        ]);

        $filename = time() . "." . $request->image->extension();
        $request->image->move(public_path("category"),$filename);

        $category = new Category();
        $category->cat_title = $request->title;
        $category->description = $request->description;
        $category->color = $request->color;
        $category->image = $filename;
        $category->save();

        return redirect()->back();

    }


    public function insert(){
        $data['category'] = Category::all();
        return view('admin.insertProduct',$data);
    }

    public function insertProduct(Request $request){
        $request->validate([
            'title'          => 'required',
            'price'          => 'required',
            'discount_price' => 'required',
            'description'    => 'required',
            'cover_image'    => 'required',
            'category'       => 'required'
        ]);


        
        $images = $request->file('images');
        if ($request->hasFile('images')) :
                foreach ($images as $item):
                    $var = date_create();
                    $time = date_format($var, 'YmdHis');
                    // $imageName = time() . "." . $item->extension();
                    // $item->move(public_path("product"),$imageName);

                    $imageName = $time . '-' . $item->getClientOriginalName();
                    $item->move(public_path("product"), $imageName);
                    $arr[] = $imageName;
                endforeach;
                
            $image = implode(",", $arr);
        else:
            $image = '';
        endif;


        $filename = time() . "." . $request->cover_image->extension();
        $request->cover_image->move(public_path("product"),$filename);

        $slug = Str::of($request->title)->slug('-');
        

        $product = new Product();
        $product->title             =       $request->title;
        $product->price             =       $request->price;
        $product->discount_price    =       $request->discount_price;
        $product->description       =       $request->description;
        $product->model             =       $request->model;
        $product->brand             =       $request->brand;
        $product->cat_id            =       $request->category;
        $product->cover_image       =       $filename;
        $product->slug              =       $slug;
        $product->images            =       $image;
        $product->save();

        return redirect()->route('products.view');
    }

    public function products(){
        $data['products'] = Product::orderBy('id','desc')->get();
        return view('admin.manage_product',$data);
    }
    

    public function dropProduct($id){
        Product::where('id',$id)->delete();
        return redirect()->back();
    }
}
