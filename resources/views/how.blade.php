@extends('master')
@section('content')
  
	

     <!-- ==============================================
	 Dashboard Section
	 =============================================== -->
     <div class="tr-profile section-padding">
	  <div class="container">
	   <div class="row">
	    <div class="col-sm-4 col-md-3">
		 <div class="tr-sidebar">
		  <ul class="nav profile-tabs" role="tablist">
		   <li role="presentation" class="active">
		    <a href="how.html" aria-controls="account-info">
			 <i class="fa fa-life-ring" aria-hidden="true"></i> How it works			</a>
		   </li>
		  </ul>			        			
		 </div><!-- /.tr-sidebar -->        		
	    </div>
	    <div class="col-sm-8 col-md-9">
	     <div class="tab-content">
		 
		  <div role="tabpanel" class="tab-pane fade in active account-info" id="account-info">	
		  
		   <div class="section how-to">
         <h3>How to use this Voting Platform</h3>
       <ul>
        <li> - Admin adds an Organization e.g Harvard Campus Election</li>
        <li> - Admin then adds the Positions in that Organization.</li>
        <li> - Admin then adds Nominees for those Positions</li>
        <li> - Then the Voters vote.</li>
       </ul>
			 
		   </div><!-- /.how-to -->	   
          
		  </div><!-- /.tab-pane -->
						
					</div>
	            </div>
	        </div><!-- /.row -->
	    </div><!-- /.container -->
	</div>	 	 
	 
     <!-- Include footer.php. Contains footer content. -->
 	 
	
	 <!-- ==============================================
	 Footer Section
	 =============================================== -->
	 <footer class="footerWhite">

      <!-- COPY RIGHT -->
      <div class="clearfix copyRight">
       <div class="container">
        <div class="row">
         
		 <div class="col-xs-12">
          <div class="copyRightWrapper">
           <div class="row">
		   
            <div class="col-sm-5 col-sm-push-7 col-xs-12">
			 <ul class="list-inline socialLink">
			  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			  <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
			  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			 </ul>
            </div><!-- /col-sm-5 -->
			
		    <div class="col-sm-7 col-sm-pull-5 col-xs-12">
			 <div class="copyRightText">
			  <p>Copyright © Voting&nbsp; 2019. All Rights Reserved</p>
			 </div>
		    </div><!-- /col-sm-7 -->
		  
           </div><!-- /row -->
          </div><!-- /copyRightWrapper -->
         </div><!-- /col-xs-2 -->

        </div><!-- /row -->
       </div><!-- /container -->
      </div><!-- /copyRight -->
	  
    </footer>	
	
     <a id="scrollup">Scroll</a>
     
	 <script>	
		/*============================================
		Change Language
		==============================================*/
	 
		function changelanguage(languageid) {
			// id = unique id of the message/comment
			// type = type of post: message/comment
	
			$.ajax({
				type: "POST",
				url: "https://www.themashabrand.com/scripts/Voting/source/admin/template/requests/changelanguage.php",
				data: "languageid="+languageid, 
				cache: false,
				success: function(html) {
					window.location.reload();
				}
			});
		}		
	</script>  
 	 
 	 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-79656468-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-79656468-5');
</script>
 

	 
	 <!-- ==============================================
	 Scripts
	 =============================================== -->
	<script src="source/assets/js/jquery-3.2.1.min.js"></script>
	<script src="source/assets/js/bootstrap.min.js"></script>
	<script src="source/assets/js/debunk.js"></script>	 
</body>

<!-- Mirrored from www.themashabrand.com/scripts/Voting//how by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Dec 2019 10:56:00 GMT -->
</html>
