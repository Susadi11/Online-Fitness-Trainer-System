<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfect fitness</title>
    <style>
            *{
                margin:0;
            }
            .nav{
            background: #1b1b1b;
            }

            .nav::after{
            content: '';
            clear: both;
            display: table;
            }

            
            .nav ul{
            float: right;
            list-style: none;
            margin-right: 60px;
            position: relative;
            }
            .nav ul li{
            float: left;
            display: inline-block;
            background: black;
            margin: 0 15px;

            }
            .nav ul li a{
            color: white;
            text-decoration: none;
            line-height: 75px;
            font-size: 18px;
            padding: 5px 15px;
            
            }
            .nav ul li a:hover{
            color: red;
            box-shadow: 0 0 5px red,
                        0 0 5px rgb(5, 7, 79);
            }

            .nav ul ul{
            position: absolute;
            top: 70px;
            opacity: 0;
            visibility: hidden;
            }
            .nav ul li:hover> ul{
            opacity: 1;
            visibility: visible;
            }


            .nav ul ul li{
            position: relative;
            margin: 0px;
            width: 200px;
            font-size: 16px;
            float: none;
            display: list-item;
            border-bottom: 1px solid rgba(0,0,0,0,3);
            }

            .nav {
            position: fixed;
            background-color: #000 !important;
            width: 100%;
            top: 0;
            }

            .nav-items, .nav-logo {
            display: inline-block;
            }

            .nav-items {
            top: 50px;
            position: fixed;
            }
                        
            .container{
            display: flex;
            padding-top: 0em;
            }

            .landing-photo, .landing-form {
            flex :1;
            }

            
            input[type=text],   input[type=password],select {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }

           button {
              width: 100%;
              background-color: #4CAF50;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }

            input[type=submit]:hover {
              background-color: #45a049;
            }

            .form{
              width: 70%;
              margin-left:auto;
              margin-right:auto;
              text-align:center;
            }
            .error{
              color : red;
              border: 1px solid red;
              padding: 12px;
              font-size:22px;
              margin: bottom 10px;
            }
            </style>
</head>
<body>
<div class="nav">

<div class="nav-logo">

</div>
<div class="nav-items">

  <ul>
    <li><a class="active" href="index.php">Home</a><li>
    <li><a href="#">Free courses</a> </li>
    <li><a href="#">Programs</a> 
    <ul>
      <li><a href="#">Personal Training</a> </li>
      <li><a href="#">Online Training</a> </li>
      <li><a href="#">Nutrition Training</a> </li>
    </ul>
    </li>

    <li><a href="#">About</a> </li>
    <li><a href="#">Contact Us</a> </li>
    <li><a href="#">FAQ</a> </li>
    <li><a href="#">Blog/Resources</a> </li>
    <li><a href="#">Appointments</a> </li>
   
    <?php
      if(isset($_SESSION["username"])){
        echo ' <li style="float:right"><a href="includes/logout.inc.php">Logout</a></li>';
        echo ' <li style="float:right"><a href="profile.php">'.$_SESSION["username"].'!';
      } else {
         echo '.> <a href ="login.php">login</a>';
      }
      ?>
    </li>
  </ul>
  <div class="container" style="margin-left:40px; margin-top:120px;" >