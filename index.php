<?php 
$title = "Inicio";
$description = "Sitio web del Festival Internacional de Cine de León";
?>
<script>
        function trigger(){
            var video = document.getElementById("video");
            video.muted = false;
        }
        function triggerF(){
            var video = document.getElementById("video");
            video.muted = true;
        }
    
        function visible1(){
            document.getElementById("p1").style.visibility = "visible";
            animation(id);
        }
        function visibleF1(){
            document.getElementById("p1").style.visibility = "hidden";
        }
    
        function visible2(){
            document.getElementById("p2").style.visibility = "visible";
        }
        function visibleF2(){
            document.getElementById("p2").style.visibility = "hidden";
        }
    
        function visible3(){
            document.getElementById("p3").style.visibility = "visible";
        }
        function visibleF3(){
            document.getElementById("p3").style.visibility = "hidden";
        }
    
        function visible4(){
            document.getElementById("p4").style.visibility = "visible";
        }
        function visibleF4(){
            document.getElementById("p4").style.visibility = "hidden";
        }
    
        function visible5(){
            document.getElementById("p5").style.visibility = "visible";
        }
        function visibleF5(){
            document.getElementById("p5").style.visibility = "hidden";
        }
    
        function visible6(){
            document.getElementById("p6").style.visibility = "visible";
        }
        function visibleF6(){
            document.getElementById("p6").style.visibility = "hidden";
        }
    
        function visible7(){
            document.getElementById("p7").style.visibility = "visible";
        }
        function visibleF7(){
            document.getElementById("p7").style.visibility = "hidden";
        }
    
        function visible8(){
            document.getElementById("p8").style.visibility = "visible";
        }
        function visibleF8(){
            document.getElementById("p8").style.visibility = "hidden";
        }
    
        function visible9(){
            document.getElementById("p9").style.visibility = "visible";
        }
        function visibleF9(){
            document.getElementById("p9").style.visibility = "hidden";
        }
    
        function visible10(){
            document.getElementById("p10").style.visibility = "visible";
        }
        function visibleF10(){
            document.getElementById("p10").style.visibility = "hidden";
        }
    </script>
<?php include("inc/header.php") ?>
        <div id="content">
            <section id="content-main">
                <div id="video-wrapper">
                    <video onmouseover="trigger()" onmouseout="triggerF()" id="video" src="video/intro.mp4" loop autoplay muted></video>
                </div>
                    <h1>Comite Organizador</h1>
                    <div id="members">
                        <?php include("inc/miembros.php"); ?>
                        <?php
                            foreach($miembros as $i => $values){
                                echo $values["sectionI"];
                                echo $values["divI"];
                                echo "<a href=" . $values["link1"] . "><img onmouseover=" . $values["visible1"] . " onmouseout=" . $values["visibleF1"] . " src=" . $values["img1"] . " alt=" . $values["nombre1"] . "></a>";
                                echo "<p id=" . $values["pId1"] . ">" . $values["nombre1"] . "</p>";
                                echo $values["divF"];
                                echo $values["divI"];
                                echo "<a href=" . $values["link2"] . "><img onmouseover=" . $values["visible2"] . " onmouseout=" . $values["visibleF2"] . " src=" . $values["img2"] . " alt=" . $values["nombre2"] . "></a>";
                                echo "<p id=" . $values["pId2"] . ">" . $values["nombre2"] . "</p>";
                                echo $values["divF"];
                                echo $values["sectionF"];
                            }
                        ?>
                    </div>
            </section>
        </div>
<?php include("inc/footer.php"); ?>