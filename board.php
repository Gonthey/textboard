<!DOCTYPE>
<html>
<body>
	<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$config = include('config.php');
	$threadStore = \SleekDB\SleekDB::store('threads', $config->dataDir);
	if(isset($_GET['board'])) {
		$board = $_GET['board'];
		$threads = $threadStore->where('board', '=', $board)->fetch();
		foreach ($threads as $thread) {
			print_r($thread);
			echo "<br>";
		}
	}
	else {
		$threads = $threadStore->fetch();
		foreach ($threads as $thread) {
			print_r($thread);
			echo "<br>";
		}
	}
	?>
</body>
</html>
