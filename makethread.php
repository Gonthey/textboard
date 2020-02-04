<?php
require_once __DIR__ . '/vendor/autoload.php';
$config = include('config.php');
$threadStore = \SleekDB\SleekDB::store('threads', $config->dataDir);
if(isset($_POST['name']) && isset($_POST['board'])) {
	$threadStore->insert([
		'name' => $_POST['name'],
		'board' => $_POST['board']
	]);
	header("Location: ./board.php");
}
?>
<form method=post>
	<input type="text" name="name" placeholder="name"><br>
	<input type="text" name="board" placeholder="board"><br>
	<input type="submit">
</form>
