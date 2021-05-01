<?php
require_once('config.php');
require_once('core/controller.Class.php');
include('./server.php');

if (!isset($_COOKIE['id']) && !$SESSION['status']) {
    header('Location: index.php');
} 
else{
    if(!session_start()){
        session_start();
        $SESSION['status'] = "present";
    }
}

// $cookie_name = $_COOKIE['id'];
$query1 = "SELECT * FROM orders WHERE user=".$_COOKIE['id'];
$result = mysqli_query($conn, $query1);
if($result){
    echo "retreiving";
}else{
    echo "<br>The record was not fetched successfully because of this error ---> ". mysqli_error($conn);
}


$Controller = new Controller;
$user_cookie = $Controller -> printData(intval($_COOKIE['id']));
// echo $user_cookie;

$user_data = "SELECT * FROM users WHERE user_name='$user_cookie'";
$run_query = mysqli_query($conn, $user_data) or die($mysqli_error($run_query));
if(mysqli_num_rows($run_query) > 0){
    $fetch_data = mysqli_fetch_assoc($run_query);
    $name = $fetch_data['f_name'];
    $lname = $fetch_data['l_name'];
    $email = $fetch_data['email'];
    $avatar = $fetch_data['avatar'];
    // echo $name;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Custom Css -->
    <link rel="stylesheet" href="profile.css">
    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <?php include('./includes/header.php'); ?>

    <div class="sidenav">
        <div class="profile">
            <img src="<?php echo $avatar; ?>" alt="" width="100" height="100">

            <div class="name">
            <?php echo $name; ?>
            </div>
            <div class="job">
                BUSINESS
            </div>
        </div>
    </div>

    <!-- Main -->
    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php echo $name.' '.$lname; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $email; ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td> Kanigalpula Complex, Lalapet, Guntur-522003.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h2>Your Orders</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <div class="social-media">
                   No Orders !
                </div>
            </div>
        </div>

        <h2>Your Cart items</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <div class="social-media">
                    <table>
                        <?php
                            $query1 = "SELECT * FROM orders WHERE user=".$_COOKIE['id'];
                            $result = mysqli_query($conn, $query1);
                            while ($row = mysqli_fetch_array($result)) 
                            {
                                $rowcount=mysqli_num_rows($result);
                                if($rowcount>0){
                                    echo "<table class='table table-striped'><tr style='margin-bottom:-100px;padding-bottom:-100px;'> 
                                            <th>Product Name</th>
                                            <th>Cost</th>
                                        </tr>
                                        <tr> 
                                            <td>".$row["product_name"]."</td> 
                                            <td>".$row["cost"]."</td> 
                                            <td><button class='btn btn-success'>Proceed to Pay</button></td> 
                                        </tr></table>";
                                } else if($rowcount==0){
                                    echo "<div class='social-media'>
                                    No items in your cart!
                                 </div>";
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
    <?php include('./includes/footer.php'); ?>
</body>
</html>