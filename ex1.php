<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php
        echo "Hello Philippines, Hello World!" 
        ."<br>" ."<br>";
?>

<?php
echo "Hi There!" 
."<br>" ."<br>";
echo "How are you?"
."<br>" ."<br>";
$msg="I am fine. </br> </br> How about you?";
echo "$msg very much</br> </br>";
echo "{$msg} very much</br></br>";
echo "{$msg} very much</br> </br>";
?>

<?php
$var=555;
echo $var;
?>

<?php
$var=555;
echo $var;
echo "</br>";
$my_var="Hello World";
$my_Var="Hello Philippines";
Echo $my_var;
Echo $my_Var;
?>
<?php
$msg="Hi There!";
echo $msg;
?>


<?php
$msg1= "Hi There! How are you?";
echo strtolower($msg1);
echo strtoupper($msg1);
echo ucfirst($msg1);
echo ucwords($msg1);
?>


<?php
$n = 3.17;
echo round($n). "<br>";  
$n = 3.142857;
echo round ($n, 3). "<br>"; //3.14   3.143
$m = 23000;
Echo number_format($m). "<br>";
?>




<?php
//1. INCREMENT
Echo "<H3> POST INCREMENT </H3>";
$a=5;
echo "Should be 5: ".$a++."<br>";  
echo "Should be 6: ".$a."<br>";       
?>



<?php
//2.INCREMENT
Echo "<H3> PRE INCREMENT </H3>";
$a=5;
echo "Value is: ".++$a."<br>"; // 6
echo "Value is: ".$a."<br>"; // 6
?>




<?php
//1. DECREMENT
echo "<h3> POST DECREMENT </h3>";
$a=10;
echo "Value is: ".$a--."<br>"; 
echo "Value is: ".$a."<br>"; 
?>



<?php
//2. DECREMENT
echo "<h3> PRE DECREMENT </h3>";
$a=10;
echo "Value is". --$a."<br>"; 
echo "Value is: ".$a."<br>"; 
?>

<?php
//1. Ass op
$x= 20;
$x+=100;	 
echo $x;
?>


<?php
//2. Ass op
$x= 15; 
$x%=4; 
echo $x;
?>


<?php
//1. comp op
$x= 100;
$y=100;
var_dump($x==$y);
?>

<?php
//2. comp op
$x= 100;
$y=50;
var_dump($x>$y);
?>



<?php
//1. logical op
$x= 100;
$y=50;
var_dump($x==$y||$x> $y);
?>



<?php
//2. logical op
$x= 75;
$y=25;
var_dump($y<$x&&$x==$y); 

//3. logical op
?>




<form method="post">  
Enter First Number:  
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="Add">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1+$number2;     
echo "The sum of $number1 and $number2 is: ".$sum;   
}  
?>  


</body>
</html>
