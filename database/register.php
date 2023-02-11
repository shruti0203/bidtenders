<?php
// ini_set('SMTP','localhost');
// ini_set('smtp_port',25);
//     $to_email = "abinfo2310@gmail.com";
// $sub = "Email Test using php";
// $body = "Hi, this is test mail!!";
// $header = "From: trivedishruti232003@gmail.com";
// if (mail($to_email,$sub,$body,$header)) {
//     echo "Email Sent Success!!";
// } else {
//     echo "Email Sent Failed";
// }

    $name = $_POST["name"];  
    $cname=$_POST["cname"]; 
    $state=$_POST["state"];
    $phoneno = $_POST["phone"];
    $email=$_POST["email"]; 
    $nob=$_POST["bmonth"];
    $catagory=$_POST["keyword"];
    $toEmail = "trivedishruti232003@gmail.com";

$mailHeaders = "Name:" . $name .
    "\r\n cname:" . $cname .
    "\r\n email:" . $email . "\r\n";

    if(mail($toEmail,$name,$mailHeaders)){
        //header('Location: /bidtender/bigtenders/thankyou.php');
    echo "success";
    } else
    echo "Failed";



#$conn = mysqli_connect("localhost", "root", "", "bidtender");
if ($conn) {
    $qry = "INSERT INTO `users`(`Name`, `CompanyName`, `State`, `PhoneNo`, `Email`, `NoOfBidding`, `Category`) VALUES ('$name','$cname','$state','$phoneno','$email','$nob','$catagory')";
    $ans = mysqli_query($conn, $qry);
    if ($ans){
        header('Location: /bidtender/bigtenders/thankyou.php');
        exit;
    }
        
    else
        echo "Failed";
}

?>
