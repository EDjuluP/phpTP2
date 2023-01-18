
<?php echo("Bonjour !"); 

function MaFonction($colone1,$colone2,$colone3){
    ?>
       
<table style="border: 1px solid #333;">
    <th><?=$colone1?></th>
    <th><?=$colone2?></th>
    <th><?=$colone3?></th>

    <tr>
        <td>Pomme</td>
        <td>Aubergine</td>
        <td>Bol</td>
    </tr>

    <tr>
        <td>Orange</td>
        <td>Tomate</td>
        <td>Saladier</td>
    </tr>

    <tr>
        <td>Banane</td>
        <td>Tomate</td>
        <td>Moule</td>
    </tr>
</table>
<?php }?>



<!DOCTYPE html>
<html>
<body>

<?php
MaFonction("fruit","legume","autres");
MaFonction("nom","prenoms","age");
?>

</body>
</html> 