<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto de Estudios Histórico-Marítimos del Perú | IEHMP</title>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

    <meta name="title" content="Instituto de Estudios Histórico-Marítimos del Perú | IEHMP" />
    <meta name="description" content="Instituto de Estudios Histórico-Marítimos del Perú, I.E.H.M.P. Historia Naval, estratégico y científico sobre el mar, ríos y lagos del Perú el Poder Marítimo." />
    <meta name="keywords" content="instituto de estudios histórico marítimos del perú,i.e.h.m.p.,iehmp,Poder Marítimo,historia naval,historia maritima,publicaciones maritimas,publicaciones navales,historia de la navegacion maritima,historia de la navegación marítima resumen,historia de los transportes maritimos,maritima,maritimos,organizacion internacional maritima" />
    <meta name="author" content="IEHMP" />
    <meta name="distribution" content="global" />
    <meta name="robots" content="all" />
    <html lang="es">
    <meta name="image" content="https://www.iehmp.org.pe/images/sin-foto.jpg">

    <meta property="og:title" content="Instituto de Estudios Histórico-Marítimos del Perú | IEHMP" />
    <meta property="og:description" content="Instituto de Estudios Histórico-Marítimos del Perú, I.E.H.M.P. Historia Naval, estratégico y científico sobre el mar, ríos y lagos del Perú el Poder Marítimo." />
    <meta property="og:keywords" content="instituto de estudios histórico marítimos del perú,i.e.h.m.p.,iehmp,historia naval,Poder Marítimo,historia maritima,publicaciones maritimas,publicaciones navales,historia de la navegacion maritima,historia de la navegación marítima resumen,historia de los transportes maritimos,maritima,maritimos,organizacion internacional maritima" />
    <meta property="og:locale" content="es" />
    <meta property="og:image" itemprop="image" content="https://www.iehmp.org.pe/images/sin-foto.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Instituto de Estudios Histórico-Marítimos del Perú, I.E.H.M.P. Historia Naval, estratégico y científico sobre el mar, ríos y lagos del Perú el Poder Marítimo.">
    <meta name="twitter:site" content="@IEHMP">
    <meta name="twitter:title" content="Instituto de Estudios Histórico-Marítimos del Perú | IEHMP">
    <meta name="twitter:description" content="Instituto de Estudios Histórico-Marítimos del Perú, I.E.H.M.P. Historia Naval, estratégico y científico sobre el mar, ríos y lagos del Perú el Poder Marítimo.">
    <meta name="twitter:creator" content="@IEHMP">
    <!-- Twitter Summary card images must be at least 200x200px -->
    <meta property="og:image" itemprop="image" content="https://www.iehmp.org.pe/images/sin-foto.jpg">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <!-- CSS PROPIO -->
    <link href="style.css" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YM8CH092M3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-YM8CH092M3');
    </script>
</head>
<body>
    
    
    <?php 
        include 'modulos_iehmp/cabecera.php';
    ?>
    <main>
        <div class="container">
            <h1>Repositorio Fotográfico</h1>
                  <form action="resultados.php" method="POST" class="form-busqueda">
                 <input type="text" name="buscar" placeholder="Busca fotos de buques, Cruceros, Cadetes, Presidente entre otros..">
                 <button type="submit"><img src="./icons/search.svg" alt="Buscar"></button>
            </form>
        </div>
    </main>
    <section class="slider">
            <img src="./uploads/G-061.jpg" alt="">
            <img src="./uploads/G-062.jpg" alt="">
            <img src="./uploads/G-067.jpg" alt="">
            <img src="./uploads/G-063.jpg" alt="">
            <img src="./uploads/G-064.jpg" alt="">
            <img src="./uploads/G-073-2.jpg" alt="">
            <img src="./uploads/G-054-3.jpg" alt="">
            <img src="./uploads/G-051.jpg" alt="">
    </section>
   
    
   
    <footer>
       <?php 
        include 'modulos_iehmp/pie.php';
    ?>  
        
    </footer>
</body>
</html>