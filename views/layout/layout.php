<html>
    <head>
        <meta charset="utf-8">
         <!-- Bootstrap -->
        <link href="<?= BASE_URL ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= BASE_URL ?>assets/css/style.css" rel="stylesheet">
        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="<?= BASE_URL ?>bootstrap/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container">
            <div class="text-center">
                <h1>CONTROLE DE INADIMPLÊNCIA</h1><BR>
            </div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= BASE_URL ?>">Desafio Revict</a></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= BASE_URL ?>">Apresentação<span class="sr-only"></span></a></li>
                <li><a href="<?= BASE_URL ?>cliente/index">Clientes<span class="sr-only">(current)</span></a></li>
                <li><a href="<?= BASE_URL ?>divida/index">Dívidas</a></li>
                </ul>
                </div>
                </div>
            </nav>
            
            <div id="main" class="container-fluid" style="margin-top: 20px">
                <div id="top" class="row">
            <div class="col-sm-12">
                    <?php
                    echo $content_for_layout;
                    ?>
                    </div>
                </div>
            </div>
        <!--<footer style="background-color:lightblue; height:100px; width:100%; position:fixed;left:0px; bottom:0px"></footer>-->
        <br>
        <footer class="container-fluid text-center">
            <hr></hr>
                <em>&copy; Desafio Revict 2018</em>
        </footer>
    </div>
    </body>
</html>

