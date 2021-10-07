<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Product;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    
    /**
     * SHow favourite products
     */
    public function index()
    {
      $user = Auth::user();     
      $wishlists = DB::table('wishlists')->where("user_id", "=", $user->id)->get()->toArray();
      $products_ids = [];
      $products = [];
      if(!empty($wishlists)) {
        $products_ids =  array_column($wishlists, 'product_id');
        $products = DB::table('products')
                    ->whereIn('id', $products_ids)->get();
      }
        return view('pages.auth.mypage', [
            'user' => $user,           
            'products' => $products
        ]);
    }
   /**
     * store favourite products
     */

     public function store(Request $request)
    {

        $this->validate($request, array(
        'user_id'=>'required',
        'product_id' =>'required',
        ));

       
        $status = Wishlist::where('user_id',Auth::user()->id)
        ->where('product_id',$request->product_id)
        ->first();     
               
        if(isset($status->user_id) and isset($request->product_id))
        {
            return redirect()->back()->withFail('This product is already in your
            favourate list!');          
        }
        else
        {
            $wishlist = new Wishlist;
            $wishlist->user_id = $request->user_id;
            $wishlist->product_id = $request->product_id;
            $wishlist->save();          
            return Redirect::back()->withSuccess('Added to your favourite list');
        }

        }

        /**
         * Delete favourite
         */
        public function destroy($id)
        {
            $wishlist = Wishlist::findOrFail($id);
            if(!empty($wishlist)) {
                $wishlist->delete();
                return Redirect::back()->withSuccess('Item Deleted Successfully!');
            } else {
                return redirect()->back()->withFail('Not Found!! the item on server');          
            }       
        
        }
}