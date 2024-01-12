
<div class="form">
    <h1>Perfect Fitness</h1>
    <form action="signup.php" method="post">
        <input type="text" id="fname" name="usersName" placeholder="Username">
        <input type="text" id="lname" name="usersEmail" placeholder="Email">
       
        <input type="password" id="lname" name="usersPwd" placeholder="Password">
        <input type="password" id="lname" name="pwdrepeat" placeholder="Repeat Password">
        <button name="submit" type="submit">Register</button>
    </form>
    <?php
include_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usersName = $_POST['usersName'];
    $usersEmail = $_POST['usersEmail'];
    $usersPwd = $_POST['usersPwd']; 
//inser data into database
    $sql = "INSERT INTO users (usersId, usersName, usersEmail,usersPwd)
            VALUES ('', '$usersName', '$usersEmail', '$usersPwd')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful.";//successful messages
       
    } else {
        //error display
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
    <p>Already have an account? <a href="login.php">Log In.</a></p>
</div>

