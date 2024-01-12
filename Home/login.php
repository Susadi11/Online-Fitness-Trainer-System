<?php
  //  include_once 'header.php';
?>
     <div class="form">
        <h1> Perfect fitness </h1>
    <form action="login.php" method="post">
    <input type="text" id="fname" name="usersName" placeholder="Email/Username">
    <input type="password" id="lname" name="usersPwd" placeholder="Password">
    <button name="submit" type="submit"> Login </button>
  </form>
  <p> New Here? <a href="signup.php">Register.</a></p>
<?php
    include_once 'footer.php';
?>
<?php
include_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usersName = $_POST['usersName'];
    $usersPwd = $_POST['usersPwd'];

    $sql = "SELECT * FROM users WHERE usersName = '$usersName' AND usersPwd = '$usersPwd'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        echo "<script>alert('Login successful.');</script>";
        header("Location: index.html");
        exit();
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>