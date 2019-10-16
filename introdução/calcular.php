<?php
    // Entrada -> form.html, metodo -> get (via URL)
    $n1 = $_GET['numero1'];
    $n2 = $_GET['numero2'];
    // processamento
    $resultado = $n1 + $n2;
    //Saída
    echo $resultado
?>