<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Happyclient;

class ShopController extends Controller
{
  /**
   * Show product page view 
   */
  public function index()
  {
    
   $products = Product::paginate(12);
    $category = DB::table('categories')->orderByRaw('created_at DESC')->get();
     return view('pages.shop.index', [
            'products' => $products,
            'category' => $category
        ]);
  }
  
  /**
   * Shop by category
   */
  public function shop_by_category($id){
     $products = [];
     $category = [];
     $categoryCheck = [];
    if(!empty($id)) {
       $categoryCheck = Category::findOrFail($id);
       if(!empty($categoryCheck)) {
        $products = DB::table('products')->where('category_id', $id)->orderByRaw('created_at DESC')->get(); 
       }
    }
     $category = DB::table('categories')->orderByRaw('created_at DESC')->get();  
    
    return view('pages.shop.shopcategory', [
            'products' => $products,
            'category' => $category,
            'categoryCheck' => $categoryCheck
    ]);
  }
}