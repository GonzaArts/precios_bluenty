<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculadora de Precios</title>
</head>

<body>

    <div class="container">
        <div class="logo">
            <img src="https://www.bluenty.com/media/menus/submenu/icon/bluenty-logo.webp" alt="Bluenty Logo">
        </div>
        <h1>Calculadora de Precios</h1>

        <section class="information">
            <h2>Información de IVA</h2>
            <p>Gafas graduadas: 10%</p>
            <p>Gafas de sol: 21%</p>
            <p>Gafas Deportivas: 10%</p>
            <p>Lentillas: 10%</p>
        </section>

        <section class="calculator">
            <h2>Calculadora</h2>
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
                $iva = $_POST['iva'] / 100;

                // Descontar el 30%
                $precio_descontado = $precio * 0.70;

                // Aplicar el IVA
                $precio_final = $precio_descontado * (1 + $iva);

                echo "<div class='result'>El precio final es: " . number_format($precio_final, 2) . " €</div>";
            }
            ?>
        </section>
    </div>

</body>

</html>