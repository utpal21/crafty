<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Happyclient;

class HomeController extends Controller
{
  /**
   * Show home page view 
   */
  public function index()
  {
    $user = Auth::user();
    var_dump($user);
    
   $clientSays = DB::table('happyclients')->orderByRaw('created_at DESC')->get();
   $featured = DB::table('products')->where('featured', true)->orderByRaw('created_at DESC')->limit(10)->get();   
   $latestProducts = DB::table('products')->orderByRaw('created_at DESC')->limit(10)->get();
    
     return view('pages.home.index', [
            'latestProducts' => $latestProducts,
            'preturedProducts' => $featured,
            'clientSays' => $clientSays
        ]);
  }
    /**
     * Show the product details of a specific product.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
    $decryptedId = Crypt::decrypt($id);
    $product = Product::findOrFail($decryptedId);
    $category = Category::findOrFail($product->category_id);
    $relatedData = DB::table('products')->where('category_id', $product->category_id)->whereNotIn('id', [$product->id])->orderByRaw('created_at DESC')->limit(10)->get(); 
    
        return view('pages.shop.details', [
            'product' => $product,
            'category' => $category,
            'relatedData' => $relatedData,
        ]);
    }
}