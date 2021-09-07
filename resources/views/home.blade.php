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
    class User {
        public $name;
        public $surnname;
        public $age;
        private $email;
        private $address;
        private $cv;
        protected $cards=[];
        public function __construct(string $name, string $surname, int $age, string $email, string $address, int $cv, int $cards) {
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
            $this->email = $email;
            $this->address = $address;
            $this->cv = $cv;
        }
        protected function addCards(User $cardsNumber) {
            $this->cards[] = $cardsNumber;
        }
        protected function removeCards(User $cardsNumber) {
            $keyCardToRemove = array_search($cardsNumber, $this->cards);
            if($keyCardToRemove === true) {
                unset($this->cards[$keyCardToRemove]);
                throw new Exception("La carta è stata eliminata");
            }
        }
    }
    class Products {
        public $type;
        public $size;
        public $quality;
        public $colors=[];
        public function __construct(string $type, int $size, string $quality) {
            $this->type = $type;
            $this->size = $size;
            $this->quality = $quality;
        }
        public function addColor(Products $color) {
            $this->colors[] = $color;
        }
        public function removeColor(Products $color) {
            $keyColorToRemove = array_search($color, $this->colors);
            if($keyColorToRemove === true) {
                unset($this->colors[$keyColorToRemove]);
                throw new Exception("Colore cancellato");
            }
        }
        public function getProducts() {
            return $this->type;
            return $this->size;
            return $this->quality;
            return $this->colors;
        }
    }
    class Shop {
        protected $total;
        public $coupon=[];
        public $nProducts=[];
        protected $address=[];
        public function __construct (int $total, $coupon, int $nProducts, string $address) {
            $this->total = $total;
        }
        public function addCoupon(Shop $couponNumber) {
            $this->coupon = $couponNumber;
            $keyCouponFounder = array_search($couponNumber, $this->$coupon);
            if($keyCouponFounder===true) {
                throw new Exception("Il coupon è già stato usato");
            } else {
                push($this->coupon[$keyCouponFounder]);
            }
        }
        public function addProducts(Shop $productChoose) {
            $this->nProducts = $productChoose;
        }
        public function removeProduct(Shop $productChoose) {
            $keyProductFounder = array_search($productChoose, $this->nProducts);
            if($keyProductFounder===true) {
                unset($this->nProducts[$keyProductFounder]);
                throw new Exception("Articolo rimosso con successo");
            }
        }
        public function addAddress(Shop $addressChoose) {
            $this->address = $addressChoose;
        }
        public function removeAddress(Shop $addressChoose) {
            $keyAddressFounder = array_search($addressChoose, $this->address);
            if($keyAddressFounder===true) {
                unset($this->nProducts[$keyProductFounder]);
                throw new Exception("Indirizzo rimosso con successo");
            }
        }
    }
    ?>
</body>
</html>