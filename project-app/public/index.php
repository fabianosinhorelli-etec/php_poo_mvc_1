<?php
/**
 * Ponto de entrada da aplicação - Versão com Controllers
 */

declare(strict_types=1);

// Incluir os controllers manualmente (temporário)
require_once __DIR__ . '/../app/Controllers/BaseController.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Controllers/UserController.php';

// Obter a URI completa
$fullUri = $_SERVER['REQUEST_URI'];

// Definir o path base da sua aplicação
$basePath = '/aulas/repo-pw/pw3/POO/app-poo/project-app/public';

// Remover o path base da URI
$uri = $fullUri;
if (strpos($uri, $basePath) === 0) {
    $uri = substr($uri, strlen($basePath));
}

// Se ficar vazio, redirecionar para home
if ($uri === '' || $uri === '/') {
    $uri = '/';
}

// Remover parâmetros da query string
if (strpos($uri, '?') !== false) {
    $uri = substr($uri, 0, strpos($uri, '?'));
}

// Debug - para ver o que está acontecendo
// echo "Full URI: " . $fullUri . "<br>";
// echo "Base Path: " . $basePath . "<br>";
// echo "Processed URI: " . $uri . "<br>";

// Definir rotas
switch ($uri) {
    case '/':
    case '':
        $controller = new \App\Controllers\HomeController();
        $controller->index();
        break;
        
    case '/login':
        $controller = new \App\Controllers\AuthController();
        $controller->showLogin();
        break;
        
    case '/auth/login':
        $controller = new \App\Controllers\AuthController();
        $controller->login();
        break;
        
    case '/auth/logout':
        $controller = new \App\Controllers\AuthController();
        $controller->logout();
        break;
        
    case '/users':
        $controller = new \App\Controllers\UserController();
        $controller->index();
        break;
        
    case '/users/create':
        $controller = new \App\Controllers\UserController();
        $controller->create();
        break;
        
    case (preg_match('/\/users\/edit\/(\d+)/', $uri, $matches) ? true : false):
        $controller = new \App\Controllers\UserController();
        $controller->edit((int)$matches[1]);
        break;
        
    case '/users/save':
        $controller = new \App\Controllers\UserController();
        $controller->save();
        break;
        
    case (preg_match('/\/users\/delete\/(\d+)/', $uri, $matches) ? true : false):
        $controller = new \App\Controllers\UserController();
        $controller->delete((int)$matches[1]);
        break;
        
    default:
        http_response_code(404);
        echo "<div class='container mt-4'><h1>404 - Página não encontrada</h1>";
        echo "<p>A página solicitada não existe.</p>";
        echo "<a href='{$basePath}/' class='btn btn-primary'>Voltar para Home</a></div>";
        break;
}
?>