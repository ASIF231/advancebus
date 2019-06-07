<?php
require_once "config.php";

$from = $to = $date= "";
$err="";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['from'])) || empty(trim($_POST['to'])) || empty(trim($_POST['date'])))
    {
        $err = "Please enter agentid + password";
    }
    else{
        $from = trim($_POST['from']);
        $to = trim($_POST['to']);
        $date = trim($_POST['date']);
        $msql="SELECT DATE_FORMAT($date, '%Y %m %d')";
        $date = $msql;
    }


if(empty($err))
{
    $sql = "select *from route where from =?, to= ? ,date=?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $param_from,$param_to,$param_date);
    $param_agentid = $agentid;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $from,$to,$date);
                    if(mysqli_stmt_fetch($stmt))
                    {
                    //Redirect user to welcome page
                        header("location: booking.php");
                    }

                }

    }
}    


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book My bus</title>
    <link rel="stylesheet"  href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">

</head>
<body>
    <header class="my_header">
        <nav>
        <div class="clearfix ">
            <div class="logo">
                <h1>Online bus reservation</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="home.php" class="a">HOME</a></li>
                    <li><a href="src\about.php">ABOUT</a></li>
                    <li><a href="src\contact.php">CONTACT US</a></li>
                    <li><div class="dropdown">
                        <button class="dropbtn">LOGIN</button>
                        <div class="dropdown-content">
                          <a href="src\custlogin.php">AS CUSTOMER</a>
                          <a href="src\bookerlogin.php">AS BOOKER</a>
                          <a href="src\bookerlogin.php">AS OPERATOR</a>
                          <a href="src\bookerlogin.php">AS conductor</a>
                          <a href="src\bookerlogin.php">AS ADMIN</a>
                        </div>
                      </div></li>
                </ul>
            </div>
        </div>
        </nav>
        <section>
            <div class="left">
                     <img src="img\bus.png" >
            </div>

            <div class="right">
                <div class="container">
                  <form action="booking.php" method="post" class="style" >
                <div>
                  <input type="text" name="from" id="from" data-message="Please Enter Origin city" autocomplete="off" class="fplace" placeholder="FROM">
                </div>
                <div id="livesearch"></div>
                
                <div>  
                   <input type="text" name="to" id="to" placeholder="TO" data-message="Please Enter destiny city" autocomplete="off" class="tplace">
                </div> 
                <div >
                    <!-- journy date :- -->
                    <input type="date" name="date" id="date" class="date" placeholder="Journy Date">
                 </div>

                     <!-- <div>
                   <p style="color:black;">Seats</p>
                    <select class="npas">
                        <option value="">No. of Passenger</option> 
                        <option value="1" name="1">1</option>
                        <option value="2" name="2">2</option>
                        <option value="3" name="5">3</option>
                        <option value="4" name="4">4</option>
                        <option value="5" name="5">5</option>
                        <option value="6" name="6">6</option>
                     </select>
                    </div>
                  -->
                     <div> 
                         <input type="button" value="SEARCH" class="btnsearch" >
                     </div>
                    </form>

            </div>
            </div>
        </section>
    </header>
    <div id="my ad" STYLE="margin-left: 25%; position: relative;">
    <script type="text/javascript" language="javascript">
        var aax_size='728x90';
        var aax_pubname = 'asif23-21';
        var aax_src='302';
      </script>
      <script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script>
    </div>
    <script type="text/javascript" src="js/myjs.js"></script>
</body>

</html>