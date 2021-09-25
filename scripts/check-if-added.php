<?php

function check_if_added_to_cart($item_id){
    $con = mysqli_connect("localhost","root","","iproject") or die(mysqli_error($con));
    $user_id = $_SESSION['id'];
    
    $s_q = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $s_q_r = mysqli_query($con, $s_q) or die(mysqli_error($con));
    if(mysqli_num_rows($s_q_r)>=1){
        return 1;
    }else{
        return 0;
    }
    
}

?>