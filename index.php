<?php
session_start();
if(empty($_SESSION['email']))
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="../css.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	body
	{
		background-image:url(background.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
</style>
<title>Project Management System</title>
</head>
<div>
<body>
<table width="100%"  cellspacing="00" cellpadding="00">
  <tr bgcolor="#2e0b9c">
    <th width="7%" scope="col">&nbsp;</th>
    <th width="12%" scope="col"><img src="images/logo1.png" alt="LOGO"/></th>
    <th width="62%" scope="col"><font size="10" color="White">Project Managenent System</font></th>
    <th width="13%" scope="col"><font size="5" color="White">&nbsp;</font></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><br/><br/><div style="width:50%;background-color:#fcd2b2;margin-left:24%;margin-top:100px;border:1px solid black;">
    	<br><br>
                <form name="login" action="chk.php" method="post">
                    
        <table width="100%"  cellspacing="02" cellpadding="05">
  <tr>
      <th colspan="2" scope="col"><font size="6">LOGIN</font></th>
    </tr>
  <tr>
      <td align="right"><font size="5">ID&nbsp;:&nbsp;</font></td>
    <td><input style="height: 20px; font-size: 15px;" type="text" name="id"/><br/>
    </td>
  </tr>
  <tr>
      <td align="right"><font size="5">Password&nbsp;:&nbsp;</font></td>
    <td><input style="height: 20px; font-size: 15px;" type="password" name="pass" /></td>
  </tr>
  <tr>
      <td align="right"><font size="5">Login_As&nbsp;:&nbsp;</font></td>
    <td>
        <select name="role" style="width: 13em; height: 2em; font-size: 15px;">
        <option value="Student">Student</option>
        <option value="Faculty">Faculty</option>
        <option value="Admin">Admin</option>          
        </select>
      </td>
  </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" style="width: 4em;  height: 2em; font-size: 20px;" name="register" value="Submit" /></td>
            </tr>
</table> 

        <br/>
        &nbsp;
        </form>
    	</div>
     </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</div>
    
</html>

<?php
}
else
{
header("location:Admin.php");
}

?>