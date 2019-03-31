<?php
	include('db/db.php');
	
	$Type = $_POST['userType'];
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Phone=$_POST['phone'];
	$Address=$_POST['address'];
	

	if(isset($_FILES['image'])){
		$filename=$_FILES['image']['name'];
		$tempfile=$_FILES['image']['tmp_name'];
		move_uploaded_file($tempfile,"uploads/" .$filename );
		echo "image upload successfully";
	}
	
	$Password=$_POST['password'];

	
	if(strlen($Password) > 4){
	  $sql = "INSERT INTO tbl_user(userType, name, email, phone, address, image, password) VALUES (
	   '".$Type."','".$Name."', '".$Email."', '".$Phone."','".$Address."','".$filename."','".$Password."')";
	   
        $result = $conn->query($sql);
        
        if($result){
            header('Location: http://localhost/SignUp/index.php');
        }
		else{
            echo "Error Somthong";
        }
	}
?>
