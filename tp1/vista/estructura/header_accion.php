<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico 1</title>
    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header-container {
            background-color: #e9ecef;
            padding: 1rem 0;
            margin-bottom: 1rem;
            text-align: center;
        }
        /* usamos bien el directorio para no manosear los h1 fuera del header */
        .header-container h1 {
            margin: 0;
            font-size: 2.5rem;
            color: black;
        }

        .header-container h2 {
            padding-top: 0.5rem;
            margin: 0;
            font-size: 1.5rem;
            color: darkgrey;
        }

        .header-container a {
            text-decoration: none;
        }
        
    </style>
</head>
<body>
    <header class="header-container">
        <a href="../../../index.php">
        <h1>Trabajo Practico 1</h1>
        <h2>Ejercicio <?php echo htmlspecialchars($numeroEjercicio); ?></h2></a>
    </header>
</body>
</html>
