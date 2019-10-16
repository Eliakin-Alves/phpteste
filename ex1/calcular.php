<?php
    // Entrada -> form.html, metodo -> get (via URL)
    $n1 = $_GET['numero1'];
    $n2 = $_GET['numero2'];
    $n3 = $_GET['numero3'];
    // processamento
    $resultado = ($n1 + $n2 + $n3) / 3;
    //Saída
    echo $resultado
?>