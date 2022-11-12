<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);

if ($data === false)
    die("Connection Error");

if (isset($_POST['send'])) {
    $data_name = $_POST['name'];
    $data_email = $_POST['email'];
    $data_phone = $_POST['phone'];
    $data_msg = $_POST['message'];

    $sql = "INSERT INTO doubt(name, email, phone, message) VALUES('$data_name', '$data_email', '$data_phone', '$data_msg')";
    $result = mysqli_query($data, $sql);
    if ($result)
    {
        $_SESSION['message'] = "Message Sent Successfully";
        header("location: index.php");
    }

    else
        echo "Message Send Failed";
}
?>