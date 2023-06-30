<?php
require_once 'modelos/pedidoCompra.php';
require_once 'modelos/producto.php';
require_once 'modelos/proveedor.php';
require_once 'modelos/lineaCompra.php';


$prv = new Proveedor();
$prv->Id = 1;
$prv->Descipcion = 'Empresa de galletitas';

$prd1 = new Producto();
$prd1->Codigo = 4224;
$prd1->Descripcion = 'Cookies';
$prd1->Precio = 19800;

$prd2 = new Producto();
$prd2->Codigo = 2002;
$prd2->Descripcion = 'Oreos';
$prd2->Precio = 26400;

$lc1 = new LineaCompra();
$lc1->Cantidad = 22 ;
$lc1->CostoUnitario = 900;
$lc1->EstadoPedido = 'si';
$lc1->Producto = $prd1;

$lc2 = new LineaCompra();
$lc2->Cantidad = 22;
$lc2->CostoUnitario = 1200;
$lc2->EstadoPedido= 'no';
$lc2->Producto = $prd2;

$pd = new PedidoCompra();
$pd->Fecha = '10/06/2023';
$pd->Proveedor = $prv;
$pd->FechaEntrega = '30/06/2023';
$pd->CostoTotal=46200;
$pd->PedidoCerrado=false;
$pd->LineaCompra [] =$lc1;
$pd->LineaCompra [] = $lc2;

$pd->MostrarDatos();