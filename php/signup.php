<?php 

session_start();




if(isset($_POST['fname']) && 
   isset($_POST['uname']) &&  
   isset($_POST['pass'])&&  
   isset($_POST['loginas'])){

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $loginas = $_POST['loginas'];

    $data = "fname=".$fname."&uname=".$uname;

    $sql = "SELECT * FROM users WHERE fname = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$fname]);

   

    if (strlen($pass) < 8){ 
        $em = 'Please enter a valid password. It should be at least 8 characters long.';
        header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if (!preg_match('/[A-Z]/', $pass) ){ 
        $em = 'Please enter a valid password. It should contain at least one uppercase letter.';
        header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if (!preg_match('/\W/', $pass)){ 
        $em = 'Please enter a valid password. It should contain at least one non-alphanumeric character.';
        header("Location: ../index.php?error=$em&$data");
	    exit;
   
    }else if($stmt->rowCount() > 0){ 
        // Email already exists in the database
        $em = "Email already exists. Please choose a different email.";
        header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if (empty($fname)) {
    	$em = "Email is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($uname)){
    	$em = "User name is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
   }else if(empty($loginas)){
         $em = "Login as is required";
         header("Location: ../index.php?error=$em&$data");
         exit;
   
    }else {
      // hashing the password
      $pass = password_hash($pass, PASSWORD_DEFAULT);

      if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
         
         $img_name = $_FILES['pp']['name'];
         $tmp_name = $_FILES['pp']['tmp_name'];
         $error = $_FILES['pp']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($uname, true).'.'.$img_ex_to_lc;
               $img_upload_path = '../profileImages/'.$new_img_name;
               move_uploaded_file($tmp_name, $img_upload_path);

               // Insert into Database
               $sql = "INSERT INTO users(fname, username, password, pp) 
                 VALUES(?,?,?,?)";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$fname, $uname, $pass, $loginas, $new_img_name]);

               header("Location: ../index.php?success=Your account has been created successfully");
                exit;
            }else {
               $em = "You can't upload files of this type";
               header("Location: ../index.php?error=$em&$data");
               exit;
            }
         }else {
            $em = "unknown error occurred!";
            header("Location: ../index.php?error=$em&$data");
            exit;
         }

        
      }else {
        $unique_id = rand(100000,999999);
        $image="../profileImages/default-img.jpg";
        $statuses = "Active now";
       	$sql = "INSERT INTO users(unique_id, fname, username, password, loginas, pp, statuses) 
       	        VALUES(?,?,?,?,?,?,?)";
       	$stmt = $conn->prepare($sql);
       	$stmt->execute([$unique_id, $fname, $uname, $pass, $loginas, $image, $statuses]);

   	    

           var_dump($_POST);
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
                       alert("<?php echo "Register Successfully, OTP sent to " . $fname ?>");
                       window.location.replace('../otp.php?Register Successfully, OTP sent to ');
                   </script>
                   <?php
               }

                 


                echo "Nice";


                exit;


      }
    }


} else {
      header("Location: ../index.php?error=error");
      exit;
}
