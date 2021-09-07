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
        public $categories=["sport", "elegant", "summer", "casual", "streetwear"];
        
        public function getCategories() {
            return $this->categories;
        }
        public function addCategory(Categories $nameCategory) {
            $this->categories[] = $nameCategory;
        }
        public function removeCategory(Categories $nameCategory) {
            $keyCategoryToRemove = array_search($nameCategory, $this->categories);
            if($keyCategoryToRemove === false) {
                throw new Exception ("La categoria non è presente");
            }
            unset($this->categories[$keyCategoryToRemove]);
        }
    }
    class Products {
        public $products=[""]
    }

    ?>
</body>
</html>