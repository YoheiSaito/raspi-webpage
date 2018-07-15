
<?php
	if(isset($_POST['message'] && $_POST['message'] != ""){
		$f=fopen("/tmp/angle.dat", "w");
		fwrite($f, htmlspecialchars($_POST['message'])."\n");
	}
?>
