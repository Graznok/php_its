<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutsed</title>
</head>
<body>
   
<h1>Harjutus 05</h1>
<?php 
    $p = 10;
    switch ($p) {
        case ($p > 10):
            echo "Super!";
            break;
        case ($p<=5 && $p<=9):
            echo "Tehtud!";
            break;
        case ($p<5):
            echo "Kasin!";
            break;
        default:
            echo "Punkte pole lisatud";
            break;
    }
?>



<h1>Harjutus 04</h1>


<form action="" method="get">
    Lisa sünniaasta: <input type="number" name="synd"
    min= "1900" max="2100" required>
    <input type="submit" value="Leia juubel"><br>

</form>

<?php 

    if (!empty($_GET['synd'])) {
            $aasta = $_GET['synd'];
            $seeAasta = date('Y');
            $vanus = $seeAasta - $aasta;
            if ($vanus % 5 == 0) {
            echo"Sul on juubel";
         }
    else {
            echo "Ei ole juubel!";
        }
        }
?>

<h1>Harjutus 04</h1>
    <?php 
        $nr1 = 5;
        $nr2 = 0;
    $nr3 = 3;// < > >= <= == !=
        if ($nr2 > 0 && $nr1 != 0) {
            $tehe = $nr1 / $nr2;
       echo $tehe;
          } else {
            echo "Nulliga ei saa jagada";
          }
        
        

        
?>

    <h1>Harjutus 03</h1>
        <!--
            ACTION fail kuhu saadetakse
            METHOD kuidas saadatakse, GET on avalik, POST on peidetud
            -->


<form action="" method="GET">
            Toode 1: <input type="number" name="toode1"><br>
            Toode 2: <input type="number" name="toode2"><br>
            Toode 3: <input type="number" name="toode3"><br>

            <input type="submit" value="Arvuta">
</form>      
<?php 
                                                //GETiga saasin, GETiga võtan vastu
        if (!empty($_GET['toode1']) &&
            !empty($_GET['toode2']) &&
            !empty($_GET['toode3'])) {
            # code...
          }
            $t1 = $_GET['toode1'];
            $t2 = $_GET['toode2'];
            $t3 = $_GET['toode3'];
            $kokku = $t1+$t2+$t3;

    echo "Toode 1: $t1 tk<br>";
    echo "Toode 2: $t2 tk<br>";
    echo "Toode 3: $t3 tk<br>";
    echo "Kõik kokku: $kokku tk";

?>




    
    </h1>



    <h1>Harjutused 02</h1>
    <?php 
        $Arv1 = 5;
        $Arv2 = 2;
        $tehe = $Arv1+$Arv2;
        $jaak = $Arv1 % $Arv2; //jääk

        echo "Vastus: $tehe <br>";
        printf("Vastus: %d / %0.2f = %0.2f<br>", $Arv1, $Arv2, $tehe);
        echo $jaak;
        
    ?>
    
    
    
    
    <h1>Harjutused 01</h1>
    
    <?php
                                                                     /*
                                                                     Mitme reaga 
                                                                     välja kommenteerimine
                                                                    */

    $enimi = "Anu";
    $pnimi = "Tursk";
    $v = 39;
    $pikkus = 1.7;
    $hyydnimi ="THE BOSS";
    $lugu = 'Dr. Alban - "It\'s My Life"';

                                                                    // $enimi = "Maarja"; ctr + ä - kommenteerib välja
   
    echo "<p>Tere $enimi \"$hyydnimi\" $pnimi!<br>";
    echo "Vanus: $v<br>Pikkus: $pikkus </p>";
    echo '<p>Lemmik lugu on: ' .$lugu. '</p>';                         // punkt on kokkuliitmisks
    
    ?>

</body>
</html>

