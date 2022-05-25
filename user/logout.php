<?php

    // start session
    session_start();

    // Unset all the session variables
    unset($_SESSION['loggedin']);
    unset($_SESSION['name']);
    unset($_SESSION['role']);
    unset($_SESSION['gender']);

?>
<script type="text/javascript">
    window.location = "./login.php";
</script>