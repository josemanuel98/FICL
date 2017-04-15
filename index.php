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
            <!--<?php include("inc/cintas.php"); ?>-->
            <section id="content-main">
                <div id="video-wrapper">
                    <video onmouseover="trigger()" onmouseout="triggerF()" id="video" src="video/intro.mp4" loop autoplay muted></video>
                </div>
                    <h1>Comite Organizador</h1>
                    <div id="members">
                        <section>
                            <div class="photo">
                                <a href="#"><img onmouseover="visible1()" onmouseout="visibleF1()" src="img/comite/AlejandraVidales.jpg" alt="Alejandra Vidales"></a>
                                <p id="p1">Alejandra Vidales</p>
                            </div>
                            <div class="photo">
                                <a href="#"><img onmouseover="visible2()" onmouseout="visibleF2()" src="img/comite/DavidBravo.jpg" alt="David Bravo"></a>
                                <p id="p2">David Bravo</p>
                            </div>
                        </section>
                        <section>
                            <div class="photo">
                                <a href="#"><img onmouseover="visible3()" onmouseout="visibleF3()" src="img/comite/FannyVillegas.jpg" alt="Fanny Villegas"></a>
                                <p id="p3">Fanny Villegas</p>
                            </div>
                            <div class="photo">
                                <a href="#"><img onmouseover="visible4()" onmouseout="visibleF4()" src="img/comite/IsaacSan.jpg" alt="Isaac San"></a>
                                <p id="p4">Isaac San</p>
                            </div>
                        </section>
                        <section>
                            <div class="photo">
                                <a href="#"><img onmouseover="visible5()" onmouseout="visibleF5()" src="img/comite/JorgeTrujillo.jpg" alt="Jorge Trujillo"></a>
                                <p id="p5">Jorge Trujillo</p>
                            </div>
                            <div class="photo">
                                <a href="#"><img onmouseover="visible6()" onmouseout="visibleF6()" src="img/comite/MargotOzuna.jpg" alt="Margot Ozuna"></a>
                                <p id="p6">Margot Ozuna</p>
                            </div>
                        </section>
                        <section>
                            <div class="photo">
                                <a href="#"><img onmouseover="visible7()" onmouseout="visibleF7()" src="img/comite/MiltonPonce.jpg" alt="Milton Ponce"></a>
                                <p id="p7">Milton Ponce</p>
                            </div>
                            <div class="photo">
                                <a href="#"><img onmouseover="visible8()" onmouseout="visibleF8()" src="img/comite/NancySalazar.jpg" alt="Nancy Salazar"></a>
                                <p id="p8">Nancy Salazar</p>
                            </div>
                        </section>
                        <section>
                            <div class="photo">
                                <a href="#"><img onmouseover="visible9()" onmouseout="visibleF9()" src="img/comite/OsmaryGarnica.jpg" alt="Osmary Garnica"></a>
                                <p id="p9">Osmary Garnica</p>
                            </div>
                            <div class="photo">
                                <a href="#"><img onmouseover="visible10()" onmouseout="visibleF10()" src="img/comite/WendyAranda.jpg" alt="Wendy Aranda"></a>
                                <p id="p10">Wendy Aranda</p>
                            </div>
                        </section>
                    </div>
            </section>
        </div>
<?php include("inc/footer.php"); ?>