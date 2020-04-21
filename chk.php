 <?php
session_start();
$user = $_POST['id'];
$pass = $_POST['pass'];
$role = $_POST['role'];

include 'connection.php';

if($role == "Admin")
			{
			if(!empty($user)||!empty($pass)){
			$sql = "SELECT * FROM admin WHERE ID='$user' AND password='$pass'";
			$res = mysqli_query($conn,$sql);
			$count = mysqli_num_rows($res); // to check data is present in database

					if($count == 0) //data is not present
					{
					header("location:Admin.php");
					}
					else
					{
						$_SESSION['Email'] = $user; //to store information to be used across multiple pages
						$_SESSION['Role'] = $role;
						header("location:Admin.php?image=image.php"); // routing to admin.php
					}
			    }
			 else {
			        echo 'Fill up all fields'; // if all data is not present
			    }
			}
else if($role == "Faculty") 
		{
		        if(!empty($user)||!empty($pass)){
			$sql = "SELECT * FROM faculty WHERE f_id='$user' AND password='$pass'"; //check in database 
			$res = mysqli_query($conn,$sql);    //performs query against database
			$count = mysqli_num_rows($res);		

				if($count == 0)
				{
				echo "username password Incorrect";
				redirect("login.php");
				}
				else
				{
					$_SESSION['Email'] = $user;
					$_SESSION['Role'] = $role;
					header("location:Admin.php?image=image.php");
				}
		        }
		 else {echo 'Fill up all fields';}
		}
else
{
        if(!empty($user)||!empty($pass)){
	$sql = "SELECT * FROM student WHERE s_id='$user' AND password='$pass'";
	$res = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($res);

		if($count == 0)
		{
		echo "username password Incorrect";
		}
		else
		{
			$_SESSION['Email'] = $user;
			$_SESSION['Role'] = $role;
			header("location:Admin.php?image=image.php");
		}
        }
 else {echo 'Fill up al fields';}
}
?>