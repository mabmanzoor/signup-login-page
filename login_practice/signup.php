<!-- signup page -->


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Signup/Login</title>
<style>
    	.body{
		margin: 0;
		padding: 0;
		background-size: cover;
		background-position: center;
		font-family: sans-serif;
	}
	.loginbox{
		width: 410px;
		height: 580px;
		background:white;
		color: black;
		top: 45%;
		left: 80%;
		position: absolute;
		transform: translate(-50%, -50%);
		box-sizing: border-box;
		padding: 45px 125px;
        /* border:2px solid black; */
	}
	.logo{
		width: 120px;
		height: 120px;
		border-radius: 50%;
		position: absolute;
		top: -50px;
		left: calc(50% - 65px);
	}
	.h1{
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
		border: black;
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
        font-size: 14px;
        line-height: 20px;
        color: darkgrey;
       

	}
	.loginbox a:hover
	{
		color: red;
	}

  .text-box{
    color:#fff;
    position: absolute;
    bottom:8%;
  }

  .text-box p{
    font-size:50px;
    font-weight:600;
  }
  .text-box h1{
    font-size:190px;
    line-height:160px;
    margin-left:-10px;
    color:transparent;
    -webkit-text-stroke:1px #fff;
    background: url(img/);
  }







  .text-box h3{
    font-size:40px;
    font-weight:500;
  }

  .text-box .row{
    display:flex;
    align-items:center;
    flex-wrap:wrap;
    margin-top:30px;

  }

  .text-box a{
    color:#fff;
    text-decoration:none;
    padding:10px 20px;
    margin-right:20px;
    border:2px solid #fff;
    display:flex;
    aligh-item:center;
  }

  .text-box a span{
    font-size:30px;
    line-height:15px;
    margin-left:5px;
  }
    </style>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/magic_space.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top lazy"  data-original="assets/img/work.jpg"  style="background-image: url('img/3.png')"> 
<!-- <div class="container">
  <div class="row login-container animated fadeInUp">  
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
     <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
          <h2 class="normal">Sign up</h2>
        </div> -->
        <body>
	<div class="loginbox">
		<img src="img/8.jpg" height="200" width="30%" class="logo" style="margin-left: 2%">
		<h1>LegenDesk</h1>
		<form>
    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="email"><b>Contact</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="email"><b>Password</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

			<a href="food_home.html"><input type="Submit" name="" value="Login"></a>

			<a href="#" >Lost Your Password?</a>

      <a href="#" >Dont Have an account?</a>

      <a href="#" >Create Account</a>
		</form>
	</div>


  <div class="text-box">
    <p>Ordinary People Dream</p>
    <h1>LegenDesk</h1>
    <h3>Makes Them A Reality</h3>

    <div class="row">
      <a href="">Explore My Portfolio</a>
      <a href="">Connect with Me &#x27F6</a>
      <span>You can Explore More About My Portfolio And<br>Personal Life Experiences Here</span>
</div>
</div>
<!-- <div class="social-icon">
  <a href=""><img scr="images/dribble -->


<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="assets/js/login_v2.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>



</html>