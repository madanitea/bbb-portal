<?php
    require "config.php";
        $username = "adminviconstm";
        $password = "admin48";
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if ($username == $user AND $password == $pass) {
            session_start();
            $_SESSION['username'] = $user;
            ?>
		<script type="text/javascript">
			window.location="http://vicon.smkn1-cmi.sch.id/admin.php";
		</script>
		<?php
        }else{
            ?>
                <script type="text/javascript">
                    alert("Username atau password salah. Coba Lagi.");
			window.location="http://vicon.smkn1-cmi.sch.id/login.php";
                </script>
            <?php
            //header("location:http://vicon.smkn1-cmi.sch.id/admin.php");
        }
?>
