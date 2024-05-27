<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Dashboard</title>
	<style>
		table{
			background:white;
			margin:190px 0px 0px 695px;
			padding:30px 50px 50px 50px;
			}
			h1{
				margin:0px 0px 30px 70px;
			}
			.input{
				width:217px;
				height: 20px;
				margin-bottom:20px;
			}
			tr{
			}
			.submit{
				width:224px;
				text-align:center;
				padding:7px;
				margin-top:10px;
				background-color:black;
				color:white;
			}
			.submit:hover{
				background-color:white;
				color :black;
			}
			
	</style>
</head>
<body bgcolor='black'>
    <table>
	<form action="proses_login.php" method="post">
		<td><h1>Login</h1></td>
		<tr>
		<td>Username <br> 
		<input type="text" name="username"class='input' required >
		</td>
	</tr>
    <tr>
		<td>Password <br>
		 <input type="password" name="password" class='input' required >
		</td>
	</tr>
	<tr>
		<td >
		<input type="submit" value="Kirim" class='submit'>
		</td>
	</tr>
		</form>
    </table>
</body>
</html>