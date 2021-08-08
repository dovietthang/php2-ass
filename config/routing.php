<?php
use Phroute\Phroute\RouteCollector;
use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\ServiceController;
use App\Controllers\Admin\RoomController;
use App\Controllers\HomeController;
$router = new RouteCollector();




$url = isset($_GET['url']) ? $_GET['url'] : "/";

$router->get('/', [HomeController::class, 'index']);
$router->get('admin', [DashboardController::class, 'index']);
$router->get('services', [ServiceController::class, 'index']);
$router->get('rooms', [RoomController::class, 'index']);

// router rooms
$router->get('admin/rooms/add', [RoomController::class, 'addForm']);
$router->post('admin/rooms/add', [RoomController::class, 'saveAdd']);
$router->get('admin/rooms/edit/{id}', [RoomController::class, 'editForm']);
$router->post('admin/rooms/edit/{id}', [RoomController::class, 'saveEdit']);
$router->get('admin/rooms/remove', [RoomController::class, 'remove']);


// router services
$router->get('admin/services/add', [ServiceController::class, 'addForm']);
$router->post('admin/services/add', [ServiceController::class, 'saveAdd']);
$router->get('admin/services/edit/{id}', [ServiceController::class, 'editForm']);
$router->post('admin/services/edit/{id}', [ServiceController::class, 'saveEdit']);
$router->get('admin/services/remove', [ServiceController::class, 'remove']);







# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    
// Print out the value returned from the dispatched function
echo $response;

?>