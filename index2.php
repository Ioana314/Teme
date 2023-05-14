<b>Tema 1</b><br><br>

<?php
  $x = 10;
  $y = 5;
/*Addition*/
 
  $sum = $x + $y;
  echo "$x + $y = $sum <br>";

/*Subtraction*/
 
  $sub = $x - $y;
  echo "$x - $y = $sub<br>";

/*Multiplication*/
 
  $multi = $x * $y;
  echo "$x * $y = $multi<br>";

/*Division*/
  
  $division = $x / $y;
  echo "$x / $y = $division<br>";
?>
<br>

<b>Tema 2</b><br><br>
<?php
  for ($i = 1; $i <= 9; $i++) 
    echo "$i"."-";
    if($i==10)
      echo "$i" 
  ?>
  <br><br>


<b>Tema 3</b><br><br>
<?php
$arr = array(6, 4, 15, 12, 36, 89, 45);
foreach ($arr as $value) {
  if ($value % 6 == 0) {
    echo "$value, ";
  }
}
?>
<br><br>


<b>Tema 4</b><br><br>
<?php
  $sum = 0;
  $numbers = "";
  for ($a = 1; $a <= 30; $a++) {
    $sum = $sum + $a;
    $numbers .= $a;
    if ($a < 30) {
      $numbers .= "+";
    }
  }
  echo $numbers . "=" . $sum;
?>
<br><br>

<b>Tema 5</b><br><br>
<?php
$deposit = 500;
$interest_rate = 0.1; 
for ($year = 1; $year <= 5; $year++) {
  $interest = $deposit * $interest_rate;
  $deposit = round($deposit + $interest);
  echo "Soldul la sfarsitul anului $year este: $deposit euro <br>";}
  echo "Soldul <b>final</b> este $deposit euro."

?>
<br><br>
<b>Conversia din Celsius in  Fahrenheit cu urmatoarea formula  F = (C * 1.8) + 32 </b>
<br><br>
<?php
$c=10;
$f=($c*1.8)+32;
echo"Daca sunt $c grade Celsius, sunt $f grade Fahrenheit."
?>
<br><br>
<b>Calculati cat la suta din 500 reprezinta numarul 125. </b>
<br><br>
<?php
$a=500;
$b=125;
$c=$b/($a/100);
echo"Numarul $b reprezinta $c % din numarul $a."
?>
<br><br>

<b>Perimetrul unui triunghi cu laturile de 12cm, 16cm și 20cm.</b>
<br>
<?php
$latura1=12;
$latura2=16;
$latura3=20;
$perimetru=$latura1+$latura2+$latura3;
echo"Perimetrul triunghiului este egal cu $perimetru."
?>
<br><br>
<b>Aria unui cerc cu raza de 5cm</b>
<br>
<?php
$r=5;
define ("PI", 3.14);
$a=pow($r,2)*PI;
echo "Aria cercului este de $a cm patrati"
?>
<br><br>
<b>"2023" + "douamidouazecisitrei" + "36star3" </b><br>
<?php
$a=2023;
$b=(int)"douamidouazecisitrei";
$c=(int)"36star3";
$sum=$a+$b+$c;
echo"Acum suma variabilelor $a, $b, $c este $sum."
?>
<br><br>

<?php

        echo 'Rezultatul este :' .((9 + 2) + (7 + 3)); // 21
        echo "</br>";
        echo 'Rezultatul este :' . (6 + ((6 + 2) + (3 + 3))); // 20
        echo "</br>";
        echo 'Rezultatul este :' . 4 * (1 + 1); // 8
        echo "</br>";
        echo 'Rezultatul este :' . (3 * 3) + 2; // 11
        echo "</br>";
        echo 'Rezultatul este :' . pow(3,3); // 27
        echo "</br>";
        echo 'Rezultatul este :' . 2 * pow(3,3) + 1;  // 55
        echo "</br>";
        echo 'Rezultatul este :' . ((5 * 2) +  (5 % 2)); // 11
        echo "</br>";
        echo 'Rezultatul este :' . number_format((10 * pow(3,3) + pow(1,3) + (3 + 3 ))); // 10*27+1+6=270+7=277
        echo  "</br>";
        echo  'Rezultatul este : ' . number_format(8.99);//9
        echo  "</br>";

        /* String-uri => text */

     //   Exemple de afisare a textului

        // 1 . Adaugand o variabila

        $name = "Ioana";
        echo $name; 
        echo  "</br>";
        // 2. Adaugand 2 variabile si folosind simbolul .= ( punct si egal )
        $name_1 = "Ioana!";
        $name_2 = "Buna ";

      echo  $name_2 .= $name_1;  // va afisa Buna Ioana!
      echo  "</br>";

        // 2 Varianta 2 de la aceasta metoda utilizand doar . ( simbolul unirii )
        
        $n = "Buna";
        $b = "Ioana!";


        echo $n . " " . $b;
        echo  "</br>";
        
