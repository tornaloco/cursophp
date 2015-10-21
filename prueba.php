<?php
    $a = $_POST["numero_a"];
    $b = $_POST["numero_b"];
    $op = $_POST["operacion"];
    $hist = $_POST["historial"];
    
    switch ($op) {
        case "suma":
            $resultado = $a + $b;
            $hist = $hist . $a . ' + ' . $b . ' = ' . $resultado . '<br />';
            break;
        
        
        case "resta":
            $resultado = $a - $b;
            $hist = $hist . $a . ' - ' . $b . ' = ' . $resultado . '<br />';
            break;
        
        
        case "producto":
            $resultado = $a * $b;
            $hist = $hist . $a . ' * ' . $b . ' = ' . $resultado . '<br />';
            break;
        
        
        case "division":
            if ($b == 0) {
                $hist = $hist . $a . ' / ' . $b . ' = ' . 'Error: No se puede dividir por 0 :/' . '<br />';
            }
            else {
                $resultado = $a / $b;
                $hist = $hist . $a . ' / ' . $a . ' = ' . $resultado . '<br />';
            }
            break;
        default:
            break;
    }
    //print ($hist . "<br />"."culo"); 
        if(isset($_POST["$historial"])){
          print ($hist);
            
        }
        else {
          $hist = "";
          print ("borre hist!");
        }
?>

<!DOCTYPE HTML>
<body>
    <form action="?" method="post">
        <input type="text" name="numero_a" value=""/>
        <select name="operacion">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="producto">*</option>
            <option value="division">/</option>
        </select>
        <input type="text" name="numero_b" value=""/>
        <input type="hidden" name="historial" value""/>
        <input type="submit" name="calcular" value="Calular"/>
    </form>
    <?php 
        
    ?>
</body>