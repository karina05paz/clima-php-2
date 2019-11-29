<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Iformações Climaticas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src =" js/clima.js"></script>


    </script>



            <!-- Tags Gerais -->
            <meta NAME="DESCRIPTION" CONTENT="Site de condições climáticas de Brusque e região, criado por Karina Souza"/>
            <meta NAME="ABSTRACT" CONTENT="Informações Climáticas"/>
            <meta name="keywords" content="Clima, Tempo, Tempo para Brusque, umidade em Brusque, 
                  previsão da semana para Brusque,previsão Brusque, Clima Tempo Brusque,previsão do tempo fim de semana,
                  temperatura Brusque, Vento Brusque, Céu de Brusque, previsão climatempo, climatempo atualizado Brusque, condições climaticas Brusque, chuva Brusque"/>
            <meta NAME="title" CONTENT="Informação Climaticas" />
            <meta NAME="identifier-url" content="https://karina-informacoes-climaticas.herokuapp.com/" />
            <meta NAME="author" content="Karina Souza Paz" />
            <meta NAME="ROBOTS" CONTENT="All" />
            <meta NAME="RATING" CONTENT="general" />
            <meta NAME="DISTRIBUTION" CONTENT="global" />
            <meta NAME="LANGUAGE" CONTENT="pt-br" />
            <meta name="content-language" content="portuguese" />
            <meta name="doc-class" content="Completed" /> 
            <meta name="reply-to" content="karina_paz@estudante.sc.senai.br"/>

            <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://karina-informacoes-climaticas.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Informações Climáticas" />
        <meta property="og:title" content="Informações Climáticas" />
        <meta property="og:description" content="Site de condições climáticas de Brusque e região, criado por Karina Souza" />
        <meta property="og:image" content="https://karina-informacoes-climaticas.herokuapp.com/img/icones/nascer.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />
        
                <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de condições climáticas de Brusque e região, criado por Karina Souza" />
        <meta name="twitter:title" content="TempoClimático" />

</head>
<body>
    <div class="row">

        <div class="col-md-12">

            <div class= "alert alert-success" style="margin:20px;" >Alerta!!</div>


            <div class="jumbotron ">
                <h1>Tempo para Brusque-SC | <span id="temperatura"></span></h1>
                <p>
                    <span id="situacao"></span>

                    <img id="icone" src="img/icones/04n.png"/>

                </p>

                <div class="jumbotron" >
                    <h1> Nascer Do Sol | <span id="NascerDoSol"></span></h1>
                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/nascer.png"/>

                    </p>

                    <div class="jumbotron" >
                        <h1> Por Do Sol | <span id="PorDoSol"></span></h1>
                        <p>
                            <span id="situacao"></span>
                            <img src="img/icones/porDoSol.png"/>

                        </p>


                        <div class="jumbotron" >
                            <h1> Umidade|<span id="umidade"></span></h1>
                            <p>
                                <span id="situacao"></span>
                                <img src="img/icones/umidade.png"/>

                            </p>

                            <div class="jumbotron" >
                                <h1> Pressão do Ar|  <span id="pressaoAr"></span></h1>
                                <p>
                                    <span id="situacao"></span>
                                    <img src="img/icones/pressaoDoAr.jpg"/>

                                </p>

                                <div class="jumbotron" >
                                    <h1> Velocidade Do Vento| 3km/h <span id="velocidadeDoVento"></span></h1>
                                    <p>
                                        <span id="situacao"></span>
                                        <img src="img/icones/velocidadeDoVe.png"/>

                                    </p>

                                    <div class="jumbotron" >
                                        <h1> Temperatura Máxima | 25° <span id="temperaturaMax"></span></h1>
                                        <p>
                                            <span id="situacao"></span>
                                            <img src="img/icones/temperaturaMaxima.png"/>

                                        </p>



                                    </div>

                                </div>

                            </div> 


                            </body>
                            </html>
