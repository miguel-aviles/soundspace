

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
  <!-- My CSS-->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/popup.css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
</head>
<style>
  body {
    background-image: url("images/space-temp.png");
    background-size: cover;
    background-attachment: fixed;
  }
  .custom-toggler .navbar-toggler-icon {
    background-image: url(svg/good_enough_hamburger_menu.svg);
  }
</style>


<?php


session_start();

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
$db="products";
$hostname="localhost";
$dblink=new mysqli($hostname,$un,$pw,$db);
$user_id = $_SESSION['user_id'];
$product_id=$_REQUEST['vinyl_id'];

$sql="SELECT * FROM vinyls WHERE vinyl_id = '$product_id';";
$result=$dblink->query($sql) or
      die("Oh no! Something went wrong.");

$info=$result->fetch_array(MYSQLI_ASSOC);


echo '<body>';
echo '';
echo '<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: black;">';
echo '<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">';
echo '<span class="navbar-toggler-icon"></span>';
echo '</button>';
echo '<a class="navbar-brand space-font" href="index.php" style="color: rgb(173, 222, 255);">soundspace.com</a>';
echo '';
echo '<div class="collapse navbar-collapse" id="navbarTogglerDemo03">';
echo '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="vinyls.php" style="color: rgb(173, 222, 255);">Vinyls</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="players.html" style="color: rgb(173, 222, 255);">Record Players</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="headphones.html" style="color: rgb(173, 222, 255);">Headphones</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="login.php" style="color: rgb(173, 222, 255);">Log in <img src="svg/user.svg" alt="icon of a person\'s silhouette"></a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="cart.php" style="color: rgb(173, 222, 255);">Cart <img src="svg/shopping-cart.svg" alt="icon of a shopping cart"></a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '</nav>';
echo '';
echo '<br>';
echo '<br>';
//echo '<p style="color: white;">www '.$info['Description'].' www</p>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<div class="container" style="background-color: rgb(0, 0, 0);">';
echo '<div class="row">';
echo '<div class="col">';
echo '<img src="'.$info['ImagePath'].'" height="400px" width="400px" class="center-image" alt="Album art for At Folsom Prison by Johnny Cash. Features an image of Johnny Cash in front of a microphone.">';
echo '</div>';
echo '<div class="col" style="background-color: black; border: black 2px solid; padding: 10px;">';
echo '<h1 class="font-azul">'.$info['Artist'].' - '.$info['Album'].'</h1>';
echo '<p class="font-azul"><br>'.$info['Description'].'</p>';
echo '';
echo '<div>';
echo '<form role="form" method="post" action="">';
echo '<input id="make_user_button" class="btn mi-btn" href="#popup1" style="justify-content: center;" type="submit" name="submit" value="Add to Cart"></input>';
//echo '<button type="submit" name="submit" class="btn mi-btn">Add to cart</button>';
echo '<a href="buy.html" class="btn mi-btn ml-5">Buy now</a>';
echo '</form>';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '<div class="row">';
echo '<div class="col">';
echo '<h1 style="color: black;"> </h1>';
echo '</div>';
echo '<div class="col">';
echo '<h1 style="color: black;"> </h1>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';



if( isset($_POST['submit']) && $_POST['submit'] == "Add to Cart")
{
	if($user_id != "" && $product_id != ""){
	
		$sql="SELECT COUNT(1) as total FROM cart WHERE user_id = '$user_id'";
                $result=$dblink->query($sql) or
                       die("Oh no! Something went wrong.");
                $info=$result->fetch_array(MYSQLI_ASSOC);
                if($info['total'] == 0){
			//echo '<p style="color: white">watakatakik</p>';
			$sql="INSERT INTO cart (user_id,product_id,quantity) VALUES ('$user_id','$product_id',1);";
			$result=$dblink->query($sql) or
                                        die("<p style='color: white'>Oh no! Something went wrong.</p>");
		}else{
				$sql="SELECT COUNT(1) as total FROM cart WHERE user_id = '$user_id' AND product_id = '$product_id'";
                        	$result=$dblink->query($sql) or
					die("<p style='color: white'>Oh no! Something went wrong.</p>");	
				$info=$result->fetch_array(MYSQLI_ASSOC);

                        	if($info['total'] == 0){
                                	$sql="INSERT INTO cart (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', 1);";
					$result=$dblink->query($sql) or
                                        	die("<p style='color: white'>Oh no! Something went wrong.</p>");
					echo '<script>alert("- Item successfully added to your cart! -")</script>';
				}else{
					$sql="UPDATE cart SET quantity = quantity + 1 WHERE user_id = '$user_id' AND product_id = '$product_id'";
					$result=$dblink->query($sql) or
						die("<p style='color: white'>Oh no! Something went wrong.</p>");
					echo '<script>alert("- Item successfully added to your cart again! -")</script>';
				}	
                }
	}else{
        	echo '<script>alert("Log in if you wish to add products to your cart.")</script>';
	}
	
}




echo '</body>';


?>



