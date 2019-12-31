<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voting extends Controller
{
    //
    
    public function votingDashboard(){
      return view('votingDashboard');
        }
    
}
