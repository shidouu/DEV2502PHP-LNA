<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to MVC in PHP</title>
</head>
<body>
    <h1>Welcome to MVC in PHP</h1>
    <hr>
    <?php 
        require_once 'config/database.php';
        // Khởi tạo kết nối
        $db = new Database();
        $dbConnection = $db->getConnection();

        //Kiểm tra request; thực hiện trên controller nào và action nào
        $controllerName = isset($_GET['controller']) ? $_GET['controller']:'students';
        $actionName = isset($_GET['action']) ? $_GET['action']:'index';

        //lấy tên model
        $modelClass = ucfirst($controllerName) .'Model';
        require_once 'app/models/'.$modelClass.'.php';

        //Tạo đối tượng model
        $model = new $modelClass($dbConnection);

        //Lấy tên controller thông qua request
        $controllerClass = ucfirst($controllerName) .'Controller';
        require_once 'app/controllers/'.$controllerClass.'.php';

        //Tạo đối tượng Controller
        $controller = new $controllerClass($model);

        //Gọi thực hiện action trong controller
        if(method_exists($controller, $actionName)){
            $controller->$actionName();
        }else{
            echo "<h1> Action  Not Found! </h1>";
        }
    ?>
</body>
</html>