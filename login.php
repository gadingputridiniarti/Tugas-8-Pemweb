<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			background: url('background.jpg') no-repeat center center fixed;
			background-size: cover;
            font-family: Arial, sans-serif;
			align-items: center;
			justify-content: center;
			height: 100vh;
			display: flex;
		}
		
		.login-box {
			width: 350px;
			background: #fff;
			color: #000;
			padding: 40px 30px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
			display: flex;
			flex-direction: column;
			align-datas: center;
			justify-content: center;
		}
		
		.login-box h1 {
			text-align: center;
			font-size: 30px;
			margin-bottom: 30px;
			color: #2c3e50;
			text-shadow: 1px 1px 1px #bdc3c7;
		}
		
		.login-box label {
			display: block;
			font-size: 18px;
			margin-bottom: 10px;
			color: #2c3e50;
			text-shadow: 1px 1px 1px #bdc3c7;
		}
		
		.login-box input[type="text"],
		.login-box input[type="password"] {
			width: 100%;
			height: 40px;
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 3px;
			font-size: 18px;
			color: #2c3e50;
			text-shadow: 1px 1px 1px #bdc3c7;
			background: #ecf0f1;
		}
		
		.login-box button[type="submit"] {
			background: #8b8cdc;
			color: #fff;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
			font-size: 20px;
			cursor: pointer;
			transition: all 0.3s ease-in-out;
		}
		
		.login-box button[type="submit"]:hover {
			background: #27ae60;
			transform: scale(1.1);
			box-shadow: 2px 2px 5px #bdc3c7;
		}
		
		.avatar {
			width: 100px;
			height: 100px;
			margin-bottom: 20px;
			animation: bounce 2s infinite;
			transition: all 0.3s ease-in-out;
		}
		
		.avatar:hover {
			transform: rotate(360deg);
		}
		
		@keyframes bounce {
			0% {
				transform: translateY(0px);
			}
			50% {
				transform: translateY(-10px);
			}
			100% {
				transform: translateY(0px);
			}
		}
	</style>
</head>


<body>
	<div class="login-box">
		<center> <img src="icon.png" alt="logo" class="avatar"> </center> 
		<h1>Login</h1>
		<form action="login_cek.php" method="POST">
			<label for="username">Username</label>
            <input type="text" name="username" placeholder="Enter Username">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password">
			<center>  <button type="submit" name="login">Login</button> </center>
        </form>
		<br>
		<?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<center>Login gagal! username dan password salah!</center>";
                    echo "<br>";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "Anda harus login untuk mengakses halaman admin";
                }
            }
        ?>
    </div>
</body>
</html>
