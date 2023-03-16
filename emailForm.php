<?php

if (isset($_POST['submit'])) {
    $name=$_POST['Ime'];
    $email=$_POST['Email'];
    $podaci=$_POST['Podaci'];

    $mailTo = "adrijan.radjevic@gmail.com";
    $headers= "From: ".$email;
    $subject= "Zahtjev za učlanjivanje";
    $txt= "Dobili ste novi zahtjev za učlanjivanje od ".$name.".\n\n".$podaci; 

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}