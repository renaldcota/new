<!DOCTYPE html>
<html>
<head>
	<title>php</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body> 
  

  <div
   class="container my-4">


    <h1 class="text-center">Leksione Php </h1>


    <?Php
    
    #switch case

    $dita="E hene";

    switch($dita){

  case "E hene":
  
  echo "<br> <p class= 'text-center'> sot nuk eshte E hene. </p>";


  break;

  
  case "e marte":
  
  echo "<br><p class= 'text-center'> sot nuk eshte E hene. </p>";

  break;

default:
echo "nuk e dime ca dite eshte";

}

#KONSTANTET 

define("GOOGLE_URL", "https://www.google.com");

echo 'thank you for visiting - ' .GOOGLE_URL;



   


 ?>




<div class="row">
   <div class="col-md-3 text-center">
     <?php

     # Ciklet ne PHP

     echo "<h5 style='color:red' class='text-center'> Afishoni numrat nga 1 deri ne 10 </h5>";

     $nr = 1;

     while($nr <= 10){

       echo $nr . '<br>';
       $nr++;

     }

      ?>
   </div>


   <div class="col-md-3 text-center">

     <h5> Numrat nga 0-100 me hap 10 </h5>

     <?php

     $nr2 = 0;

     while($nr2 <= 100){

       echo $nr2 . '<br>';
       $nr2 = $nr2 + 10;

     }

      ?>

   </div>

   <div class="col-md-3 text-center">

     <h5> Cikli me for</h5>
     <?php

      for($i = 0; $i<=100; $i = $i+10){

       echo "$i <br>";
    }

      ?>

   </div>

   <div class="col-md-3 text-center">

     <h5> Cikli me for nga 100-0</h5>
     <?php

for($i = 100; $i>=0; $i = $i-10){

  echo "$i <br>";
}

      ?>

   </div>

 </div>

 <div class="row mt-3">

  <div class="col-md-4 border">

    <h5> Ciklet ne Array </h5>


<?php 

# Madhesia e array : sizeof($arr)

$cars = array("volvo", "bmw","fiat");

foreach ($cars as $item){
  
echo $item . 'Ndodhet ne pozicionin:' . '<br>';

}

$colors = array("Red = ff0000", "White = fffff", "Black = 00000",); 

foreach ($colors as $value) {
  echo "$value <br>";
}


$sum=0;

for ($i=1; $i<=10; $i++) {
  
  if($i==10){

  echo " $i =";

} else{
  

echo $i . '+';
}

$sum = $sum + $i;
}
echo $sum;




                                              

 $makinat= array(
  array("volvo", 30, 7),
  array("bmw", 40, 32),
  array("fiat", 36, 20)
);

 ?>

<table>
  <tr>
    <th> Makinat </th>
      <th> Sasia </th>
        <th> Shitur </th>
  </tr>

<?php 


for ($i=0; $i<3; $i++) {
  
echo "<tr>";
  for($j=0; $j <3; $j++){
  echo "<td>";

    echo $makinat[$i] [$j];
  echo"</td>";
}

}
    ?> 
</table>





<p>Ngjyrat</p>
<p style="color:red;">I am red</p>
<p style="color:blue;">I am blue</p>
<p style="color: white;">I am white</p>

  

  </div>

 
 <div class="col-md-4">
</div>
</div>

</div>
</body>
</html>