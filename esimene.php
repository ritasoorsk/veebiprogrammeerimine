<?php
	//see on kommentaar, j�rgmisena paar muutujat
	$myName = "Andrus";
	$myFamilyName = "Rinde";
	//vaatame, mis kell on ja m��rame p�eva osa
	$hourNow = date("H");
	//echo $hourNow;
	$partOfDay = "";
	if ( $hourNow < 8){     //   <   >   <=  >=   !=
		$partOfDay = "varajane hommik";
	}
	if ( $hourNow >= 8 and $hourNow < 16){
		$partOfDay = "koolip�ev";
	}
	if ($hourNow >= 16){
		$partOfDay = "vaba aeg";
	}
	//echo $partOfDay;
	
	//vaatame, kaua on koolip�eva l�puni aega j��nud
	$timeNow = strtotime(date("d.m.Y H:i:s"));
	//echo $timeNow;
	$schoolDayEnd = strtotime(date("d.m.Y" ." " ."15:45"));
	//echo $schoolDayEnd;
	$toTheEnd = $schoolDayEnd - $timeNow;
	echo (round($toTheEnd / 60));
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Andrus Rinde veebiprogrammeerimine</title>
</head>
<body>
	<h1>
	<?php
		echo $myName ." " .$myFamilyName;
	?>
	veebiprogrammeerimine</h1>
	<p>See leht on loodud �ppet�� raames ning ei sisalda mingit t�siseltv�etavat sisu.</p>
	
	<?php
		echo "<p>See on esimene jupp PHP abil v�ljastatud teksti!</p>";
		echo "<p>T�na on ";
		echo date("d.m.Y") .", kell lehe avamisel oli " .date("H:i:s");
		echo ", k�es on " . $partOfDay .".</p>";
		
	for ($i = 0; $i < 5; $i ++){
		echo "miu";
	}
	?>
	

</body>
</html>