<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\candidate;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

use Carbon\Carbon;
// use APP\ResetPassword;
use App\Mail\ResetUserPasswordMail;
use App\ResetUserPassword;

class accountController extends Controller
{
    //


    public function dashboard(){
	return view('dashboard');
    }
    
    public function login(Request $request)
    {
  
      $this->validate($request, [
        'matricNo' => 'required',
        'password' => 'required'
      ]);
  
      $username = $request['matricNo'];
      $form_password = $request['password'];
      $dest = $request['dest'];
        if (isset($dest) == "admin") 
          {
                    $user = DB::table('users')
                    ->where('matricNo', $username)
                   ->first();
                  if ($user == '') {
                    Session::flash('flash', 'Invalid email/password combination');
                    return redirect()->route('login');
                  }
                  else{
                  $db_password = $user->password;
              
                
              
                  if ($db_password == $form_password) {
                        Session::put('admin_logged_in', true);
                        Session::put('admin_role', $user->role);
                        Session::put('admin_name', $user->name);
                        Session::put('admin_username', $user->username);
                        Session::put('admin_email', $user->email);
                        Session::put('admin_user_id', $user->id);
                        return redirect('/dashboard');
              
                      }
                      else{
                        Session::flash('flash', 'Invalid email/password combination');
                        return redirect()->route('login');
                      }
                    }
          }
          else
          {
                          $user = DB::table('users')
                          ->where('matricNo', $username)
                          ->orWhere('username', $username)
                          ->first();
                    
                        if ($user == '') {
                          Session::flash('flash', 'Invalid email/password combination');
                          return redirect()->route('login');
                        }
                        $db_password = $user->password;

                        $password_match = password_verify($form_password, $db_password);
                    
                        if ($password_match) {
                        
                  
                  
                      
                          Session::put('logged_in', true);
                          Session::put('role', $user->role);
                          Session::put('name', $user->name);
                          Session::put('username', $user->username);
                          Session::put('user_id', $user->id);
                          Session::put('email', $user->email);
                    
                    
                          return redirect('/votingDashboard');
                        } 
                        else{
                          Session::flash('flash', 'Invalid email/password combination');
                          return redirect()->route('login');
                        }
                        }
    }
    public function registerCandidate(Request $requ)
    {
      $this->validate($requ, [
        'name' => 'required',
        'email' => 'required',
        'username' => 'required',
        'file' => 'required',
        'position' => 'required',
      ]);
  
   


      $uploadedFile = $requ->file('file');
      $extension = $uploadedFile->getClientOriginalExtension();
      $filename  = $requ->position . time() . '.' . $extension;
      $destination = public_path('public/uploads');
      //$path = $uploadedFile->storeAs('public/upload');
      $uploadedFile->move($destination, $filename);
  
      $product = new candidate;
      $product->name = $requ->name;
      $product->email = $requ->email;
      $product->username = $requ->username;
      $product->image = $filename;
      $product->post = $requ->position;
    
  
  
      if ($product->save()) {
        Session::flash('flash', 'Candidate details has been added successfully');
        return redirect()->back();
      }
    }
    public function registerVoter(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'username' => 'required',
        'password' => 'required | same:password2',
        'email' => 'required',
        'matricNo' => 'required',
        

      ]);
  
      $user = new User();
      $user->username = $request->username;
      $user->email = $request->email;
      $user->password = password_hash($request->password, PASSWORD_BCRYPT);
      $user->name = $request->name;
      $user->matricNo = $request->matricNo;
      $user->role = 100;
  
      if ($user->save()) {
        Session::flash('flash', 'Registration successful, You can now login.');
        Session::put('name', $user->username);
        return redirect('/registerVoter');
      } else {
        Session::flash('flash', 'Registration Un successful');
        return redirect('/');
      }
    }

  public function logout()
  {
    Session::flush();
    return redirect('/');
  }

  public function AdminLogout()
  {
    Session::flush();
    return redirect()->route('login');
  }
}
