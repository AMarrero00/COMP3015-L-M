<?php
    $product = $data['product'];
?>
<?php if ($product): ?>
    <h1><?php echo $product['nombre']; ?></h1>
    <p>Suplidor: <?php echo $product['suplidor']; ?></p>
    <p>Cantidad:<?php echo $product['cantidad']; ?></p>
    <p>Precio: <?php echo $product['Precio']; ?></p>
    <!-- Más detalles del usuario aquí -->
<?php else: ?>
    <p>Producto no encontrado.</p>
<?php endif; ?>