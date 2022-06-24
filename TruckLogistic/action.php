<?
	$name = $_GET['name'];
	$phone = $_GET['phone'];
    $type = $_GET['type'];
	file_put_contents("data.txt", "{$name}|{$phone}|{$type}");
?>

