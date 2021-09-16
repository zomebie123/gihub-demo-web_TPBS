<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admincp</title>
	<link rel="stylesheet" tyle="css/text" href="css/styleadmincp.css">
</head>
<body>
    <h3 class="title_admin">Welcom to Admincp</h3>
	<div class="wrapper">
	<?php
            include("config/config.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            include("modules/footer.php");
        ?>
	</div>
</body>
</html>