<?php

namespace App\Http\Controllers;
use App\candidate;
use Illuminate\Http\Request;

class candidateController extends Controller
{
    //
    private $post = ['president', 'vicepresident', 'jewelry', 'beads', 'islamic-art', 'silver'];
    public function registerCandidatev(Request $request)
    {
      return view('registerCandidate');
    }

    public function registeredCandidatev(Request $request)
    {
  
  
      $voters = candidate::all();
      // dd(Session::get('cart'));
      return view('registeredCandidate', compact('registeredCandidate'));
    }


    public function candidatelandingpage(Request $request)
    {
      $cat =$request->cat;
      

     
      $candidate = candidate::where([['post', $cat]])->get();
      return view('candidatelandingpage', compact('candidate'));
    }
    
    
      
}
