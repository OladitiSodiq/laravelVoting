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
    url: "",
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
<script src="source/assets/js/waypoints.min.js"></script>
<script src="source/assets/js/jquery.easypiechart.min.js"></script>
<script src="source/assets/js/debunk.js"></script> 
<script type="text/javascript">
  function ajaxfunction(parent)
  {
      $.ajax({
      type: "POST",
          url: "",
      data: "parent="+parent, 
      cache: false,
          success: function(data) {
              $("#sub").html(data);
          }
      });
  }
</script> 
