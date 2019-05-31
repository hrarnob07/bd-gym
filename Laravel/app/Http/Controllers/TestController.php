<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;
//use Excel;


class TestController extends Controller
{
    //
    public function index(){

        return view("admin.file.index");
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function fileImport(Request $request){

        if($request->hasFile('products')){
            $path = $request->file('products')->getRealPath();
            $data = Excel::load($path)->get();
            dump($data);

            if($data->count()){

                foreach ($data as $key => $value) {
                    //print_r($value);
                    $product_list[] = ['name' => $value->title, 'description' => $value->body];
                }
                if(!empty($product_list)){
//                    Product::insert($product_list);
//                    \Session::flash('success','File improted successfully.');
                    dd($product_list);
                }
            }
        }else{
            \Session::flash('errorMsg','There is no file to import');
        }
        return Redirect::back();
    }
}
