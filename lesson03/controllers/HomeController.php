<?php
require_once './models/Product.php';
require_once './models/Category.php';
class HomeController
{
    public function index(){
        $products = Product::where('id', '<', '20')
                            ->get();
        // echo "<pre>";

        // var_dump($products);die;
        include_once './views/homepage.php';
    }

    public function detailProduct(){
        return "HomeController->detailProduct()";
    }
}

?>