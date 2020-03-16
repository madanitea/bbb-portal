<?php
    require "config.php";
        $username = "adminviconstm";
        $password = "admin48";
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if ($username == $user AND $password == $pass) {
            session_start();
            $_SESSION['username'] = $user;
            header("location:admin.php");
        }else{
            ?>
                <script type="text/javascript">
                    alert("Username atau password salah. Coba Lagi.");
                </script>
            <?php
        }
?>