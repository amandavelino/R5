<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include("./incs/head.php"); ?>
</head>
<body>
    
    <?php include("./incs/header.php"); ?>
    
    <main>

        <header class="title-page">
            <div class="container">
                <h2>Contato</h2>
            </div><!-- end .container -->            
            <figure>
                <!-- colocar a imagem aqui como background-image para que seja cover e 50% 50% no CSS -->
            </figure>
        </header>

        <section class="sessao box-destaque box-contato">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        <header>
                            <hgroup>
                                <h4>Informações</h4>
                                <h3>de Contato</h3>
                            </hgroup>
                        </header>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                        <div class="info-contato">
                            <header>
                                <h5>Email</h5>
                            </header>
                            <p>General: info@hosting.com<br>
                            Office: contact@hosting.com</p>
                        </div>
                        <!-- end .info-contato -->

                        <div class="info-contato">
                            <header>
                                <h5>Telefone</h5>
                            </header>
                            <p>Landline: (81)0000.0000<br>
                            Mobile: +55 8190000.0000</p>
                        </div>
                        <!-- end .info-contato -->                        

                    </div>
                    <!-- end .col-lg-6 -->

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 bottom-detalhe">

                        <header>
                            <hgroup>
                                <h4>Formulário</h4>
                                <h3>de Contato</h3>
                            </hgroup>
                        </header>

                        <div class="info-contato">
                            <form class="clean-form">
                                
                                <label for="nome_contato">
                                    <input type="text" name="nome_contato" placeholder="Nome*">
                                </label>

                                <label for="email_contato">
                                    <input type="text" name="email_contato" placeholder="Email*">
                                </label>  
                                
                                <label for="assunto_contato">
                                    <input type="text" name="assunto_contato" placeholder="Assunto*">
                                </label> 
                                
                                <label for="comentario_contato">
                                    <textarea name="comentario_contato" placeholder="Comentário*"></textarea>
                                </label>                             

                                <input class="btn-submit-tema btn-gradiente" type="submit" value=" Enviar ">

                            </form>    
                        </div> 
                        <!-- end .info-contato -->               

                    </div>
                    <!-- end .col-lg-6 -->

                </div>
                <!-- end .row -->

            </div>
            <!-- end .container -->    
            
        </section>
        <!-- end .sessao -->

        <aside class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.907585841844!2d-67.82497998459985!3d-9.941646992891249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x917f8c7086517d07%3A0x6479bc7899336d51!2zUjUgU29sdcOnw7VlcyBUZWNub2zDs2dpY2Fz!5e0!3m2!1spt-BR!2sbr!4v1501081825476" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </aside>
        <!-- end .box-destaque -->

        <?php include("./incs/newsletter.php"); ?>

    </main>
    
    <?php include("./incs/footer.php"); ?>
    <?php include("./incs/scripts.php");?>

</body>
</html>