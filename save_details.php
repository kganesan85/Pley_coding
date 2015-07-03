<?php
    

//Validate the request brought
if(isset($_POST["page"]) && !empty($_POST["page"]))
{
	$first_name = trim(strip_tags(strtoupper($_POST["firstnames"])));
	$last_name = trim(strip_tags(strtolower($_POST["lastnames"])));
	$email_address = trim(strip_tags($_POST['emails']));
	$password = trim(strip_tags($_POST['passs']));
	$encrypted_password = md5($password);
		
	if($first_name == "" || $last_name == "" || $email_address == "" || $password == "") //Be sure that all the fields are filled then proceed
	{
		echo "<div class='info'>Sorry, you have to fill in all the fields to proceed. Thanks.</div>";
	}
	
	
	else
	{
		//Check your database for already existing Username and/or Email address to avoid duplicates and save this info to your database if you wish before you can then display a success message to your users as shown below
		?>
       <br clear="all"><br clear="all"><div class="form_main_wrapper" style="width:380px;"><br clear="all">
       <div class="info" style="width:340px;float:left;">You have registered successfully and below are your registration information!</div><br clear="all"><br clear="all">
        
        
        <br clear="all">
        
        </div><br clear="all">
        <?php
	}
}
else
{
	echo "<div class='info'>Sorry, the operation was unsuccessful.<br>Please try again or contact this website admin to report this error message if the problem persist. Thanks.</div>";
}
?>