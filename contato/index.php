
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
<link rel="stylesheet" href="<?=PATH_ARQUIVOS?>css/style3.css">
<section class="design-section">
    <?php

        include PATH."menu.php";

    ?>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            

            $name = $_POST['nome'];
            $email = $_POST['email'];
            $phone = $_POST['telefone'];
            $subject = $_POST['assunto'];
            $message = $_POST['mensagem'];
            
            require '../PHPMailer-master/src/Exception.php';
            require '../PHPMailer-master/src/PHPMailer.php';
            require '../PHPMailer-master/src/SMTP.php';

            
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'mail.ipotec.com.br';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = 'joaopedefeijao2010@gmail.com';
            $mail->Password = '180902Abjp//1313';
            $mail->setFrom('joaopedefeijao2010@gmail.com', 'João Pedro');
            $mail->addAddress('joaopedro2002trabalho@gmail.com');
            $mail->Subject = '[Contato via Site] ' . $_POST['assunto'];
            $mail->Body = "Nome: $name\nEmail: $email\nTelefone: $phone\nAssunto: $subject\nMensagem: $message";
            
            if ($mail->send()) {
                echo '<script>alert("Email enviado com sucesso!");</script>';
            } else {
                echo '<script>alert("Não foi possível enviar o email. Erro: ' . $mail->ErrorInfo . '");</script>';
            }
        }
    ?>


    <div class="timeline" style="text-align: center;">
        <div class="container">
            <div class="h1">
                Entre em contato
            </div>
        </div>
        <br>
        <br>
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" role="form" method="post">
            <div class="timeline-component timeline-content" style="text-align: center;background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);width: 50%;margin: auto;">
                <input class="input-pad imput1" type="text" name="nome" id="nome" style="border: 2px solid #1f1f1f;text-align: center;width: 90%;" required placeholder="Nome" />
            </div>
            <br>
            <div class="timeline-component timeline-content" style="text-align: center;background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);width: 50%;margin: auto;">
                <input class="input-pad imput1" type="email" name="email" id="email" style="border: 2px solid #1f1f1f;text-align: center;width: 90%;" required placeholder="Email" />
            </div>
            <br>
            <div class="timeline-component timeline-content" style="text-align: center;background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);width: 50%;margin: auto;">
                <input class="input-pad imput1" type="text" name="telefone" id="telefone" style="border: 2px solid #1f1f1f;text-align: center;width: 90%;" required placeholder="Telefone" />
            </div>
            <br>
            <div class="timeline-component timeline-content" style="text-align: center;background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);width: 50%;margin: auto;">
                <input class="input-pad imput1" type="text" name="assunto" id="assunto" style="border: 2px solid #1f1f1f;text-align: center;width: 90%;" required placeholder="Assunto" />
            </div>
            <br>
            <div class="timeline-component timeline-content" style="text-align: center;background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);width: 50%;margin: auto;">
                <textarea class="input-pad imput1" style="border: 2px solid #1f1f1f;text-align: center;width: 90%;resize: none;" rows="10" cols="30" name="mensagem" id="mensagem" required placeholder="Mensagem"></textarea>
            </div>
            <br>
            <div class="timeline-component timeline-content"style="text-align: center;background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);width: 50%;margin: auto;">
                <button type="submit" class="input-pad imput1" style="border: 2px solid #1f1f1f;text-align: center;width: 90%;">Enviar</button>
            </div>
        </form>
    </div>
</section>
