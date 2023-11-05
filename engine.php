<?php
include("rewritten.php");
$texto=$_POST["text"];
$rewritedtext = Rewritte($texto);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contentboxes{
            background-color:rgb(240,245,245);
            border-radius:25px;
            padding:1%;
        }
        .footer{
            background-color:rgb(10,10,10);
            width:100%;
            height:10%;
            justify-content:center;
            color:rgb(240,240,240);

        }
    </style>
    <link rel="stylesheet" type="text/css" href="styled.css" media="screen" />

</head>
<body style="background-color: rgb(55, 4, 173);">
    <div>
        <div class="container">
            <div>
                <div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <h1>Rewritte</h1>
                                    <h4>Segue abaixo o resultado do processamento </h4>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4>Versao Original</h4>
                            <div class="contentboxes">
                                <p><?php echo $texto; ?></p>

                            </div>
                        </div>
                        <div>
                            <h4>Versao Reescrita</h4>
                            <div class="contentboxes">
                                <p><?php echo $rewritedtext; ?></p>
                            </div>
                        </div>
                        <div style="color: rgb(2, 0, 0);">
                            <div>
                                <div class="footer">
                                    <p>Criado Por Alexandre Picinato Scherer ©</p>
                                    <p>Projeto Hospedado em Locaweb API Desenvolvida em Laravel</p>
                                    <p>Criado em 20 de junho de 2023</p>
                                    <p>alexandrepicinato.com.br</p>
                                    <p>Host: a1.server.alexandrepicinato.com.br</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>
    </div>
</body>
</html>