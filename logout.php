<?php
if(session_destroy()) {
	//say logout&go to home page
	echo"<script type='text/javascript'>alert('Logout Now'); location='index.php';  
            </script>"; 
}
?>