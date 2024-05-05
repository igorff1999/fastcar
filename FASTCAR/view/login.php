<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fast Car</title>
        <link rel="stylesheet" href="../css/login.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
            rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/911-porscha"
            rel="stylesheet">
        <link rel="shoutcut icon" href="../imagens/Logo.png" type="image/x-icon">
    </head>
    <body>

        <form action="login.html", action="index.html", active="veiculos.html",
            active="alugue.html" method="POST">
            <header class="header">
                <nav>
                    <p>FASTCAR</p>
                </nav>

                <nav class="navbar">
                    <a href="../index.php" style="--i:1;">Inicio</a>
                    <a href="veiculos.php" style="--i:2;">Veículos</a>
                    <a href="login.php" style="--i:3;" class="active">Login</a> 
                </nav>
                <div class="informs">
                    <img src="../imagens/shopping-cart_icon-icons.com_72552.svg"
                        alt=""> <span>0</span>
                    <img src="../imagens/perfil-foto.jpg" alt="">

                </div>

            </header>
            <section class="home">
                <div class="home-img">
                    <div class="rhombus">
                        <img src="../imagens/porshe2.png" alt="">
                    </div>
                </div>

                <div class="rhombus2"></div>
            </section>
            <div class="wrapper">
                <form action="">
                    <h1>Login</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Nome"
                            required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="password"
                            placeholder="Senha" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Lembrar-me </label>
                        <a href="#">Esqueceu a senha?</a>
                    </div>

                    <button type="sumit" class="btn">Login</button>

                    <div class="register-link">
                        <p> Não tem Cadastro? <a href="cadastro.php"> Registrar</a></p>
                    </div>
                </form>
            </body>

        </html>