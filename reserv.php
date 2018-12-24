<?php

$objetPdo = new PDO('mysql:host=db753339768.db.1and1.com;dbname=db753339768','dbo753339768','Choupette25&');
$pdoStat = $objetPdo->prepare('INSERT INTO reserv VALUES 
(
NULL, :nom, :email, :number, :heure, :date, :agree
)');
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$pdoStat->bindValue(':number', $_POST['number'], PDO::PARAM_STR);
$pdoStat->bindValue(':heure', $_POST['heure'], PDO::PARAM_STR);
$pdoStat->bindValue(':date', $_POST['date'], PDO::PARAM_STR);
$pdoStat->bindValue(':agree', $_POST['agree'], PDO::PARAM_STR);

$insertTrue = $pdoStat->execute();
if($insertTrue){
     $retour=mail('aubergedeschau@gmail.com',$_POST['nom'], 
                  Le $_POST['date'] à $_POST['heure'] pour  $_POST['number'] personne(s) M/Mme$_POST['nom'] );
}
else{
    $message = 'Echec';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>GOOD</h1>
</body>
</html>
