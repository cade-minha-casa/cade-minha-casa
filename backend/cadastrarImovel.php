<?php

session_start();

$id = $_POST["id"];

$rua = $_POST["rua"];
$num = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];

if (isset($rua) && isset($bairro) && isset($cep)) {

}