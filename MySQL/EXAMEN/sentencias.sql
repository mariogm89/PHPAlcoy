-- Listado clientes con sus datos bancarios
SELECT clientes.nombre, cc.entidad, cc.sucursal, cc.dc, cc.cuenta 
FROM clientes 
JOIN cc ON idclientes = clientes_idclientes;

-- Listado de pedidos de un cliente
SELECT clientes.nombre, detalles.*, producto.nombre 
FROM clientes 
JOIN pedido ON clientes.idclientes = pedido.clientes_idclientes 
JOIN detalles ON pedido.idpedido = detalles.pedido_idpedido 
JOIN producto ON detalles.producto_idproducto = producto.idproducto 
WHERE clientes.idclientes like 1;

-- Listado de pedidos con el importe total
SELECT pedido.*, SUM(precio) AS 'Total pedido' 
FROM pedido JOIN detalles ON pedido.idpedido = detalles.pedido_idpedido 
GROUP BY pedido.idpedido;

-- Listado de clientes junto con el importe total de sus pedidos
SELECT clientes.nombre, COUNT(*) AS 'Total de pedidos', SUM(precio) AS 'Precio total de pedidos' 
FROM clientes 
JOIN pedido ON clientes.idclientes = pedido.clientes_idclientes 
JOIN detalles ON pedido.idpedido = detalles.pedido_idpedido 
GROUP BY clientes.idclientes;