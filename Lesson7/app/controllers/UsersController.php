<?php
//Tìm kiếm dữ liệu từ model -> view và ngược lại
    class UsersController{
        private $model;

        public function __construct($model){
            $this->model = $model;
        }

        // Phương thức đọc dữ liệu từ model -> chuyển lên view để hiển thị
        public function index(){
            $users = $this->model->getAllUsers();
            include __DIR__ ."../../views/user_list.php";
        }
    }