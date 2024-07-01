<?php

class pedidos {

private $CodigoCliente
private $Codigofuncionario
private $Datadopedido
private $DatadeEntrega
private $DataDeEnvio
private $Frete
private $Nomedestinatario
private $Endereçodestinatario
private $Cidadededestino
private $CepdeDestino
private $PaisdeDestino
}


function _construct($CodigoCliente, $Codigofuncionario, $Datadopedido, $DatadeEntrega, $DataDeEnvio, $Frete, $Nomedestinatario, $Endereçodestinatario,  $Cidadededestino, $CepdeDestino, $PaisdeDestino) {

    $this -> CodigoCliente = $CodigoCliente;
    $this -> Codigofuncionario = $Codigofuncionario;
    $this -> Datadopedido = $Datadopedido;
    $this -> DatadeEntrega = $DatadeEntrega;
    $this -> DataDeEnvio= $DataDeEnvio;
    $this -> Frete = $Frete;
    $this -> Nomedestinatario = $Nomedestinatario;
    
    $this -> Endereçodestinatario= $Endereçodestinatario;
    $this -> Cidadededestino = $Cidadededestino;
    $this -> CepdeDestino = $CepdeDestino;
    $this -> PaisdeDestino = $PaisdeDestino;




}



?>