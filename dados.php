<?php

$dados = array(
    array("user" => 'Avz', "senha" => '123', "nome" => 'arthur', "email" => 'arthur@email.com', "cpf" => '457.364.000-00'),
    array("user" => 'DGO', "senha" => '123', "nome" => 'diego', "email" => 'diego@email.com', "cpf" => '375.029.000-00'),
    array("user" => 'Valk', "senha" => '123', "nome" => 'pedro', "email" => 'pedro@email.com', "cpf" => '245.285.000-00'),
    array("user" => 'Alek', "senha" => '123', "nome" => 'alek', "email" => 'alek@email.com', "cpf" => '294.895.000-00'),
    array("user" => 'Shorin', "senha" => '123', "nome" => 'joao', "email" => 'joao@email.com', "cpf" => '723.625.000-00')
);

class UsuarioLog{
    protected $user;
    protected $senha;
    protected $nome;
    protected $email;
    protected $cpf;

    public function __construct($user, $senha, $nome, $email, $cpf){
        $this->user = $user;
        $this->senha = $senha;
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
    }
}
