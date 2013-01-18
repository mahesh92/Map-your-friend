function func_group(){
	var text = $('#groupid').val();
	     $.ajax({
			   type: "POST",
			   url: "src/php/check1.php",
			   data: {  
			   			'text1': text,
	
						},

			   success: function(data){
				   if(data){
						
                            $('#area').html( data );
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
				   if(data){
						
                            $('#area1').html( data );
				   			$('#join_submit_btn').attr('disabled', false);
				    }
			   },
			});
}
