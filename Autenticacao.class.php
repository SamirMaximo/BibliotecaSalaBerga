<?php
    Class Autenticacao{
        var $rg=null;
        var $senha=null;
        var $cpf=null;
        var $email=null;
        
        public function __construct($rg,$senha,$cpf,$email){
            $this->rg = $rg;
            $this->senha = $senha;
            $this->cpf = $cpf;
            $this->email= $email;
        }

        public function getNome(){
            return $this->rg;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function getMatricula(){
            return $this->cpf;
        }

        public function getEmail(){
            return $this->email;
        }

    }
?>