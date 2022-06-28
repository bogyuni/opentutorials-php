<?php
ini_set("display_errors", "1");
session_save_path('./');
session_start();
echo $_SESSION['title'].'<br>';

print_r($_SESSION);

echo '<br>';

echo 'File Check : '.file_exists('./sess_'.session_id()).'<br>';

echo is_executable('./sess_'.session_id());

echo file_get_contents('./sess_'.session_id());
?>