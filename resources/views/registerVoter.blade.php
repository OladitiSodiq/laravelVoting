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
	     <h1 class="revealOnScroll" data-animation="fadeInDown"> Voter's Registration Page</h1>
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
		    <form action="/registerVoter" method="post">
		    <div class="form-head">
       <h3>Register</h3>
       
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
			</div><!-- /.form-head -->
            <div class="form-body">            	
            	
			
             <div class="form-row">
			  <div class="form-controls">
			   <input type="text" name="name" class="field" value="" placeholder="Full Name">
			  </div><!-- /.form-controls -->
             </div><!-- /.form-row -->		
             
             <div class="form-row">
			  <div class="form-controls">
			   <input type="text" name="email" class="field" value="" placeholder="Email">
			  </div><!-- /.form-controls -->
             </div><!-- /.form-row -->
             
		     <div class="form-row">
		      <div class="form-controls">
			   <input type="text" name="username" class="field" value="" placeholder="Username">
			  </div><!-- /.form-controls -->
		     </div><!-- /.form-row -->
       
         <div class="form-row">
		      <div class="form-controls">
			   <input type="text" name="matricNo" class="field" value="" placeholder="Matric No">
			  </div><!-- /.form-controls -->
		     </div><!-- /.form-row -->

             <div class="form-row">
			  <div class="form-controls">
			   <input type="password" name="password" class="field" placeholder="Password">
			  </div><!-- /.form-controls -->
             </div><!-- /.form-row -->

			 <div class="form-row">
			  <div class="form-controls">
			   <input type="password" name="password2" class="field" placeholder="Confirm Password">
			  </div><!-- /.form-controls -->
             </div><!-- /.form-row -->
		   
			 </div><!-- /.form-body -->
	
			 <div class="form-foot">
			  <div class="form-actions">
              
			   <input type="submit" name="register" value="Register" class="kafe-btn kafe-btn-default full-width">
			  </div><!-- /.form-actions -->
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
