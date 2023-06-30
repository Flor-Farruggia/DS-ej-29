<?php
/**Además tiene una colección de líneas de compra. 
Cada una de las líneas de compra, 
tiene un producto, 
una cantidad, 
un costo unitario 
y una bandera que indica si fue entregado.(FueEntregado[si-no])
Y las propiedades del producto, 
código,
descripción, 
precio venta */

class PedidoCompra {
    public $Fecha;
    public $Proveedor;
    public $FechaEntrega;
    public $CostoTotal;
    public $PedidoCerrado;
    public $LineaCompra = array();

    public function MostrarDatos(){
        echo 'Información de pedido de compra: '.'<br>';
        echo 'Fecha: '.$this->Fecha.'<br>';
        echo '**Datos del proveedor: '.'<br>';
        echo '___Id: '.$this->Proveedor->Id.'<br>';
        echo '___Descripción: '.$this->Proveedor->Descripcion.'<br>';
        echo 'Fecha de entrega: '.$this->FechaEntrega.'<br>';
        echo 'Costo Total: '.$this->CostoTotal.'<br>';
        echo 'Pedido cerrado: '.$this->PedidoCerrado.'<hr>';

        foreach ($this->LineaCompra as $lc) {
            echo '**Lista de datos de la linea de compra: '.'<hr>';
            echo 'Cantidad: '.$lc->Cantidad.'<br>';
            echo 'Costo unitario: '.$lc->CostoUnitario.'<br>';
            echo 'Producto entregado: '.$lc->EstadoPedido.'<br>';
            echo '**Datos del producto del pedido: '.'<br>';
            echo '___Código del producto: '.$lc->Producto->Codigo.'<br>';
            echo '___Descripción del producto: '.$lc->Producto->Descripcion.'<br>';
            echo '___Precio de venta: '.$lc->Producto->Precio.'<hr>';
        }
    }
}