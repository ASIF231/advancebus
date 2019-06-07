<?php
require_once "config.php";

$from = $to = $date= "";
$err="";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "GET"){
    if(empty(trim($_GET['from'])) || empty(trim($_GET['to'])) || empty(trim($_GET['date'])))
    {
        $err = "Please enter agentid + password";
    }
    else{
        $from = trim($_GET['from']);
        $to = trim($_GET['to']);
        $date = trim($_GET['date']);
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