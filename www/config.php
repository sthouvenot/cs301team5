<?php

$DB_USER = 'root';
$DB_PASS = '';
$DB_HOST = '127.0.0.1';
$DB_NAME = 'cs301';

$db = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if($db->connect_errno) {
	die("Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error);
}
