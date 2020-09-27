<?php
//break
//continue
$students=[
    ["name"=> "dev","city"=> "pune","salary"=>10000],
    ["name"=> "abc","city"=> "abc","salary"=>15000],
    ["name"=> "bob","city"=> "mumbai","salary"=>20000],
    ["name"=> "pqr","city"=> "pqr","salary"=>35000],
    ["name"=> "jack","city"=> "delhi","salary"=>30000],
    ["name"=> "xyz","city"=> "xyz","salary"=>250000]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break & Continue</title>
</head>
<body>
    

<div>
<?php
foreach($students as $student){
// if($student["salary"]===20000){
// break;
// }
if ($student["salary"] > 25000){
    continue;
}
echo $student["salary"]."<br/>";
}
?>
</div>


</body>
</html>