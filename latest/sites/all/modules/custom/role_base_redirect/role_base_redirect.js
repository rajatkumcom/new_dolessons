/*jQuery(document).ready(function(){
jQuery('.view-job-application-detail #views-form-job-application-detail-page table tbody tr td.views-field-php-2 input#feedback').live('click',function() {
	//var nid = jQuery(this).parent().parent().parent().find('.views-field-nid-1 a').text();
	var nid = jQuery(this).parent().parent().find('.views-field-nid a').text();
     var email = jQuery(this).parent().parent().find('.views-field-field-email-id--2 a').text();
        //var email = jQuery(this).parent().parent().parent().find('.views-field-field-email-id- a').text();
	jQuery();
        var basePath = Drupal.settings.basePath;
        jQuery.ajax({
            url: basePath + 'add_feedback',
            type: 'POST',
            data: 'email='+email,
	    data: 'nid='+nid,
            success: function(data) {
           window.location.href = 'add_feedback?email='+email+'&nid='+nid;
             }
            });
        
        });
	});*/
