@extends('master')
@section('content') 
     <div class="featured-users">
	  <div class="container">
	   <div class="row">
			<div class="section-title" style="padding-top: 20px;">
				<h1>Organization :- Harvard Campus Election</h1>
			</div>
     
      
      @foreach($candidate as $candidates)
          <div class="column">
        
              <div class="col-lg-4">	
                <span id="comment458484136448"></span>
                    
                  <div class="text-center card-box">
                <div class="clearfix"></div>
                <div class="member-card">
                <div class="thumb-xl member-thumb m-b-10 center-block">
                  <img src="public/uploads/{{ $candidates->image }}"  class="img-circle img-thumbnail" alt="profile-image">
                <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                </div>

                <div class="">
                <h4 class="m-b-5">{{ $candidates->name }}</h4>
                <p class="text-danger"><i class="fa fa-thumbs-o-up"></i> 6 Votes</p> 
                <p class="text-mint"><span class="text-mint"> Harvard Campus Election</span></p>  
                <p> <span><span class="text-muted">Running to Be: </span><span class="text-mint">{{ $candidates->post }}</span> </span></p>
                </div>

                
                <a href="../manifesto/458484136448.html" class="kafe-btn kafe-btn-mint-small"><i class="fa fa-user-secret" aria-hidden="true"></i> View Manifesto</a>
                <a onclick="vote({{ $candidates->id }},{{ $candidates->post }})" class="kafe-btn kafe-btn-danger-small"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> vote</a>
                </div>
              </div>
              </div><!-- /.col-lg-4 -->
               
          </div>
      @endforeach	 	 

      <script type="text/javascript">
      function increaseValue(id) {
        // var siblings = $(this).siblings('input.quantity-no');
        // siblings.val(parseInt(siblings.val(), 10) + 1);
    
        var quantity = parseInt(document.getElementById(`quantity-no-${id}`).value, 10);
        var price = parseInt(document.getElementById(`price${id}`).innerHTML, 10);
    
    
        quantity = isNaN(quantity) ? 0 : quantity;
        quantity++;
    
        document.getElementById(`quantity-no-${id}`).value = quantity;
        document.getElementById(`total${id}`).innerHTML = price * quantity;
        updateCart(id, quantity);
    
    }
    
    const updateCart = (id, quantity) => {
        const dataToSend = {
            id,
            quantity
        }
    
        const notification = {
            type: 'info',
            title: 'Successful',
            text: 'Cart has been updated'
        }
    
        const path = '/updateCart'
        sendData(path, dataToSend, notification)
    }
    </scipt>
	 
@stop

@section('title')
    landing Page
@stop
