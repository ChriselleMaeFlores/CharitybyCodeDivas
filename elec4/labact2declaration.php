<?php
// Sample Declaration of strings
$A = "Student of ";    
$B = "Bachelor of Science in Information Technology Major in Information and Network Security ";
$C = "PHP ";    
$D = " scripts";
$M = "Abuan, Andrea T., Bongala, Abigail B., Flores, Chirselle B.";
$W = "200";
$Z = "200";

// Count the total string length of your full name
$totalLength = strlen($M);

// Display the capital letter of the first word
$firstLetter = strtoupper(substr($M, 0, 1));

// Convert the string "$C" to lowercase and string "$D" to uppercase
$C = strtolower($C);
$D = strtoupper($D);

// Count the total string length of "$A", "$B", "$C", "$D"
$totalLength2 = strlen($A) + strlen($B) + strlen($C) + strlen($D);

// Display the string "$W", "$Z"
echo "The length of your name is $totalLength\n <br>";
echo "Course: " . $A . $B . "\n <br>";
echo $C . $D . "\n <br>";
// Display the string "$M", "$A", "$B"
//echo "$M\n$A\n$B\n";
echo "$M is taking up " . $A . $B . "\n <br>";
echo "Total Number of String Length is $totalLength2\n <br>";
//echo "$W is less than $Z\n";

// Compare $W and $Z and display the result
if ($W < $Z) {
    echo "$W is less than $Z\n";
} elseif ($W > $Z) {
    echo "$W is greater than $Z\n";
} else {
    echo "$W is equal to $Z\n";
}

?>
