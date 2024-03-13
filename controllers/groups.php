<?php
// controllers/groups.php
require_once '../Database.php';

$db = new Database();
$db->query("SELECT * FROM groups");
$rows = $db->resultSet();

include('../views/groups.view.php');
?>