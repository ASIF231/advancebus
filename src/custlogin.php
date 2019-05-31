<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/style.css">
    <title>Customer Login</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
</head>
<body>
  <header class="my_header">
    <nav>
        <div class="clearfix">
        <div class="logo">
            <h1>Online bus reservation</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="../home.php" class="a">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
                <li><div class="dropdown">
                    <button class="dropbtn">LOGIN</button>
                    <div class="dropdown-content">
                      <a href="custlogin.php">AS CUSTOMER</a>
                      <a href="agentlogin.php">AS AGENT</a>
                    </div>
                  </div></li>
            </ul>
        </div>
        </div>
    </nav>
    <section>
        <div class="left">
                 <img src="..\img\bus.png" >
        </div>

        <div class="right">
          <div class="container">
            <form action="welcome.php">
             
                <div class="form-group">
                <label for="exampleInputEmail1" >Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btnsearch">Submit</button>
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

</body>
</html>