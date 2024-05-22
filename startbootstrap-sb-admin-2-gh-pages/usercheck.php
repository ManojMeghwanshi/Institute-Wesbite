<?php
session_start();
include "conn.php";

if(!empty($_POST['login']))
{
    $email =$_POST['email'];
    $pass =$_POST['password'];
    $q="SELECT * FROM `adminlogin`";
    $run=mysqli_query($con,$q);
    $row = mysqli_fetch_array($run);
    if($row['username']==$email)
    {
        if($row['password']==$pass)
        {
            $_SESSION['loginsuccess']="LOGIN SUCCESSFULLY!";
            header("location:headline.php");
        }
        else{
            $_SESSION['loginfail']="PASSWORD IS WRONG!";
            header("location:index.php");
            // echo "PASSWORD IS WRONG!";
        }
    }
    else{
        $_SESSION['loginfail']="USERNAME IS WRONG!";
            header("location:index.php");
            // echo "Username IS WRONG!";
    }

}


?>