<?php
/**Además tiene una colección de líneas de compra. 
Cada una de las líneas de compra, 
tiene un producto, 
una cantidad, 
un costo unitario 
y una bandera que indica si fue entregado.(FueEntregado[si-no])*/

class LineaCompra {
    public $Producto;
    public $Cantidad;
    public $CostoUnitario;
    public $EstadoPedido;
}