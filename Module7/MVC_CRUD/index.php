<?php
require_once "controllers/UserController.php";

$c = new UserController();
$action = $_GET['action'] ?? '';

switch ($action) {
    case "add": $c->add(); break;
    case "store": $c->store(); break;
    case "edit": $c->edit($_GET['id']); break;
    case "update": $c->update(); break;
    case "delete": $c->delete($_GET['id']); break;
    default: $c->index();
}
?>
