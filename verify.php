<?php

require('config.php');
session_start();
//db connection
$conn = mysqli_connect($host, $username, $password, $dbname);

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{  
    $customername = $_SESSION['customername'];
    $contactno = $_SESSION['contactno'];
    $razorpay_order_id = $_SESSION['razorpay_order_id'];

    $razorpay_payment_id = $_POST['razorpay_payment_id'];

    $email = $_SESSION['email'];

    $price = $_SESSION['price'];

    $sql = "INSERT INTO `orders` (`order_id`, `razorpay_payment_id`, `status`, `email`, `price`) VALUES ('$razorpay_order_id', '$razorpay_payment_id', 'success', '$email', '$price')";
    if(mysqli_query($conn, $sql)){
        //echo "payment details inserted to db";
    }

    $html = "<center>
             <p><h1>Thank You</h1></p>
             <p><h2> Your payment was successful <h2></p>
             
             </center>";

    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <center>
    <table border="4">
        <tr>
            <td>
                <h2> Name</h2>
            </td>
            <td>
                <?php echo "$customername";?>
            </td>
         </tr>
          <tr>
            <td>
                <h2> Email </h2>
            </td>
            <td>
                <?php echo "$email";?>
            </td>
         </tr>
          <tr>
            <td>
                <h2> Contactno</h2>
            </td>
            <td>
                <?php echo "$contactno";?>
            </td>
         </tr>
          <tr>
            <td>
                <h2> Amount </h2>
            </td>
            <td>
                <?php echo "$price";?>
            </td>
         </tr>
         <tr>
            <td>
                <h2>razorpay_order_id </h2>
            </td>
            <td>
                <?php echo "$razorpay_order_id ";?>
            </td>
         </tr>
         <tr>
            <td>
                <h2>razorpay_payment_id</h2>
            </td>
            <td>
                <?php echo "$razorpay_payment_id";?>
            </td>
         </tr>
     </center>
</table>
    <button onclick="window.print()">Print this page</button>

</body>
</html>

