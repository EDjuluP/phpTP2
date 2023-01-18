<?php echo "Exercice 3";

$tab = array(2, 3, 5, 7, 11);


function moyenneTab($D){
    $Basique = array_sum($D)/count($D);
    return $Basique;
}

foreach($tab as $value){
    echo"<br>";
    echo "$value" ; 
}
    moyenneTab($tab);
    for (int $i = 0;$i<sizeof($tab);$i++){ //error ici :(
        echo"$Basique = array_sum($tab)/count($tab)";
    }
    
    echo "La moyenne est (espérons-le):".$Basique;
?>


