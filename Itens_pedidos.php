<?php

class itens_pedidos{

private $NumeroPedido
private $Codigoproduto
private $PrecoUnitario
private $Quantidade
private $Desconto
}


function _construct($NumeroPedido, $Codigoproduto,$PrecoUnitario, $Quantidade, $Desconto){



    $this -> NumeroPedido =  $NumeroPedido;
    $this -> Codigoproduto = $Codigoproduto;
    $this -> Quantidade = $Quantidade;
    $this -> Desconto = $Desconto;
}
?> 