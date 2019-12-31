
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

    <form action="/candidatelandingpage" method="get">  
  
				  <!-- START OF INTERNAL ROW --><div class="row">
			   
			   <div class="col-lg-4">	
				<div class="box-home clearfix">
				 <button name="cat" value="president" text="president" onclick="deleteCart(president)"><input  type="hidden"/></button>
				  <img src="source/admin/uploads/15172161218080-png.png" alt="" class="img-resonsive">
	 <h3>The  President</h3>
				 <p>Contestants :- 3</p>
				</div><!-- /box-home -->
			   </div><!-- /.col-lg-4 -->
							 
			   
			   <div class="col-lg-4">	
				<div class="box-home clearfix">
       
         <button name="cat" value="vpresident" text="vpresident" onclick="deleteCart(vpresident)"><input  type="hidden"/></button>
				  <img src="source/admin/uploads/1517253664rd.png" alt="" class="img-resonsive">
          <h3>The Vice-President</h3>
          <p>Contestants :- 3</p></p>
				</div><!-- /box-home -->
			   </div><!-- /.col-lg-4 -->
							 
			   
			   <div class="col-lg-4">	
				<div class="box-home clearfix">
				 <a href="nominees/gen_sec"></a>
				  <img src="source/admin/uploads/1517253431.png" alt="" class="img-resonsive">
          <h3>The  General Secretary</h3>
          <p>Contestants :- 3</p>
				</div><!-- /box-home -->
			   </div><!-- /.col-lg-4 -->
							 </div><!-- END OF INTERNAL ROW --><!-- START OF INTERNAL ROW --><div class="row">
			   
			   <div class="col-lg-4">	
				<div class="box-home clearfix">
				 <a href="nominees/fin_sec"></a>
				  <img src="source/admin/uploads/1517253449.png" alt="" class="img-resonsive">
          <h3>The  Financial Secretary</h3>
          <p>Contestants :- 3</p>
				</div><!-- /box-home -->
			   </div><!-- /.col-lg-4 -->
							 
			   
			   <div class="col-lg-4">	
				<div class="box-home clearfix">
				 <a href="nominees/treasurer"></a>
				  <img src="source/admin/uploads/1517253521.jpg" alt="" class="img-resonsive">
          <h3>The Treasurer</h3>
          <p>Contestants :- 3</p>
				</div><!-- /box-home -->
			   </div><!-- /.col-lg-4 -->
							 
			   
			   <div class="col-lg-4">	
				<div class="box-home clearfix">
				 <a href="nominees/soc_dir"></a>
				  <img src="source/admin/uploads/1517253546ys.jpg" alt="" class="img-resonsive">
          <h3>The  Social Director</h3>
          <p>Contestants :- 3</p>
				</div><!-- /box-home -->
			   </div><!-- /.col-lg-4 -->
							 </div><!-- END OF INTERNAL ROW --><!-- START OF INTERNAL ROW --><divform class="row">
			   
			   <div class="col-lg-4">	
				<div class="box-home clearfix">
				 <a href="nominees/sport_dir"></a>
				  <img src="source/admin/uploads/1517253570s.jpg" alt="" class="img-resonsive">
          <h3>The  Sport Director</h3>
          <p>Contestants :- 3</p>
				</div><!-- /box-home -->
			   </div><!-- /.col-lg-4 -->
							 
			   
			   <div class="col-lg-4">	
				<div class="box-home clearfix">
				 <a href="nominees/welfare_dir"></a>
				  <img src="source/admin/uploads/1517253591lub.png" alt="" class="img-resonsive">
				  <h3>The  Welfare Director</h3>
          <p>Contestants :- 3</p>
				</div><!-- /box-home -->
			   </div><!-- /.col-lg-4 -->
							 
			   
			   <div class="col-lg-4">	
				<div class="box-home clearfix">
				 <a href="nominees/171039999680.html"></a>
				  <img src="source/admin/uploads/1517253612sclub.jpg" alt="" class="img-resonsive">
				  <h3>The  Social Director</h3>
          <p>Contestants :- 3</p>
				</div><!-- /box-home -->
         </div><!-- /.col-lg-4 -->
        </select>
        </form><!-- END OF INTERNAL ROW -->	
		        </div>	
     </section>
     <script type="text/javascript">
      const deleteCart = (cat) => {
      const dataToSend = {
          cat
      }
  
      const path = '/candidatelandingpage'
      sendData(path, dataToSend)
  }
  </script>
	 
     @stop

     @section('title')
       landing Page
     @stop
