<?php
if(isset($_SESSION['loggedin'])){
$username = $_SESSION['naam'];
}
else{
    $username = "log in";
}
?>
<nav>
    <a href="index.php#top"><object id="menuHome" type="image/svg+xml" data="assets/images/menu/home.svg">Your browser does not support SVGs</object></a>
    <a href="index.php#content"><object id="menuContent" type="image/svg+xml" data="assets/images/menu/speaker-filled-audio-tool.svg">Your browser does not support SVGs</object></a>
    <a href="index.php#contact"><object id="menuContact" type="image/svg+xml" data="assets/images/menu/black-envelope.svg">Your browser does not support SVGs</object></a>
    <a href="index.php#over"><object id="menuOverOns" type="image/svg+xml" data="assets/images/menu/team.svg">Your browser does not support SVGs</object></a>
    <a class="menuUser" href="login.php"><object id="menuUser" type="image/svg+xml" data="assets/images/menu/msn-user-profile.svg">Your browser does nnot support SVGs</object></a><span id="userName"><?=$username;?></span>
</nav>






