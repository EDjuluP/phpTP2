<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Entrainement PHP</title>
        <link rel='sylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
    </head>

    <body>
        BONJOUR

        <h1>Mon titre 2</h1>

        <?php 
        
            $LaPremiereVariable = "une variable";       
            $LaDeuxiemeVariable = 12;
        ?>        
        <div>
            <?php    
                //test d'un affichage de variable
                echo "Je suis ".$LaPremiereVariable.", je suis le nombre : ".$LaDeuxiemeVariable;
            
                //test des conditions if else
                $LaPremiereVariable = rand(0,100);
                ?>  <div>
                    
                        <?php
                        echo $LaPremiereVariable;
                        if($LaPremiereVariable%2 == 1){?>
                        <div>
                            <?php
                            echo "Ce nombre est impair.";
                            }?>
                        </div>
                        <div>
                            <?php
                            else{
                                echo "Ce nombre est pair.";
                            }
                            ?>
                        </div>
                        
                    </div>

        </div>








    </body>