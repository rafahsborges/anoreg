<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anoreg - Base de Cartórios</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <style>
        /* Move down content because we have a fixed navbar that is 3.5rem tall */
        body {
            padding-top: 3.5rem;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">Anoreg - Base de Cartórios</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Início <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/importar">Importar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/adicionar">Adicionar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/emails">E-mail</a>
            </li>
        </ul>
    </div>
</nav>

<?php if (isset($GLOBALS['message'])) : ?>

    <div class="alert alert-<?php echo $GLOBALS['type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $GLOBALS['message']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php endif; ?>

<main role="main">

    <?php
    if (isset($viewName)) {
        $path = viewsPath() . $viewName . '.php';
        if (file_exists($path)) {
            require_once $path;
        }
    }
    ?>

    <hr>

</main>

<footer class="container">
    <p>&copy; Anoreg <?php echo date('Y'); ?></p>
</footer>

<script src="/assets/js/jquery-3.4.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.mask.js"></script>
<script src="/assets/js/scripts.js"></script>

<script>
    $('#todos').click(function () {
        if ($(this).is(':checked')) {
            $('#destinatario option').prop('selected', true);
        } else {
            $('#destinatario option').prop('selected', false);
        }
    });
</script>

</body>
</html>
