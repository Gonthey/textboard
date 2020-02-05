<!DOCTYPE>
<html>
<body>
	<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$config = include('config.php');
	$boardStore = \SleekDB\SleekDB::store('boards', $config->dataDir);
	$boards = $boardStore->fetch();
	foreach ($boards as $board) {
		echo "/" . $board['name'] . "/" . "<br>";
	};
	?>
</body>
</html>
