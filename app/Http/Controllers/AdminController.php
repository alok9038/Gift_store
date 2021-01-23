<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function store(request $request) {
        
        $images = $request->file('image');
        if ($request->hasFile('image')) :
                foreach ($images as $item):
                    $var = date_create();
                    $time = date_format($var, 'YmdHis');
                    // $imageName = time() . "." . $request->file('image')->extension();
                    // $request->file('image')->move(public_path("album"),$imageName);

                    $imageName = $time . '-' . $item->getClientOriginalName();
                    $item->move(public_path("album"), $imageName);
                    $arr[] = $imageName;
                endforeach;
                
                $image = implode(",", $arr);
                else:
                        $image = '';
                endif;



        DB::table('image')->insert(
        array(
            'images' => $image
           )
       );

       return redirect()->back();

    }

    public function insert(){
        return view('admin.insertProduct');
    }

    public function index(){
        return view('admin.image');
    }
}
