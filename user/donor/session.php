<?php
//before we store information of our member, we need to start first the session
	
	session_start();
	
	//create a new function to check if the session variable loggedin is on set and role is "Admin"
	function logged_in() {
		// echo $_SESSION['role'];
		if($_SESSION['loggedin'] && ($_SESSION['role'] =="donor")){
			return true;
		}else{
			return false;
		}
	}
	//this function if session member is not set then it will be redirected to index.php
	function confirm_logged_in() {
		if (!logged_in()) {
			?>
				<script type="text/javascript">
					window.location = "../login.php";
				</script>
			<?php
		}
	}
?>