<?php
include 'system/autoload.php';
$action = $_GET['action'] ?? 'index';
$controllername = $_GET['controller'] ?? 'hethong';
$controllerpath = $controllername . 'controller';
$path = "controllers/$controllerpath.php";
if (file_exists($path)) {
    $controller = new $controllerpath();
    if (method_exists($controller, $action)) {
        //kiem tra login
        if (islogin()) {
            //kiem tra quiyen truy cap
            if ($controller->role->checkrole($controllername, $action, $_SESSION['login_id'])) {
                $controller->$action();
            } else {
                $controller->_403();
            }
        } else {
            $controller = new usercontroller();
            $controller->login();
        }
    } else {
        $controller->_404();
    }
} else {
    $controller = new controller();
    $controller->_404();
}
ob_end_flush();
