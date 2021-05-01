<?php

$con = mysqli_connect("127.0.0.1", "harshith", "harshith", "hospital") or die($mysqli_error($con));

$getMessage = mysqli_real_escape_string($con, $_POST['text']);

$check_data = "SELECT reply FROM chatbot WHERE query LIKE '%$getMessage%'";
$run_query = mysqli_query($con, $check_data) or die($mysqli_error($run_query));
if(mysqli_num_rows($run_query) > 0){
    $fetch_data = mysqli_fetch_assoc($run_query);
    $reply = $fetch_data['reply'];
    echo $reply;
}else{
    echo "Sorry, I am unable to understand!";
}
?>
