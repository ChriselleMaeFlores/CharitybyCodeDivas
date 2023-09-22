<?php 
session_start();

if(isset($_POST['fname']) && 
   isset($_POST['pass']) 
   ){

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $pass = $_POST['pass'];

    $data = "fname=".$fname;
    
    if(empty($fname)){
    	$em = "Email is required";
    	header("Location: login.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else {

    	$sql = "SELECT * FROM users WHERE fname = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$fname]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();

          
          $id =  $user['id'];
          $unique_id =  $user['unique_id'];
          $fnamee =  $user['fname'];
          $username =  $user['username'];
          $password =  $user['password'];
          $pp =  $user['pp'];
          $loginas =  $user['loginas'];
          $statuses =  "Active now";

          if($fnamee === $fname){
             if(password_verify($pass, $password)){
                 $_SESSION['id'] = $id;
                 $_SESSION['unique_id'] = $unique_id;
                 $_SESSION['fname'] = $fname;
                 $_SESSION['pp'] = $pp;          
                 
                 
                
                 // update the Database
                 $sql2 = "UPDATE users 
                 SET statuses=? WHERE id=?";
                 $stmt2 = $conn->prepare($sql2);
                 $stmt2->execute([$statuses, $id]);

                 
                $fname = $_POST['fname'];
                $otp = rand(100000,999999);
                $_SESSION['otp'] = $otp;
                $_SESSION['mail'] = $fname;
                require "../Mail/phpmailer/PHPMailerAutoload.php";
                 
                $mail = new PHPMailer;

                $mail->isSMTP();
                $mail->Host='smtp.gmail.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='tls';

                $mail->Username='mang.delfin.notif@gmail.com';
                $mail->Password='szsupijdoolmbzqx';

                $mail->setFrom('mang.delfin.notif@gmail.com');
                $mail->addAddress($_POST["fname"]);

                $mail->isHTML(true);
                $mail->Subject="Your Verification Code";
                $mail->Body="<p>Dear user, </p> <h3>Your OTP code is $otp <br></h3>
                <br><br>
                <p>With regrads,</p>
                <b>AGAPE</b>";
               
                    
                    if(!$mail->send()){
                        ?>
                            <script>
                                alert("<?php echo "Register Failed, Invalid Email "?>");
                            </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("<?php echo "OTP sent to " . $fname ?>");
                            window.location.replace('../ot.php');
                        </script>
                        <?php
                    }

                      


                     echo "Nice";

                     exit;


             }else {
               $em = "Incorect User name or password";
               header("Location: ../login.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Incorect User name or password";
            header("Location: ../login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorect User name or password";
         header("Location: ../login.php?error=$em&$data");
         exit;
      }
    }


}else {
	header("Location: login.php?error=error");
	exit;
}
?>