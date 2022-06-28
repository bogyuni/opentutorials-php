<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Result</title>
</head>
<body>
<?php
$grades = ['egoing'=>10, 'k8805'=>6, 'sorialgi'=>80];

foreach($grades as $key => $value){
    echo "key: '{$key}' // value: $value <br />";
}
?>
</body>
</html>