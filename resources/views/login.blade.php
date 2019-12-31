    
@extends('master')
@section('content')

	 <header class="header-login top-page" style="

  background: url('source/admin/uploads/157121554052709.jpg') no-repeat center center fixed;
  background-size: cover;
  background-position: center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  color: #fff;
  height: 30vh;
  width: 100%;
  
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;">
      <div class="container">
	   <div class="content">
	    <div class="row">
	     <h1 class="revealOnScroll" data-animation="fadeInDown"> Voting</h1>
        </div><!-- /.row -->
       </div><!-- /.content -->
	  </div><!-- /.container -->
     </header><!-- /header -->
	 
     <!-- ==============================================
     Banner Login Section
     =============================================== -->
	 <section class="banner-login">
	  <div class="container">
	  		  	
	   <div class="row">
	   
	    <main class="main main-signup col-lg-12">
	     <div class="col-lg-6 col-lg-offset-3 text-center">
	     	
                
        
		  <div class="form-sign">
		 
        <form action="/login" method="post">
		    <div class="form-head">
			 <h3>Login</h3>
			</div><!-- /.form-head -->
            <div class="form-body"> 
              @if ($errors->any())
              <div >
                  <ul class="alert alert-danger">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          <div style="margin: 30px;">
              @if( Session::has('flash') )
                  <div class="alert alert-danger">
                      {{ Session::get('flash') }}
                  </div>
              @endif
          </div>
             {{ csrf_field() }}
            <!-- List group -->
            <ul class="list-group">
             <li class="list-group-item">
{{-- 
              <div class="form-row">
                <label for="sel1">Select list:</label>
                <select class="field" name ="dest" id="sel1">
                  <option value="admin">Admin</option>
                  <option value="voter">Voter</option>
                 
                </select>
              </div> --}}
              <input name="dest" placeholder="Admin" class="field" type="text">
             </li>
            </ul>           
            	
			 <div class="form-row">
			  <div class="form-controls">
			   <input name="matricNo" placeholder="Matric No" class="field" type="text">
			  </div><!-- /.form-controls -->
			 </div><!-- /.form-row -->

			 <div class="form-row">
			  <div class="form-controls">
			   <input name="password" placeholder="Password" class="field" type="password">
			  </div><!-- /.form-controls -->
			 </div><!-- /.form-row -->
			 
			 <div class="form-row">
			  <div class="material-switch pull-left">
			   <input id="someSwitchOptionSuccess" name="remember" type="checkbox"/>
			   <label for="someSwitchOptionSuccess" class="label-success"></label>
			   <span>Remember Me</span>
			  </div>
			 </div><!-- /.form-row -->
			 
		    </div><!-- /.form-body -->

			<div class="form-foot">
			 <div class="form-actions">					
            
			  <input value="Login" class="kafe-btn kafe-btn-default full-width" type="submit"><br></br>
			
			 </div><!-- /.form-actions -->
             <div class="form-head">
			  <a href="forgot.html" class="more-link">Forgot Password?</a>
			 </div>
			</div><!-- /.form-foot -->
		   </form>
		   
		  </div><!-- /.form-sign -->
	     </div><!-- /.col-lg-6 -->
        </main>
		
	   </div><!-- /.row -->
	  </div><!-- /.container -->
     </section><!-- /section --> 	

	 
   @stop

    @section('title')
      landing Page
    @stop
