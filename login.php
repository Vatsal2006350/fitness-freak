<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        #bar
        {
            height:100px;
            font-family:helvetica;
             background-color: #bd150f; 
             color: aliceblue;
             text-align:center;
             padding: 4px;
        }
        #signup_button
        {
            background-color: white;
            font-family:helvetica;
            width: 70px;
            text-align: center;
            padding: 4px;
            border-radius: 4px;
            float: right;
            color: black;
        }
        #bar2
        {
             background-color:white;
             font-family:helvetica;
             width:800px;
             margin: auto;
             margin-top: 100px;
             padding: 10px;
             text-align: center;
             padding-top: 50px;
             font-weight: bold;
        }
        #text
        {
            height: 40px;
            font-family:helvetica;
            width: 300px;
            border-radius: 4px;
            border: 1px solid #ccc;
            padding: 4px;
            font-size: 14px;
        }
        #button
        {
            width: 300px;
            font-family:helvetica;
            height: 40px;
            border-radius: 4px;
            border: none;
            color: aliceblue;
            background-color:#bd150f;
        }
        a
        {
            text-decoration: none;
            font-family:helvetica;
            color:black;
            cursor: pointer;
        }
        a:hover
        {
            text-decoration:none;
            color:blue;
        }
    </style>
</head>
<body style="font-family: tahoma; background-color: beige;">
    <div id="bar">
        <div style="font-size:40px ;font-weight: bold; padding:10px;margin-top:5px;">Fitness Freak</div>
        <div id="signup_button"><a href="signup.php"><b>Sign In</b></a></div>
    </div>

    <div id="bar2">
        Login to Fitness Freak <br><br>
    <form name="frm" method="post">
        <input type="text" name="t1" id="text" placeholder="Email"> <br> <br>
        <input type="password" name="t2" id="text" placeholder="Password"> <br> <br>
        <button name="lgbtn" id="button">Login</button>
    </form>        
        <br><br><br>
    </div>
      
</body>
</html>
<?php

if(isset($_POST['lgbtn']))
{
    $eml=$_POST['t1'];
    $pass=$_POST['t2'];

    $con=new Mysqli("localhost","vatsal2006350","Vatsal@2006","fitness_freak");

    if($con->connect_error) die($con->connect_error);

    else
    {
        $sql="select * from reg where eml='$eml' and pass='$pass'";

        $res=$con->query($sql);

        if($rows=$res->fetch_assoc())
        {
            $_SESSION['USER'] = $rows['usrnm'];
            $_SESSION['userID'] = $rows['id'];
            $_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];
            date_default_timezone_set('ASIA/UAE');
            $_SESSION['login_time']=date('d-m-y  h:i:sA');
            header("location:index.php");
            // echo "<h2> Login done !!</h2>";
        }
        else
        {
            echo " <h2> Wrong username and password </h2> ";
        }
    }
    $con->close();
}
?>