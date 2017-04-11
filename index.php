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
    </script>
<?php include("inc/header.php") ?>
        <div id="content">
            <!--<?php include("inc/cintas.php"); ?>-->
            <section id="content-main">
                <div id="video-wrapper">
                    <video onmouseover="trigger()" onmouseout="triggerF()" id="video" src="video/intro.mp4" loop autoplay muted></video>
                </div>
                <div id="comite">
                    <h1>Comite Organizador</h1>
                </div>
            </section>
        </div>
<?php include("inc/footer.php"); ?>