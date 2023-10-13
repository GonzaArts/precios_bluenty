<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculador de precio</title>
</head>
<body>

<div class="container">
    <h1>Calculador de precio</h1>

    <form method="POST" action="">
        <label for="precio">Precio recomendado:</label>
        <input type="text" name="precio" required><br>

        <label for="iva">IVA (%):</label>
        <input type="text" name="iva" required><br>

        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $precio = $_POST['precio'];
        $iva = $_POST['iva'];

        // Descontar el 30%
        $precio_descontado = $precio * 0.70;

        // Restar el IVA
        $precio_final = $precio_descontado / (1 + $iva / 100);

        echo "<div class='result'>El precio final es: " . number_format($precio_final, 2) . " €</div>";
    }
    ?>
</div>

</body>
</html>

