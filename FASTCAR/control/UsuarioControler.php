<?php

require_once '../model/DAO/UsuarioDAO.php';
require_once '../model/DTO/UsuarioDTO.php';
// require_once '../view/cadastro.php';

//receber os dados do formulario

$nomeUsuario = $_POST["nomeUsu"];
$cpfCnpjUsuario = $_POST["cpfCnpjUsu"];
$dataNascimentoUsuario = $_POST["dtNascimentoUsu"];
$telefoneWhatsAppUsuario = $_POST["telefoneWhatsAppUsu"];
$cnhUsuario = $_POST["cnhUsu"];
$emailUsuario = $_POST["emailUsu"];
$cepUsuario = $_POST["cepUsu"];
$enderecoUsuario = $_POST["enderecoUsu"];
$bairroUsuario = $_POST["bairroUsu"];
$cidadeUsuario = $_POST["cidadeUsu"];
$senhaUsuario = $_POST["senhaUsu"];
$generoUsuario = $_POST["generoUsu"];
$situacaoUsuario = $_POST["situacaoUsu"];
$perfilUsuario = $_POST["perfilUsu"];

//criar o objeto DTO para armazenar os dados do formulário
    $usuarioDTO = new UsuarioDTO();

    $UsuarioDTO->setNomeUsu($nomeUsuario);
    $UsuarioDTO->setCpfCnpjUsu($cpfUsuario);
    $UsuarioDTO->setdtNascimentoUsu($dataNascimentoUsuario);
    $UsuarioDTO->settelefoneWhatsAppUsu($telefoneWhatsAppUsuario);
    $UsuarioDTO->setcnhUsu($cnhUsuario);
    $UsuarioDTO->setemailUsu($emailUsuario);
    $UsuarioDTO->setcepUsu($cepUsuario);
    $UsuarioDTO->setenderecoUsu($enderecoUsuario);
    $UsuarioDTO->setbairroUsu($bairroUsuario);
    $UsuarioDTO->setcidadeUsu($cidadeUsuario);
    $UsuarioDTO->setsenhaUsu($senhaUsuario);
    $UsuarioDTO->setgeneroUsu($generoUsuario);
    $UsuarioDTO->setsituacaoUsu($situacaoUsuario);
    $UsuarioDTO->setperfilUsu($perfilUsuario);

    // criar objeto que gravara os dados no banco

    $usuarioDAO = new UsuarioDAO();

    $sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);

    if($sucesso){
        $msg = "cadastro Realizado";

    }else{
        $msg = "Cadastro não realizado";
    }
echo "{$msg}";


