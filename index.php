<?php
	include 'tracker.php';

	$visitor = new tracker(function ($error) {
	    //var_dump($error);
	}, '116.74.32.57');

	var_dump($visitor->city . ' ' . $visitor->country, $visitor->__toArray());
?>