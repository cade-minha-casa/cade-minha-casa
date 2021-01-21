<?php
   session_start();

   if(!isset($_SESSION['id'])){
    header("Location: http://localhost/cade-minha-casa/frontend/pages/login.php");

   }else{
    require '../../backend/Connection.php';
   }
?>


<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link rel="icon" href="./image/logo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../styles/style.css">
        <title>Sinalize um imóvel</title>
    </head>

    <body>

        <header>
            <!-- topo do site -->
            <?php 
                include('../components/navBar2.html')
            ?>
        </header>
        <!--texto saudação-->
        <main id="background">
            <div class="container-fluid mt-lg-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-9 col-sm-12 align-self-start text-center">
                        <h1 class="display-5 text-white"><B><i>COM ESSA AÇÃO <br> VOCÊ PODE AJUDAR MUITA GENTE!</B></i></h1>
                    </div>
                </div>
            </div>
            <!--Formulario-->
                    <div class="container d-flex justify-content-center">
                        <div class="card border-light p-4 m-5 b-4" style="max-width: 26rem; border-radius: 40px">

                        <form action="../../backend/cadastrarImovel.php" method="POST">

                            <div class="form-group">
                                <div class="row align-items-center"> 
                                    <div class="col">
                                        <h5 class="text-center">Coloque abaixo os dados do <br> local que deseja sinalizar:</h5>
                                <br>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11">
                                    <input type="text" name="cep" class="form-control rounded-pill" id="InputCEP" aria-describedby="cep" placeholder="CEP">
                            </div>
                            <br>
                            
                            <div class="form-group">
                                <div class="row d-flex justify-content-center m-1 p-1">
                                <div class="col-11">
                                <input type="text" name="rua" class="form-control rounded-pill" id="InputRua" aria-describedby="rua" placeholder="Endereço">
                            </div>
                            
                            <div class="form-group">
                                <div class="row d-flex justify-content-center p-2"> 
                                <div class="col-5">  
                                <input type="text" name="bairro" class="form-control rounded-pill text-center" id="InputBairro" placeholder="Bairro">
                            </div>
                                <div class="col-5">
                                <input type="text" name="numero" class="form-control rounded-pill text-center" id="InputNumero" placeholder="Número">
                            </div>

                            <div class="form-group">
                                <div class="row d-flex justify-content-center p-2">
                                    <div class= "col-5">
                                        <input type="text" name="estado" class="form-control rounded-pill text-center bg-white" id="InputEstado" placeholder="SP" readonly>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" name="cidade" class="form-control rounded-pill text-center bg-white" id="InputCidade" placeholder="São Paulo" readonly>
                                    </div>
                                </div>
                                <!--Para adicionar arquivos no form-->
                                <!--<div class="form-group">
                                    <div class="row d-flex justify-content-center m-2">
                                        <div class="col-12">
                                    <label for="FormControlFile">Adicione fotos do local</label>
                                    <small><input type="file" class="form-control-file" id="FormControlFile"></small> <br>
                                  </div>-->

                            <div class="form-group">
                                <div class="row justify-content-center"> 
                                    <div class="col-12">
                                        <div class="mx-auto" style="width: 200px;">
                                            <button type="submit" class="btn btn-warning rounded-pill m-0 p-4">Sinalize este imóvel!</button>
                            </div>
                        </form>
                    </div>
        </main>
    
        <footer>
            <?php 
            include('../components/footer.html')
            ?>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>