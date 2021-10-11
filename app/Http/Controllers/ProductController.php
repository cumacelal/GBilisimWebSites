<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {

      $data['products'] = Product::all();
      return view('product', $data);
    }

    public function show($slug)
    {
      $data['product']  = Product::where("slug" , $slug)->first();
      if(empty($data['product']))
      {
        abort(404);
      }
      return view('detail',$data);
    }
}
