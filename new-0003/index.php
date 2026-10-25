<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in </title>
</head>
<body>
    <?php
    include 'oop_Sign_in/sign_inClass.php';
 
    $user1 = new User();
    $user1 -> name = "ahmed" ;
    $user1 -> username = "@ahmedd123" ;
    $user1 -> pri();
    #طبعة
    $user1 -> profile();
//////
  
    $admen1 = new Admin();
    $admen1 -> name = "ad" ;
    $admen1 -> username = "@adk23";
    $admen1 -> teip();
    $admen1 ->profile();


echo "<br><br>" . $user1 ;





    ?>
</body>
</html>