<?php
setcookie('id', '', time() - 60*60*24*30, '/'); 
setcookie('sess', '', time() - 60*60*24*30, '/');
if (isset($_COOKIE['id'])) {
    echo "hreeeelo";
    unset($_COOKIE['id']); 
    session_destroy();
    header('Location: index.php');
} 
die();
?>