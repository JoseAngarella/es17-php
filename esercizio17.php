<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num=rand(10,20);
        for($i =0; $i<=$num;$i++){
            $lista[$i]=$i;
        }
        $colori=array("red","yellow","green","blue","black");

        $stampa="<ul>";
        for($i =0; $i<=$num;$i++){
            $colore=$colori[rand(0,4)];
            $stampa=$stampa."<li style='color:$colore'>{$lista[$i]}</li>";
        }
        $stampa=$stampa."</ul>";
        echo $stampa;


    ?>
</body>
</html>