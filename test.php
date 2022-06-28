<?php
$file = './readme.txt';
if(is_readable($file)){
	file_put_contents($file, 'Fuck off..!!');
	echo file_get_contents($file);
} else {
	echo 'Not file';
}

echo getcwd().'<br>';
chdir('../');
echo getcwd().'<br>';


$dir = './';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);


?>

<hr>

<p>문자열 처리</p>

<?php
$a = ['Hello', 'World'];
echo "$a[0] -------------- $a[1] <br>";
echo $a[0].' hello \'World\'';
?>

<hr>
<p>문자열 함수</p>
<?php
$mystring = 'abc';
$findme = 'D';
$pos = strpos($mystring, $findme);

echo $pos.'<br>';


if ($pos === false) {
	echo "'$findme' 문자열을 '$mystring' 문자열에서 찾지 못했습니다.";
} else {
	echo "'$findme' 문자열을 '$mystring' 문자열에서 찾았습니다. <br>";
	echo "위치 {$pos}에 존재합니다.";
}

echo '<br>';

$array = ['name', 'email', 'phone'];
for ($i=0; $i < count($array); $i++) { 
	echo $array[$i].',';
}

echo '<br>';

echo implode('-', $array);

echo '<br>';

echo '<be s Strong>';

$new = htmlspecialchars('<Test Fact!!>', ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;TEST&lt;/a&gt;
?>


