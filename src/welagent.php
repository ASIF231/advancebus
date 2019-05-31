<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: agentlogin.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/stylesignup.css">
    <title>Agent Signup
    </title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
 
  </head>

<body>
  <header >
    <nav>
        <div class="clearfix">
        <div class="logo">
            <h1>Online bus reservation</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="../home.html" class="a">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </div>
        </div>
    </nav>
    
</header>
<section>
  <div class="left">
           <img src="..\img\bus.png" >
  </div>

  <div class="right">
</div>
</section>
<div id="my ad" STYLE="margin-left: 25%; position: relative;">
    <script type="text/javascript" language="javascript">
        var aax_size='728x90';
        var aax_pubname = 'asif23-21';
        var aax_src='302';
      </script>
      <script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script>
    </div>
<!-- <script src="js/myjs.js"></script> -->
</body>
</html>
