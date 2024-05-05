<?php

    class UsuarioDTO {
        private $nomeUsu;
        private $cpfCnpjUsu;
        private $dtNascimentoUsu;
        private $telefoneWhatsappUsu;
        private $cnhUsu;
        private $emailUsu;
        private $cepUsu;
        private $enderecoUsu;
        private $bairroUsu;
        private $cidadeUsu;
        private $generoUsu;
        private $senhaUsu;
        private $situacaoUsu;
        private $perfilUsu;

        public function setNomeUsu($nomeUsu){
            $this->nomeUsu = $nomeUsu;
        }
        public function getNomeUsu(){
            return $this->nomeUsu;
        }

        public function setcpfCnpjUsu($cpfCnpjUsu){
            $this->cpfCnpjUsu = $cpfCnpjUsu;
        }
        public function getcpfCnpjUsu(){
            return $this->cpfCnpjUsu;
        }

        public function setdtNascimentoUsu($dtNascimentoUsu){
            $this->dtNascimentoUsu = $dtNascimentoUsu;
        }
        public function getdtNascimentoUsu(){
            return $this->dtNascimentoUsu;
        }

        public function settelefoneWhatsappUsu($telefoneWhatsappUsu){
            $this->telefoneWhatsappUsu = $telefoneWhatsappUsu;
        }
        public function gettelefoneWhatsappUsu(){
            return $this->telefoneWhatsappUsu;
        }

        public function setcnhUsu($cnhUsu){
            $this->cnhUsu = $cnhUsu;
        }
        public function getcnhUsu(){
            return $this->cnhUsu;
        }

        public function setemailUsu($emailUsu){
            $this->emailUsu = $emailUsu;
        }
        public function getemailUsu(){
            return $this->emailUsu;
        }

        public function setcepUsu($cepUsu){
            $this->cepUsu = $cepUsu;
        }
        public function getcepUsu(){
            return $this->cepUsu;
        }

        public function setenderecoUsu($enderecoUsu){
            $this->enderecoUsu = $enderecoUsu;
        }
        public function getenderecoUsu(){
            return $this->enderecoUsu;
        }

        public function setbairroUsu($bairroUsu){
            $this->bairroUsu = $bairroUsu;
        }
        public function getbairroUsu(){
            return $this->bairroUsu;
        }

        public function setcidadeUsu($cidadeUsu){
            $this->cidadeUsu = $cidadeUsu;
        }
        public function getcidadeUsu(){
            return $this->cidadeUsu;
        }

        public function setgeneroUsu($generoUsu){
            $this->generoUsu = $generoUsu;
        }
        public function getgeneroUsu(){
            return $this->generoUsu;
        }

        public function setsenhaUsu($senhaUsu){
            $this->senhaUsu = $senhaUsu;
        }
        public function getsenhaUsu(){
            return $this->senhaUsu;
        }

        public function setsituacaoUsu($situacaoUsu){
            $this->situacaoUsu = $situacaoUsu;
        }
        public function getsituacaoUsu(){
            return $this->situacaoUsu;
        }

        public function setperfilUsu($perfilUsu){
            $this->perfilUsu = $perfilUsu;
        }
        public function getperfilUsu(){
            return $this->perfilUsu;
        }
    }
    ?>