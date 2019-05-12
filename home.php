<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Book My bus</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header class="my_header">
        <nav>
            <div class="logo">
                <h1>Online bus reservation</h1>
            </div>
            <div class="menu">
                <ul>
                    <li>HOME</li>
                    <li>ABOUT</li>
                    <li>CONTACT US</li>
                    <li>LOGIN</li>
                </ul>
            </div>
        </nav>
        <section>
            <div class="left">
                     <img src="img\bus.png" alt="">
            </div>

            <div class="right">
             <form action="a.php" method="post" class="style">
                <div>
                  <input type="text" name="from_place" data-message="Please Enter Origin city" autocomplete="off" class="fplace" value="To">
                </div>
                
                <div>  
                   <input type="text" name="to_place" value="From" data-message="Please Enter destiny city" autocomplete="off" class="tplace">
                </div> 
                <div>
                   <input type="date"  class="date" id="mydate" value="Travel Date" >
                 </div>
                 
                 <div> 
                    <input type="button" value="SEARCH"  class="btnsearch" onclick="my1()">
                  <div>
            </form>


            </div>
        </section>
    </header>
    <script type="text/javascript" src="js/myjs.js"></script>
</body>

</html>