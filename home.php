

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Book My bus</title>
    <link rel="stylesheet"  href="css/style.css">

</head>
<body>
    <header class="my_header">
        <nav>
            <div class="logo">
                <h1>Online bus reservation</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="home.php" class="a">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </nav>
        <section>
            <div class="left">
                     <img src="img\bus.png" alt="">
            </div>

            <div class="right">
             <form action="search.php" method="post" class="style">
                <div>
                  <input type="text" name="from_place" data-message="Please Enter Origin city" autocomplete="off" class="fplace" placeholder="FROM">
                </div>
                
                <div>  
                   <input type="text" name="to_place" placeholder="TO" data-message="Please Enter destiny city" autocomplete="off" class="tplace">
                </div> 
                <div class="dp">
                    <!-- journy date :- -->
                    <input type="date" name="date" class="date" v placeholder="Journy Date">
                 </div>

                 <div>
                   <p style="color:black;">Traveller(s)</p>
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
                  <div>
            </form>


            </div>
        </section>
    </header>
    <!-- <script type="text/javascript" src="js/myjs.js"></script> -->
</body>

</html>