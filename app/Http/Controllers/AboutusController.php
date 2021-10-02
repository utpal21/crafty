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
    $members = DB::table('members')->orderByRaw('created_at DESC')->get();
     return view('pages.about.index', [
            'members' => $members
        ]);
  }  
  /**
   * Show product page view 
   */
  public function contact_us()
  {    
    $contactData = DB::table('contacts')->orderByRaw('created_at DESC')->get();
     return view('pages.contact.index', [
            'contactData' => $contactData
        ]);
  }  
}