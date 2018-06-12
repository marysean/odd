
<?php include("./header.php"); ?>
</head>
<body>
<?php include("./nav.php"); ?>

<?php

$filename = './'.$_GET['id'].'.php';

	if (file_exists($filename)) {
		include($filename);
	} else {
		include('./404.php');
	}

?>

<?php include("./footer.php"); ?>

