<?php
  require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Fase 1 Macarrone</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/template.css" rel="stylesheet" media="screen">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="/js/html5shiv.js"></script>
          <script src="/js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class="container">
            <?php 
            
                require_once('header.php');

                require_once('menu.php');
                
                $page = '';
                if(isset($_POST['email']))
                {
                    $page = 'contatoview';
                }
                elseif(empty($_GET['page']) || !in_array($_GET['page'], $pages))
                {
                    $page = 'home';
                }    
                else
                {
                    $page = $_GET['page'];
                }    
                
                require_once($page . '.php');
                
                require_once('footer.php');
            
            ?>
           
        </div> <!-- /container -->

        <!-- Arquivos Javascripts
        ================================================== -->
        <!-- jQuery direto do local -->
        <script src="js/jquery-1.10.2.min.js"></script>

        <!-- jQuery direto do CDN (somente online) -->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $(function () {
                $("[rel='tooltip']").tooltip();
            });
            $(function () {
                $("[rel='popouver']").popover();
            });
            $('.carousel').carousel()
        </script>
    </body>
</html>
