<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include("./incs/head.php"); ?>
</head>
<body>
    
    <?php include("./incs/header.php"); ?>
    
    <main>

        <header class="title-page title-destaque">
            <div class="container">
                <h2>Blog do R5</h2>
            </div><!-- end .container -->            
            <figure>
            </figure>
        </header>    
        
        <section class="sessao">

            <div class="container">

                <div class="posts">

                    <article class="post">
                        <img src="http://via.placeholder.com/1140x380?text=Imagem" alt="" border="0">
                        <header class="titulo-posted">
                            <h4>Blog Heading here</h4>
                            <p>Posted by: Akhil | Data: <time datetime="2015-02-02">02-02-2015</time></p>
                        </header>
                        <!-- end .titulo-posted -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a class="ler-mais btn-geral btn-gradiente" href="#">Ler artigo</a>
                        <footer class="barra-compartilhar">
                            <div class="icon-share">
                                <p><span class="icon-item btn-gradiente">24</span> Comentários</p>
                            </div>
                            <!-- end .icon-share -->
                            <div class="icon-share">
                                <p><span class="icon-item btn-gradiente"><i class="fa fa-heart-o" aria-hidden="true"></i></span> Like</p>
                            </div>
                            <!-- end .icon-share -->    
                            <div class="icon-share">
                                <p><span class="icon-item btn-gradiente"><i class="fa fa-share-alt" aria-hidden="true"></i></span> Share: </p>
                                 <ul class="no-bullet">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
                                </ul>
                            </div> 
                            <!-- end .icon-share -->                                          
                        </footer>
                        <!-- end .barra-compartilhar -->
                    </article>
                
                </div>
                <!-- end .posts -->

                <footer class="autor box-destaque">
                    <figure>
                        <img src="http://via.placeholder.com/125x125" alt="" border="0">
                    </figure>
                    <div class="txt-autor">
                        <h5>Por: Rubens Castro</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
                    </div>
                    <!-- end .txt -->
                </footer>

                <article class="comentarios">

                    <header>
                        <h2>Comentários</h2>
                    </header>
                    
                    <article class="box-destaque box-comentario">

                        <div class="comentario comentario-topo">
                            <figure>
                                <img src="http://via.placeholder.com/125x125" alt="" border="0">
                            </figure>
                            <div class="txt-autor">
                                <header>
                                    <h5>Akhil Designer</h5>
                                    <time datetime="2015-02-02"><p>02 Fevereiro, 2015</p></time>
                                    <a href="#" class="btn-geral btn-gradiente">Responder</a>
                                </header>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
                            </div>
                            <!-- end .txt-autor -->
                        </div>
                        <!-- end .comentario-topo -->

                        <article class="comentario resposta-comentario">
                            <figure>
                                <img src="http://via.placeholder.com/125x125" alt="" border="0">
                            </figure>
                            <div class="txt-autor">
                                <header>
                                    <h5>Akhil Designer</h5>
                                    <time datetime="2015-02-02"><p>02 Fevereiro, 2015</p></time>
                                    <a href="#" class="btn-geral btn-gradiente">Responder</a>
                                </header>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
                            </div>
                            <!-- end .txt-autor -->
                        </article>
                        <!-- end .resposta-comentario -->     
                        
                        <article class="comentario resposta-comentario">
                            <figure>
                                <img src="http://via.placeholder.com/125x125" alt="" border="0">
                            </figure>
                            <div class="txt-autor">
                                <header>
                                    <h5>Mauro Castro</h5>
                                    <time datetime="2015-01-10"><p>10 Janeiro, 2015</p></time>
                                    <a href="#" class="btn-geral btn-gradiente">Responder</a>
                                </header>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney.</p>
                            </div>
                            <!-- end .txt-autor -->
                        </article>
                        <!-- end .resposta-comentario -->                             

                    </article>
                    <!-- end .comentario -->                  

                </article>
                <!-- end .comentarios -->

            </div>
            <!-- end .container -->

        </section>
        <!-- end .sessao -->

        <aside class="sessao box-destaque box-enviar-comentario">

            <div class="container">

                <header>
                    <hgroup>
                        <img src="./imgs/comentario.png">
                        <h4>Faça seu</h4>
                        <h3>Comentário</h3>
                    </hgroup>
                </header>

                <form class="clean-form" novalidate>

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6">

                            <label for="nome_contato">
                                <input type="text" name="nome_contato" placeholder="Nome*">
                            </label>

                            <label for="email_contato">
                                <input type="text" name="email_contato" placeholder="Email*">
                            </label>  
                            
                            <label for="assunto_contato">
                                <input type="text" name="assunto_contato" placeholder="Assunto*">
                            </label> 

                        </div><!-- end .col-lg-6 -->

                        <div class="col-lg-6 col-md-6 col-sm-6">
                    
                            <label for="comentario_contato">
                                <textarea name="comentario_contato" placeholder="Comentário*"></textarea>
                            </label>  
                        
                        </div><!-- end .col-lg-6 -->

                    </div>
                    <!-- end .row -->

                    <input class="btn-submit-tema btn-gradiente" type="submit" value=" Enviar ">

                </form>       

            </div>
            <!-- end .container -->

        </aside>
        <!-- end .box-destaque -->        

        <?php include("./incs/newsletter.php"); ?>

    </main>

    <?php include("./incs/footer.php"); ?>
    <?php include("./incs/scripts.php");?>

</body>
</html>