// Heredoc
echo<<<ORICE
Utilizand aceasta metoda putem afisa un string adica prin Heredoc
ORICE
;
echo  "</br>";
$x=<<<ORICE
Imi place scoala
ORICE;
echo"$x";
// Newdoc
echo  "</br>";
echo<<<"ORICE"
Textul la Newdoc, diferenta dintre acestea este ca la Heredoc nu se folosesc ghilimele, dar la Newdoc se folosesc
ORICE;
echo  "</br>";
$x=<<<'ORICE'
Imi place scoala
ORICE;
echo"$x";
echo  "</br>";

        // ARRAY Asociativ
        $member = [
            'id'=> 1,
            'name'=>'Ioana',
            'city'=>'Bucuresti',

        ];

        // ID => Key  => ( operator de asociere )
        // 1 => Valoare


        // Pentru a afisa putem folosi un foreach, dar momentan nu am trecut asa ca utilizam echo

        // afisare
        echo  'Numele este: ' .$member['name']; // afisam Numele intre paranteze patrate punem key ( name ) => intre ghilimele
        echo  "</br>";
        echo   'Locuieste in: '.$member['city']; // afisam Tara de origine intre paranteze patrate punem key ( country )=> intre ghilimele

    // Array indexat

        // lista de cumparaturi
        echo  "</br>";
        $list = ['Paine','Oua','Lapte','Faina']; // 4 elemente in lista 

        echo $list[0]; // 0 este numar de index, adica totul incepe de la 0, nu de la 1 => "Painea" are nr 0, nu 1
        echo  "</br>";
        echo "<pre>"; // am afisat mai frumos
        var_dump($list); // am afisat cu var_dump => keya si valoarea

    // Array in array
        echo  "</br>";
    $lista_masini = array(
    array('Model' => 'BMW', 'TOYOTA'),
    array('Model' => 'Altu', 'aLTU'),
    array('Model' => 'BMW', 'ford', 'sub_array' => array('roti' => 4), 'sub_sub_array' => array('usi' => 5))
);

echo $lista_masini[0]['Model']; // afiseaza BMW din primul sub-tablou (sub-array)
echo "<br>";
echo $lista_masini[2]['sub_array']['roti']; // afiseaza 4 din sub-tabloul (sub-array) al treilea element al matricii principale
echo "<br>";


    // Actualizarea unui array + adaugare unei noi valori

    $familie = array('Mama','Tata');
    echo "<br>";
    echo $familie[0]; // afisam Mama
    echo "<br>";
    echo $familie[0] = "Sora"; // actualizam Mama cu Sora
    echo "<br>";
    echo $familie[2] = "Sora 2";
    echo "<pre>";
    var_dump($familie);
    ?>


<?php date_default_timezone_set('Europe/Sofia');?>


        <b>Round : </b> <?= round(9876.54321) ;?><br>
        <b>Round to 2 decimal places : </b> <?= round(9876.54321,2) ;?><br>
        <b>Round half up : </b> <?= round(1.5,0,PHP_ROUND_HALF_UP) ;?><br>
        <b>Round half down: </b> <?= round(1.5,0,PHP_ROUND_HALF_DOWN) ;?><br>
        <b>Round up : </b> <?= ceil(1.23) ;?><br>
        <b>Round down : </b> <?= floor(1.23) ;?><br>
        <b>Random number : </b> <?=  mt_rand(0,10);?><br> <!--refresh la pagina, se va schimba nr--->
        <b>Exponential : </b> <?=  pow(4,5);?><br>
        <b>Square root : </b> <?=  sqrt(16);?><br>  <!--radacina patrata --->
        <b>Is a number : </b> <?=  is_numeric(123) ;?><br>
        <b>Format number : </b> <?= number_format(12345.6789,2,',',' ');?><br>
        <b>Date </b>  <?= date('Y') ;?> <br>
        <b>Date with days </b>  <?= date('Y-d') ;?> <br>
        <b>Date with days and month </b>  <?= date('Y-d-m') ;?> <br>
        <b>Hour </b>  <?= date('H:i:s') ;?> <br>







