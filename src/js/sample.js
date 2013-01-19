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

function check_group_validate(){
	var nickname = $('#nickname').val();
	var group = $('#group').val();
	     $.ajax({
			   type: "POST",
			   url: "src/php/check3.php",
			   data: {  
						'group': group
						},

			   success: function(data){
				   if(data==1){
						
                            $('#area2').html("Group name taken");
				   			$('#create_btn').attr('disabled', true);
				    }

					else if(nickname.length<4&&data==0) { 
				     $('#area2').html("Group name unique.");
				     $('#create_btn').attr('disabled', true);
				 }
				 else if (nickname.length>=4&&data==0) {
				 	 $('#area2').html("Group name unique");
				 	 $('#create_btn').attr('disabled', false);
				 };
			   },
			});
}

function check_nickname(){
	
	var nickname = $('#nickname').val();
	var group = $('#group').val();
	     $.ajax({
			   type: "POST",
			   url: "src/php/check3.php",
			   data: {  
						'group': group
						},

			   success: function(data){
				   if(nickname.length<4){
						
                            $('#area3').html("nickname is short, atleast 4 characters.");
				   			$('#create_btn').attr('disabled', true);
				    }else  if(nickname.length>=4&&data==1) { 
				     $('#area3').html("Looks good.");
				     $('#create_btn').attr('disabled', true);
				 }
				 else if (nickname.length>=4&&data==0) {
				 	 $('#area3').html("Looks good.");
				 	 $('#create_btn').attr('disabled', false);
				 };
			   },
			});
}

function check_email(){
	
	var nickname = $('#nickname').val();
	var group = $('#group').val();
	var hasError = false;
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var emailaddressVal = $("#email").val();
        if(emailaddressVal == '') {
            $("#area4").html('Please enter your email address.');
            hasError = true;
			$('#create_btn').attr('disabled', true);
        }
        else if(!emailReg.test(emailaddressVal)) {
            $("#area4").html('Enter a valid email address.');
            hasError = true;
            $('#create_btn').attr('disabled', true);
        }
        else {
	     $.ajax({
			   type: "POST",
			   url: "src/php/check3.php",
			   data: {  
						'group': group
						},

			   success: function(data){
				   if(nickname.length<4){
						
                            $('#area4').html("Looks clean.");
				   			$('#create_btn').attr('disabled', true);
				    }else  if(nickname.length>=4&&data==1) { 
				     $('#area4').html("Looks clean.");
				     $('#create_btn').attr('disabled', true);
				 }
				 else if (nickname.length>=4&&data==0) {
				 	 $('#area4').html("Looks clean.");
				 	 $('#create_btn').attr('disabled', false);
				 };
			   },
			});
	     }
}
