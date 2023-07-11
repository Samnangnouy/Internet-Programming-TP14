<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $date=date("m-d");
        if($date=="01-10"){
            echo "Happy bd!!";
        }
        elseif($date=="08-10"){
            echo "Huh";
        }
        else{
            echo "Noooo";
        }
    ?>
</body>
</html>