<?php
session_start();
$con = mysqli_connect("localhost","root","","frontend");

if (isset($_POST['register_btn']))
 {
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query ="INSERT INTO  register(fname ,Lname,number,email,password) VALUES('$fname','$lname','$phonenumber','$email','$password')";
	$query_run = mysqli_query($con,$query);
	if ($query_run) {
		//echo "Register Successfully";
		$_SESSION['status']="Register Successfully";
		$_SESSION['status_code'] = "success";
		header("Location: index.php");
	}
	else{
        //echo "Something Went Wrong";
        $_SESSION['status']="Data Not Register/Inserted";
		$_SESSION['status_code'] = "error";
        header("Location: register.php");
	}
}

if (isset($_POST['register_update_btn'])) {
    $update_id = $_POST['edit_id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Assuming $con is your database connection
    $query_update = "UPDATE register SET fname ='$fname', Lname ='$lname', number ='$phonenumber', email = '$email', password='$password' WHERE id='$update_id'";
    $query_update_run = mysqli_query($con, $query_update);

    if ($query_update_run) {
        //echo "Data Updated";
        $_SESSION['status']="Updated Data Successfully";
		$_SESSION['status_code'] = "success";
        header("Location: index.php");
        exit;
    } else {
        //echo "No Data Updated";
         $_SESSION['status']="Data Not Updated";
		$_SESSION['status_code'] = "error";
        header("Location: index.php");
        exit;
    }
}
if (isset($_POST['register_delete_btn'])) 
{
	$delete_id = $_POST['delete_id'];
	$reg_query = "DELETE FROM register WHERE id='$delete_id'";
	$reg_query_run = mysqli_query($con,$reg_query);

	if($reg_query_run) {
		//echo "Deleted Data Successfully";
		 $_SESSION['status']="Deleted Data Successfully";
		$_SESSION['status_code'] = "success";
		header("Location:index.php");
	}
	else
    {
        //echo "Data Not Deleted";
        $_SESSION['status']="Data Not Deleted";
		$_SESSION['status_code'] = "error";
		header("Location:index.php");
    }
}

?>