<?php
    $title		    =	"Curriculo - Sobre mim";
    $keywords	    =	"Curriculo - Sobre mim";
    $description    =	"Curriculo - Sobre mim";

    define('PATH','../');
    define('PATH_ARQUIVOS','../');

    include PATH."topo.php"; 		
   
?>
<link rel="stylesheet" href="../css/style2.css">
  
<style>@import url('https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400&display=swap');</style>
<!--This is the main container that contains the whole timeline.-->
<section class="design-section">
    <?php

        include PATH."menu.php";

    ?>
    <div class="timeline">
        <!--Well, The reason for this div is to fill space. 
            This space is technically used for keeping dates, 
            but I didn't find the need for dates. However, I'll provide 
            you the styling for dates, so that you can use it if you 
            wanted to.
        -->
        <div class="timeline-empty"></div>
        <!--This is the class where the timeline graphics are 
            housed in. Note that we have timeline-circle 
            here for that pointer in timeline.
        -->
        <div class="timeline-middle" id="linha1">
            <div class="timeline-circle" id="circulo1"></div>
        </div>
        <div class="timeline-component timeline-content">
            <h3>Nome</h3>
                <p>João Pedro Silva Maia</p>
        </div>
        <div class="timeline-component timeline-content">
            <h3>Idade</h3>
            <p>20 anos.</p>
        </div>
        <div class="timeline-middle" id="linha2">
            <div class="timeline-circle" id="circulo2" ></div>
        </div>
        <div class="timeline-empty"></div>
        <div class="timeline-empty"></div>
        <div class="timeline-middle" id="linha3" >
            <div class="timeline-circle" id="circulo3" ></div>
        </div>
        <div class=" timeline-component timeline-content">
            <h3>Email</h3>
            <p>joaopedro2002trabalho@gmail.com.</p>
        </div>
        <div class="timeline-component timeline-content">
            <h3>Formação Academica:</h3>
            <p style="font-size:14px;"><i class="fa-solid fa-circle" style="font-size: 8px;"></i>  Formado no curso técnico em informática e Programação de Computadores Colégio Cotemig.</p>
            <p style="font-size:14px;" ><i class="fa-solid fa-circle" style="font-size: 8px;" ></i>  Cursando último período em Análise e Desenvolvimento de Sistemas na Faculdade Newton Paiva.</p>
        </div>
        <div class="timeline-middle" id="linha7" >
            <div class="timeline-circle" id="circulo7" ></div>
        </div>
        <div class="timeline-empty"></div>
        <div class="timeline-empty"></div>
        <div class="timeline-middle" id="linha4" >
            <div class="timeline-circle" id="circulo4" ></div>
        </div>
        <div class=" timeline-component timeline-content">
            <h3>Redes Sociais:</h3>
            <p>
                <a href="https://github.com/joaopedro0013."  style="color:#fff;">Git Hub.</a>
            </p>
            <p>
                <a href="https://www.linkedin.com/in/joao-pedro-72ba0a18a/." style="color:#fff;">Linkedin.</a>
            </p>
        </div>  
        <div class="timeline-component timeline-content">
            <h3>Competências:</h3>
            <p style="font-size:14px;"><i class="fa-solid fa-circle" style="font-size: 8px;"></i>  Conhecimento nas linguagens: PHP,HTML,CSS,JS,Mysql.</p>
            <p style="font-size:14px;" ><i class="fa-solid fa-circle" style="font-size: 8px;" ></i>  Línguas:Inglês Fluente.</p>
        </div>
        <div class="timeline-middle" id="linha5" >
            <div class="timeline-circle" id="circulo5" ></div>
        </div>
        <div class="timeline-empty"></div>
        <div class="timeline-empty"></div>
        <div class="timeline-middle" id="linha6" >
            <div class="timeline-circle" id="circulo6" ></div>
        </div>
        <div class=" timeline-component timeline-content">
            <h3>Perfil:</h3>
            <p style="font-size:14px;" >
                Sou um jovem de 20 anos que cursa a faculdade de tecnologia e analista de desenvolvimento de sistemas  e o meu maior desejo é me tornar o melhor profissional possível, me aprimorando  e perdendo as minhas inseguranças no caminho através de experiências de estágio.Gosto muito de descobrir coisas novas como : novas expressões em inglês, novos conhecimentos de linguagem ou aprender a como usar uma nova ferramenta. 
            </p>
        </div>  
    </div>
</section>
<script type="text/javascript">
</script>
<script>
	$("#menu-total").click(function () {
       // alert("Email enviado com sucesso!");
        if ($("#linha1,#circulo1,#linha2,#circulo2,#linha3,#circulo3,#linha4,#circulo4,#linha5,#circulo5,#linha6,#circulo6,#linha7,#circulo7").is(':visible')) $("#linha1,#circulo1,#linha2,#circulo2,#linha3,#circulo3,#linha4,#circulo4,#linha5,#circulo5,#linha6,#circulo6,#linha7,#circulo7").hide();
            else $("#linha1,#circulo1,#linha2,#circulo2,#linha3,#circulo3,#linha4,#circulo4,#linha5,#circulo5,#linha6,#circulo6,#linha7,#circulo7").show();

	});
</script>