<?php
    $servername = "localhost"; /* sql109.epizy.com */
    $username = "root"; /* epiz_32988808 */
    $password = ""; /* fD5oUgyvUpjf */
    $dbname ="auth_db"; /* */
    $conn = new mysqli($servername, $username, $password,$dbname);
    
    if(!$conn){
        echo "Connection Failed";
    }                               
?>