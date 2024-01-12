<?php 
include 'dbcontroller.php';
$db_handle = new DBController();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Perfect Fitness</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <style>
    body {
      background-color: black;
    }
    body {
      font-family: Arial, sans-serif;
    }


  </style>
  <body>
    <?php 
  if(isset($_POST['pay'])){
    $Cardhol_name = $_POST['cardholder'];
    $Card_number = $_POST['Card_number'];
    
    

    $sql = "INSERT INTO invoice(Cardhol_name,Card_number)VALUES('$Cardhol_name ','$Card_number ')";
        $run = $db_handle->executeUpdate($sql);
        if ($run == 1) {
            return true;
        }
  }
 ?>
    <div class="nav">
      <div class="nav-logo">
        <img
          src="../images/Logo.png"
          alt="Perfect Fitness logo"
          style="width: 145px; height: 145px"
        />
      </div>
      <div class="nav-items">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Free courses</a></li>
          <li>
            <a href="#">Programs</a>
            <ul>
              <li><a href="personal_training.html">Personal Training</a></li>
              <li><a href="online_training.html">Online Training</a></li>
              <li><a href="nutrition_coaching.html">Nutrition Training</a></li>
            </ul>
          </li>

          <li><a href="#">About</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Appointments</a></li>
          <li><a href="#">LOGIN</a></li>
        </ul>
      </div>
    </div>
  </body>

  <div class="payment-form">
    <h2>Payment</h2>
      <div class="column">
        <h3>Order Review</h3>
        <i class="fab fa-cc-visa fa-10x" style="color: navy "></i>
        <div>
          <label for="name">Card Holder Name</label>
          <input
            type="text"
            id="card Holder Name"
            placeholder="Card Holder Name"
            name="cardholder"
          />
        </div>
        <div>
          <label for="number">Card Number</label>
          <input type="text" id="card Number" placeholder="Card Number" name="Card_number" />
        </div>
        <h3>Billing Address</h3>
        <p style="width: 50%; color: #000;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ab praesentium sequi reiciendis vitae iure, ipsum et dolor hic ipsam magnam repudiandae, repellat maxime? Vitae impedit quod sint alias nesciunt.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ab praesentium sequi reiciendis vitae iure, ipsum et dolor hic ipsam magnam repudiandae, repellat maxime? Vitae impedit quod sint alias nesciunt.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ab praesentium sequi reiciendis vitae iure, ipsum et dolor hic ipsam magnam repudiandae, repellat maxime? Vitae impedit quod sint alias nesciunt.
            
        </p>
        <div class="text-center">
          <a href="payment_method.html">
            <button class="back-btn">Back</button>
          </a>
            <a href="personal_training.html">
              <button class="confirm-btn">Pay Now</button>
            </a>
        </div>

        
  </div>
</html>
