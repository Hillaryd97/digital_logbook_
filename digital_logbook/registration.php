<?php
include 'conn.php';
$name = $_POST["user"];
$pass = $_POST["pwd"];
$cnpass = $_POST["cnpwd"];
$phnumber = $_POST["phnumber"];
if($name =="" || $pass == "" || $cnpass ==""|| $phnumber==""){
    header('location:signup.php');
}
else{
    if($pass != $cnpass)
    {
    header('location:signup.php');
    echo "Passwords dont match!";
    }
}

$sql = "select * from usertable where name= '$name'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
if($num> 0){
    echo"Matriculation number already in use<br>";
    echo "<p>Already registered? <a href='login.php'>Login</a></p>";
}
else{
    $reg = " insert into usertable (name , password) values ('$name','$pass')";
    $validquery=mysqli_query($conn,$reg);
    $_SESSION['name'] = $name;
    $_SESSION['fname'] = $fname;
    $_SESSION['phnumber'] = $phnumber;
    if($validquery==1){
        header('location:home.php');
    }
   

}

?>

<?php 
	// error_reporting(0);

	// session_start();

	// // variable declaration
	// $fname = "";
	// $user = ""; 
    // $phnumber = "";
    // $psw = "";
	// $_SESSION['success'] = "";

	// // connect to database
	// include 'conn.php';

	// // REGISTER USER
	// if (isset($_POST['submit'])) {
    //     // receive all input values from the form
    //     $fname = mysqli_real_escape_string($conn, $_POST['fname']);
	// 	$user = mysqli_real_escape_string($conn, $_POST['user']);
	// 	$phnumber = mysqli_real_escape_string($conn, $_POST['phnumber']);
    //     $psw = mysqli_real_escape_string($conn, $_POST['psw']);

    //     // form validation: ensure that the form is correctly filled
    //     if (empty($fname)) { array_push($errors, "Full Name is required"); }
	// 	if (empty($user)) { array_push($errors, "Matriculation Number is required"); }
	// 	if (empty($phnumber)) { array_push($errors, "phnumber is required"); }
    //     if (empty($psw)) { array_push($errors, "Password is required"); }

    //     $user_check_query = "SELECT * FROM usertable WHERE user='$user' OR phnumber='$phnumber' LIMIT 1";
    //     $result = mysqli_query($conn, $user_check_query);
    //     $userr = mysqli_fetch_assoc($result);
    
    //     if ($userr) { // if user exists
    //         if ($userr['user'] === $user) {
    //             array_push($errors, "Matriculation Number already exists");
    //         }
    
    //         if ($userr['phnumber'] === $phnumber) {
    //             array_push($errors, "Phone Number already exists");
    //         }
    //     }

	// 	// register user if there are no errors in the form
	// 	if (count($errors) == 0) {
	// 		$psw = md5($psw);//encrypt the psw before saving in the database
	// 		$query = "INSERT INTO usertable (fname, user, phnumber, psw) 
	// 				  VALUES('$fname', '$user', '$phnumber', '$psw')";
	// 		mysqli_query($conn, $query);

	// 		$_SESSION['user'] = $user;
	// 		$_SESSION['fname'] = $fname;
	// 		$_SESSION['phnumber'] = $phnumber;

	// 		$_SESSION['success'] = "YOU HAVE SUCCESFULLY REGISTERED";
	// 		header('location: home.php');
	// 	}

	// }


	// // LOGIN USER
	// if (isset($_POST['login_user'])) {
	// 	$user = mysqli_real_escape_string($conn, $_POST['user']);
	// 	$psw = mysqli_real_escape_string($conn, $_POST['psw']);

	// 	if (count($errors) == 0) {
	// 		$psw = md5($psw);
	// 		$query = "SELECT * FROM usertable WHERE user='$user' AND psw='$psw'";
	// 		$results = mysqli_query($conn, $query);

	// 		if (mysqli_num_rows($results) == 1) {
	// 			$_SESSION['user'] = $user;
	// 			$_SESSION['fname'] = $fname;
	// 			$_SESSION['phnumber'] = $phnumber;
	// 			$_SESSION['success'] = "YOU ARE NOW LOGGED IN";
	// 			header('location: home.php');
	// 		}else {
	// 			array_push($errors, "Wrong Matriculation Number/Password combination");
	// 		}
	// 	}
	// }
?>