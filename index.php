



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
$db="users";
$hostname="localhost";
$dblink=new mysqli($hostname,$un,$pw,$db);
$user_id = $_SESSION['user_id'];


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
if ($user_id == ""){
echo '<a class="nav-link" href="login.php" style="color: rgb(173, 222, 255);">Log in<img src="svg/user.svg" alt="icon of a person\'s silhouette"></a>';
}else{
echo '<a class="nav-link" href="account.php" style="color: rgb(173, 222, 255);">Account<img src="svg/user.svg" alt="icon of a person\'s silhouette"></a>';
}
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
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<div class="center-custom" >';
echo '<div class="rotation">';
echo '<a href="vinyls.html">';
echo '<img src="images/astronaut.png" height="300px" width="300px" class="center-image" alt="rotating image of an astronaut. click to view our vinyls!">';
echo '</a>';
echo '</div>';
echo '<br>';
echo '<br>';
echo '<h1 style="padding: 10px; background-color: black; border: black 2px solid; width:max-content; margin: auto;"';
echo 'class="space-font">';
echo '"Music gives a soul to the universe, wings to the mind,';
echo '<br> flight to the imagination and life to everything."';
echo '</h1>';
echo '</div>';
//echo '<p style="color: white">wopa'.$user_id.'</p>';
echo '</body>';

if($user_id != ""){
	$_SESSION['user_id'] = $user_id;
}
echo '';
echo '</html>';


?>
