
<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $title		    =	"Curriculo - Contato";
    $keywords	    =	"Curriculo - Contato";
    $description    =	"Curriculo - Contato";

    define('PATH','../');
    define('PATH_ARQUIVOS','../');

    include PATH."topo.php"; 		
    include PATH."menu.php";
?>
<link rel="stylesheet" href="<?=PATH_ARQUIVOS?>css/style5.scss">
<section class="design-section" style="background-color: #1f1f1f;" >
    <div class="container">
        <div class="box" >
            <img src="https://source.unsplash.com/1000x800" onclick="tempo()" >
            <span  style="color:#fff;">Clima</span>
        </div>
        <div class="box">
            <img src="https://source.unsplash.com/1000x802" onclick="estruturas()" >
            <span  style="color:#fff;" >Estruturas de repetição</span>
        </div>
        <div class="box">
            <img src="https://source.unsplash.com/1000x804">
            <span  style="color:#fff;" >Hover</span>
        </div>
        <div class="box">
            <img src="https://source.unsplash.com/1000x806">
            <span  style="color:#fff;" >Effect</span>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <img src="https://source.unsplash.com/1000x800">
            <span  style="color:#fff;" >CSS</span>
        </div>
        <div class="box">
            <img src="https://source.unsplash.com/1000x802">
            <span  style="color:#fff;" >Image</span>
        </div>
        <div class="box">
            <img src="https://source.unsplash.com/1000x804">
            <span  style="color:#fff;" >Hover</span>
        </div>
        <div class="box">
            <img src="https://source.unsplash.com/1000x806">
            <span  style="color:#fff;" >Effect</span>
        </div>
    </div>
  
</section>
    <script>
        function tempo(){
            window.location.href = "./tempo";
        }

        function estruturas(){
            window.location.href = "./estruturas";
        }
    </script>
