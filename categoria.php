<?php 
$title = "Categoria";
$description = "Sitio web del Festival Internacional de Cine de León";
include("inc/seleccionOficial.php");
?>
<?php include("inc/header.php"); ?>
<div id="content">
<?php
    if(isset($_GET["categoria"]) && $_GET["categoria"] == "largometraje"){
        echo "<div id='categoria'>";
        echo '<div class="categoria"><img src="img/categorias/largometraje.jpg" alt="Largometraje"></div>';
        /*foreach($largometraje as $i => $values){
            echo "<h2>Titulo: " . $values["titulo"] . "</h2>";
            echo "<h3>Director/ores:</h3>";
            echo "<ul>";
            foreach($values["director"] as $i){
                echo "<li>" . $i . "</li>";
            }
            echo "</ul>";
            echo "<h3>Pais: " . $values["pais"] . "</h3>";
        }*/
        echo "<h2>Proximamente</h2>";
        echo "</div>";
    }

    if(isset($_GET["categoria"]) && $_GET["categoria"] == "cortometraje"){
        echo "<div id='categoria'>";
        echo '<div class="categoria"><img src="img/categorias/cortometraje.jpg" alt="Cortometraje"></div>';
        /*foreach($cortometraje as $i => $values){
            echo "<h2>Titulo: " . $values["titulo"] . "</h2>";
            echo "<h3>Director/ores:</h3>";
            echo "<ul>";
            foreach($values["director"] as $i){
                echo "<li>" . $i . "</li>";
            }
            echo "</ul>";
            echo "<h3>Pais: " . $values["pais"] . "</h3>";
        }*/
        echo "<h2>Proximamente</h2>";
        echo "</div>";
    }

    if(isset($_GET["categoria"]) && $_GET["categoria"] == "documental"){
        echo "<div id='categoria'>";
        echo '<div class="categoria"><img src="img/categorias/documental.jpg" alt="Documental"></div>';
        /*foreach($documental as $i => $values){
            echo "<h2>Titulo: " . $values["titulo"] . "</h2>";
            echo "<h3>Director/ores:</h3>";
            echo "<ul>";
            foreach($values["director"] as $i){
                echo "<li>" . $i . "</li>";
            }
            echo "</ul>";
            echo "<h3>Pais: " . $values["pais"] . "</h3>";
        }*/
        echo "<h2>Proximamente</h2>";
        echo "</div>";
    }
    
    if(isset($_GET["categoria"]) && $_GET["categoria"] == "talentoUniversitario"){
        echo "<div id='categoria'>";
        echo '<div class="categoria"><img src="img/categorias/talentoUniversitario.jpg" alt="Talento Universitario"></div>';
        /*foreach($documental as $i => $values){
            echo "<h2>Titulo: " . $values["titulo"] . "</h2>";
            echo "<h3>Director/ores:</h3>";
            echo "<ul>";
            foreach($values["director"] as $i){
                echo "<li>" . $i . "</li>";
            }
            echo "</ul>";
            echo "<h3>Pais: " . $values["pais"] . "</h3>";
        }*/
        echo "<h2>Proximamente</h2>";
        echo "</div>";
    }
    
    if(isset($_GET["categoria"]) && $_GET["categoria"] == "talentoLocal"){
        echo "<div id='categoria'>";
        echo '<div class="categoria"><img src="img/categorias/talentoLocal.jpg" alt="Talento Local"></div>';
        /*foreach($documental as $i => $values){
            echo "<h2>Titulo: " . $values["titulo"] . "</h2>";
            echo "<h3>Director/ores:</h3>";
            echo "<ul>";
            foreach($values["director"] as $i){
                echo "<li>" . $i . "</li>";
            }
            echo "</ul>";
            echo "<h3>Pais: " . $values["pais"] . "</h3>";
        }*/
        echo "<h2>Proximamente</h2>";
        echo "</div>";
    }
?>
</div>
<?php include('inc/patrocinadores.php'); ?>
<?php include("inc/footer.php"); ?>
