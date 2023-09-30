
<?php
    $title		    =	"Curriculo - hobbie";
    $keywords	    =	"Curriculo - hobbie";
    $description    =	"Curriculo - hobbie";

    define('PATH','../');
    define('PATH_ARQUIVOS','../');

    include PATH."topo.php"; 		
    include PATH."menu.php";
?>
<link rel="stylesheet" href="<?=PATH_ARQUIVOS?>css/style4.css">
    <section class="design-section">
        <div class="grid image-grid" id="jogo10" style="text-align: center;background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);" >
                <div class="container" style="background-image:#1f1f1f;background-color: #1f1f1f;width: 100%;" >
                    <div class="h1">
                        O meu hobbie é jogar no computador
                    </div>
                    <div class="h2"> 
                        e esses são os meu jogos favoritos
                    </div>
                </div>
                <div class="grid-block">
                    <div class="tile">
                        <a class="tile-link" href="https://www.bungie.net/7/pt-br/Destiny">
                        <img class="tile-img tile-img1"  src="../imagens/destiny22.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="grid-block">
                    <div class="tile">
                        <a class="tile-link" href="https://www.ea.com/pt-br/games/apex-legends">
                        <img class="tile-img tile-img2"  src="../imagens/apexlegends-capaa.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="grid-block">
                    <div class="tile">
                        <a class="tile-link" href="https://www.leagueoflegends.com/pt-br/?gclid=EAIaIQobChMIjf_PrYrp_wIVH0JIAB333QsEEAAYASAAEgL-U_D_BwE">
                        <img class="tile-img tile-img3"  src="../imagens/LoLl.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="grid-block">
                    <div class="tile">
                        <a class="tile-link" href="https://www.rockstargames.com/br/gta-v">
                        <img class="tile-img tile-img4"  src="../imagens/gtav.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="grid-block">
                    <div class="tile">
                        <a class="tile-link" href="https://overwatch.blizzard.com/pt-br/">
                        <img class="tile-img tile-img5"  src="../imagens/overwatch22.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="grid-block">
                    <div class="tile">
                        <a class="tile-link"  href="https://playvalorant.com/pt-br/?gad=1&gclid=EAIaIQobChMIhsf054rp_wIVGm6RCh1b8gHjEAAYASAAEgLssvD_BwE&gclsrc=aw.ds">
                        <img class="tile-img tile-img6"  src="../imagens/valorantt.jpg" alt="Image">
                        </a>
                    </div>
                </div>
        <div>
  
</section>
<script>
	$("#menu-total").click(function () {
        //alert("Email enviado com sucesso!");
        if ($("#jogo10").is(':visible')) $("#jogo10").hide();
            else $("#jogo10").show();
	});
</script>