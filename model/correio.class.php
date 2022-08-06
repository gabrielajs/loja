<?php

class Correio extends Conexao
{
    /** url base da api */
    const URL_BASE = 'http://ws.correios.com.br';

    /** Códigos de serviço dos correios */
    const SERVICO_SEDEX = "04014";
    const SERVICO_SEDEX_12 = "04782";
    const SERVICO_SEDEX_10 = "04790";
    const SERVICO_SEDEX_HOJE = "04804";
    const SERVICO_PAC = "04510";

    const CEP_ORIGEM = "14403615";

    /** Códigos formato do pacote para envio */
    const FORMATO_CAIXA_PACOTE = 1;
    const FORMATO_ROLO_PRISMA = 2;
    const FORMATO_ENVELOPE = 3;

    private $codigoEmpresa = "";
    private $senhaEmpresa = "";

    /** Definição dos dados de contrato dos webservice dos correios*/
    function __construct($codigoEmpresa = "", $senhaEmpresa = "")
    {
        $this->codigoEmpresa = $codigoEmpresa;
        $this->senhaEmpresa = $senhaEmpresa;
    }

    function calcularFrete($codigoServico, $cepDestino, $peso, $formato = 1, $comprimento, $altura, $largura, $diametro = 0, $maoPropria = 'N', $valorDeclarado = 0, $avisoRecebimento = 'N')
    {
        var_dump($codigoServico, $cepDestino);
    }

    /** executa a consulta get no webservice */
    function consultaCorreio($resources)
    {
        $endpoint = self::URL_BASE . $resources;

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_PUT => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return strlen($response) ? simplexml_load_string($response) : null;
    }
}
