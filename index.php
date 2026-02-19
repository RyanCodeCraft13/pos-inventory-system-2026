<?php
session_start();
include("config/db.php");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['fullname'] = $user['fullname'];
        $_SESSION['role'] = $user['role'];

        if($user['role'] == 'admin'){
            header("Location: dashboard.php");
        } else {
            header("Location: pos.php");
        }
    } else {
        echo "<script>alert('Invalid Login Credentials');</script>";
    }
}
?>
