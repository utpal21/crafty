<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Member;

class AboutusController extends Controller
{
  /**
   * Show about us page view 
   */
  public function index()
  {        
    $about = DB::table('abouts')->orderByRaw('created_at DESC')->first();
    $members = DB::table('members')->orderByRaw('created_at DESC')->get();
     return view('pages.about.index', [
            'members' => $members,
            'about' => $about
        ]);
  }  
  /**
   * Show product page view 
   */
  public function contact_us()
  {    
    $contactData = DB::table('contacts')->orderByRaw('created_at DESC')->first();
     return view('pages.contact.index', [
            'contactData' => $contactData
        ]);
  }  
}