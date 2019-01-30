<?php 

function password_encrypt($password){
	$hash_format="$2y$10$";
	/*$salt="Salt22CharactersOrMore";*/
	$salt_length=22;
	$salt=generate_salt($salt_length);
	$format_and_salt=$hash_format.$salt;
	$hash=crypt($password,$format_and_salt);
	return $hash;
}

function generate_salt($length){
	$unique_random_string=md5(uniqid(mt_rand(),true));	
	$base64_string=base64_encode($unique_random_string);
	$modified_base64_string=str_replace('+','.',$base64_string);
	$salt=substr($modified_base64_string,0,$length);
	return $salt;
}

function find_admin_by_username($username){
	global $connection;
	$username=mysqli_real_escape_string($connection,$username);
	$query="SELECT * FROM admins WHERE username='{$username}'";
	$result_set=mysqli_query($connection,$query);
	confirm_query($result_set);
		if($result=mysqli_fetch_assoc($result_set)){
			return $result;
		} else {
			echo "no admin by that username"; return null; 
		}	
}
function check_password($password,$hashed_password){
	global $connection;
	$password=mysqli_real_escape_string($connection,$password);
	$hash=crypt($password,$hashed_password);
	if($hash===$hashed_password){$_SESSION['logged_in']="true";
	}else{$_SESSION['logged_in']=false;}	
}

function attempt_login($username,$password){
	if($admin=find_admin_by_username($username)){
	check_password($password,$admin['hashed_password']);
	return $admin;
	}else{
		echo "attempt login failed"; return null;}
}

function delete_admin($id){
	global $connection;
	$query="DELETE FROM admins WHERE id = {$id} LIMIT 1";
	$result=mysqli_query($connection,$query);
	if(mysqli_affected_rows($connection)>0){
		echo "deletion accomplished";	
	}else{
		echo "deletion failed";
	}
}

function mysql_prep($data){
	$data2=mysqli_real_escape_string($data);
	return $data2;	
}
		
function redirect_to($new_location){
	  header("Location: " . $new_location);
	  exit;
}

function confirm_query($result_set){
	if(!$result_set){
		die("Database query failed");
	}	
}

function find_admin_by_id($admin_id){
	global $connection;
	$query="SELECT * FROM admins WHERE id={$admin_id}";
	$result_set=mysqli_query($connection,$query);
	$result=mysqli_fetch_assoc($result_set);
	return $result;
}


function find_all_admins(){
	global $connection;
	$query="SELECT * FROM admins";
	$mysqli_result_set=mysqli_query($connection,$query);
	return $mysqli_result_set;
	if(!$mysqli_result_set){
		die("select * FROM admins returned no result set");
	}
}

function find_all_subjects(){
	global $connection;
	$query ="SELECT * FROM ";
	$query .="subjects WHERE ";
	$query .="visible = 1 ";
	$query .="ORDER BY position ASC";
	$subject_set=mysqli_query($connection,$query);
	confirm_query($subject_set);
	return $subject_set;
	}

function find_pages_for_subject($subject_id){
	global $connection;
	$query ="SELECT * FROM ";
	$query .="pages WHERE ";
	$query .="visible = 1 ";
	$query .="AND subject_id={$subject_id} ";
	$query .="ORDER BY position ASC";
	$page_set=mysqli_query($connection,$query);
	confirm_query($page_set);	
	return $page_set;
}

function logged_in(){
	return isset($_SESSION['admin_id']);	
}