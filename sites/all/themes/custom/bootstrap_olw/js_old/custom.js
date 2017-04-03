(function ($){
Drupal.behaviors.gift_card = {
   
  attach: function (context, settings) {
	  
	$( "#edit-field-gift-prices-und-100" ).click(function() {
	  $('.gift-card-amt').text("N 50000");
	});
	$( "#edit-field-gift-prices-und-300" ).click(function() {
	  $('.gift-card-amt').text("N 70000");
	});
	$( "#edit-field-gift-prices-und-500" ).click(function() {
	  $('.gift-card-amt').text("N 85000");
	});
	$( "#edit-field-gift-prices-und-1000" ).click(function() {
	  $('.gift-card-amt').text("N 100000");  
	});
	$("#edit-field-gift-reciepent-mail").hide();
	
	$("input[name='field_gift_delivery_method[und]']").click(function () {
            if ($("#edit-field-gift-delivery-method-und-1").is(":checked")) {
                $("#edit-field-gift-reciepent-mail").show();
            } else {
                $("#edit-field-gift-reciepent-mail").hide();
            }
	});
	
	$('#teacher-training-type').change( function() {
		$("#teacher-training-form-id").attr("action", Drupal.settings.basePath + 'node/add/' + $(this).val() );
		if( $(this).val() == 'teachers-training-module' ) {
			$("#teacher-training-data-info").html( '<p>Individual Delegate</p> <p> Training for a teacher registering as one delegate </p>' );
		} 
		else {
			$("#teacher-training-data-info").html( '<p>Corporate Group Delegate of an organization</p><p> Group training for members of an organization or a school’s </p> <p>*Group training, with a minimum of 15 delegates</p>' );
		}
			
	} );
	
	
	
	
  }
};

})(jQuery);


jQuery(document).ready(function() {
      
/* menu js */
			 jQuery('.dropdown-toggle .caret').click(function() {
               if (jQuery(window).width() < 992) {				 
				jQuery(this).toggleClass('caret-close');
			    jQuery(this).parents('.dropdown').first().toggleClass('open-link');
				jQuery(this).siblings('li').find('ul').slideUp();
				jQuery(this).parent().next('ul').slideToggle();
				e.preventDefault();
			   };
			 });
			 
			 jQuery('.dropdown-toggle').click(function(e) {	
			   if (jQuery(window).width() < 992) {
				  e.preventDefault();
			   };
			 });
			 
        /* menu js */
		
});  








