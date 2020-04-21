<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];
if(empty($_SESSION['Email']))
{
header("location:index.php");
}
else
{
if($role=="Admin")
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
		background-image:url(../background.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
        
</style>
<title>Project Management System</title>
</head>
<div>
<body>
<table width="100%"  border="0" cellspacing="00" cellpadding="00">
            <tr bgcolor="#2e0b9c">
              <th width="74" scope="col">&nbsp;</th>   
              <th width="164" scope="col"><a href="../Admin.php"><img src="../images/logo1.png" alt="LOGO"></th>  <!-- th tag for header cells in php table  -->

              <th width="646" scope="col"><font size="8" color="White">Project Managenent System</font></th>
              <th width="140" scope="col"><font color="White" size="5">
            <?php
              print $role;
              ?></font></th>
              <th width="63" scope="col">&nbsp;</th>
            </tr>
          </table>
        <table width="100%" border="0" cellspacing="01" cellpadding="01">
                

                <tr bgcolor="#99CCFF">
                <th width="7%" scope="col"><h4>&nbsp;</h4></th>
                <th width="12%" scope="col"><a href="student.php">Add Student</a></th>   <!-- routing to students --> 
                <th width="5%" scope="col">&nbsp;</th>
                <th width="13%" scope="col"><a href="faculty.php">Add Faculty</a></th>
                <th width="5%" scope="col">&nbsp;</th>
                <th width="13%" scope="col"><a href="stsearch.php">Search Student</a></th>
                <th width="5%" scope="col">&nbsp;</th>
                <th width="13%" scope="col"><a href="fa_search.php">Search Faculty </a></th>
                <th width="5%" scope="col">&nbsp;</th>
                <th width="5%" scope="col"><a href="../logout.php">Logout</a></th>
                
              <th width="6%" scope="col">&nbsp;</th>
            </tr>

  
        </table>
    <br/><br/> <!-- line break -->
    </p><form method="post" action="st.php">   <!-- Two types of methods get and post --> 
        <div style="background-color: beige; margin-left: 25%; alignment-adjust: central; width: 50%">
            <table align="center" width="100%" cellspacing="01" cellpadding="05">
  <tr>
    <th width="7%" scope="col">&nbsp;</th>
    <th width="43%" scope="col">&nbsp;</th>
    <th width="44%" scope="col">&nbsp;</th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Student ID&nbsp;:&nbsp;</font></td>
    <td><input type="text" size="20" id="in" name="id"/><font color="red" size="4">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Name&nbsp;:&nbsp;</font></td>
    <td><input type="text" id="in" name="stname"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Email&nbsp;:&nbsp;</font></td>
    <td><input type="email" id="in" name="stemail"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Phone&nbsp;:&nbsp;</font></td>
    <td><input type="text" id="in" name="stphone"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"> <font size="5">Password &nbsp;:&nbsp;</font></td>
    <td><input type="password" id="in" name="stpass"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Year&nbsp;:&nbsp;</font></td>
    <td><input type="text" id="in" name="styear"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Stream&nbsp;: &nbsp;</font></td>
    <td><select name="stream" style="width: 193px; height: 2em; font-size: 15px;">
         <option value="Select">Select</option>
        <option value="CSE">CSE</option>
        <option value="ECM">ECM</option>
        <option value="ECE">ECE</option>
        <option value="MECH">MECH</option>
        <option value="EEE">EEE</option>          
        </select><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center" >
    <td>&nbsp;</td>
    <br/>
    <td colspan="2"><input type="submit"  name="add" value="Add" id="bt" />
    				
    <td>&nbsp;</td>
  </tr>
            </table> <br/><br/>  </div></form>
 <?php
}
elseif($role=="Faculty")    
{
?>
    <?php 
    header('Location:../Admin.php');
    ?>
 <?php
}
else   
{
?>
    <?php 
    header('Location:../Admin.php');
    ?>
<?php
}
?>
</table>
<p>
  <?php
}
?>
    
    

<p>&nbsp;</p>
