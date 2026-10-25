<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop 2</title>
</head>
<body>
    <?php 
    
    include 'oop/employees_Class.php';

   

    $black = new Employees_Class_Color('black' , '#000');
    
    $black -> printColor();
    $black -> gitName('#000');
     echo "<br><br><p>1</p><hr><br><br>" ;
   

   $white = new Employees_Class_Color();

    $white -> printColor() ;
    $white -> gitName('#fff');
    echo "<br><br><p>2</p><hr><br><br>" ;

    
    ?>
</body>
</html>