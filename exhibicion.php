<?php 
$title = "Exhibición";
$description = "Sitio web del Festival Internacional de Cine de León";
include("inc/seleccionOficial.php");
include("inc/funcionEspecial.php");
?>

<?php include("inc/header.php") ?>
        <div id="content">
            <h1>Selección Oficial</h1>
            <div id="categorias">
                <section>
                    <a href="categoria.php?categoria=largometraje"><div class="categoria"><img src="img/categorias/largometraje.jpg" alt="Largometraje"></div></a>
                    <a href="categoria.php?categoria=cortometraje"><div class="categoria"><img src="img/categorias/cortometraje.jpg" alt="Cortometraje"></div></a>
                    <a href="categoria.php?categoria=documental"><div class="categoria"><img src="img/categorias/documental.jpg" alt="Documental"></div></a>
                </section>
                <section>
                    <a href="categoria.php?categoria=talentoUniversitario"><div class="categoria"><img src="img/categorias/talentoUniversitario.jpg" alt="Talento Universitario"></div></a>
                    <a href="categoria.php?categoria=talentoLocal"><div class="categoria"><img src="img/categorias/talentoLocal.jpg" alt="Talento Local"></div></a>
                </section>
            </div>
            <h1>Funciones Especiales</h1>
            <h2><a href="https://boletia.com/cp/ficleon">Consigue tus boletos</a></h2>
            <div id="funcionEspecial">
               <!-- <?php
                    foreach($funcion as $i => $values){
                        echo "<h3>" .$values["titulo"]. "</h1>";
                        echo "<p>" .$values["lugarFecha"]. "</h3>";
                        echo "<div><img src=" .$values["img"]. " alt=" .$values["titulo"]. "></div>";
                        echo "<p>Dirección: " .$values["director"]. "</p>";
                        echo "<p>Producción:</p>";
                        echo "<ul>";
                        foreach($values["produccion"] as $i){
                            echo "<li>" .$i. "</li>";
                        }
                        echo "</ul>";
                        echo "<p>Musica: " .$values["musica"]. "</p>";
                        echo "<p>Fotografía: " .$values["fotografia"]. "</p>";
                        echo "<p>Productora: " .$values["productora"]. "</p>";
                        echo "<p>Genero: " .$values["genero"]. "</p>";
                        echo "<p>Reparto:</p>";
                        echo "<ul>";
                        foreach($values["reparto"] as $i){
                            echo "<li>" .$i. "</li>";
                        }
                        echo "</ul>";
                        echo "<p>Sinopsis:</p>";
                        echo $values["sinopsis"];
                    }
                ?>-->
                <h2>Proximamente</h2>
            </div>
        </div>
<?php include('inc/patrocinadores.php'); ?>
<?php include("inc/footer.php"); ?>