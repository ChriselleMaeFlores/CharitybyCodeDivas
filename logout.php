<?php
session_start();
include "db_conn.php";

$statuses = "Offline now";

if (isset($_SESSION['unique_id'])) {
    $unique_id = $_SESSION['unique_id'];

    // update the Database
    $sql3 = "UPDATE users SET statuses=? WHERE unique_id=?";
    $stmt3 = $conn->prepare($sql3);
    $stmt3->execute([$statuses, $unique_id]);

    if ($stmt3) {
        session_destroy();
        echo "<script>alert('Log Out Successful!')</script>";
        header('location: account.php');
        exit(); // Add an exit() statement after the header redirect to stop further execution
    }
} else {
    session_destroy();
    echo "<script>alert('Log Out Successful!')</script>";
    header('location: account.php');
    exit(); // Add an exit() statement after the header redirect to stop further execution
}
?>
