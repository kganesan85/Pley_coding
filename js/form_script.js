
//This does the users registration
function Users_Registration() 
{
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var firstnames = $("#firstnames").val();
	var lastnames = $("#lastnames").val();
	var emails = $("#emails").val();
	var passs = $("#passs").val();
	
	if(firstnames == "")
	{
		$("#signup_status").html('<div class="info">Please enter your firstname in the required field to proceed.</div>');
		$("#firstnames").focus();
	}
	else if(lastnames == "")
	{
		$("#signup_status").html('<div class="info">Please enter your desired lastname to proceed.</div>');
		$("#lastnames").focus();
	}
	else if(emails == "")
	{
		$("#signup_status").html('<div class="info">Please enter your email address to proceed.</div>');
		$("#emails").focus();
	}
	else if(reg.test(emails) == false)
	{
		$("#signup_status").html('<div class="info">Please enter a valid email address to proceed.</div>');
		$("#emails").focus();
	}
	else if(passs == "")
	{
		$("#signup_status").html('<div class="info">Please enter your desired password to go.</div>');
		$("#passs").focus();
	}
	else
	{
		var dataString = 'firstname='+ firstname + '&lastname=' + lastname + '&emails=' + emails + '&passs=' + passs + '&page=signup';
		$.ajax({
			type: "POST",
			url: "save_details.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#signup_status").html('<br clear="all"><div style="padding-left:115px;"><font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:black;">Please wait</font> <img src="images/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
				$("#signup_status").hide().fadeIn('slow').html(response);
			}
		});
	}
}