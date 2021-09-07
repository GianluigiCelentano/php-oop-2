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
            if($keyColorToRemove === false) {
                throw new Exception("Il colore non è presente");
            }
            unset($this->colors[$keyColorToRemove]);
        }
        public function getProducts() {
            return $this->type;
            return $this->size;
            return $this->quality;
            return $this->colors;
        }
    }
    ?>
</body>
</html>