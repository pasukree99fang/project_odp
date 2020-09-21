<?php
    if ($_POST["myText"]){
    $thisPwd = $_POST["myText"];
    echo "ข้อมูลที่บันทึกคือ : $thisPwd <br>";
    echo "<script>alert ('ข้อมูลที่บันทึกคือ : $thisPwd');window.location.href='login.html';</script>";
    }
?>

