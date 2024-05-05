<?php
require_once '../model/DTO/Conexao.php';
require_once '../model/DTO/UsuarioDTO.php';

class UsuarioDAO{
        public $pdo = null;

        public function __construct(){
            $this->pdo = Conexao::getInstance();

        }
        public function salvarUsuario (UsuarioDTO $usuarioDTO){

            try{
            $sql = "INSERT INTO usuario (nomeUsu, cpfCnpjUsu, dtNascimentoUsu, telefoneWhatsAppUsu, cnhUsu, emailUsu, cepUsu, enderecoUsu, bairroUsu, cidadeUsu, senhaUsu, generoUsu, situacaoUsu, perfilUsu,) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmt = $this->pdo->prepare($sql);

            $nomeUsu = $usuarioDTO->getnomeUsu();
            $cpfCnpjUsu = $usuarioDTO->getcpfCnpjUsu();
            $dtNascimentoUsu = $usuarioDTO->getdtNascimentoUsu();
            $telefoneWhatsAppUsu = $usuarioDTO->gettelefoneWhatsAppUsu();
            $cnhUsu = $usuarioDTO->getcnhUsu();
            $emailUsu = $usuarioDTO->getemailUsu();
            $cepUsu = $usuarioDTO->getcepUsu();
            $enderecoUsu = $usuarioDTO->getenderecoUsu();
            $bairroUsu = $usuarioDTO->getbairroUsu();
            $cidadeUsu = $usuarioDTO->getcidadeUsu();
            $senhaUsu = $usuarioDTO->getsenhaUsu();
            $generoUsu = $usuarioDTO->getgeneroUsu();
            $situacaoUsu = $usuarioDTO->getsituacaoUsu();
            $perfilUsu = $usuarioDTO->getperfilUsu();


            $stmt->bindValue(1, $nomeUsu);
            $stmt->bindValue(2, $cpfCnpjUsu);
            $stmt->bindValue(3, $dtNascimentoUsu);
            $stmt->bindValue(4, $telefoneWhatsAppUsu);
            $stmt->bindValue(5, $cnhUsu);
            $stmt->bindValue(6, $emailUsu);
            $stmt->bindValue(7, $cepUsu);
            $stmt->bindValue(8, $enderecoUsu);
            $stmt->bindValue(9, $bairroUsu);
            $stmt->bindValue(10, $cidadeUsu);
            $stmt->bindValue(11, $senhaUsu);
            $stmt->bindValue(12, $generoUsu);
            $stmt->bindValue(13, $situacaoUsu);
            $stmt->bindValue(14, $perfilUsu);

            $retorno = $stmt->execute();

            return $retorno;
            }catch(PDOException $exc){
                // echo $exc->getMenssage();
            }

        
        }
        
}


?>



