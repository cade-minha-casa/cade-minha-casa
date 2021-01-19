<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="icon" href="./image/logo.png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;600&display=swap" rel="stylesheet">
    </head>

    <body id="login"> 
            <header>
                <!-- topo do site -->
                <?php
                    include('navBar2.html')
                ?>
            </header>
            <main id="background">
                <div class="container d-flex justify-content-center ">
                    <div class="card border-light p-3 m-5 b-6" style="max-width: 32rem; border-radius: 40px">

                    <form action="login_user.php" method="POST">

                        <div class="form-group">
                            <div class="row justify-content-center"> 
                            <div class="col p-2">
                            <h3 id="InputEmail" class="text-center">Entre na sua conta</h3>

                            <div class="row justify-content-center">
                            <div class="col-10 p-2">
                            <input type="email" class="form-control rounded-pill" id="InputEmail" aria-describedby="email" placeholder="email">
                        </div>
                        <br><br>
                        
                        <div class="form-group">
                        

                            <div class="row justify-content-center"> 
                            <div class="col-10 p-3">
                            <input type="password" class="form-control rounded-pill" id="InputPassword" placeholder="senha">
                        </div>

                        <div class="form-group">
                        <div class="row justify-content-center"> 
                        <div class="col-12">
                            <small id="emailHelp" class="form-text text-muted text-center">Ainda não tem cadastro? <a href="cadastro.php"> Clique aqui!</a></small>
                        </div>
                        
                        <div class="row justify-content-center"> 
                        <div class="col-12">
                        <br><br>
                        <button type="submit" class="btn btn-warning rounded-pill p-4">Clique aqui para entrar</button>
                    </form>
                </div>
                </div>
            </main>
        </body>
        <br><br><br><br>
    <footer>
        <div class="container-fluid ">
        <div class="card-footer text-muted fixed-bottom text-center">     
        <small>Cadê Minha Casa 2021 &copy; Todos os direitos reservados.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    

</html>