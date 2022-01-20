<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $emailfrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo ="tulika.mitra130702@gmail.com";
    $header = "From :" .$emailfrom;
    $txt =" You have received an email from " .$name,"\n\n".$message;


mail($mailTo, $subject, $txt, $header );
header("Location : index.php?mailsend")
}

 

?>
