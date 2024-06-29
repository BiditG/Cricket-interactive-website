<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 15px;
		width: 100px;
		color: black;
		background-color: white;
		border: none;
	    position: relative;
		left: 20px;
		border-radius: 10px;
		font-size:medium;
		font-family:arial;
	}
	#button:hover {
		background-color: gold;
		transform: scale(1.09);
		cursor:pointer;
		
	}
	.register{
		
		padding: 19px;
		width: 65px;
		color: black;
		background-color: white;
		border: none;
	    position: relative;
		left: 20px;
		border-radius: 10px;
		font-size:medium;
		font-family: arial;
	}
	.register:hover {
		background-color: gold;
	
	}
	.login-button {
		display:inline-flex;
		width: 230px;
		gap: 10px;
		position: relative;
		right: 190px;
	}
	.login-container {
		position: relative;
		right:150px;
	}


	</style>
	<div class="picture">
    <header>
        <nav>
            <ul>
                <li><a href="index.html"
                        style="border-bottom:3px solid greenyellow;box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.5);position:relative; right:35px;"> LOGIN/REGISTER
                    </a></li>
            </ul>
        </nav>


		

		<section id="Home">
            <div class="covermax">
                <div class="Cover">
                    <p class="text">"Ignite the fire in you!"</p>
                    <form class="login" method="post">
                        <div class="completelogin">
                            <h2>Login<h2>
                                    <div class="login-container">
                                        <label for="username" id="username" >Username</label>
                                        <input type="text" required placeholder="Username" name="user_name">
                                    </div>
                                    <div class="login-container">
                                        <label for="password" id="password" style="margin-right: 10px;" ">Password</label>
                                        <input type="password" required placeholder="Password" name = "password">
                                    </div>
                                    <div class="login-button">
									<input id="button" type="submit" value="Login" ><br><br>
                                        <a href="signup.php" class="register"> Register</a>
                                    </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
	
</body>
</html>