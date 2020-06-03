<?php 
	for ($i=1; $i <=52 ; $i++) { 
		$fn = fopen("surg_pages\p$i.html", "w");
		$text = <<< _END
			<!DOCTYPE html>
			<html>
			<head>
				<meta charset="UTF-8">
				<link rel="stylesheet" href="../style.css">
				<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
				<title>Stud+</title>
				<script src="../scripts/main.js"></script>
			</head>
			<body onload="show_header('Хірургія'); back_button('../cat/surg.html')">
				<div id="container">
				</div>
			</body>
			</html>
		_END;
		fwrite($fn, $text);
		fclose($fn);
	}
?>