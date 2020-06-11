<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
 
		function copyright($name, $startYear = null){
    		$thisYear = date("Y");
    		if(is_null($startYear) || $thisYear == $startYear){
        		return "$name &copy; ". date("Y") . " All Rights Reserved";
    		}
    		return "$name &copy; $startYear-" . date("Y") . " All Rights Reserved";
		}

		echo copyright('Nur Fariza & Puveeemalar');


	?>

</body>
</html>