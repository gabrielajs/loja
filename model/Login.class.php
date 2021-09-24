<?php

class Login extends Conexao
{
    private $usuario;
    private $senha;

    function __construct()
    {
        parent::__construct();
    }

    function getLogin($usuario, $senha)
    {
        $this->setUsuario($usuario);
        $this->setSenha($senha);

        $query = "SELECT id_cliente, nome_cliente, email_cliente, senha_cliente  FROM {$this->prefix}cliente WHERE email_cliente = :email AND senha_cliente = :senha";
        $params = array(
            ':email' => $this->getUsuario(),
            ':senha' => $this->getSenha()
        );

        $this->executeSql($query, $params);

        if ($this->totalDados() > 0) :
            $lista = $this->listarDados();

            $_SESSION['CLI']['c_id'] = $lista['id_cliente'];
            $_SESSION['CLI']['c_nome'] = $lista['nome_cliente'];
            $_SESSION['CLI']['c_sobrenome'] = $lista['sobrenome_cliente'];
            $_SESSION['CLI']['c_endereco'] = $lista['endereco_cliente'];
            $_SESSION['CLI']['c_numero'] = $lista['numero_cliente'];
            $_SESSION['CLI']['c_bairro'] = $lista['bairro_cliente'];
            $_SESSION['CLI']['c_uf'] = $lista['uf_cliente'];
            $_SESSION['CLI']['c_cidade'] = $lista['cidade_cliente'];
            $_SESSION['CLI']['c_cep'] = $lista['cep_cliente'];
            $_SESSION['CLI']['c_cpf'] = $lista['cpf_cliente'];
            $_SESSION['CLI']['c_rg'] = $lista['rg_cliente'];
            $_SESSION['CLI']['c_celular'] = $lista['celular_cliente'];
            $_SESSION['CLI']['c_email'] = $lista['email_cliente'];
            $_SESSION['CLI']['c_dataNasc'] = $lista['dataNasc_cliente'];
            $_SESSION['CLI']['c_uf'] = $lista['uf_cliente'];

            Rotas::redirecionar(0, Rotas::pageLogin());
        else :
            echo '<div class="alert alert-danger"> Erro ao realizar login tente novamente mais tarde </div>';
        endif;
    }

    static function logado()
    {
        if (isset($_SESSION['CLI']['c_id'])) :
            return true;
        else :
            return false;
        endif;
    }

    static function logout()
    {
        unset($_SESSION['CLI']);
        Rotas::redirecionar(0, Rotas::getSiteHome());
    }

    function getUsuario()
    {
        return $this->usuario;
    }

    function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function setSenha($senha)
    {
        //$this->senha = Sistema::criptografiaSenha($senha); 
        $this->senha = $senha;
    }
}
