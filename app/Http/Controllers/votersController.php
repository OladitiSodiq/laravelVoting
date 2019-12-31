<?php

namespace App\Http\Controllers;
use App\voters;
use Illuminate\Http\Request;

class votersController extends Controller
{
    //
    
    public function registerVoterv(Request $request)
    {
      return view('registerVoter');
    }

    public function registeredVoterv(Request $request)
    {
      $voters = voters::all();
      // dd(Session::get('cart'));
      return view('registeredVoter', compact('registeredVoter'));
    }
}
