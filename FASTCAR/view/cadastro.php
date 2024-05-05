<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Car</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/911-porscha" rel="stylesheet">
    <link rel="shoutcut icon" href="../imagens/Logo.png" type="image/x-icon">
</head>
<body>

        <header class="header">
        <nav>
            <p>FASTCAR</p>
        </nav>

        <nav class="navbar">
            <a href="../index.php" style="--i:1;">Inicio</a>
            <a href="veiculos.php"style="--i:2;">Veículos</a>
            <a href="cadastro.php" style="--i:3;" class="active" >Cadastro</a>  
            
            
        </nav>
        <div class="informs">
            <img src="../imagens/shopping-cart_icon-icons.com_72552.svg" alt=""> <span class="numero-carrinho">0</span>
            <img src="../imagens/perfil-foto.jpg" alt="">

        </div>
        </header>



        <div class="form">
            <form action="../control/UsuarioControler.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1 class="h1-title">Cadastra-se</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="Nome">Nome</label>
                        <input id="Name" type="text" name="nomeUsu" placeholder="Digite seu Nome" required>
                    </div>

                    <div class="input-box">
                        <label for="CPF">CPF ou CNPJ</label>
                        <input id="cpfCnpj" type="text" name="cpfCnpjUsu" placeholder="Digite seu CPF ou CNPJ" required >
                    </div>

                    <div class="input-box">
                        <label for="Dt">Data de Nascimento</label>
                        <input id="Dt" type="date" name="dtNascimentoUsu" placeholder="Digite sua Data de Nascimento" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" class="tel" type="tel" name="telefoneWhatsAppUsu" placeholder="(00) 0000-0000" required maxlength="14">
                    </div>

                    <div class="input-box">
                        <label for="CNH">CNH</label>
                        <input id="CNH" type="CNH" name="cnhUsu" placeholder="Digite sua CNH" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="emailUsu" placeholder="Digite seu email" required>
                    </div>

                    <div class="input-box">
                        <label for="CEP">CEP</label>
                        <input id="CEP" type="text" name="cepUsu" placeholder="Digite seu CEP" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="Endereco">Endereço</label>
                        <input id="Endereco" type="text" name="enderecoUsu" placeholder="Digite seu Endereço" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="Bairro">Bairro</label>
                        <input id="Bairro" type="text" name="bairroUsu" placeholder="Digite seu Bairro" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="Cidade">Cidade</label>
                        <input id="Cidade" type="text" name="cidadeUsu" placeholder="Digite seu Cidade" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senhaUsu" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confimpassword">Confirme sua senha</label>
                        <input id="confimpassword" type="password" name="confimpassword" placeholder="Digite sua senha" required>
                    </div>

                    <div class="gender-inputs">
                        <div class="gender-title">
                            <h6>Gênero</h6>
                        </div>

                        <div class="gender-group">
                            <div class="gender-input">
                                    <input type="radio" id="female" name="generoUsu">
                                    <label for="female">Feminino</label>
                            </div>

                           
                                <div class="gender-input">
                                        <input type="radio" id="male" name="generoUsu">
                                        <label for="male">Masculino</label>
                                </div>

                                        <div class="gender-input">
                                                <input type="radio" id="none" name="generoUsu">
                                                <label for="none">Prefiro não dizer </label><br>
                                </div>
                        </div>
                    </div>

                    <div class="continue-button">
                        <button><a href="#">Cadastrar</a></button>
                    </div>

                <input type="hidden" name="situacaoUsu">
                <input type="hidden" name="perfilUsu">
            </div>
        </form>
    </div>

    
 
    


        <script src="js/cadastro.js"></script>
</body>
</html>