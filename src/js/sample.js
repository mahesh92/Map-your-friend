function func_group(){
	var name = $('#name').val();
	var group = $('#groupid').val();
	     $.ajax({
			   type: "POST",
			   url: "src/php/check1.php",
			   data: {  
			   			'groupid': group,
						'name': name,
						},

			   success: function(data){
				   if(data==1){
						$('#area').html("Valid group id");
				   }
				   else if(data==2){
				   	$('#area').html("Valid group ID");
				   	$('#join_submit_btn').attr('disabled', false);
				   }
				   else if (data==0) {
				   		$('#area').html( "In-Valid group ID");
				   	$('#join_submit_btn').attr('disabled', true);
				   }
			   },
			});
}

function func_nick(){
	var name = $('#name').val();
	var group = $('#groupid').val();
	     $.ajax({
			   type: "POST",
			   url: "src/php/check2.php",
			   data: {  
			   			'name': name,
						'groupid': group
						},

			   success: function(data){
				   if(data==1){
						
                            $('#area1').html("Valid user for the above group");
				   			$('#join_submit_btn').attr('disabled', false);
				    }else { 
				     $('#area1').html("In-Valid user for the above group");
				     $('#join_submit_btn').attr('disabled', true);
				 }
			   },
			});
}
