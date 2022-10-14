<?php
if (isset($_POST['submit'])) {
    $fileToWriteTo = fopen("userdata.csv", "w");
    $textToAdd = $_POST['name'] .  "..." . "\r\n" . $_POST['email'] .  "..." . "\r\n" . $_POST['dob'] .  "..."  .  "\r\n" . $_POST['country'] .  "..."  . "\r\n" . "\r\n";
    fwrite($fileToWriteTo, $textToAdd);
    fclose($fileToWriteTo);
    
    $fl = file_get_contents("userdata.csv");
    $fl2 = explode('...', $fl);
    foreach ($fl2 as $key) {
        $newv =  $key . "<br>";
        print_r($newv);
    }
}
?>