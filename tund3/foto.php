<?php
	$picsDir = "../pics/";
	$picfiles = [];
	$allfiles = scandir($picsDir);
	//var_dump($allfiles)
	$picfiles = array_slice($allfiles, 2);
	//var_dump($picfiles)
	$picCount = count($picfiles);
	$picNum = mt_rand(0, ($picCount -1));
	$picfiles = $picfiles[$picNum];
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rita</title>
</head>
<body>
	<h1>
	Foto
	</h1>
	<p>See leht on loodud õppetöö raames ning ei sisalda mingit tõsiseltvõetavat sisu.</p>
	<img src="<?php echo $picsDir .$picfiles; ?>">
</body>
</html>