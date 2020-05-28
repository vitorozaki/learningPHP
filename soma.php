<?php

function soma(){
    $n1 = $_POST['primeiroNumero'];
    $n2 = $_POST["segundoNumero"];
    echo $n1 + $n2;
}

soma();
