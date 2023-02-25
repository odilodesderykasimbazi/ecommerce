<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
      /*
       function locla_var(){
        $num=43;
        echo "This value of this variable is declared locally and its value is :".$num; echo '<br>';
       }
         locla_var();

         function mysTest(){
            $lang='PHP';
            Echo " The programming language being used is ".$lang;
            echo "<br>";
         }
         mysTest();

         //echo $lang;
         //can not be printed since it declared locally

         $num=12;

         if($num%2==0){
            echo "The number  ".$num . " is the prime number";echo "<br>";
         }
         else{
            echo "The number is not prime number";echo "<br>";
         }

         $season = array("summer","winter","spring","autumn");
         foreach($season as $arr){
            echo " The season is $arr<br />";

         }
         $n=1;

         while($n<=10){
            echo "$n<br />";
            $n++;
          }

          $char = 'A';
          while($char < 'Z'){
            echo "$char<br />";
            $char++;
          }
         $b=1;
         do{
            echo "$b<br />";
            $b++;
            
         }while($b<=10);

         echo "the prime number between 1 and 20";

         $i=1;

         while($i<=20){
            if($i%2==1){
                $i++;
                continue;
            }
            echo "<br />";
            echo $i;
          
            $i++;
         }*/
          function add($x,$y){
            $sum = $x + $y;
            echo "The sum is ". $sum;
            echo "<br>";
         }
        function subtract($x,$y){
            $sub = $x-$y;
            echo "The difference is " .$sub;
            echo "<br>";
         }
         //passing the value in the text editor;
         if(isset($_POST['add']))
         {
            add($_POST['first'],$_POST['second']);
         }
         if(isset($_POST['sub'])){
            subtract($_POST['first'],$_POST['second']);
         }
?>
<body>
   
<form method="POST">
   Enter your First Number : <input type="number" name="first"><br><br>
   Enter your second Number: <input type="number" name="second"><br><br>
   <input type="submit" name="add" value="Addition" />
   <input type="submit" name="sub" value="Subtraction" />
</form>
</body>
</html>