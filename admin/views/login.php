<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo BASE; ?>/assets/css/index.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo BASE; ?>/assets/css/materialize.min.css" media="screen,projection">
        <script type="text/javascript" src="<?php echo BASE; ?>/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE; ?>/assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE; ?>/assets/js/index.js"></script>
    </head>
    <body>
        <div id="fundo"></div>
        <div id="container">
            <div class="row">
                <form class="col s10 m8 l6 offset-s1 offset-m2 offset-l3" action="#" method="post" id="fLogin">
                    <span id="titulo">Login</span>
                    <?php echo $erro; ?>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="text" class="validate" name="usuario">
                            <label for="email">Usuário</label>
                            
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="senha">
                            <label for="password">Senha</label>
                        </div>  
                    </div>
                    <button class="btn waves-effect waves-light right" type="submit" name="action">Entrar
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
    </body>
</html>