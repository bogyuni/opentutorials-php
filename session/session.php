<?php
session_start();
if(!isset($_SESSION['is_login'])){
    header('Location: ./login.html');
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>session</title>
</head>
<body>
	<?php echo $_SESSION['nickname'];?>님 환영합니다<br />
	
	<a href="./logout.php">로그아웃</a>
</body>
</html>