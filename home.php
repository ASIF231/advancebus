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
                    <li><a href="home.html" class="a">HOME</a></li>
                    <li><a href="src\about.php">ABOUT</a></li>
                    <li><a href="src\contact.php">CONTACT US</a></li>
                    <li><div class="dropdown">
                        <button class="dropbtn">LOGIN</button>
                        <div class="dropdown-content">
                          <a href="src\custlogin.php">AS CUSTOMER</a>
                          <a href="src\agentlogin.php">AS AGENT</a>
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
                  <form action="search.php" method="post" class="style">
                <div>
                  <input type="text" name="from_place" data-message="Please Enter Origin city" autocomplete="off" class="fplace" placeholder="FROM">
                </div>
                
                <div>  
                   <input type="text" name="to_place" placeholder="TO" data-message="Please Enter destiny city" autocomplete="off" class="tplace">
                </div> 
                <div >
                    <!-- journy date :- -->
                    <input type="date" name="date" class="date" v placeholder="Journy Date">
                 </div>

                     <div>
                   <p style="color:black;">Seats</p>
                    <select class="npas">
                        <!-- <option value="">No. of Passenger</option> -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                     </select>
                    </div>
                 
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
    <!-- <script type="text/javascript" src="js/myjs.js"></script> -->
</body>

</html>