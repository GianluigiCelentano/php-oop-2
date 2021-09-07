<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/js/app.js') }}">
    <title>Document</title>
</head>
<body>
    <?php

    class Categories {
        public $newCategory=[];
        public $sport;
        public $elegant;
        public $summer;
        public $casual;
        public $streetwear;
        public function __construct(string $categoryName) {
            $this->sport=$categoryName;
            $this->elegant=$categoryName;
            $this->summer=$categoryName;
            $this->casual=$categoryName;
            $this->streetwear=$categoryName;
        }
        public function getCategories() {
            return $this->$newCategory;
            return $this->sport;
            return $this->elegant;
            return $this->summer;
            return $this->casual;
            return $this->streetwear;
        }
        public function addCategory(Categories $nameCategory) {
            $this->$newCategory[] = $nameCategory;
        }
        public function removeCategory(Categories $nameCategory) {
            $keyCategoryToRemove = array_search($nameCategory, $this->$newCategory);
            if($keyCategoryToRemove === false) {
                throw new Exception ("La categoria non è presente");
            }
            unset($this->newCategory[$keyCategoryToRemove]);
        }
    }
    class Products {
        public $newProduct=[];
        public $scarpe;
        public $tute;
        public $palloni;
        public $tshirt;
        public $jeans;
        public $camicie;
        
        public function __construct(string $productName) {
            $this->scarpe=$productName;
            $this->tute=$productName;
            $this->palloni=$productName;
            $this->tshirt=$productName;
            $this->jeans=$productName;
            $this->camicie=$productName;
        }
        public function getProducts() {
            return $this->newProduct;
            return $this->scarpe;
            return $this->tute;
            return $this->palloni;
            return $this->tshirt;
            return $this->jeans;
            return $this->camicie;
        }
        public function addProduct(Products $nameProduct) {
            $this->newProduct[] = $nameProduct;
        }
        public function removeProduct(Products $nameProduct) {
            $keyProductToRemove = array_search($nameProduct, $this->$newProduct);
            if($keyProductToRemove === false) {
                throw new Exception ("Il prodotto non è presente");
            }
            unset($this->newProduct[$keyProductToRemove]);
        }
    }
    class Users {
        protected $newUser=[];
        public $name;
        public $age;
        public $email;
        private $address;
        private $password;
        public function __construct(string $userDetail) {
            $this->name=$userDetail;
            $this->age=$userDetail;
            $this->email=$userDetail;
        }
        public function addUser(Users $detailUser) {
            $this->newUser[] = $detailUsers;
        }
        public function removeUser(User $detailUser) {
            $keyUserToRemove = array_search($detailUser, $this->$newUser);
            if($keyUserToRemove === false) {
                throw new Exception ("L'utente non è presente");
            }
            unset($this->newUser[$keyUserToRemove]);
        }
    }
    ?>
</body>
</html>