
   @extends('master')
   @section('content') 
     <section class="tr-banner section-before bg-image" style="

  background: url('source/admin/uploads/157121554052709.jpg') no-repeat center center fixed;
  
  background-size: cover;
  background-position: center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  color: #fff;
  width: 100%;
  
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: #fff;
  padding: 120px 0;">
      <div class="container">
       <div class="banner-content text-center">
        <h1>Online Voting Platform</h1>
        <h2>Search Organizations and Positions.</h2>

		
       </div><!--/. banner-content -->
      </div><!-- /.container -->
     </section>		

	 <!-- ==============================================
	 Feautured Car Section
	 =============================================== -->
     <section class="featured-users">	
      <div class="container">
	  <div class="row">
			<div class="section-title" style="padding-top: 20px;">
				<h1>Office </h1>
			</div>
	  </div>

	  	 	   
				  <!-- START OF INTERNAL ROW --><div class="row">
			   
			   <div class="col-lg-4">	
				<div class="box-home clearfix">
				 <a href="/registerVoter"></a>
				  {{-- <img src="source/admin/uploads/15172161218080-png.png" alt="" class="img-resonsive"> --}}
				 <h3>Voters Registration</h3>
				
				</div><!-- /box-home -->
			   </div><!-- /.col-lg-4 -->
							 
			   
			   <div class="col-lg-4">	
				<div class="box-home clearfix">
				 <a href="/registerCandidate"></a>
				  {{-- <img src="" alt="" class="img-resonsive"> --}}
          <h3>Candidate Registration</h3>
          {{-- <p>Contestants :- 3</p></p> --}}
				</div><!-- /box-home -->
			   </div><!-- /.col-lg-4 -->
							 
			   
         <div class="col-lg-4">	
          <div class="box-home clearfix">
           <a href="/viewcandidate"></a>
            {{-- <img src="" alt="" class="img-resonsive"> --}}
            <h3>View Registered Candidate</h3>
            {{-- <p>Contestants :- 3</p></p> --}}
          </div><!-- /box-home -->
           </div><!-- /.col-lg-4 -->
               
               <div class="row">
			   
                <div class="col-lg-4">	
                  <div class="box-home clearfix">
                   <a href="/viewvoters"></a>
                    {{-- <img src="" alt="" class="img-resonsive"> --}}
                    <h3>View Registered Voters</h3>
                    {{-- <p>Contestants :- 3</p></p> --}}
                  </div><!-- /box-home -->
                   </div><!-- /.col-lg-4 -->
			   
                   <div class="col-lg-4">	
                    <div class="box-home clearfix">
                     <a href="/viewresult"></a>
                      {{-- <img src="" alt="" class="img-resonsive"> --}}
                      <h3>View Result</h3>
                      {{-- <p>Contestants :- 3</p></p> --}}
                    </div><!-- /box-home -->
                     </div><!-- /.col-lg-4 -->
							 
			   
			 
     </section>
	 
     @stop

     @section('title')
       landing Page
     @stop
