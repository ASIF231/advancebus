<?php
require_once "config.php";

$agentid = $agentname = $email = $mobile = $city = $password = $conpass = "";
$agentid_err = $agentname_err = $email_err = $mobile_err = $city_err = $password_err = $conpass_err = "";


if($_SERVER['REQUEST_METHOD'] == "POST"){
  // check agentid if empty
  if(empty(trim($_POST['agentid']))){
    $agentid_err ="Agent Id Cannot Be Blank";
  }
  else{
    $sql = "select agentid from agent where agentid = ?";
    $stmt=mysqli_prepare($conn,$sql);

    if($stmt)
    {
      mysqli_stmt_bind_param($stmt,"s",$param_agentid);

      //set value of agent id
      $param_agentid = trim($_POST['agentid']);

      // try execute set value
      if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
        {
          $agentid_err = "This Agent id Already taken ";
          echo "<script type='text/javascript'>alert(\"$agentid_err\");</script>";
        }
        
        else{
          $agentid = trim($_POST['agentid']);
        }
      }
      else{
        echo "somthin went Wrong";
      }
    }
  }
mysqli_stmt_close($stmt);

// check Agent name
if(empty(trim($_POST['agentname']))){
  $agentname_err ="Agent Name Cannot Be Blank";
}
else
{
  $agentname = trim($_POST['agentname']);
}

// Check email
if(empty(trim($_POST['email']))){
  $email_err ="Agent Email Cannot Be Blank";
}
else
{
  $email = trim($_POST['email']);
}

//check mobile no
if(
  empty
  (trim
  ($_POST['mobile'])))
{
  $mobile_err ="Agent Name Cannot Be Blank";
}
else
{
  $mobile = trim($_POST['mobile']);
}

//check city
if(empty(trim($_POST['city']))){
  $city_err ="Agent Name Cannot Be Blank";
}
else
{
  $city = trim($_POST['city']);
}

//check password
if(empty(trim($_POST['password']))){
  $password_err="Password Cannot Be Blank";
}
elseif(strlen(trim($_POST['password']))<5){
  $password_err="Password Cannot be less than 5 Digits";
}
else{
  $password = trim($_POST['password']);
}

//check confirm password

if(trim($_POST['password']) != trim($_POST['conpass']) ){
  $conpass_err="Password Shoult Be match";
}

//if were no error , go to add insert into database
if(empty($agentid_err) && empty($password_err) && empty($conpass_err) && empty($agentname_err) && empty($email_err) && empty($mob_err) && empty($city_err)){
  $sql = "insert into agent (agentid,agentname, email, mobile, city, password) values (?, ?, ?, ?, ?,? )";
  $stmt=mysqli_prepare($conn,$sql);
  if($stmt)
  {
    mysqli_stmt_bind_param($stmt,"ssssss",$param_agenid,$param_agentname,$param_email,$param_mobile,$param_city,$param_password);
    
    //set parameter
    $param_agenid  = $agentid;
    $param_agentname = $agentname;
    $param_email = $email;
    $param_mobile = $mobile;
    $param_city = $city;
    $param_password = password_hash($password,PASSWORD_DEFAULT);

    // try execute query

    if (mysqli_stmt_execute($stmt))
    {
      header("location: agentlogin.php");
    }

    else{

      echo " Somthing Went Wrong .... Cannot Redirect";
    }
  }
  // mysqli_close($stmt);
  mysqli_close($conn);
}

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
                <li><div class="dropdown">
                    <button class="dropbtn">LOGIN</button>
                    <div class="dropdown-content">
                      <a href="custlogin.html">AS CUSTOMER</a>
                      <a href="agentlogin.html">AS AGENT</a>
                    </div>
                  </div></li>
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
    <div class="container">
      <form action="" method="post">
       <div class="form-group">
                      
                      <input type="text" class="form-control" name="agentid" placeholder="Choose Agent Id">
                     
       </div>
       <div class="form-group">
                      
        <input type="text" class="form-control" name="agentname" placeholder="Agent name">
       
</div>
          <div class="form-group">
          
          <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" placeholder="Enter email">
          <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
         
          <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No(10 Digits)" minlength="10" maxlength="10">
        </div>
        <div class="form-group">
                      
          <input type="text" class="form-control" id="input agent City" name="city" placeholder="City">
         
</div>

        <div class="form-group">
         
          <input type="password" class="form-control" name="password"  placeholder="Enter Password">
        </div>
        
        <div class="form-group">
          
          <input type="password" class="form-control" name="conpass" placeholder="Enter Confirm Password Password">
        </div>

        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="tc">
          <label class="form-check-label" for="exampleCheck1">I Agree Term & Condition</label>
        </div>
        <button type="submit" class="btn btnsearch" id="subbtn" >Submit</button>
      </form>
      <div class="form-group">
        If you already have Account<a href="agentlogin.php"> click here </a> to Signin
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
<!-- <script src="js/myjs.js"></script> -->
</body>
</html>
