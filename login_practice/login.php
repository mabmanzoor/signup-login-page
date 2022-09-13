<style>
	.body{
		margin: 0;
		padding: 0;
		background-size: cover;
		background-position: center;
		font-family: sans-serif;
	}
	.loginbox{
		width: 320px;
		height: 480px;
		background:#000;
		color: #fff;
		top: 50%;
		left: 50%;
		position: absolute;
		transform: translate(-50%, -50%);
		box-sizing: border-box;
		padding: 70px 30px;
	}
	.logo{
		width: 100px;
		height: 100px;
		border-radius: 50%;
		position: absolute;
		top: -50px;
		left: calc(50% - 50px);
	}
	.h2{
		margin: 0;
		padding: 0 0 20px;
		text-align: center;
		font-size: 22px;
	}
	.loginbox input{
		width: 100%;
		margin-bottom: 20px;
	}
	.loginbox input[type="text"],input[type="password"]
	{
		border: none;
		border-bottom: 1px solid #fff;
		background : transparent;
		outline: none;
		height: 40px;
		color: #fff;
		font-size: 16px;
	}
	.loginbox input[type="submit"]
	{
		border: none;
		outline: none;
		height: 40px;
		background: #fb2525;
		color: #fff;
		font-size: 18px;
		border-radius: 20px;
	}
	.loginbox input[type="submit"]:hover
	{
		cursor: pointer;
		background: lightgreen;
		color: #000;

	}
	.loginbox a{
		text-decoration: none;
        font-size: 12px;
        line-height: 20px;
        color: darkgrey;

	}
	.loginbox a:hover
	{
		color: red;
	}
</style>




 <div class="mainBanner" style="background-image: url(file:///C:\xampp\htdocs\login2\login_practice\img\3.png); height: 760px; -webkit-filter:blur(8px); -moz-filter:8px"> 

</div>
<body>
	<div class="loginbox">
		<img src="img/f3.png" height="175" width="20%" class="logo" style="margin-left: -3%">
        <h1>LegenDesk</h1>
		<h1>I Made It!!!</h1>
		<form>
			<p>Email</p>
			<input type="text" name="" placeholder="Enter Email">

            <p>Password</p>
			<input type="password" name="" placeholder="Enter password">

			<a href="food_home.html"><input type="Submit" name="" value="Login"></a>

			<a href="#" style="float: left;">Lost Your Password?</a><br>

            <a href="#" style="float: left;">Dont Have an account?</a><br>

            <a href="#" style="float: left;">Create Account</a><br>

		</form>
	</div>
</body>








 	<!---webkit-filter: blur(10px); -moz-filter:10px" blur krne k liye bg pic ko-->

