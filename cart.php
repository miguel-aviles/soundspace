



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

$sql="SELECT * FROM cart WHERE user_id = '$user_id';";
$result=$dblink->query($sql) or
      die("Oh no! Something went wrong.");

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
echo '<a class="nav-link" href="login.php" style="color: rgb(173, 222, 255);">Log in<img src="svg/user.svg" alt="icon of a person\'s silhouette"></a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="cart.php" style="color: rgb(173, 222, 255);">Cart<img src="svg/shopping-cart.svg" alt="icon of a shopping cart"></a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '</nav>';
echo '';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<div class="container" style="background-color: black;">';
echo '<div class="row">';
echo '<h1 class="font-azul">Cart<br><br></h1>';
echo '</div>';

if ( $user_id != "" ) {

echo '<div class="row">';
echo '<table class="table table-hover table-dark table-bordered">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">#</th>';
echo '<th scope="col">Product</th>';
echo '<th scope="col">Department</th>';
echo '<th scope="col">Price</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while($info=$result->fetch_array(MYSQLI_ASSOC)){
        $sql="SELECT * FROM vinyls WHERE vinyl_id = '$info[product_id]';";
        $result2=$dblink->query($sql) or
              die("Oh no! Something went wrong.");
        $vinyl=$result2->fetch_array(MYSQLI_ASSOC);
	echo '<tr>';
	echo '<th scope="row">'.$info['quantity'].'</th>';
	echo '<td>'.$vinyl['Album'].' - '.$vinyl['Artist'].'</td>';
	echo '<td>Vinyl Record</td>';
	echo '<td>$35.95</td>';
	echo '</tr>';
}	
echo '</tbody>';
echo '</table>';
echo '</div>';
echo '';
echo '<div class="row mt-4">';
echo '<a href="buy.html" class="btn mi-btn">Proceed to checkout</a>';
echo '';
echo '</div>';
}else{
	 echo '<h1 class="font-azul">Your cart is empty because you have not logged in/signed up.</h1>';
}
echo '</div>';
echo '';
echo '</body>';
echo '';


?>
