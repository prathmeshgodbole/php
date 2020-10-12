<?php

// 1
// function sample(){
//     echo "Hellow MAK Good Morning !!!";
// }
// sample();


//2
// function sample($name){
//     echo "Hellow $name Good Morning !!!";
// }
// sample('BOB');


// //3
function sample($name='MARIO',$age=25){
    echo "Hellow $name $age Good Morning !!!";
}
sample('SHAUN',30);


//4
// function product_Sale($product){
    
//     echo "<br >Product Name = {$product['name']} || Prize = {$product['prize']}";
// }
// product_Sale(['name'=>'Maggie','prize'=>'20'])


//5
function product_Sale($product){
    
    return "<br >Product Name = {$product['name']} || Prize = {$product['prize']}";
}
$prd= product_Sale(['name'=>'Maggie','prize'=>'20']);
echo "$prd";




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNCTIONS </title>
</head>
<body>
    
</body>
</html>