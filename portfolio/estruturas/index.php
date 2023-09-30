<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas</title>
</head>
<body>

<?php
$i = 10;
while ($i <= 30) {
    echo '<div>'.$i.'</div><br>';
    $i++;
}
?>

<?$i?>

<?php
    for ($e=0; $e <= 10; $e++) {
        echo '<div> Este é o numero :'.$e.'</div>'; 
        if($e == 5){
            echo '<div> O numero 5 é o meu favorito : <h1>'.$e.'</h1></div>'; 
        }
    }
?>

<?$e?>



<?php
    for($j=1; $j <=23; $j++;){
        
    }
?>

<?$e?>
    
</body>
</html>