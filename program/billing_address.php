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
      background-color: #ffffff;
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
    $Pay_Fname = $_POST['fname'];
    $Pay_Lname = $_POST['lname'];
    $P_Country = $_POST['Country'];
    $P_Adrs = $_POST['address'];
    $P_State = $_POST['state'];
    $Postal_Code = $_POST['postal-code'];
    $P_Email = $_POST['email'];
    $P_Mob = $_POST['mobile-number'];

    $sql = "INSERT INTO payment(Pay_Fname,Pay_Lname,P_Country,P_Adrs,P_State,Postal_Code,P_Email,P_Mob)VALUES('$Pay_Fname ','$Pay_Lname ','$P_Country ','$P_Adrs ','$P_State ','$Postal_Code ','$P_Email ','$P_Mob ')";
        $run = $db_handle->executeUpdate($sql);
        if ($run == 1) {
            echo '<script>window.location.replace("payment_method.php");</script>';
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
        <h3>Billing Address</h3>
        <form action="billing_address.php" method="POST">
        <div class="row">
          <div class="col-50">
            <label for="first-name">First Name</label>
            <input type="text" placeholder="First Name" name="fname" />
          </div>
          <div class="col-50">
            <label for="last-name">Last Name</label>
            <input type="text" placeholder="Last Name" name="lname" />
          </div>
        </div>
        <div>
          <label for="country">Select Country</label>

          <select name="Country">
            <option value="">Select Country</option>
            <option value="country1">Sri Lanka </option>
            <option value="country2">India</option>
            <option value="country1">USA </option>
            <option value="country2">Pakisthan</option>
            <option value="country1">Australiya </option>
            <option value="country2">Italy</option>
            <!-- Add more options if needed -->
          </select>
        </div>
        <div>
          <label for="address">Address</label>
          <input type="text" name="address" placeholder="Address" />
        </div>
        <div>
          <label for="state">State</label>
          <input type="text" name="state" placeholder="State" />
        </div>
        <div>
          <label for="postal-code">Postal Code</label>
          <input type="text" name="postal-code" placeholder="Postal Code" />
        </div>
        <div>
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="Email" />
        </div>
        <div>
          <label for="mobile-number">Mobile Number</label>
          <input type="tel" name="mobile-number" placeholder="Mobile Number" />
        </div>
        <a href="personal_training.html">
        <button class="back-btn">Back</button>
      </a>
    
      <a href="personal_training.html">
        <button class="cancel-btn">Cancel</button>
      </a>
        <a href="payment_method.html">
          <button type="submit" name="pay" class="confirm-btn">Confirm Payment</button>
        </a>
      </form>
      </div>
    </div>
  </div>
</html>
