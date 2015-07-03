<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<a href="https://www.pley.com" target="_blank"><img src="images.png" alt="Pley" style="width:120px;height:80px;"></a>

<title>Registration Form</title>

<!-- Required header files -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/normalise.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="js/form_script.js"></script>


</head>
<body>
<br clear="all">
<center>
<div style="font-family:Verdana, Geneva, sans-serif; font-size:24px;width:800px;">Registration Form</div><br clear="all" /><br clear="all">
<!-- Code Begins -->
<center>
<div class="form_main_wrapper"><br clear="all">

<div style="width:115px; padding-top:10px;float:left;" align="left">First Name:</div>
<div style="width:300px;float:left;" align="left"><input type="text" id="firstnames" name="firstnames" value="" class="form_textAreaBoxInputs"></div><br clear="all"><br clear="all">


<div style="width:115px; padding-top:10px;float:left;" align="left">Last Name:</div>
<div style="width:300px;float:left;" align="left"><input type="text" id="lastnames" name="lastnames" value="" class="form_textAreaBoxInputs"></div><br clear="all"><br clear="all">


<div style="width:115px; padding-top:10px;float:left;" align="left">Email Address:</div>
<div style="width:300px;float:left;" align="left"><input type="text" id="emails" name="emails" value="" class="form_textAreaBoxInputs"></div><br clear="all"><br clear="all">


<div style="width:115px; padding-top:10px;float:left;" align="left">Desired Password:</div>
<div style="width:300px;float:left;" align="left"><input type="password" id="passs" name="passs" value="" class="form_textAreaBoxInputs"></div><br clear="all"><br clear="all">


<div style="width:115px; padding-top:10px;float:left;" align="left">&nbsp;</div>
<div style="width:300px;float:left;" align="left">
<a href="javascript:void(0);" class="form_general_button" onClick="Users_Registration();">Submit</a></div>

<br clear="all"><br clear="all">

<div align="left" id="signup_status"></div>

</div>
</center>
<!-- Code Ends -->

</center>
</body>
</html>