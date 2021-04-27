<?php  

session_start()

$conn = mysqli_connect("localhost", "root", "", "netflix");


// function daftar($data) {
// 	global $conn;

// 	$username = strtolower(stripslashes($data["username"]));
// 	$email = strtolower($data["email"]);
// 	$password = mysqli_real_escape_string($conn, $data["password"]);

// 	//cek username sudah ada atau belum
// 	mysqli_query($conn, "SELECT * FROM pengguna WHERE email = '$email' ");

// 	if(mysqli_fetch_assoc($result)) {
// 		echo "<script>
// 				alert('email sudah terdaftar, silahkan login!');
// 			</script>";
// 	}

// 	//enkripsi password
// 	$password = password_hash($password, PASSWORD_DEFAULT);

// 	//tambahkan userbaru ke database
// 	mysqli_query($conn, "INSERT INTO pengguna VALUES('', '$username', '$email', '$password')");

// 	return mysqli_affected_rows($conn);


// }


?>