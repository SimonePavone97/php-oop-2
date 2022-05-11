<?php

class Ecommerce {

    public $cibo;
    public $giochi;
    public $cucce;


    public function __construct($_cibo, $_giochi, $_cucce){
        $this ->  cibo = $_cibo;
        $this ->  giochi = $_giochi;
        $this ->  cucce = $_cucce;

    }

}



?>