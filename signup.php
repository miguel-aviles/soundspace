<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel='stylesheet' href='https://unpkg.com/emoji.css/dist/emoji.min.css'>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- Bootstrap JS-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- W3 themes -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <!-- My CSS-->
  <link rel="stylesheet" href="css/styles.css">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
</head>
<style>

    body {
        height: 100%;
        justify-content: center;
        align-items: center;
        padding-bottom: 40px;
        background-color: rgb(173, 222, 255);
    }
    .putito{
      display: flex;
      justify-content: center;
      align-items: center;
    }
  .custom-toggler .navbar-toggler-icon {
    background-image: url(svg/good_enough_hamburger_menu.svg);
  }
</style>



<?php

function redirect ( $uri )
    { ?>
    <script type="text/javascript">
    <!--
    document.location.href="<?php echo $uri; ?>";
    -->
    </script>
    <?php die;}

	$un="webuser";
        $pw="xJPKWzvdmaGjii3k";
        $db="users";
        $hostname="localhost";
        $dblink=new mysqli($hostname,$un,$pw,$db);

echo '<body style="text-align: center;">';
echo '<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: black;">';
echo '<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">';
echo '<span class="navbar-toggler-icon"></span>';
echo '</button>';
echo '<a class="navbar-brand" href="index.html" style="color: rgb(173, 222, 255);">soundspace.com</a>';
echo '';
echo '<div class="collapse navbar-collapse" id="navbarTogglerDemo03">';
echo '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="vinyls.html" style="color: rgb(173, 222, 255);">Vinyls</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="players.html" style="color: rgb(173, 222, 255);">Record Players</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="headphones.html" style="color: rgb(173, 222, 255);">Headphones</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="login.html" style="color: rgb(173, 222, 255);">Log in <img src="svg/user.svg" alt="icon of a person\'s silhouette"></a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="cart.html" style="color: rgb(173, 222, 255);">Cart <img src="svg/shopping-cart.svg" alt="icon of a shopping cart"></a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '</nav>';
echo '<form class="form-signin" role="form" method="post" action="">';
echo '<br>';
echo '<br>';
echo '<img class="mb-4" src="./images/vinyl_cartoon.png" style="width:100px;height:100px;" alt="Logo">';
echo '<h1 class="h3 mb-3 font-weight-normal">Sign up</h1>';
echo '<br>';
echo '<input id="inputFName" name="inputFName" class="form-control" style="background-color: aliceblue; color: black" placeholder="First Name" required>';
echo '<br>';
echo '<input id="inputLName" name="inputLName" class="form-control" style="background-color: aliceblue;" placeholder="Last Name" required>';
echo '<br>';
echo '<input type="email" id="inputEmail" name="inputEmail" class="form-control" style="background-color: aliceblue;" placeholder="Email address"  required>';
echo '<br>';
echo '<input id="phone" class="form-control" name="phone" style="background-color: aliceblue;" placeholder="Phone Numer"  required>';
echo '<br>';
echo '<input type="password" id="inputPassword" name="inputPassword" class="form-control" style="background-color: aliceblue;" placeholder="Password"  required>';
echo '<div class="checkbox mb-3">';
echo '<label>';
echo '<input type="checkbox" value="remember-me"> Remember me';
echo '</label>';
echo '</div>';
echo '<input id="make_user_button" class="w3-button w3-theme w3-black" type="submit" name="submit" value="Sign Up"></input>';
echo '<br>';
echo '<p>Already Have An Account? <a href = "./login.html">Login</a></p>';
echo '';
echo '<p class="mt-5 mb-3 text-muted">© 2021</p>';
echo '</form>';
        if( isset($_POST['submit']) && $_POST['submit'] == "Sign Up")
        {
                $firstName=$_POST['inputFName'];
                $lastName=$_POST['inputLName'];
                $email=$_POST['inputEmail'];
                $phone=$_POST['phone'];
                $pw=$_POST['inputPassword'];
		
		if( $firstName != "" && $lastName != "" && $email != "" && $phone != "" && $pw != "" )
                {
			
			$sql="SELECT COUNT(1) as total FROM user_info WHERE email = '$email'";
			$result=$dblink->query($sql) or
                                die("Oh no! Something went wrong.");
			$info=$result->fetch_array(MYSQLI_ASSOC);
			if($info['total'] == 0){
				$sql="INSERT INTO `user_info`(`firstName`, `lastName`, `email`, `phone`, `password`) VALUES ('$firstName', '$lastName', '$email', '$phone', '$pw')";
                        	$result=$dblink->query($sql) or
                        	       	die("Oh no! Something went wrong.");
                        	echo '<p class="text-success">!!! You are now signed up !!!</p>';
				redirect('s0undspace.com?');
			}else{
				echo '<p class="text-danger">* There is already an account registered with this email. *</p>';	
			}	
		}else{
              		echo '<p class="text-danger">* Please make sure to fill in all of the fields. *</p>';
               	}
        }
echo '';
echo '</body>';
echo '';
echo '';
echo '</html>';

?>
