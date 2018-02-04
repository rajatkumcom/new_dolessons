  <?php
  	// Hide comments, tags, and links now so that we can render them later.
  	//display($content);
  	
  	$hidden_url = $content['field_store_items_cover']['#object']->field_store_items_url_hidden[LANGUAGE_NONE][0]['value'];
  	$hidden_url_name = $content['field_store_items_cover']['#object']->field_store_items_url_name_hidde[LANGUAGE_NONE][0]['value'];
  	
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    hide($content['field_store_items_description']);
    hide($content['field_store_items_shipping']);
    echo '<div class="store-items-content-wrapper">';
    	echo '<div class="field-store-items-cover">';
    		print render($content['field_store_items_cover']);
    	echo '</div>';
    	echo '<div class="store-items-content">';
    		echo "<h2><a href='$node_url'> $title</a></h2>";
 		   	print render($content['field_store_items_rate_store']);
 		   	print render($content['product:commerce_price']);
 		   	
 		   	print render($content['field_store_items_store']);
 		   	print '<div class="share-with">Share with</div>';
 		   	print render($content);
 		   	print '<a class="sold-by" href="store-details/'.$hidden_url_name.'">Sold By '.$hidden_url_name.'</a>';
//  		   	display( $content );
    	echo '</div>';
    echo '</div>';
  ?>
  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
  <footer>
    <?php print render($content['field_tags']); ?>
    <?php //print render($content['links']); ?>
  </footer>
  <?php endif; ?>
	<div class="store-items-tabs">
  <ul class="nav nav-tabs nav-justified ">
    <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
    <li><a data-toggle="tab" href="#menu1">Wishlist</a></li>
    <li><a data-toggle="tab" href="#menu2">Shipping</a></li>
    <li><a data-toggle="tab" href="#menu3">Delivery</a></li>
    <li><a data-toggle="tab" href="#menu4">Returns</a></li>
    <li><a data-toggle="tab" href="#menu5">Reviews</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <?php print render($content['field_store_items_description']); ?> 
    </div>
    <div id="menu1" class="tab-pane fade">
     <?php print $commerce_wishlist_page;?>
    </div>
    <div id="menu2" class="tab-pane fade">
       <?php print render($content['field_store_items_shipping']); ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3 class="head">Delivery Information:</h3>
      <p>
				
				Once payment has been received, your order is immediately processed by our experienced warehouse
				
				and you can expect to receive your order ten working days, often less. We also deliver worldwide, non-
				
				African Countries and shipment is calculated at the Checkout.<br><br>For further information, please contact
				
				<a href="mailto:delivery@dolessons.com">delivery@dolessons.com</a>
	  </p>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3 class="head">Online Store Return Policy</h3>
      <p>
        <strong>Returns Information : </strong>
				
				If item(s) you receive is faulty, damaged, or different from what you purchased or in bad condition,
				
				simply return the item(s) to us in their original condition within 3 days of receipt. We will issue you
				
				with another item of good quality or refund in full, if you so desired.<br><br></p>
				
				<h3 class="head">Return Address</h3>
				
				<address>36 Aba Road, Port Harcourt,<br>Rivers State - Nigeria<br>
				
				<strong>Email :</strong> <a href="mailto:returns@dolessons.com">returns@dolessons.com</a><br>
				
				<strong>Tel :</strong> <a href="tel:+2349029720222,08067082203">+23490 29720 222, 0806708 2203</a></address>

				<p>
  				<?php global $base_url; ?>
  				<a class="btn-yellow" href="<?php echo $base_url?>/sites/default/files/return_form_pdf/Return_form_PDF.pdf">DoLessons Returns Form</a>
				</p>
    </div>
    <div id="menu5" class="tab-pane fade">
	   <?php if(isset($content['comments'])){
		   //display($content['comments']);
        print render($content['comments']); 
        }
        else{
		print "There is no review posted for this product.";
			}
		?>
    </div>
    <div id="menu6" class="tab-pane fade">
     <?php 
     print views_embed_view('store_details', 'block_1');
    ?>
    </div>
  </div>
</div>
 
 <div class="store-related-items">
  <h4>Recommended Products</h4>
  <?php if($related_items) { print $related_items;}?>
  	</div>
</article>
