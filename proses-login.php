<?php
    include "koneksi.php";
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['pass']);

        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $query = mysqli_query($db,$sql);

        if(mysqli_num_rows($query)> 0){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header('location: pageAdmin.php');
        }else{
            header('location: login.php?status=gagal');
        }
    }

?>