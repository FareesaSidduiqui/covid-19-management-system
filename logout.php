<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
@import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 50px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}

 .login{
    font-family: ;
    font-size : 15px;
    font : 
 }
    </style>
</head>
<body>
<div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Sign out</h2>
      <input type="text" class="form-control" name="username" placeholder="ID" required="" autofocus="" /><br><br>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox"><br><br>
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label><br><br>
     <center><button class="btn btn-lg btn-primary btn-block login" type="submit"><a href="index.php">Log out</a></button></center>   
    </form>
  </div>
</body>
</html>