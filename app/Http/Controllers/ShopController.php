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
   //$products->appends(['sort' => 'min_order']);
     return view('pages.shop.index', [
            'products' => $products
        ]);
  }  
}