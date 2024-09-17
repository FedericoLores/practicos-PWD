<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico 4</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/validacion.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar bg-body-secondary">
        <div class="container">
            <div class="d-flex flex-column align-items-center w-100">
                <span class="navbar-text display-5 fw-semibold pb-0">
                    <a href="../../indicePrincipal.php" class="text-decoration-none">
                        <p><?php echo $titulo; ?></p>
                    </a>
                </span>
                <span class="navbar-text display-6 pt-0">
                    <a href="../../indicePrincipal.php" class="text-decoration-none">
                        <p><?php echo $ejercicio; ?></p>
                    </a>
                </span>
            </div>
        </div>
    </nav>

    <?php if (isset($descripcion)){?>
    <div class="card mt-3">
        <div class="card-body text-center fs-5">
            <span class="bg-secondary bg-opacity-25">
                <?php echo $descripcion; ?>
            </span>
        </div>
    </div>
    <?php }?>
