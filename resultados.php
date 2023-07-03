<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="./resultados.css">
    <title>Resultados</title>
    <!-- Javascript -->
</head>
<body>
    <div>
        <?php include 'modulos_iehmp/cabecera.php'; ?>
    </div>
    <header>
        <div class="buscador">
            <h1>Repositorio Fotográfico</h1>
            <form action="resultados.php" method="POST" class="form-busqueda">
                 <input type="text" name="buscar" placeholder="Busca fotos">
                 <button type="submit"><img src="./icons/search.svg" alt="Buscar"></button>
            </form>
        </div>
    </header>
    <main>
        <h1 class="encabezado">Resultados</h1>
        <?php 
            include 'buscador.php';
            while ($row = mysqli_fetch_array($sql_query)){
        ?>
        <section class="container">
            <!-- Info del container -->
            <div class="info">
                <div class="titulo">
                    <strong>Título:</strong> <?= $row['titulo'] ?>
                </div>
                <div class="año">
                    <strong>Año:</strong> <?= $row['año'] ?>
                </div>
                <?php if (!empty($row['fotografo'])) { ?>
                    <div class="fotografo">
                        <strong>Fotógrafo:</strong> <?= $row['fotografo'] ?>
                    </div>
                <?php } ?>
                 <div class="codigo">
                    <strong>Código:</strong> <?= $row['codigo'] ?>
                </div>
                <section class="botones">
                    <a href="resultados-finales.php?id=<?= $row['id'] ?>">
                    <button type="button" class="b_abrir" > 
                        <span>Ver Detalles</span>
                    </button>
                    </a>
                    <a href="#">
                    <button type="button" class="b_adquirir" > 
                        <span>Adquirir</span>
                    </button>
                    </a>
                </section>
            </div>
           
            <!--Fin de Info del container -->
            <div class="imagen">
                <img src="uploads<?php echo substr($row['imagen'], 7); ?>" alt="">
            </div>
        </section>
        <?php
            }
        ?>
    </main>
    <footer>
       <?php include 'modulos_iehmp/pie.php'; ?>  
    </footer>
</body>
</html>
