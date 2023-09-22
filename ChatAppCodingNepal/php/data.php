<?php



    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "Them: ";
        }else{
            $you = ""; //No message Available laman nito
        }
        ($row['statuses'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";


       
        //$sql3= "SELECT * FROM user WHERE NOT unique_id = {$outgoing_id} ORDER BY unique_id DESC";

        if( ((isset($row2['outgoing_msg_id'])) >0 ) || ((isset($row2['incoming_msg_id'])) >0 ) )  {

        $output .= '<a href="chat.php?unique_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="../profileImages/'. $row['pp'] .'" alt="">
                    <div class="details">
                        <span>'. $row['username']. '</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                    </a>';
    

        }
    }

        if( ((isset($row2['outgoing_msg_id'])) == 0 ) || ((isset($row2['incoming_msg_id'])) ==0 ) ) {
             $output .= "No users are available to chat";
        }


   

  

?>