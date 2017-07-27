<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include("./incs/head.php"); ?>
    <link rel="stylesheet" href="./css/prettyPhoto.css">
</head>
<body>
    
    <?php include("./incs/header.php"); ?>
    <main>
        <?php include("./incs/slider.php"); ?>
        <?php include("./incs/nossos_produtos.php"); ?>
        <?php include("./incs/servicos_banner.php"); ?>
        <?php include("./incs/areas_corporativas.php"); ?>
        <?php include("./incs/blog-home.php"); ?>
        <?php include("./incs/newsletter.php"); ?>
    </main>
    <?php include("./incs/footer.php"); ?>
    <?php include("./incs/scripts.php");?>
    <script src="./js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto({
                theme:'light_square'
            });
        });
    </script>
</body>
</html>