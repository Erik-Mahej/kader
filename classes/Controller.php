<?php

class Controller {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function showMainPage() {
        include 'views/mainpage.php';
    }
    public function showPriceList() {
        include 'views/pricelist.php';
    }
    public function showContact() {
        include 'views/contact.php';
    }
    public function showServices() {
        include 'views/services.php';
    }

}

