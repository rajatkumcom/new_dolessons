(function ($){
	 var fSelectOb;
	Drupal.behaviors.class_subject_search = {
	  attach: function (context, settings) {
		  $('.view-id-book_lessons table td.views-field-field-upload-scheme a').attr('target', '_blank');

		  var str = "";
          if ($("#ClasSelect option:selected").val()=='')
            {

                $('#cls-srch-btn').attr('disabled', 'disabled');
			}
			
		  
		$("#ClasSelect").change(function () {
				
			var nid = $(this).val();
			//alert(nid);
			$("#search-target").attr( "action", Drupal.settings.basePath + 'node/' + $(this).val() );
	        
			$.ajax({
				type: 'GET',
				url: Drupal.settings.basePath + 'get-subjects',
				dataType: 'json',
				data:'nid='+nid,
				success: function(data) {
					//console.log(data);
					//var titleArray = $.parseJSON(data);
					var selectList =  '<option value="">Select Subject</option>';
					var selectList ;
					$.each( data, function( key, value ) {
						selectList +='<option value="'+key+'">'+value+'</option>'
			        //alert( key + ": " + value );			        
			        });
			        
			       console.log(selectList);					
						$('#SubjSelect').html(selectList);		
					
					console.log("fSelectThis=="+fSelectThis)
					if(fSelectThis){
						 // fSelectThis.destroy();
						                       
						  fSelectThis.reload(); 
						  
						                       
                      setTimeout(function(){
                      	if($(".fs-dropdown").children(".fs-search").length>1){
						  	$(".fs-dropdown").children(".fs-search").eq(0).remove();
						  }
                      	//$('#SubjSelect').addClass('fillselect chosen-select-width');
						//fSelectThis.create();
                      },20);
					}
					else{
				 		$('#SubjSelect').addClass('fillselect chosen-select-width');
					 fSelectOb = $('#SubjSelect').fSelect();	
					}
					
					//fSelectOb new fSelect('#SubjSelect',{});
					 
					
					 
					
					
					//$('#SubjSelect').fSelect().reloadDropdownLabel();
					
					
					
				}
			});
	
	    });
		
		  if ($('#views-view-book-lessons').length) {
			  var queries = new Array;
			  var j = 0;
			  $.each(document.location.search.substr(1).split('&'),function(c,q){
				    var i = q.split('=');
				    queries[j] = i[1].toString();
				    j++
			  });
			  $('#views-view-book-lessons table tr').hide();
			  $('#views-view-book-lessons table tr:first').show();
			  
			  $.each( queries, function( key, value ) {
				  if( key > 0 ) {
					  $('#views-view-book-lessons table tr').each( function () {
						  $this = $(this);
						  if( $this.find('td:first').text().trim() == value ) {
							  $this.show();
						  }
					  } );
				  }
			  });
		  }
		  
		  $("#ClasSelect").change(function () {
			  
          var str = "";
          if ($("#ClasSelect option:selected").val()=='')
            {

                $('#cls-srch-btn').attr('disabled', 'disabled');
                $('#SubjSelect').empty();  
                
            }
            else
            {

                $('#cls-srch-btn').removeAttr('disabled');
            }
        });
        
        $('.view-id-book_lessons table td.views-field-field-upload-scheme a').addClass('gfyju');
         


	 }

	
	 

	};
})(jQuery);
  
