<?php
    echo "DoWhile <br>";
    $i = 0;

    do{if($i % 2 != 0){
        echo $i."<br>";
    }
        $i++;
    }while($i<=98)

?>
 
<?php
echo "FOR <br>";
    for($a= 0; $a<=100; $a++){
        if($a %2 == 0){
            echo $a."<br>";
        }
    }
?>

<?php
    echo "DoWhile <br>";
    $i = 1;

    do{if($i % 2 == 0){
        echo $i."<br>";
    }
        $i++;
    }while($i<=99)

?>

<?php
    echo "FOR <br>";

    for($b=0; $b<=100; $b++){
        echo $b."<br>"; $b++;
    }
?>

<?php
echo "While ";
    $c =1;
    while($c<=99){
        echo $c."<br>"; $c++; $c++;
    }
?>