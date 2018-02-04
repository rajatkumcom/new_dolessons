jQuery(document).ready(function(){

	if ((jQuery('body').hasClass('page-student-register')) || (jQuery('body').hasClass('page-seller-register')) || (jQuery('body').hasClass('page-tutor-register')) || (jQuery('body').hasClass('page-orders-register')) ) {

		   jQuery('.twilio-register').hide();
		   jQuery('#edit-terms-of-use').hide();
		   jQuery('#edit-actions').hide();
		   jQuery('.region-content').addClass('profile2-register-form');
		   jQuery('#block-system-main').addClass('profile2-register-right-form');
		   jQuery("#edit-field-first-name, #edit-field-last-name, #edit-account, #edit-field-gender,#edit-field-user-date-of-birth,#edit-profile-student-profile,#edit-profile-teacher-profile,#edit-profile-seller-profile-field-contact-address,#edit-profile-seller-profile-field-common-state,.register-next ").wrapAll('<div class="wrap-register-top">');
    
           
            jQuery('.register-next').click(function(e){

            	 if(jQuery('#edit-mail').val() == ''){
            	 jQuery("#edit-mail").after("<div class='messages error messages-inline'></div>");
            	 jQuery("#edit-mail").after("<div class='messages error messages-inline'>Email field is required.</div>");
				  //alert('Please fill the name');
				  jQuery('#edit-mail').focus();
				}
				else if(jQuery('#edit-pass-pass1').val() == ''){
				  jQuery("#edit-pass-pass1").after("<div class='messages error messages-inline'>Password field is required.</div>");
				  jQuery('#edit-pass-pass1').focus();
				}
				else if(jQuery('#edit-pass-pass2').val() == ''){
				  jQuery("#edit-pass-pass2").after("<div class='messages error messages-inline'>Confirm Password field is required.</div>");
				  jQuery('#edit-pass-pass2').focus();
				}
				else if (!jQuery("input:radio[name='field_gender[und]']").is(":checked")){
				  jQuery("#edit-field-gender-und").after("<div class='messages error messages-inline'>Select a Gender</div>");
				}
				else{
                jQuery('.twilio-register').show();
		   		jQuery('#edit-terms-of-use').show();
		   		jQuery('#edit-actions').show();
			   	jQuery('.wrap-register-top').hide();
			   	e.preventDefault();
			   }
			   e.preventDefault();
			   
            });

		
	}

   		 	jQuery(".signup-custom").change(function(){
   		 		var path = Drupal.settings.basepath; 
		  		var type = jQuery(this).val(); 
			          if (type == 'student') { 
			              window.location = path+'student/register'; 
			          }
			          else if(type == 'tutor'){
			          	window.location = path+'tutor/register'; 
			          }
			          else if(type == 'seller'){
			          	window.location = path+'seller/register'; 
			          }
			          else{
			          	window.location = path+'orders/register'; 
			          }
			});


});