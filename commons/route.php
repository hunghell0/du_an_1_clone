<?php
use Phroute\Phroute\RouteCollector;
//use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    return "trang chủ";
});
$router->get('views',[App\Controllers\CustomerController::class, 'getCustomer']);
$router->get('add',[App\Controllers\CustomerController::class, 'getAdd']);
$router->post('add-post',[App\Controllers\CustomerController::class, 'addPost']);
$router->get('delete/{id}',[App\Controllers\CustomerController::class, 'getDelete']);
$router->get('edit/{id}',[App\Controllers\CustomerController::class, 'getEdit']);
$router->post('edit-post/{id}',[App\Controllers\CustomerController::class, 'editPost']);


//dang nhap o day
$router->get('login',[App\Controllers\DangNhapController::class , 'getLogin']);
$router->post('login-post', [App\Controllers\DangNhapController::class , 'getLoginPost']);
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>