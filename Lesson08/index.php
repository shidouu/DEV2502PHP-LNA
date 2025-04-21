<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xin chào</title>
</head>
<body>
    <h1>Xin chào</h1>
    <hr>
    <?php
        require_once 'config/database.php';
        $db = new Database();
        $dbConnection = $db->getConnection();
        
        $controllerName = isset($_GET['controller']) ? $_GET['controller']:'products';
        $actionName = isset($_GET['action']) ? $_GET['action']:'index';
        $modelClass = ucfirst($controllerName) .'Model';
        require_once 'app/models/'.$modelClass.'.php';
        $model = new $modelClass($dbConnection);
        $controllerClass = ucfirst($controllerName) .'Controller';
        require_once 'app/controllers/'.$controllerClass.'.php';
        $controller = new $controllerClass($model);
        
        if(method_exists($controller, $actionName)){
            $controller->$actionName();
        }else{
            echo "<h1> Action  Not Found! </h1>";
        }
    ?>
</body>
</html>