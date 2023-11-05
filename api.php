<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS');
include("rewritten.php");


$data = file_get_contents("php://input");
$decode = json_decode($data);
$conteudo =$decode -> textdata;
$texto=$_POST['textdata'];
$texto = $conteudo;
$rewritedtext = Rewritte($texto);
echo json_encode([
    "autenticador" => "mireliauth.".$decode->mireliauth,
    "originaltext" =>$texto,
    "rewritedtext" =>$rewritedtext
]);