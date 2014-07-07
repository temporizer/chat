<?php include("inc/header.inc.php"); ?>

<?php 
	$messages = getAllMessages();
	echo "<pre>";
	print_r($messages);
	echo "</pre>";

 ?>

<?php include("inc/footer.inc.php"); ?>