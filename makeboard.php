<?php
require_once __DIR__ . '/vendor/autoload.php';
$config = include('config.php');
$boardStore = \SleekDB\SleekDB::store('boards', $config->dataDir);
if(isset($_POST['password']) && isset($_POST['boardname'])) {
	if($_POST['password'] == $config->adminPass) {
		$boardStore->insert([
			'name' => $_POST['boardname']
		]);
	}
	header("Location: ./index.php");
}
?>
<form method=post>
	<input type="password" name="password" placeholder="password"><br>
	<input type="text" name="boardname" placeholder="name of board"><br>
	<input type="submit">
</form>
