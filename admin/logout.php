<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/F_and_B/admin/Signin.php");
exit();
