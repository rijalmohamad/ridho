<?php

// data string
    $str  = "abcdefghij";    
     echo $str;

    echo "<br>";

// data integer
    $dataint = 123456789;
    echo $dataint;

    echo "<br>";

// data float
    $flt = 10.2435;
    var_dump($flt);

    echo "<br>";

// data null
    $null = null;
    var_dump($null);

    echo "<br>";

// data booelean
    $boeln = true;
    var_dump($boeln);

    echo "<br>";

    $boeln = false;
    var_dump($boeln);

    echo "<br>";


// data object
     class handphone {
        public $model;
        public $color;
        public function __construct($model, $color){
             $this->model = $model;
             $this->color = $color;
            }
        public function massage() {
            return "my handhphone is a " . $this->color . " " . $this->model . "!";
            }
         }
        
        $myhandphone = new handphone("vivo", "blue");
        var_dump($myhandphone);
        
/// arrray
    // data array
        $array = array("merah","kuning","hijau", "ungu");

    //array multi dimensi
        $array2 = array(
            "warna" => ["hijau", "biru"],
            "animal" => ["kucing", "ayam"],
        );

     echo "<br>";
    
    // menambahkan isi array
        $array[] = "hitam";

    //manampilkan isi array dengan perulangan
        for($i=0; $i < count($array); $i++){
            echo $i."<br>";
            echo $array[$i]."<br>";
        }

        echo "<br>";

    //manampilkan isi array
        echo  $array2["warna"]["0"];

        echo "<br>";
        echo "<br>";

    // menghapus isi array
        unset($array[1]);

        echo $array[0]."<br>";
        echo $array[1]."<br>";
        echo $array[2]."<br>";
        echo $array[3]."<br>";


        echo "<hr>";

        echo "<pre>";
        print_r($array);
        echo "</pre>";
        
        

    echo "<br>";


?>