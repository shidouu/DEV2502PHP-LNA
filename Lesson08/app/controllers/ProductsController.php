<?php 
    class ProductsController{
        private $model;

        public function __construct($model){
            $this->model = $model;
        }

        public function index(){
            $products = $this->model->getAllProducts();
            include __DIR__ ."../../views/product_list.php";
        }
    }