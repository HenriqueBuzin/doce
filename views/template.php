<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <title>Meu Doce</title>
        <!-- CHAMADAS CSS-->
        <link href="<?php echo BASE; ?>/assets/css/index.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo BASE; ?>/assets/css/materialize.min.css" media="screen,projection">
        <link type="text/css" rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <!-- CHAMADAS JS-->
        <script type="text/javascript" src="<?php echo BASE; ?>/assets/js/jquery.min.js"></script>

        <script type="text/javascript" src="<?php echo BASE; ?>/assets/js/materialize.min.js"></script>	    
        <script type="text/javascript" src="<?php echo BASE; ?>/assets/js/index.js"></script>
        <script type="text/javascript" src="<?php echo BASE; ?>/assets/js/script.js"></script>
        <script type="text/javascript" src="<?php echo BASE; ?>/assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo BASE; ?>/assets/js/plugin.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    </head>
    <body>
       

        <nav>
            <div class="nav-wrapper" id="menu">
                <a href="<?php echo BASE; ?>/" class="brand-logo" id="menuli">Meu Doce Brigadeiro</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li ><a href="<?php echo BASE; ?>/" id="menuli">Home</a></li>
                    <li ><a href="<?php echo BASE; ?>/empresa" id="menuli">Empresa</a></li>
                    <li><a href="<?php echo BASE; ?>/doces" id="menuli">Doces</a></li>
                    <li><a href="<?php echo BASE; ?>/contato" id="menuli">Contato</a></li>
                    <li ><a href="<?php echo BASE; ?>/login/sair" id="menuli">Sair</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li ><a href="<?php echo BASE; ?>/" id="menuli">Home</a></li>
                    <li ><a href="<?php echo BASE; ?>/empresa" id="menuli">Empresa</a></li>
                    <li ><a href="<?php echo BASE; ?>/doces" id="menuli">Doces</a></li>
                    <li><a href="<?php echo BASE; ?>/contato" id="menuli">Contato</a></li>
                    <li ><a href="<?php echo BASE; ?>/login/sair" id="menuli">Sair</a></li>
                </ul>
            </div>
        </nav>

        <div class="container" >
            <?php
            $this->loadViewInTemplate($viewName, $viewData);
            ?>
        </div>
    </body>
</html>
