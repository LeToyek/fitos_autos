<?php
session_start();
echo $_SESSION['user_id'];
session_unset();
session_destroy();
header("location:../view/pages/login.php");
