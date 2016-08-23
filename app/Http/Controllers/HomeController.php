<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $products = DB::table('products')->join('categories', 'products.product_category', '=', 'categories.id')->get();
        return view('product.product', ['products' => $products]);
    }

    public function detailproduct($slug_category, $slug_product){
        $product = DB::table('products')->join('product_pictures', 'product_pictures.product_id','=','products.id')->join('product_statistics','product_statistics.product_id', '=', 'products.id')->where('slug_product','=' ,$slug_product)->get();
        return view('product.detailproduct', ['product'=> $product]);
    }

    public function addcart(Request $request){
        $data['quantity'] = $request->input('quantity');
        $data['product'] = $request->input('product');
        $data['price'] = $request->input('price');
        $data['sum'] = $data['quantity'] * $data['price'];
        $totalsum = $data['sum']+ session()->get('totalsum');
        session()->push('temp_cart[]', $data);
        session()->set('totalsum', $totalsum);
        return $data;
    }

    public function ceksession(){
        return session()->get('totalsum');
    }

    public function delsession(){
        session()->forget('temp_cart[]');
        session()->forget('totalsum');
    }
}
