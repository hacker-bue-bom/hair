<?php 

    class Product {

        private static $lastId=0;
        public $id = 0;
        public $name = "";
        public $description  = "";
        public $value = 0.0;
        public $stock = 0;

        function __constructor($pname, $pdescription, $pvalue) {

            Product::$lastId++;
            $_SESSION["lastId"] = Product::$lastId;
            $this ->id = Product::$lastId;
            $this ->name = $pname;
            $this ->description = $pdescription;
            $this ->value = $pvalue;
        }

        public function toHTML_LI() {
            $str = "<li>";
            $str .= "Produto ".$this->id. ": ".$this->name. " - ". substr($this->description, 15). "... - £" .$this->value. " STOCK: ". $this->stock;
            $str .= "<a href='./product.php?p=>". $this->id . "'>editar</a>";
            $str .= "<a href='./buy.php?p=>". $this->id . "'>comprar</a>";
            $str .= "<a href='./sell.php?p=>". $this->id . "'>vender</a>";
            $str .= "</li>";

            return $str;
        }

        public static function initClass(){
            if(array_key_exists("lastId", $_SESSION)); {
                Product::$lastId = $_SESSION["lastId"];
            }
        }
    }

?>