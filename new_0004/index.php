<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التحقق من الكلاس </title>
</head>
<body>
    

<h1>التحقق من وجود الكلاس </h1><br><br><br>



<?php

include 'oop/Class.php';
$namecalse1 = "color";
echo "هل كلاس " . $namecalse1  . " موجود ؟؟". "<br>";
if (class_exists($namecalse1)){
echo "نعم كلاس : " . " " . $namecalse1 . " ". "موجود";
}else{
echo "لا كلاس : " . " " . $namecalse1 . " ". "غير موجود";
}
echo "<br>--------------------------------------------<br>";



$namecalse2 = "user";
echo "هل كلاس " . $namecalse2  . "موجود ؟؟". "<br>";
if (class_exists($namecalse2)){
echo "نعم كلاس : " . " " . $namecalse2 . " ". "موجود";
}else{
echo "لا كلاس : " . " " . $namecalse2 . " ". "غير موجود";
}
echo "<br>--------------------------------------------<br>";





$namecalse3 = "ِadmin";
echo "هل كلاس " . $namecalse3  . "موجود ؟؟". "<br>";
if (class_exists($namecalse3)){
echo "نعم كلاس : " . " " . $namecalse3 . " ". "موجود";
}else{
echo "لا كلاس : " . " " . $namecalse3 . " ". "غير موجود";
}
echo "<br>--------------------------------------------<br>";
?>



</body>
</html>