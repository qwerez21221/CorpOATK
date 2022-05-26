<?php

try {
	$dbh = new PDO('mysql:dbname=isp39717;host=localhost', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}