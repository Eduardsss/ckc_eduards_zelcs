<?php
// controllers/events.php
require_once '../Database.php';

$db = new Database();
$db->query("SELECT * FROM events");
$rows = $db->resultSet();

include('../views/events.view.php');
?>