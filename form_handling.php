<?php
if(isset( $_POST['fullName']) && isset( $_POST['email'])  && isset( $_POST['phone']) && isset( $_POST['address'])){
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    echo $fullName;
    echo $email;
    echo $phone;
    echo $address;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="fullName" placeholder="Enter your full name">
        <input type="email" name="email" placeholder="Enter your email address">
        <input type="tel" name="phone" placeholder="Enter your phone number">
        <input type="text" name="address" placeholder="Enter your address">
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>