<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/stylesignup.css">
    <title>Agent Login
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
                <li><a href="home.php" class="a">HOME</a></li>
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
    
</header>
<section>
  <div class="left">
           <img src="img\bus.png" >
  </div>

  <div class="right">
    <div class="container">
      <form action="welcome.php">
       
          <div class="form-group">
          
          <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
          <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        
        <div class="form-group">
         
          <input type="text" class="form-control"  placeholder="Enter Mobile No(10 Digits)" minlength="10" maxlength="10">
        </div>
        <div class="form-group">
          
            <input type="radio" name="gender" value="m" class="radio">MALE</input>
            <input type="radio" name="gender" value="f" class="radio">FEMALE</input>
             
           </div>

           <div class="form-group">
                <label for="bdate" >Birth Date</label>
         
            <input type="date" class="date">
          </div>

        <div class="form-group">
                      
          <input type="text" class="form-control" id="input agent City" placeholder="City">
         
</div>

        <div class="form-group">
         
          <input type="password" class="form-control"  placeholder="Enter Password">
        </div>
        
        <div class="form-group">
          
          <input type="password" class="form-control"  placeholder="Enter Confirm Password Password">
        </div>

        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">I Agree Term & Condition</label>
        </div>
        <button type="submit" class="btn btnsearch">Submit</button>
      </form>
      <div class="form-group">
        If you already have Account<a href="custlogin.html"> click here </a> to Signin
      </div>
      
      </div>
     


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

</body>
</html>