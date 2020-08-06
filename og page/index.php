<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="pretty.css">
</head>
<body>
<?php
switch ($_GET["n"]) {
    case "profile" :
        $heading = "Profile";
        $body = "Some cool things about me";
        break;
    case "photos" :
        $heading = "Photos";
        $body = "";
        break;
    case "interest" :
        $heading = "Interests / Hobbies";
        $body = "";
        break;
    default:
        $heading = "Welcome Back";
        $body = "";
        break;
}
?>
<header>
    <h2><?php echo $heading; ?></h2>
</header>
<nav>
    <a href="index.php">Home</a> -
    <a href="index.php?n=profile">Profile</a> -
</nav>
<section>
    <?php
    if ($_GET['n'] == 'profile') {
        include("profile.php");
    } ?>
</section>
</section>
<footer>
</footer>
</body>
</html>