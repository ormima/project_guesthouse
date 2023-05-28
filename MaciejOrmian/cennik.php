<?php

    $con = mysqli_connect("localhost", "root", "", "wynajem");
    $sql1 = "SELECT * FROM `pokoje` WHERE 1";
    $query1 = mysqli_query($con, $sql1);
    $res1 = "";

    if($con){
        while($row = mysqli_fetch_row($query1)){
            $res1 .= "<tr>
                        <td>".$row[0]."</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                    </tr>";
        }
    } else{

        echo "Coś poszło nie tak";

    }
    

    mysqli_close($con);



?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="./styl2.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Pensjonat pod dobrym humorem</h1>
        </header>
        <div class="box">
            <div class="left">
                <a href="./index.html">GŁÓWNA</a>
                <img src="./1.JPEG" alt="pokoje"/>
            </div>
            <div class="middle">
                <a href="./cennik.php">CENNIK</a>
                <!-- skrypt -->
                <table>
                <?=
                
                    $res1

                ?>
                </table>
            </div>
            <div class="right">
                <a href="./kalkulator.html">KALKULATOR</a>
                <img src="./3.JPEG" alt="pokoje">
            </div>
        </div>
        <small>
            <p>Stronę opracował: <i>000</i></p>
        </small>
    </div>
</body>
</html>