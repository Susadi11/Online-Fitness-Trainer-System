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

    .payment-form {
      width: 1000px;
      margin: 0 auto;
      border: 1px solid #ccc;
      padding: 20px;
      background-color: #fff;
      border-radius: 20px;
    }

    .payment-form h2 {
      text-align: center;
    }

    .payment-form h3 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .payment-form .row {
      display: flex;
      margin-bottom: 10px;
    }

    .payment-form .row .column {
      flex: 1;
      padding: 0 5px;
    }

    .payment-form .row .column:first-child {
      flex: 0.4;
      border-right: 2px solid #ccc;
      padding-right: 10px;
    }

    .payment-form .row .column:last-child {
      padding-left: 10px;
    }

    .payment-form input,
    .payment-form select {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }

    .payment-form label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .payment-form button {
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 50px;
      padding-right: 50px;
      margin-right: 30px;
      border: none;
      color: #fff;
      border-radius: 30px;
      cursor: pointer;
    }

    .payment-form button.back-btn {
      background-color: blue;
    }

    .payment-form button.cancel-btn {
      background-color: red;
    }

    .payment-form button.confirm-btn {
      background-color: green;
    }
  </style>
  <body>
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
<?php 
  if(isset($_POST['pay'])){
    $Card_type = $_POST['cardType'];
    $Cardhol_name = $_POST['cardholder'];
    $Card_number = $_POST['cardnum'];
    $Expiry_date = $_POST['expirydate'];
    $CVV = $_POST['cvv'];
    $Amount = $_POST['amount'];
    

    $sql = "INSERT INTO card(Card_type,Cardhol_name,Card_number,Expiry_date,CVV,Amount)VALUES('$Card_type ','$Cardhol_name ','$Card_number ','$Expiry_date ','$CVV ','$Amount ')";
        $run = $db_handle->executeUpdate($sql);
        if ($run == 1) {
            echo "asdasd";
        }
  }
 ?>
  <div class="payment-form">
    <h2>Payment</h2>
    <div class="row">
      <div class="column">
        <img
          src="../images/Logo.png"
          alt="Product Image"
          width="100"
          height="100"
        />
        <p>Product Description</p>
      </div>
      <div class="column">
        <h3>Payment Method</h3>
        <h5>All transaction are secure and encrypted</h5>
        <form action="payment_method.php" method="POST">
        <label for="card-type">Card Type</label>
        <div class="row">
          <div class="col-10">
            <div class="card-checkbox">
              <input type="radio" id="visa" name="cardType" value="visa" />
              <label for="visa">
                <i class="fab fa-cc-visa" style="color: navy"></i>
                Visa
              </label>
            </div>
          </div>
          <div class="col-10">
            <input
              type="radio"
              id="mastercard"
              name="card-type"
              value="mastercard"
            />
            <label for="mastercard">
              <i class="fab fa-cc-mastercard" style="color: red"></i>
              Mastercard
            </label>
          </div>
          <div class="col-10">
            <input type="radio" id="amex" name="card-type" value="amex" />
            <label for="amex">
              <i class="fab fa-cc-amex" style="color: blue"></i>
              American Express
            </label>
          </div>

          <div class="col-10">
            <input
              type="radio"
              id="discover"
              name="card-type"
              value="discover"
            />
            <label for="discover">
              <i class="fab fa-cc-discover" style="color: orange"></i>
              Discover
            </label>
          </div>
        </div>
        <div>
          <label for="name">Card Holder Name</label>
          <input
            type="text"
            id="card Holder Name"
            name="cardholder"
            placeholder="Card Holder Name"
          />
        </div>
        <div>
          <label for="number">Card Number</label>
          <input type="text" id="card Number" name="cardnum" placeholder="Card Number" />
        </div>
        <div class="row">
          <div class="col-50">
            <div>
              <label for="expiry-date">Expiry date</label>
              <input type="text" id="expiry-date" name="expirydate" placeholder="Expiry date" />
            </div>
          </div>
          <div class="col-50">
            <div>
              <label for="cvv">CVV code</label>
              <input type="number" id="cvv"  name="cvv" placeholder="CVV" />
            </div>
          </div>
        </div>
        <div>
          <label for="amount">Amount</label>
          <input type="tel" id="amount"  name="amount" placeholder="Amount" />
        </div>
        <a href="billing_address.html">
          <button class="back-btn">Back</button>
        </a>
        <a href="order_review.html"><button class="confirm-btn" name="pay">Confirm Payment</button></a>
        </form>
      </div>

    </div>
  </div>
</html>
