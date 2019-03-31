<?php
	session_start();
	include('db/db.php');
	
	$Password= $_POST['password'];
	$Email=$_POST['email'];
	
	if(strlen($Password) > 4){
		$sql = "SELECT * FROM tbl_user WHERE email ='".$Email."' AND password ='".$Password."'";
		
		$result =$conn ->query($sql);
		
		if($result->num_rows > 0){
			while($row= $result->fetch_assoc())
			{
				$id=$row['id'];
				$type=$row['userType'];
				$Email=$row['email'];
				$Name=$row['name'];
			}
			
			$_SESSION["id"]= $id;
			$_SESSION["userType"] = $type;
            $_SESSION["email"] = $Email;
            $_SESSION["name"] = $Name;
            
           // echo $id;
		
			 header('Location: http://localhost/SignUp/index.php');
        }
		else{
            echo "Error Somthong";
        }
        }
	
	else{
		echo "password notmatch";
	}
?>