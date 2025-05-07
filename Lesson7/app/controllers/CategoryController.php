<?php
//Tìm kiếm dữ liệu từ model -> view và ngược lại
    class CategoryController{
        private $model;

        public function __construct($model){
            $this->model = $model;
        }

        // Phương thức đọc dữ liệu từ model -> chuyển lên view để hiển thị
        public function index(){
            $categories = $this->model->getAllCategory();
            include __DIR__ ."../../views/category_list.php";
        }
    }