<?php
session_start();
  if (empty($_SESSION['username'])) {
      header('location:login.php');
  }else{
        $username = $_SESSION['username'];
        $user_name = strtoupper($username);
        
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Online Drug Store</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

        <link rel="stylesheet" type="text/css" href="../styles/style.css" />
        <link rel="shortcut icon" href="../images/favicon.ico" >
        <script type="text/javascript" src="../Scripts/JScript.js"></script>
        <script type="text/javascript" src="../Scripts/javascriptFile.js"></script>
        <script src="../Scripts/jquery.slides.min.js" type="text/javascript"></script>
    </head>
<body>
<div id="header">
            <a href="index.php"><img src="../images/logo.png" width="237" height="123" class="float" alt="setalpm" /></a>																																																																	
            <div class="topnav">
                <span><strong>Welcome:</strong> &nbsp;<?php echo $user_name;?>&nbsp; | &nbsp;<?php echo'<a href="signout.php">Sign out</a>';?></span>             
            </div>
            <ul id="menu">
                <li><a href="index.php"><img src="../images/but1.gif" alt="Home Page" width="110" height="32" /></a></li>
                <li><a href="login.php"><img src="../images/but2.gif" alt="Log in" width="110" height="32" /></a></li>
                <li><a href="register.php"><img src="../images/but3.gif" alt="Registration" width="110" height="32" /></a></li>
                <li><a href="login.php"><img src="../images/but4.gif" alt="My account" width="110" height="32" /></a></li>
                <li><a href="index.php"><img src="../images/but5.gif" alt="Shopping Cart" width="110" height="32" /></a></li>
                <li><a href="index.php"><img src="../images/but6.gif" alt="Checkout" width="110" height="32" /></a></li>
            </ul>
</div>
<div id="content">
<?php require_once './sidebar.php'; ?>
    <div>
        
    </div>   
</div>
    <?php require_once './footer.php'; ?>