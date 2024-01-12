<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_client']))
{
    $client_id = mysqli_real_escape_string($con, $_POST['delete_client']);

    $query = "DELETE FROM client WHERE id='$client_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Client Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Client Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_client']))
{
    $client_id = mysqli_real_escape_string($con, $_POST['client_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "UPDATE client SET name='$name', email='$email', phone='$phone', password='$password' WHERE id='$client_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Client Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Client Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_client']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "INSERT INTO client (name,email,phone,password) VALUES ('$name','$email','$phone','$password')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Client Created Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Client Not Created";
        header("Location: client-create.php");
        exit(0);
    }
}

?>