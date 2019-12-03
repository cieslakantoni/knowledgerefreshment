<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP refreshment</title>
  </head>
  <body>
<div class="">
  <?php

      $x = 2;
      echo $x--;
      echo --$x;
      echo $x;
      $y = $x--;
      echo $y;
      $y=  --$x;
      echo $y;
      echo --$y;
     ?>
     <br>
     <br>
     <br>
     <br>
     <br>
     <?php
     //array - łączenie tablic
     echo "array - tabela <br>";
      $a = array(
        1 => 1,
        2 => 2,
        3 => 3,
      );
      $b = array(
        3 => "trzy",
        4 => "cztery",
        5 => "pięć",
      );

      $c = $a + $b;
      var_dump($c);
      echo "<br>";
      echo implode("<br/>",$c);

      echo "<br>";
      echo "<br>";
      echo "<br>";
      ?>
      <div class="">
      <?php
      // wykonywanie polecenia zewnetrznego
      $pliki = `ls -la`;
      $pliki2 = `dir/W`;
      echo "<pre>";
      echo $pliki;
      echo "<br>";
      echo $pliki2;
      echo "<pre/>";
      echo "<br>";
      echo "<br>";
      echo "<br>";

// Instancja klasy.
      class Klasa1{};
      class Klasa2{};

      $obj1 = new Klasa1;
      $obj2 = new Klasa2;

      if($obj1 instanceof Klasa1){
        echo 'Obiekt $obj1 jest instancją klasy Klasa1.<br>';
      }
      if(!($obj2 instanceof Klasa1)){
        echo 'Objekt $obj2 nie jest instancją klasy Klasa1.';

      }
    echo "<br>";    echo "<br>";    echo "<br>";    echo "<br>";    echo "<br>";
//Konwersja typów
      $napis1 = "napis pierwszy";
      $napis2 = "napis drugi";
      $napis3 = $napis1 . $napis2;  //dodajac do siebie napisy nie uzywamy "+", tylko "."
      echo "<br>";
      echo "$napis3";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      //ćw 4.1 Str 93

      $a = 0101;
      $b = 0110;
      echo "Zmienna a wynosi: ".$a;
      echo "<br>";
      echo "Zmienna b wynosi: ".$b;
      echo "<br>";
      echo $a | $b;
      echo "<br>";
      echo $a & $b;


      //ćw 4.2 Str 93

      echo "<br>";
      $x2 = 1;
            echo "<br>";
      echo $x2;
      echo "<br>";
      $x2 += 1;
      echo $x2;
      echo "<br>";
      $x2 *= 2;
      echo $x2;



      ?>
    </div>
   </div>
  </body>
</html>
