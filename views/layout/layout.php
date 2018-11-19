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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/i18n/pt-BR.js"></script>
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

        <script language="Javascript">
            function confirmacao(link) {
                var resposta = confirm("Tem certeza que deseja remover os dados desse registro?");
            
                if (resposta == true) {
                    window.location.href = link;
                }
            }
        </script>

        <script src="<?= BASE_URL ?>assets/js/validator.min.js"></script>
        <script src="<?= BASE_URL ?>assets/js/validator.js"></script>
        <script src="<?= BASE_URL ?>assets/js/jquery.mask.min.js"></script>
        <script src="<?= BASE_URL ?>assets/js/jquery.mask.js"></script>
        <script src="<?= BASE_URL ?>assets/js/configDefaultMaskedInput.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <script src="<?= BASE_URL ?>bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js"></script>
        <script src="<?= BASE_URL ?>assets/js/configDatePicker.js"></script>
        
        <footer class="container-fluid text-center">
            <hr></hr>
                <em>&copy; Desafio Revict 2018</em>
        </footer>
    </div>
    </body>
</html>

