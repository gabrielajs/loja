<?php

class Clientes extends Conexao
{
    private $nome;
    private $sobrenome;
    private $dataNasc;
    private $rg;
    private $cpf;
    private $telCelular;
    private $email;
    private $cep;
    private $endereco;
    private $bairro;
    private $numero;
    private $cidade;
    private $estado;
    private $senha;
    private $dataCadas;
    private $horaCadas;

    function __construct()
    {
        parent::__construct();
    }

    //BUSCAR CPF DO CLIENTE JÁ EXISTE
    function verificaCPF($cpf)
    {
        $query = "SELECT cpf_cliente FROM {$this->prefix}cliente WHERE cpf_cliente = :cpf";
        $params = array(':cpf' => $cpf);
        $this->executeSql($query, $params);
        return $this->totalDados();
    }

    //BUSCA EMAIL DO CLIENTE JÁ EXISTE
    function verificaEmail($email)
    {
        $query = "SELECT email_cliente FROM {$this->prefix}cliente WHERE email_cliente = :email";
        $params = array(':email' => $email);
        $this->executeSql($query, $params);
        return $this->totalDados();
    }

    //function preparar($nome, $sobrenome, $dataNasc, $rg, $cpf, $telCelular, $email, $cep, $endereco, $bairro, $numero, $cidade, $estado, $senha)
    function preparar($nome, $sobrenome, $endereco, $numero, $bairro, $estado, $cidade, $cep, $cpf, $rg, $telCelular, $email, $senha, $dataNasc, $dataCadas, $horaCadas)
    {
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setDataNasc($dataNasc);
        $this->setRg($rg);
        $this->setCpf($cpf);
        $this->setTelCelular($telCelular);
        $this->setEmail($email);
        $this->setCep($cep);
        $this->setEndereco($endereco);
        $this->setBairro($bairro);
        $this->setNumero($numero);
        $this->setCidade($cidade);
        $this->setEstado($estado);
        $this->setSenha($senha);
        $this->setDataCadas($dataCadas);
        $this->setHoraCadas($horaCadas);
    }

    function inserir()
    {
        //VERIFICA SE ESTÁ CADASTRADO O CPF, CASO NÃO TIVER CONTINUA O CADASTRO
        if ($this->verificaCPF($this->getCpf()) > 0) :
            echo '<div class="alert alert-danger">CPF já cadastrado, <a href="#">clique aqui</a> para recuperar sua senha!</div>';
            exit();
        elseif ($this->verificaEmail($this->getEmail()) > 0) :
            echo '<div class="alert alert-danger">E-MAIL já cadastrado, <a href="#">clique aqui</a> para recuperar sua senha!</div>';
            exit();
        else :
            $query = "INSERT INTO {$this->prefix}cliente (nome_cliente,sobrenome_cliente,endereco_cliente,numero_cliente,bairro_cliente,uf_cliente,cidade_cliente,cep_cliente,cpf_cliente,rg_cliente,celular_cliente,email_cliente,senha_cliente,dataNasc_cliente,dataCadas_cliente,horaCadas_cliente)
            VALUES (:nome,:sobrenome,:endereco,:numero,:bairro,:estado,:cidade,:cep,:cpf,:rg,:telCelular,:email,:senha,:dataNasc,:dataCadas,:horaCadas)";

            $params = array(
                ':nome' => $this->getNome(),
                ':sobrenome' => $this->getSobrenome(),
                ':endereco' => $this->getEndereco(),
                ':numero' => $this->getNumero(),
                ':bairro' => $this->getBairro(),
                ':estado' => $this->getEstado(),
                ':cidade' => $this->getCidade(),
                ':cep' => $this->getCep(),
                ':cpf' => $this->getCpf(),
                ':rg' => $this->getRg(),
                ':telCelular' => $this->getTelCelular(),
                ':email' => $this->getEmail(),
                ':senha' => $this->getSenha(),
                ':dataNasc' => $this->getDataNasc(),
                ':dataCadas' => $this->getDataCadas(),
                ':horaCadas' => $this->getHoraCadas()
            );

            $this->executeSql($query, $params);
        endif;
    }


    // INICIO GET E SET
    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getSobrenome()
    {
        return $this->sobrenome;
    }

    function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    function getDataNasc()
    {
        return $this->dataNasc;
    }

    function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;
    }

    function getRg()
    {
        return $this->rg;
    }

    function setRg($rg)
    {
        $this->rg = $rg;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function getTelCelular()
    {
        return $this->telCelular;
    }

    function setTelCelular($telCelular)
    {
        $this->telCelular = $telCelular;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getCep()
    {
        return $this->cep;
    }

    function setCep($cep)
    {
        $this->cep = $cep;
    }

    function getEndereco()
    {
        return $this->endereco;
    }

    function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    function getBairro()
    {
        return $this->bairro;
    }

    function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    function getNumero()
    {
        return $this->numero;
    }

    function setNumero($numero)
    {
        $this->numero = $numero;
    }

    function getCidade()
    {
        return $this->cidade;
    }

    function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    function getEstado()
    {
        return $this->estado;
    }

    function setEstado($estado)
    {
        $this->estado = $estado;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function getDataCadas()
    {
        return $this->dataCadas;
    }

    function setDataCadas($dataCadas)
    {
        $this->dataCadas = $dataCadas;
    }

    function getHoraCadas()
    {
        return $this->horaCadas;
    }

    function setHoraCadas($horaCadas)
    {
        $this->horaCadas = $horaCadas;
    }

    //FIM SET E SET
}
