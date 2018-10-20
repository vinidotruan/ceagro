<?php
namespace Conection;

use \PDO;

class Conexao {
    private $user = 'root';
    private $pass = '';

    public function a(){
            $conexao = new PDO('mysql:host=localhost;dbname=ceagro', $this->user, $this->pass);

            $consulta = $conexao->query("SELECT `nome`, `telefone`, `email` FROM dados;");
            $consulta->fetch(PDO::FETCH_ASSOC);

            return $consulta;
    } 
}
