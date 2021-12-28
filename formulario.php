<?php
$tipo = $_POST['tipo'];
$numero = $_POST['numero'];

if ($tipo != null && $tipo > "0") {
    echo $tipo;
    echo "<hr>";
}else{
    echo "No haz especificado el tipo del documento";
    echo "<hr>";
}

if (strlen($numero) < 5 || strlen($numero) > 10 || strlen($numero) === null) {
    echo "El número no es correcto o está vacio, intentelo de nuevo";
}else{
    echo $numero;
}
?>