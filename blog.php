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

                <div class="filtro-busca">

                    <div class="row">

                        <div class="busca pull-right col-lg-4 col-md-4 col-sm-4 col-sm-4 col-xs-12">
                            <form action="#" class="form-busca" novalidate>
                                <input name="buscar_posts" type="search" placeholder="Buscar">
                                <input type="submit" value=" uscar">
                            </form>
                        </div>   
                        <!-- end .busca --> 

                        <div class="filtros col-lg-8 col-md-8 col-sm-8 col-sm-8 col-xs-12">
                            <ul class="no-bullet">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Heading</a></li>
                                <li><a href="#">Here</a></li>
                                <li><a href="#">New</a></li>
                                <li><a href="#">Lorem Ipsum</a></li>
                            </ul>
                        </div>
                        <!-- end .filtros --> 

                    </div>
                    <!-- end .row --> 

                </div>
                <!-- end .filtro-busca -->

                <div class="filtro-busca">

                    <div class="filtros">
                        <ul class="filtros no-bullet col-lg-12">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Heading</a></li>
                            <li><a href="#">Here</a></li>
                            <li><a href="#">New</a></li>
                            <li><a href="#">Lorem Ipsum</a></li>
                        </ul>
                    </div>
                    <!-- end .filtros -->

                </div> 
                <!-- end .filtro-busca -->

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
                    
                    <div class="paginacao-box">
                        <ul class="paginacao no-bullet">
                            <li><a class="atual btn-gradiente" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                    <!-- end .paginacao -->
                
                </div>
                <!-- end .posts -->

            </div>
            <!-- end .container -->

        </section>
        <!-- end .sessao -->

        <?php include("./incs/newsletter.php"); ?>

    </main>

    <?php include("./incs/footer.php"); ?>
    <?php include("./incs/scripts.php");?>

</body>
</html>