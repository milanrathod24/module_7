<?php
require_once "controllers/PostController.php";

$controller = new PostController();
$action = $_GET['action'] ?? '';

switch ($action) {
    case "add": $controller->add(); break;
    case "store": $controller->store(); break;
    case "edit": $controller->edit($_GET['id']); break;
    case "update": $controller->update(); break;
    case "delete": $controller->delete($_GET['id']); break;
    default: $controller->index();
}
?>
